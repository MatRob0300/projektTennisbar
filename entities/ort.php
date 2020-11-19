<?php


class Reservierung{

protected $id = NULL;
protected $gemeinde = "";
protected $plz = "";
protected $strasse = "";
protected $strassennummer = "";


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
    return 'Id:'. $this->id .', Gemeinde: '.$this->gemeinde.', Plz: '.$this->plz.', Strasse: '.$this->strasse.', Strassennummer: '.$this->strassennummer', Von: '.$this->von.', Bis: '.$this->bis;
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
public function setStrassennummer($strassennummer){
   $this->strassennummer = $strassennummer;
}
public function getStrassennummer(){
  return $this->strassennummer ;
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

    $sql = 'INSERT INTO reservierung (platznummer, plz, strasse, strassennummer)'
         . 'VALUES (:platznummer, :plz, :strasse, :strassennummer)';

    $abfrage = DB::getDB()->prepare($sql);
    $abfrage->execute($this->toArray(false));
    // setze die ID auf den von der DB generierten Wert
    $this->id = DB::getDB()->lastInsertId();
}

private function _update()
{
    $sql = 'UPDATE reservierung SET platznummer=?, plz=?, strasse=?, strassennummer=?'
        . 'WHERE id=?';
    $abfrage =  DB::getDB()->prepare($sql);
    $abfrage->execute(array($this->getPlatznummer(), $this->getPlz(),$this->getStrasse(),$this->getStrassennummer(),$this->getId()));
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
