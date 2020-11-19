<?php

class Benutzer_hat_reservierung{

  protected $benutzerid = 0;
  protected $reservierungid = 0;

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

    $this->_insert();

  }

  public function setBenutzerid($benutzerid){
      $this->benutzerid = $benutzerid;
  }

  public function getBenutzerid(){
    return $this->benutzerid;
  }

  public function setReservierungid($reservierungid){
    $this->reservierungid = $teilnehmerid;
  }

  public function getReservierungid(){
      return $this->reservierungid;
  }

  public static function loescheAusBenutzer()
  {
      $sql = 'DELETE FROM Benutzer_hat_reservierung WHERE reservierungid=?';
      $abfrage = DB::getDB()->prepare($sql);
      $abfrage->execute( array($this->getReservierungid()) );
      // Objekt existiert nicht mehr in der DB, also muss die ID zurückgesetzt werden
      $this->id = 0;
  }

  /* ***** Private Methoden ***** */

  private function _insert()
  {
      $sql = 'INSERT INTO benutzer_hat_reservierung (benutzerid,reservierungid)'
           . 'VALUES (:benutzerid, :reservierungid)';

      $abfrage = DB::getDB()->prepare($sql);
      $abfrage->execute($this->toArray(false));
      // setze die ID auf den von der DB generierten Wert
      $this->id = DB::getDB()->lastInsertId();
  }

  private function _update()
  {
      $sql = 'UPDATE benutzer_hat_reservierung SET benutzerid=:benutzerid'
          . 'WHERE reservierungid=:reservierungid';
      $abfrage = DB::getDB()->prepare($sql);
      $abfrage->execute($this->toArray());
  }


}


?>
