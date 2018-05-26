<?php
class Koneksi{
  private $server="localhost";
  private $username="id5688227_dev1";
  private $password = "hardiani123";
  private $db = "id5688227_project_uas";
  private $hubungan;

  function ambilKoneksi(){
    $hubungan= new mysqli($this ->server, $this->username,
    $this->password, $this->db);
    return $hubungan;
  }
}
 ?>
