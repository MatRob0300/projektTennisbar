<?php


class Teilnehmer{

protected $id = NULL;
protected $vorname = "";
protected $nachname = "";
protected $email = "";

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
    return 'Id:'. $this->id .', Vorname: '.$this->vorname.', Nachname: '.$this->nachname.', Email: '.$this->email;
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


public function loesche()
{
    $sql = 'DELETE FROM f_teilnehmer WHERE id=?';
    $abfrage = DB::getDB()->prepare($sql);
    $abfrage->execute( array($this->getId()) );
    // Objekt existiert nicht mehr in der DB, also muss die ID zurückgesetzt werden
    $this->id = 0;
}

/* ***** Private Methoden ***** */

private function _insert()
{

    $sql = 'INSERT INTO f_teilnehmer (vorname, nachname, email)'
         . 'VALUES (:vorname, :nachname, :email)';

    $abfrage = DB::getDB()->prepare($sql);
    $abfrage->execute($this->toArray(false));
    // setze die ID auf den von der DB generierten Wert
    $this->id = DB::getDB()->lastInsertId();
}

private function _update()
{
    $sql = 'UPDATE f_teilnehmer SET vorname=?, nachname=?, email=?'
        . 'WHERE id=?';
    $abfrage =  DB::getDB()->prepare($sql);
    $abfrage->execute(array($this->getVorname(), $this->getNachname(),$this->getEmail(),$this->getId()));
}
/* ***** Public Methoden ***** */
public static function findeAlle()
{
    $sql = 'SELECT * FROM f_teilnehmer';
    $abfrage = DB::getDB()->query($sql);
    $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Teilnehmer');
    return $abfrage->fetchAll();
}

public static function finde($id){
  $sql = 'SELECT * FROM f_teilnehmer WHERE id=?';
  $abfrage = DB::getDB()->prepare($sql);
  $abfrage->execute(array($id));
  $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Teilnehmer');
  return $abfrage->fetch();
}

public static function findeNachKurs(Kurs $kurs)
{
    $sql = 'SELECT f_teilnehmer.* FROM f_teilnehmer '
         . 'JOIN f_nimmt_teil ON f_teilnehmer.id=f_nimmt_teil.teilnehmer_id '
         . 'WHERE f_nimmt_teil.kurs_id=?';
    $abfrage = DB::getDB()->prepare($sql);
    $abfrage->execute( array($kurs->getId()));
    $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Teilnehmer');
    return $abfrage->fetchAll();
}
public static function findeNachEmail($email)
{
    $sql = 'SELECT f_teilnehmer.* FROM f_teilnehmer '
         . 'WHERE email like ?';
         $abfrage = DB::getDB()->prepare($sql);
         $abfrage->execute(array($email));
         $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Teilnehmer');
         return $abfrage->fetch();
}
public static function findeNachFortbildung(Fortbildung $fortbildung)
{
    $sql = 'SELECT f_teilnehmer.* FROM f_teilnehmer '
         . 'JOIN f_nimmt_teil ON f_teilnehmer.id=f_nimmt_teil.teilnehmer_id '
         . 'WHERE f_nimmt_teil.fortbildung_id=?';
    $abfrage = DB::getDB()->prepare($sql);
    $abfrage->execute( array($fortbildung->getId()) );
    $abfrage->setFetchMode(PDO::FETCH_CLASS, 'Teilnehmer');
    return $abfrage->fetchAll();
}

public function getVorUndNachname(){
  return $this->getVorname().' '.$this->getNachname();
}
public function getTermine(){
    return Kurs::findeNachBenutzer($this);
}

public function nimmtAnKurseTeil(){
  if(empty($this->getTermine())){
      return false;
    }else {
      return true;
    }
}
public function nimmtAnKursTeilInFortbildung($fortbildungid){
  $fortbildung = Fortbildung::finde($fortbildungid);
  $term = Kurs::findeNachBenutzerUndFortbildung($this, $fortbildung);
  if($term->getKurs_id() == NULL){
      return false;
    }else {
      return true;//1==true
    }
}

}


?>
