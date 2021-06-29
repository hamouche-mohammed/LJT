<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');




class client1 extends CI_Model {
 
        public $ref_client;
        public $nom;
        public $prenom;
        public $mail;
        public $telephone;
        public $adresse;
        public $nom_ville;
        public $status;
        public $gender;

        public function get_client()
        {
                $query = $this->db->get('clients');
                return $query->result();
        }



        public function insert_client($data)
        {
                $this->db->insert("clients", $data);  
        }


         public function delete_client($id){  
           $this->db->where("ref_client", $id);  
           $this->db->delete("clients");  
           //DELETE FROM tbl_user WHERE id = $id  
         }  


        function fetch_single_data($id)  
          {  
           $this->db->where("ref_client", $id);  
           $query = $this->db->get("clients");  
           return $query;  
           //Select * FROM tbl_user where id = '$id'  
          }  
 


        public function update_client($data, $id)
        {
            
           $this->db->where("ref_client", $id);  
           $this->db->update("clients", $data);  
           //UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'  
        
        }

        

        ////////////////////////////////////////




         public function getid(){

        $str = "CLT000";


        $query = $this->db->get('clients');

       if($query->result()){

            foreach ($query->result() as $row) {

            $id_four = $row->ref_client;
             $last_four = explode("000", $id_four);
  /* print_r (explode("r",$id_four));*/
 /* echo  $last_four[1];*/
           $last_four[1]++;

             $id = $str.$last_four[1];

               }

}else{
  
    $id = "CLT0001";
}

       return $id;
     }




}
?>
