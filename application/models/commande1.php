<?php
class commande1 extends CI_Model {

        public $numero_commande;
        public $date_commande;
        public $total_commande;
     

        public function get_commande()
        {
                $query = $this->db->get('commande');
                return $query->result();
        }

        public function insert_commande($data)
        {
             $this->db->insert("commande", $data);  
        }



       
        public function delete_commande($id){  
           $this->db->where("numero_commande", $id);  
           $this->db->delete("commande");  
           //DELETE FROM tbl_user WHERE id = $id  
         }  







         function fetch_single_data($id)  
          {  
           $this->db->where("numero_commande", $id);  
           $query = $this->db->get("commande");  
           return $query;  
           //Select * FROM tbl_user where id = '$id'  
          }  
 


        public function update_commande($data, $id)
        {
            
           $this->db->where("numero_commande", $id);  
           $this->db->update("commande", $data);  
           //UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'  
        
        }





}
?>