<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artiste extends CI_Model {

  // Liste des artistes avec age
  public function get_all_artiste_with_age(){     
    $query = "select idartist, artistname, biographie, birthdate, extract(year from age(birthdate)) as age, image, adress, email from artiste order by idartist";   
    $sql = $this->db->query($query);
    $result = array();
    foreach ($sql-> result_array() as $row){
      $result[] = $row; 
    }
    $this -> db -> close();
    return $result;
  }

  // Modifier artiste
  public function  modify_artiste($id, $nom, $dtn, $biographie, $email, $adress){
      $query = sprintf("UPDATE artiste set artistname = '%s', birthdate = '%s', biographie = '%s', adress = '%s', email = '%s' WHERE idartist = '%s'", $nom, $dtn, $biographie, $email, $adress, $id);       // Insert objet
      $sql = $this->db->query($query);
  }


}
