<?php
class fournisseur1 extends CI_Model {

        public $ref_fournisseur;
        public $nom_fournisseur;
        public $adresse_fournisseur;
        public $tel_fournisseur;

        public function get_fournisseur()
        {
                $query = $this->db->get('fournisseur');
                return $query->result();
        }



        public function insert_fournisseur($data)
        {
                $this->db->insert("fournisseur", $data);  
        }


         public function delete_fournisseur($id){  
           $this->db->where("ref_fournisseur", $id);  
           $this->db->delete("fournisseur");  
           //DELETE FROM tbl_user WHERE id = $id  
         }  

///////////////////////////////////////
        function fetch_single_data($id)  
          {  
           $this->db->where("ref_fournisseur", $id);  
           $query = $this->db->get("fournisseur");  
           return $query;  
           //Select * FROM tbl_user where id = '$id'  
          }  
 


        public function update_fournisseur($data, $id)
        {
            
           $this->db->where("ref_fournisseur", $id);  
           $this->db->update("fournisseur", $data);  
           //UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'  
        
        }


}
?>