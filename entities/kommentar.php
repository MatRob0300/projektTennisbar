<?php


class Kommentar{

protected $kommentarid = NULL;
protected $kname = "";
protected $text = "";
protected $datum = "";
protected $bewertung = "";
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
    return 'Kommentarid:'. $this->kommentarid.', Kname: '.$this->kname.', Text: '.$this->text.', Bewertung: '.$this->bewertung.', Datum: '.$this->datum.', Benutzerid: '.$this->benutzerid;
}
public function toArray($mitId = true)
{
    $attribute = get_object_vars($this);
    if ($mitId === false) {
        // wenn $mitId false ist, entferne den Schlüssel id aus dem Ergebnis
        unset($attribute['kommentarid']);
    }
    return $attribute;
}

public function speichere()
{
    if ( $this->getKommentarid() > 0 ) {
        // wenn die ID eine Datenbank-ID ist, also größer 0, führe ein UPDATE durch
        $this->_update();
    } else {
        // ansonsten einen INSERT
        $this->_insert();
    }
}

public function setKommentarid($kommentarid){
   $this->kommentarid = $kommentarid;
}
public function getKommentarid(){
  return $this->kommentarid;
}
public function setKname($kname){
  $this->kname = $kname;
}
public function getKname(){
  return $this->kname;
}
public function setText($text){
   $this->text = $text;
}
public function getText(){
  return $this->text;
}
public function setBewertung($bewertung){
   $this->bewertung = $bewertung;
}
public function getBewertung(){
  return $this->bewertung ;
}
public function setDatum($datum){
   $this->datum = $datum;
}
public function getDatum(){
  return $this->datum ;
}
public function setBenutzerid($benutzerid){
   $this->benutzerid = $benutzerid;
}
public function getBenutzerid(){
  return $this->benutzerid ;
}


public function loesche()
{
    $sql = 'DELETE FROM kommentar WHERE kommentarid=?';
    $abfrage = DB::getDB()->prepare($sql);
    $abfrage->execute( array($this->getKommentarid()) );
    // Objekt existiert nicht mehr in der DB, also muss die ID zurückgesetzt werden
    $this->id = 0;
}

/* ***** Private Methoden ***** */

private function _insert()
{

    $sql = 'INSERT INTO kommentar (kname, text, bewertung, datum, benutzerid)'
         . 'VALUES (:kname, :text, :bewertung, :datum, :benutzerid)';

    $abfrage = DB::getDB()->prepare($sql);
    $abfrage->execute($this->toArray(false));
    // setze die ID auf den von der DB generierten Wert
    $this->id = DB::getDB()->lastInsertId();
}

private function _update()
{
    $sql = 'UPDATE kommentar SET kname=?, text=?, bewertung=?, datum=?, benutzerid=?'
        . 'WHERE kommentarid=?';
    $abfrage =  DB::getDB()->prepare($sql);
    $abfrage->execute(array($this->getKname(),$this->getText(),$this->getBewertung(),$this->getDatum(),$this->getBenutzerid(),$this->getKommentarid()));
}
/* ***** Public Methoden ***** */
public static function findeAlle()
{
    $sql = 'SELECT * FROM kommentar ORDER BY bewertung DESC' ;
    $abfrage = DB::getDB()->query($sql);
    $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Kommentar');
    return $abfrage->fetchAll();
}

public static function finde($id){
  $sql = 'SELECT * FROM kommentar WHERE kommentarid=?';
  $abfrage = DB::getDB()->prepare($sql);
  $abfrage->execute(array($kommentarid));
  $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Kommentar');
  return $abfrage->fetch();
}
public static function findeNachBenutzerid($benutzerid){
  $sql = 'SELECT * FROM kommentar WHERE benutzerid=?';
  $abfrage = DB::getDB()->prepare($sql);
  $abfrage->execute(array($benutzerid));
  $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Kommentar');
  return $abfrage->fetchAll();
}



}


?>
