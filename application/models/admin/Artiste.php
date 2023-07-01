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
      $query = sprintf("UPDATE artiste set artistname = '%s', birthdate = '%s', biographie = '%s', email = '%s', adress = '%s' WHERE idartist = '%s'", $nom, $dtn, $biographie, $email, $adress, $id);      
      $sql = $this->db->query($query);
      $this -> db -> close();
  }

  // Ajouter nouveau artiste
  public function add_artiste($nom, $dtn, $biographie, $image, $email, $adress){
    $query = sprintf("INSERT INTO artiste VALUES(default, '%s', '%s', '%s', '%s', '%s', '%s')", $nom, $biographie, $dtn, $image, $adress, $email);      
    $sql = $this->db->query($query);
    $this -> db -> close();
  }

  // artiste portfolio
  public function artiste_painting($id_artiste){
    $query = sprintf("select * from painting where idartist = '%s'", $id_artiste);   
    $sql = $this->db->query($query);
    $result = array();
    foreach ($sql-> result_array() as $row){
      $result[] = $row; 
    }
    $this -> db -> close();
    return $result;
  }

  // artiste by id
  public function artiste_by_id($id_artiste){
    $query = sprintf("select * from artiste where idartist = '%s'", $id_artiste);   
    $sql = $this->db->query($query);
    $result = array();
    foreach ($sql-> result_array() as $row){
      $result[] = $row; 
    }
    $this -> db -> close();
    if(count($result) > 0) return $result[0];
    return null;
  }

  // delete an artiste 
  public function delete_artiste($id_artiste){
    $portfolio = $this -> artiste_painting($id_artiste);
    if(count($portfolio) > 0) return 1;
    $query = sprintf("DELETE FROM artiste WHERE idartist = '%s'", $id_artiste);      
    $sql = $this->db->query($query);
    $this -> db -> close();
    return 0;
  }

}
