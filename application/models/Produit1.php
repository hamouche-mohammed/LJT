<?php
class produit1 extends CI_Model {

        public $reference;
        public $nom_produit;
        public $prix;
        public $quantite;
        public $created_date;
        public $category_id;
        public $ref_fournisseur;
     

        public function get_produit()
        {
                $query = $this->db->get('produits');
                return $query->result();
        }

        public function insert_produit($data)
        {
             $this->db->insert("produits", $data);  
        }



       
        public function delete_produit($id){  
           $this->db->where("reference", $id);  
           $this->db->delete("produits");  
           //DELETE FROM tbl_user WHERE id = $id  
         }  







         function fetch_single_data($id)  
          {  
           $this->db->where("reference", $id);  
           $query = $this->db->get("produits");  
           return $query;  
           //Select * FROM tbl_user where id = '$id'  
          }  
 


        public function update_produit($data, $id)
        {
            
           $this->db->where("reference", $id);  
           $this->db->update("produits", $data);  
           //UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'  
        
        }

        public function getid(){

      $str = "PRT000";


$query = $this->db->get('produits');

if($query->result()){

foreach ($query->result() as $row) {

  $id_four = $row->reference;
  $last_four = explode("000", $id_four);
 /* print_r (explode("r",$id_four));*/
 /* echo  $last_four[1];*/
  $last_four[1]++;

  $id = $str.$last_four[1];

               }

}else{
  
    $id = "PRT0001";
}

       return $id;
     }

public function get_categories()
        {
                $query = $this->db->get('categories');
                return $query->result();
        }




}
?>