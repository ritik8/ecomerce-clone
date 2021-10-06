<?php 

class Product extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function dbQueryRun($sql,$select_type,$result="Yes")
    { 
         $query = $this->db->query($sql);
         if($result=="Yes")
         {
         switch($select_type) {
                  case "row_array":
                               $result = $query->row_array();
                               break;
                  case "row":
                               $result = $query->row();
                               break;
                  case "result_array":
                               $result = $query->result_array();
                               break;
                  default:
                               $result = $query->result();
           }
         return $result;
         }
         else
         {
         return $query;
         }
    }
}


?>