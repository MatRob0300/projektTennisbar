<?php


class Benutzer{

protected $id = NULL;
protected $vorname = "";
protected $nachname = "";
protected $email = "";
protected $passwort = "";
protected $geburtsdatum = "";

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
    return 'Id:'. $this->id .', Vorname: '.$this->vorname.', Nachname: '.$this->nachname.', Email: '.$this->email.', Passwort: '.$this->passwort.', Geburtsdatum: '.$this->geburtsdatum;
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
    if ( $this->getId() > 0 ) {
        // wenn die ID eine Datenbank-ID ist, also größer 0, führe ein UPDATE durch
        $this->_update();
    } else {
        // ansonsten einen INSERT
        $this->_insert();
    }
}

public function setId($id){
   $this->id = $id;
}
public function getId(){
  return $this->id;
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
public function setGeburtsdatum($geburtsdatum){
   $this->geburtsdatum = $geburtsdatum;
}
public function getGeburtsdatum(){
  return $this->geburtsdatum ;
}


public function loesche()
{
    $sql = 'DELETE FROM benutzer WHERE id=?';
    $abfrage = DB::getDB()->prepare($sql);
    $abfrage->execute( array($this->getId()) );
    // Objekt existiert nicht mehr in der DB, also muss die ID zurückgesetzt werden
    $this->id = 0;
}

/* ***** Private Methoden ***** */

private function _insert()
{

    $sql = 'INSERT INTO benutzer (vorname, nachname, email, passwort, geburtsdatum)'
         . 'VALUES (:vorname, :nachname, :email, :passwort, :geburtsdatum)';

    $abfrage = DB::getDB()->prepare($sql);
    $abfrage->execute($this->toArray(false));
    // setze die ID auf den von der DB generierten Wert
    $this->id = DB::getDB()->lastInsertId();
}

private function _update()
{
    $sql = 'UPDATE benutzer SET vorname=?, nachname=?, email=?, passwort=?, geburtsdatum=?'
        . 'WHERE id=?';
    $abfrage =  DB::getDB()->prepare($sql);
    $abfrage->execute(array($this->getVorname(), $this->getNachname(),$this->getEmail(),$this->getPasswort(),$this->getGeburtsdatum(),$this->getId()));
}
/* ***** Public Methoden ***** */
public static function findeAlle()
{
    $sql = 'SELECT * FROM benutzer';
    $abfrage = DB::getDB()->query($sql);
    $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Benutzer');
    return $abfrage->fetchAll();
}

public static function finde($id){
  $sql = 'SELECT * FROM benutzer WHERE id=?';
  $abfrage = DB::getDB()->prepare($sql);
  $abfrage->execute(array($id));
  $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Benutzer');
  return $abfrage->fetch();
}

/*public static function findeNachKurs(Kurs $kurs)
{
    $sql = 'SELECT benutzer.* FROM benutzer '
         . 'JOIN f_nimmt_teil ON benutzer.id=f_nimmt_teil.benutzer '
         . 'WHERE f_nimmt_teil.kurs_id=?';
    $abfrage = DB::getDB()->prepare($sql);
    $abfrage->execute( array($kurs->getId()));
    $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Benutzer');
    return $abfrage->fetchAll();
}*/
public static function findeNachEmail($email)
{
    $sql = 'SELECT benutzer.* FROM benutzer '
         . 'WHERE email like ?';
         $abfrage = DB::getDB()->prepare($sql);
         $abfrage->execute(array($email));
         $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Benutzer');
         return $abfrage->fetch();
}
/*public static function findeNachFortbildung(Fortbildung $fortbildung)
{
    $sql = 'SELECT benutzer.* FROM benutzer '
         . 'JOIN f_nimmt_teil ON benutzer.id=f_nimmt_teil.benutzer '
         . 'WHERE f_nimmt_teil.fortbildung_id=?';
    $abfrage = DB::getDB()->prepare($sql);
    $abfrage->execute( array($fortbildung->getId()) );
    $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Benutzer');
    return $abfrage->fetchAll();
}*/

public function getVorUndNachname(){
  return $this->getVorname().' '.$this->getNachname();
}


}


?>
