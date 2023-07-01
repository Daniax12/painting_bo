<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compte extends CI_Model {


    // BENEFICE NET
    public function benefice_net(){
        return $this -> get_total_product() - $this -> get_total_charge();
    }

    // Some de tout les produits
    public function get_total_product(){
        $product = $this -> get_classe_product();
        $result = 0;
        if($product){
        foreach($product as $product){
            $balance = $this -> get_balance_compte_general($product['id_compte_general']);
            $result += $balance[1];
        }
        return $result;
        }
    }

        // Prendre tous les comptes 7
    public function get_classe_product(){
        $query = "select * from compte_general where numero_compte like '7%'";
        $sql = $this->db->query($query);
        $result = array();
        foreach ($sql-> result_array() as $row){
            $result[] = $row; 
        }
        $this -> db -> close();
        return $result;
    }   


    // Some de tout les charges
    public function get_total_charge(){
        $charges = $this -> get_classe_charge();
        $result = 0;
        if($charges){
        foreach($charges as $charge){
            $balance = $this -> get_balance_compte_general($charge['id_compte_general']);
            $result += $balance[0];
        }
        return $result;
        }
    }

    // Prendre tous les comptes 6
    public function get_classe_charge(){
        $query = "select * from compte_general where numero_compte like '6%'";
        $sql = $this->db->query($query);
        $result = array();
        foreach ($sql-> result_array() as $row){
            $result[] = $row; 
        }
        $this -> db -> close();
        return $result;
    }    



    // BALANCE
       // Totalite du balance
    public function total_balance(){
        $all_balance = $this -> get_balance_comptes();

        if($all_balance){
        $debit = 0;
        $credit = 0;

        foreach($all_balance as $balance){
            $debit += $balance[1];
            $credit += $balance[2];
        }

        $result = array();
        $result[] = $debit;
        $result[] = $credit;

        return $result;
        }
    }

    // Prendre tous les comptes dont le tota debit et credit != null
    public function get_balance_comptes(){
        $comptes = $this -> get_all_comptes();
        $res = array();

        if($comptes){
            foreach($comptes as $compte){
                $balance = $this -> get_balance_compte_general($compte -> id_compte_general);
                if($balance[0] != 0 || $balance[1] != 0){
                    $temp_array = array();
                    $temp_array[] = $compte;
                    $temp_array[] = $balance[0];
                    $temp_array[] = $balance[1];

                    $res[] = $temp_array;
                }
            }
            return $res;
        }
    }
    
   // avoir TOUS les cpmtes
    public function get_all_comptes(){
        $query = $this->db->get('compte_general');
        $this -> db -> close();
        return $query->result();
    }

    // Total debit et credit d'un compte
   public function get_balance_compte_general($id_compte_general){
    $values = $this -> get_grand_livre($id_compte_general);
    $debit = 0;
    $credit = 0;
    if($values){
       foreach($values as $value){
          $debit += (float) $value['debit'];
          $credit += (float) $value['credit'];
       }
       $result = array();
       $result[] = $debit;
       $result[] = $credit;
       return $result;
    }
 }

    // Get le grand livre des copmptes
    public function get_grand_livre($id_compte_general){
        $query = sprintf("select * from v_journal_content where id_compte_general = '%s' order by date_journal", $id_compte_general);
        $sql = $this->db->query($query);
        $result = array();
        foreach ($sql-> result_array() as $row){
            $result[] = $row; 
        }
        $this -> db -> close();
        return $result;
    }
    // get compte by id
    public function get_compte_general_by_id($id_compte_general){
        $query = sprintf("select * from compte_general where id_compte_general = '%s'", $id_compte_general);
        $sql = $this->db->query($query);
        $result = array();
        foreach ($sql-> result_array() as $row){
            $result[] = $row; 
        }
        if(count($result) > 0){
            return $result[0];
        }
    }
}
