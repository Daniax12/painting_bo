<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painting extends CI_Model {
    
  // Liste des artistes avec age
  public function get_all_paintings(){     
    $query = " select painting.*, artiste.artistname from painting inner join artiste on artiste.idartist = painting.idartist order by painting.entrancedate";   
    $sql = $this->db->query($query);
    $result = array();
    foreach ($sql-> result_array() as $row){
      $result[] = $row; 
    }
    $this -> db -> close();
    return $result;
  }

  // Ajouter nouveau tableau
  public function add_painting($paintingname, $idartist, $image, $entrancedate, $description, $price){
    $query = sprintf("INSERT INTO painting VALUES(default, '%s', '%s', '%s', '%s', '%s', %u)", $paintingname, $idartist, $image, $entrancedate, $description, $price);      
    $sql = $this->db->query($query);
    $this -> db -> close();
  }

  // MODIFIER TABLEAU
  public function modify_painting($idpainting, $paintingname, $description, $price){
    $query = sprintf("UPDATE painting SET paintingname = '%s', description = '%s', price = %u WHERE idpainting = '%s'", $paintingname, $description, $price, $idpainting);      
    $sql = $this->db->query($query);
    $this -> db -> close();
  }

  // SAVOIR SI UN TABLEAU EST DEJA VENDU
  public function is_sold($idpainting){
    $query = sprintf("SELECT * FROM painting_buying WHERE idpainting = '%s'", $idpainting);   
    $sql = $this->db->query($query);
    $result = array();
    foreach ($sql-> result_array() as $row){
      $result[] = $row; 
    }
    $this -> db -> close();
    if(count($result) > 0) return true;
    return false;
  }

  // delete an painting
  public function delete_painting($idpainting){
    $is_sold = $this -> is_sold($idpainting);
    if($is_sold == true) return 1;
    $query = sprintf("DELETE FROM painting WHERE idpainting = '%s'", $idpainting);      
    $sql = $this->db->query($query);
    $this -> db -> close();
    return 0;
  }
}