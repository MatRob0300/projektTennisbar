<?php


class Benutzer{

protected $benutzerid = NULL;
protected $vorname = "";
protected $nachname = "";
protected $email = "";
protected $passwort = "";
protected $telefonnummer = "";
protected $registriert = "";

public function __construct($daten = array())
{
    // wenn $daten nicht leer ist, rufe die passenden Setter auf
    if ($daten) {
        foreach ($daten as $k => $v) {
            $setterName = 'set' . ucfirst($k);
            // wenn ein ungültiges Attribut übergeben wurde
            // (ohne Setter), ignoriere es
            if (method_exists($this, $setterName)) {
                $this->$setterName($v);
            }

        }
    }
}
public function  __toString()
{
    return 'Benutzerid:'. $this->benutzerid .', Vorname: '.$this->vorname.', Nachname: '.$this->nachname.', Email: '.$this->email.', Passwort: '.$this->passwort.', Telefonnummer: '.$this->telefonnummer.', Registriert: '.$this->registriert;
}
public function toArray($mitId = true)
{
    $attribute = get_object_vars($this);
    if ($mitId === false) {
        // wenn $mitId false ist, entferne den Schlüssel id aus dem Ergebnis
        unset($attribute['id']);
    }
    return $attribute;
}

public function speichere()
{
    if ( $this->getBenutzerid() > 0 ) {
        // wenn die ID eine Datenbank-ID ist, also größer 0, führe ein UPDATE durch
        $this->_update();
    } else {
        // ansonsten einen INSERT
        $this->_insert();
    }
}

public function setBenutzerid($benutzerid){
   $this->benutzerid = $benutzerid;
}
public function getBenutzerid(){
  return $this->benutzerid;
}
public function setVorname($vorname){
   $this->vorname = $vorname;
}
public function getVorname(){
  return $this->vorname;
}
public function setNachname($nachname){
   $this->nachname = $nachname;
}
public function getNachname(){
  return $this->nachname;
}
public function setEmail($email){
   $this->email = $email;
}
public function getEmail(){
  return $this->email ;
}
public function setPasswort($passwort){
   $this->passwort = $passwort;
}
public function getPasswort(){
  return $this->passwort ;
}
public function setTelefonnummer($telefonnummer){
   $this->telefonnummer = $telefonnummer;
}
public function getTelefonnummer(){
  return $this->telefonnummer ;
}
public function setRegistriert($registriert){
   $this->registriert = $registriert;
}
public function getRegistriert(){
  return $this->registriert;
}


public function loesche()
{
    $sql = 'DELETE FROM benutzer WHERE benutzerid=?';
    $abfrage = DB::getDB()->prepare($sql);
    $abfrage->execute( array($this->getBenutzerid()) );
    // Objekt existiert nicht mehr in der DB, also muss die ID zurückgesetzt werden
    $this->id = 0;
}

/* ***** Private Methoden ***** */

private function _insert()
{
    $sql = 'INSERT INTO benutzer (vorname, nachname, email, passwort, telefonnummer, registriert)'
         . 'VALUES (:vorname, :nachname, :email, :passwort, :telefonnummer, :registriert)';

    $abfrage = DB::getDB()->prepare($sql);
    $abfrage->execute($this->toArray(false));
    // setze die ID auf den von der DB generierten Wert
    $this->id = DB::getDB()->lastInsertId();
}

private function _update()
{
    $sql = 'UPDATE benutzer SET vorname=?, nachname=?, email=?, passwort=?, telefonnummer=?, registriert=?'
        . 'WHERE benutzerid=?';
    $abfrage =  DB::getDB()->prepare($sql);
    $abfrage->execute(array($this->getVorname(), $this->getNachname(),$this->getEmail(),$this->getPasswort(),$this->getTelefonnummer(),
    $this->getRegistriert(),$this->getBenutzerid()));
}
/* ***** Public Methoden ***** */
public static function findeAlle()
{
    $sql = 'SELECT * FROM benutzer';
    $abfrage = DB::getDB()->query($sql);
    $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Benutzer');
    return $abfrage->fetchAll();
}

public static function finde($benutzerid){
  $sql = 'SELECT * FROM benutzer WHERE benutzerid=?';
  $abfrage = DB::getDB()->prepare($sql);
  $abfrage->execute(array($benutzerid));
  $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Benutzer');
  return $abfrage->fetch();
}

public static function findeNachEmail($email)
{
    $sql = 'SELECT benutzer.* FROM benutzer'
         . 'WHERE email like ?';
         $abfrage = DB::getDB()->prepare($sql);
         $abfrage->execute(array($email));
         $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Benutzer');
         return $abfrage->fetch();
}

public function getVorUndNachname(){
  return $this->getVorname().' '.$this->getNachname();
}


}


?>
