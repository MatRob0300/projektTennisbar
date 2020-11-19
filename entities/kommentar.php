<?php


class Kommentar{

protected $id = NULL;
protected $schreibername = "";
protected $text = "";
protected $datum = "";
protected $bewertung = "";
protected $uhrzeit = "";

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
    return 'Id:'. $this->id .', Schreibername: '.$this->schreibername.', Text: '.$this->text.', Bewertung: '.$this->bewertung.', Datum: '.$this->datum.', Uhrzeit: '.$this->uhrzeit;
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
public function setSchreibername($schreibername){
   $this->schreibername = $schreibername;
}
public function getSchreibername(){
  return $this->schreibername;
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
public function setUhrzeit($uhrzeit){
   $this->uhrzeit = $uhrzeit;
}
public function getUhrzeit(){
  return $this->uhrzeit ;
}

public function loesche()
{
    $sql = 'DELETE FROM kommentar WHERE id=?';
    $abfrage = DB::getDB()->prepare($sql);
    $abfrage->execute( array($this->getId()) );
    // Objekt existiert nicht mehr in der DB, also muss die ID zurückgesetzt werden
    $this->id = 0;
}

/* ***** Private Methoden ***** */

private function _insert()
{

    $sql = 'INSERT INTO kommentar (schreibername, text, bewertung, datum, uhrzeit)'
         . 'VALUES (:schreibername, :text, :bewertung, :datum, :uhrzeit)';

    $abfrage = DB::getDB()->prepare($sql);
    $abfrage->execute($this->toArray(false));
    // setze die ID auf den von der DB generierten Wert
    $this->id = DB::getDB()->lastInsertId();
}

private function _update()
{
    $sql = 'UPDATE kommentar SET schreibername=?, text=?, bewertung=?, datum=?, uhrzeit=?'
        . 'WHERE id=?';
    $abfrage =  DB::getDB()->prepare($sql);
    $abfrage->execute(array($this->getSchreibername(), $this->getText(),$this->getBewertung(),$this->getDatum(),$this->getUhrzeit(),$this->getId()));
}
/* ***** Public Methoden ***** */
public static function findeAlle()
{
    $sql = 'SELECT * FROM benutzer';
    $abfrage = DB::getDB()->query($sql);
    $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Kommentar');
    return $abfrage->fetchAll();
}

public static function finde($id){
  $sql = 'SELECT * FROM kommentar WHERE id=?';
  $abfrage = DB::getDB()->prepare($sql);
  $abfrage->execute(array($id));
  $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Kommentar');
  return $abfrage->fetch();
}



}


?>
