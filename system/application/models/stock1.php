<?php
class Stock1 extends CI_Model {

        public $num_étage;
        public $num_article;
        public $quantité_stock;

        public function get_stock()
        {
                $query = $this->db->get('stocks');
                return $query->result();
        }




        public function insert_stock($data)
        {
                $this->db->insert("stocks", $data);  
        }



       
        public function delete_stock($id){  
           $this->db->where("id", $id);  
           $this->db->delete("stocks");  
           //DELETE FROM tbl_user WHERE id = $id  
         }  




        function fetch_single_data($id)  
          {  
           $this->db->where("id", $id);  
           $query = $this->db->get("stocks");  
           return $query;  
           //Select * FROM tbl_user where id = '$id'  
          }  
 


        public function update_stock($data, $id)
        {
            
           $this->db->where("id", $id);  
           $this->db->update("stocks", $data);  
           //UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'  
        
        }

}
?>