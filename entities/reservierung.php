<?php


class Reservierung{

protected $id = NULL;
protected $platznummer = "";
protected $spieleranzahl = "";
protected $msanzahl = "";
protected $datum = "";
protected $von = "";
protected $bis = "";

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
    return 'Id:'. $this->id .', Platznummer: '.$this->platznummer.', Spieleranzahl: '.$this->spieleranzahl.', Msanzahl: '.$this->msanzahl.', Datum: '.$this->datum.', Von: '.$this->von.', Bis: '.$this->bis;
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
public function setPlatznummer($platznummer){
   $this->platznummer = $platznummer;
}
public function getPlatznummer(){
  return $this->platznummer;
}
public function setSpieleranzahl($spieleranzahl){
   $this->spieleranzahl = $spieleranzahl;
}
public function getSpieleranzahl(){
  return $this->spieleranzahl;
}
public function setMsanzahl($msanzahl){
   $this->msanzahl = $msanzahl;
}
public function getMsanzahl(){
  return $this->msanzahl ;
}
public function setDatum($datum){
   $this->datum = $datum;
}
public function getDatum(){
  return $this->datum ;
}
public function setVon($von){
   $this->von = $von;
}
public function getVon(){
  return $this->von ;
}
public function setBis($bis){
   $this->bis = $bis;
}
public function getBis(){
  return $this->bis ;
}

public function loesche()
{
    $sql = 'DELETE FROM reservierung WHERE id=?';
    $abfrage = DB::getDB()->prepare($sql);
    $abfrage->execute( array($this->getId()) );
    // Objekt existiert nicht mehr in der DB, also muss die ID zurückgesetzt werden
    $this->id = 0;
}

/* ***** Private Methoden ***** */

private function _insert()
{

    $sql = 'INSERT INTO reservierung (platznummer, spieleranzahl, msanzahl, datum, von, bis)'
         . 'VALUES (:platznummer, :spieleranzahl, :msanzahl, :datum, :von, :bis)';

    $abfrage = DB::getDB()->prepare($sql);
    $abfrage->execute($this->toArray(false));
    // setze die ID auf den von der DB generierten Wert
    $this->id = DB::getDB()->lastInsertId();
}

private function _update()
{
    $sql = 'UPDATE reservierung SET platznummer=?, spieleranzahl=?, msanzahl=?, datum=?, von=?, bis=?'
        . 'WHERE id=?';
    $abfrage =  DB::getDB()->prepare($sql);
    $abfrage->execute(array($this->getPlatznummer(), $this->getSpieleranzahl(),$this->getMsanzahl(),$this->getDatum(),$this->getVon(),$this->getBis(),$this->getId()));
}
/* ***** Public Methoden ***** */
public static function findeAlle()
{
    $sql = 'SELECT * FROM benutzer';
    $abfrage = DB::getDB()->query($sql);
    $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Reservierung');
    return $abfrage->fetchAll();
}

public static function finde($id){
  $sql = 'SELECT * FROM reservierung WHERE id=?';
  $abfrage = DB::getDB()->prepare($sql);
  $abfrage->execute(array($id));
  $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Reservierung');
  return $abfrage->fetch();
}



}


?>
