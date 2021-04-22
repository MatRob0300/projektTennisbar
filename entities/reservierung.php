<?php


class Reservierung{

protected $reservierungid = NULL;
protected $platznummer = "";
protected $datum = "";
protected $zeit = "";
protected $benutzerid = "";

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
    return 'Reservierungid:'. $this->reservierungid .', Platznummer: '.$this->platznummer.', Datum: '.$this->datum.', Zeit: '.$this->zeit.', Benutzerid: '.$this->benutzerid;
}
public function toArray($mitId = true)
{
    $attribute = get_object_vars($this);
    if ($mitId === false) {
        // wenn $mitId false ist, entferne den Schlüssel id aus dem Ergebnis
        unset($attribute['reservierungid']);
    }
    return $attribute;
}

public function speichere()
{
    if ( $this->getReservierungid() > 0 ) {
        // wenn die ID eine Datenbank-ID ist, also größer 0, führe ein UPDATE durch
        $this->_update();
    } else {
        // ansonsten einen INSERT
        $this->_insert();
    }
}

public function setReservierungid($reservierungid){
   $this->reservierungid = $reservierungid;
}
public function getReservierungid(){
  return $this->reservierungid;
}
public function setPlatznummer($platznummer){
   $this->platznummer = $platznummer;
}
public function getPlatznummer(){
  return $this->platznummer;
}
public function setDatum($datum){
   $this->datum = $datum;
}
public function getDatum(){
  return $this->datum ;
}
public function setZeit($zeit){
   $this->zeit = $zeit;
}
public function getZeit(){
  return $this->zeit ;
}
public function setBenutzerid($benutzerid){
  $this->benutzerid = $benutzerid;
}
public function getBenutzerid(){
  return $this->benutzerid;
}

/* ***** Private Methoden ***** */

private function _insert(){

    $sql = 'INSERT INTO reservierung (platznummer, datum, zeit, benutzerid)'
         . 'VALUES (:platznummer, :datum, :zeit, :benutzerid)';

    $abfrage = DB::getDB()->prepare($sql);
    $abfrage->execute($this->toArray(false));
    // setze die ID auf den von der DB generierten Wert
    $this->id = DB::getDB()->lastInsertId();
}

private function _update(){
    $sql = 'UPDATE reservierung SET platznummer=?, datum=?, zeit=?, benutzerid=?'
        . 'WHERE reservierungid=?';
    $abfrage =  DB::getDB()->prepare($sql);
    $abfrage->execute(array($this->getPlatznummer(),$this->getMsanzahl(),$this->getDatum(),$this->getZeit(),$this->getBenutzerid(),$this->getReservierungid()));
}
public function loesche(){
    $sql = 'DELETE FROM reservierung WHERE reservierungid=?';
    $abfrage = DB::getDB()->prepare($sql);
    $abfrage->execute( array($this->getReservierungid()) );
    // Objekt existiert nicht mehr in der DB, also muss die ID zurückgesetzt werden
    $this->id = 0;
}
/* ***** Public Methoden ***** */
public static function findeAlle()
{
    $sql = 'SELECT * FROM reservierung';
    $abfrage = DB::getDB()->query($sql);
    $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Reservierung');
    return $abfrage->fetchAll();
}

public static function finde($reservierungid){
  $sql = 'SELECT * FROM reservierung WHERE reservierungid=?';
  $abfrage = DB::getDB()->prepare($sql);
  $abfrage->execute(array($reservierungid));
  $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Reservierung');
  return $abfrage->fetch();
}
public static function findeNachDatumVonPlatz($datum,$platznummer){
  $sql = 'SELECT * FROM reservierung WHERE datum='.'"'.$datum.'"'.' and platznummer='.$platznummer;
  $abfrage = DB::getDB()->query($sql);
  $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Reservierung');
  $res = $abfrage->fetchAll();
  return $res;
}
public static function findeNachDatumVonBenutzer($datum,$benutzerid){
  $sql = 'SELECT * FROM reservierung WHERE datum='.'"'.$datum.'"'.'AND benutzerid = '.'"'.$benutzerid.'"';
  $abfrage = DB::getDB()->query($sql);
  $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Reservierung');
  $res = $abfrage->fetchAll();
  return $res;
}
/*public static function findeAlleNachBenutzer($benutzerid){
  $sql = 'SELECT * FROM reservierung WHERE benutzerid = ? ORDER BY platznummer ASC';
  $abfrage = DB::getDB()->prepare($sql);
  $abfrage->execute(array($benutzerid));
  $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Reservierung');
  return $abfrage->fetchAll();
}*/
public function findeAlleNachBenutzer(Benutzer $benutzer){
  $sql = 'SELECT reservierung.* FROM reservierung,benutzer WHERE benutzer.benutzerid = reservierung.benutzerid AND benutzer.benutzerid = ? ORDER BY reservierung.platznummer ASC';
  $abfrage = DB::getDB()->prepare($sql);
  $abfrage->execute(array($benutzer->getBenutzerid()));
  $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Reservierung');
  return $abfrage->fetchAll();
}
public function findeAlleBenutzerUnabgelaufenDatum(Benutzer $benutzer){
  $sql = 'SELECT reservierung.* FROM reservierung,benutzer WHERE benutzer.benutzerid = reservierung.benutzerid AND benutzer.benutzerid = ? AND reservierung.datum >= CURRENT_DATE ORDER BY reservierung.platznummer,reservierung.datum,reservierung.zeit';
  $abfrage = DB::getDB()->prepare($sql);
  $abfrage->execute(array($benutzer->getBenutzerid()));
  $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Reservierung');
  return $abfrage->fetchAll();
}
public function findeAlleUnabgelaufenDatumVonBenutzer(Benutzer $benutzer){
  $sql = 'SELECT distinct reservierung.datum FROM reservierung,benutzer WHERE benutzer.benutzerid = reservierung.benutzerid AND benutzer.benutzerid = ?';
  $abfrage = DB::getDB()->prepare($sql);
  $abfrage->execute(array($benutzer->getBenutzerid()));
  $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Reservierung');
  return $abfrage->fetchAll();
}
public function findeAlleHeutigenResVonBenutzer(Benutzer $benutzer){
  $sql = 'SELECT reservierung.* FROM reservierung,benutzer WHERE benutzer.benutzerid = reservierung.benutzerid AND benutzer.benutzerid = ? AND reservierung.datum = CURRENT_DATE';
  $abfrage = DB::getDB()->prepare($sql);
  $abfrage->execute(array($benutzer->getBenutzerid()));
  $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Reservierung');
  return $abfrage->fetchAll();
}





}


?>
