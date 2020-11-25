<?php


class Benutzer{

protected $id = NULL;
protected $vorname = "";
protected $nachname = "";
protected $email = "";
protected $passwort = "";
protected $geburtsdatum = "";
protected $ort = "";
protected $plz = "";
protected $strasse = "";
protected $strassenr = "";
protected $regristiert = "";

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
    return 'Id:'. $this->id .', Vorname: '.$this->vorname.', Nachname: '.$this->nachname.', Email: '.$this->email.', Passwort: '.$this->passwort.', Geburtsdatum: '.$this->geburtsdatum.', Ortid: '.$this->ortid;
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
public function setOrt($ort){
   $this->ortid = $ort;
}
public function getOrt(){
  return $this->ort;
}
public function setPlz($plz){
   $this->plz = $plz;
}
public function getPlz(){
  return $this->plz;
}
public function setStrasse($strasse){
   $this->strasse = $strasse;
}
public function getStrasse(){
  return $this->strasse ;
}
public function setStrassennr($strassennr){
   $this->strassennr = $strassennr;
}
public function getStrassennr(){
  return $this->strassennr ;
}
public function setRegristiert($regristiert){
   $this->regristiert = $regristiert;
}
public function getRegristriert(){
  return $this->regristiert;
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

    $sql = 'INSERT INTO benutzer (vorname, nachname, email, passwort, geburtsdatum, ortid)'
         . 'VALUES (:vorname, :nachname, :email, :passwort, :geburtsdatum, :ortid)';

    $abfrage = DB::getDB()->prepare($sql);
    $abfrage->execute($this->toArray(false));
    // setze die ID auf den von der DB generierten Wert
    $this->id = DB::getDB()->lastInsertId();
}

private function _update()
{
    $sql = 'UPDATE benutzer SET vorname=?, nachname=?, email=?, passwort=?, geburtsdatum=?, ortid=?'
        . 'WHERE id=?';
    $abfrage =  DB::getDB()->prepare($sql);
    $abfrage->execute(array($this->getVorname(), $this->getNachname(),$this->getEmail(),$this->getPasswort(),$this->getGeburtsdatum(),$this->getOrtid(),$this->getId()));
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

public static function findeNachEmail($email)
{
    $sql = 'SELECT benutzer.* FROM benutzer '
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
