<?php
class utilisateur1 extends CI_Model {

        public $udser_id;
        public $nom;
        public $prenom;
        public $cni;
        public $tel;
        public $email;
        public $password;

     

        public function get_utilisateur()
        {
                $query = $this->db->get('user_form');
                return $query->result();
        }

        public function insert_utilisateur($data)
        {
             $this->db->insert("user_form", $data);  
        }



       
       /* public function delete_produit($id){  
           $this->db->where("reference", $id);  
           $this->db->delete("produits");  
           //DELETE FROM tbl_user WHERE id = $id  
         }  */







         function fetch_single_data($id)  
          {  
           $this->db->where("udser_id", $id);  
           $query = $this->db->get("user_form");  
           return $query;  
           //Select * FROM tbl_user where id = '$id'  
          }  
 


        public function update_utilisateur($data, $id)
        {
            
           $this->db->where("udser_id", $id);  
           $this->db->update("user_form", $data);  
           //UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'  
        
        }

 /*      public function getid(){

      $str = "PRT000";


$query = $this->db->get('produits');

if($query->result()){

foreach ($query->result() as $row) {

  $id_four = $row->reference;
  $last_four = explode("000", $id_four);
 
  $last_four[1]++;

  $id = $str.$last_four[1];

               }

}else{
  
    $id = "PRT0001";
}

       return $id;
     }*/

public function get_type_user()
        {
                $query = $this->db->get('type_user');
                return $query->result();
        }



         public function reset($id)
        {
                //$query = $this->db->get('ligne_facture',array('ref_facture' => $id));

               
                $data=array( "password" =>md5("1234")); 
                $this->db->where("udser_id", $id);  
                $this->db->update("user_form", $data);




        }




}
?>