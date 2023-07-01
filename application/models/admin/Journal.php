<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Journal extends CI_Model {

    // Supprimer les journaux invalides
    public function clean_invalid_journal(){
        $invalid = $this -> invalid_journal();
        if($invalid){
            foreach($invalid as $inv){
                $query3 = sprintf("DELETE FROM content_journal WHERE id_journal = '%s'", $inv['id_journal']) ;      // Insert categrories
                $sql3 = $this->db->query($query3);

                $query = sprintf("DELETE FROM journal WHERE id_journal = '%s'", $inv['id_journal']) ;      // Insert categrories
                $sql = $this->db->query($query);
            }
        }
    }

    public function invalid_journal(){
        $query = "select * from journal where est_valide = 1";     // Insert objet
        $sql = $this->db->query($query);
        $count = 0;

        foreach ($sql-> result_array() as $row){
            $count++;
            $result[] = $row; 
        }
        if($count == 0) return 0;
        return $result;
    }

    // Enregistrement d;un journal et des ses contents
    public function submit_journal($id_journal){
        $can_validate = $this -> can_validate($id_journal);
        if($can_validate == false) return 1;
        $this -> validate_journal($id_journal);
        return 0;
    }

    // validate a journal
    public function validate_journal($id_journal){
        $query = sprintf("UPDATE journal SET est_valide = 0 WHERE id_journal = '%s'", $id_journal);
        $sql = $this->db->query($query);
    }

    // Check balance entre credit et debit
    public function can_validate($id_journal){
        $contents = $this -> get_journal_content($id_journal);
        if(count($contents) == 0) return false;
        $credit = 0;
        $debit = 0;

        foreach($contents as $content){
            $credit += $content['credit'];
            $debit += $content['debit'];
        }

        if($credit == $debit) return true;
        return false;
    }

    // inserer fille journal
    public function add_child_journal($id_journal, $id_compte_general, $debit, $credit){
        $query = sprintf("INSERT INTO content_journal VALUES(default, '%s', '%s', %u, %u)", $id_journal, $id_compte_general, $debit, $credit);    
        $sql = $this->db->query($query);
        $this -> db -> close();
    }    

    // Get all journal filles
    public function get_journal_content($id_journal){
        $query = sprintf("select * from v_journal_content where id_journal = '%s'", $id_journal);       
        $sql = $this->db->query($query);
        $result = array();
        foreach ($sql-> result_array() as $row){
            $result[] = $row; 
        }
        $this -> db -> close();
        return $result;
    }

    // Creation d'un journal
    public function create_journal($date, $refpiece, $libelle_journal,  $id_code_journal){
        $query = sprintf("INSERT INTO journal VALUES(default , '%s', '%s', '%s', '%s', 1) returning id_journal", $refpiece, $libelle_journal, $date, $id_code_journal);    
        $result = $this->db->query($query)->row_array();
        $this -> db -> close();
        return $result['id_journal'];
    }

    // get code journal
    public function get_code_journaux(){
        $query = $this->db->get('code_journal');
        $this -> db -> close();
        return $query->result();
    }

    // Liste des ecritures journales d'un code_journal
    public function journal_liste($id_code_journal){
        $query = sprintf("select * from v_journal_content where id_code_journal = '%s' order by date_journal", $id_code_journal);
        $sql = $this->db->query($query);
        $result = array();
        foreach ($sql-> result_array() as $row){
            $result[] = $row; 
        }
        $this -> db -> close();
        return $result;
    }

    // Get une journal par id
    public function get_journal_by_id_journal($id_journal){
        $query = sprintf("select * from journal where id_journal = '%s'", $id_journal);    
        $sql = $this->db->query($query);
        $result = array();
        foreach ($sql-> result_array() as $row){
            $result[] = $row; 
        }
        if(count($result) == 0) return 0;
        return $result[0];
    }

    // Un code journal par id_code_journal
    public function get_code_journal_id($id_code_journal){
        $query = sprintf("select * from code_journal where id_code_journal = '%s'", $id_code_journal);
        $sql = $this->db->query($query);
        $result = array();
        foreach ($sql-> result_array() as $row){
            $result[] = $row; 
        }
        if(count($result) == 0) return 0;
        return $result[0];
    }
    // get code journal
    public function get_compte_generaux(){
        $query = $this->db->get('compte_general');
        $this -> db -> close();
        return $query->result();
    }

}
