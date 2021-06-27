<?php
class facture1 extends CI_Model {

        public $ref_facture;
        public $date_facture;
        public $montant_facture;
       

        public function get_facture()
        {
                $query = $this->db->get('facture');
                return $query->result();
        }

        public function insert_facture($data)
        {
             $this->db->insert("facture", $data);  
        }


        /////////////////////////


         public function insert_ligne_facture($data1)
        {
             $this->db->insert("ligne_facture", $data1);  
        }



       
        public function delete_facture($id){  
           $this->db->where("ref_facture", $id);  
           $this->db->delete("facture");  
           //DELETE FROM tbl_user WHERE id = $id  
         }  







         function fetch_single_data($id)  
          {  
           $this->db->where("ref_facture", $id);  
           $query = $this->db->get("facture");  
           return $query;  
           //Select * FROM tbl_user where id = '$id'  
          }  
 


        public function update_facture($data, $id)
        {
            
           $this->db->where("ref_facture", $id);  
           $this->db->update("facture", $data);  
           //UPDATE tbl_user SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'  
        
        }

        public function getid(){

      $str = "FACT000";


$query = $this->db->get('facture');

if($query->result()){

foreach ($query->result() as $row) {

  $id_four = $row->ref_facture;
  $last_four = explode("000", $id_four);
 /* print_r (explode("r",$id_four));*/
 /* echo  $last_four[1];*/
  $last_four[1]++;

  $id = $str.$last_four[1];

               }

}else{
  
    $id = "FACT0001";
}

       return $id;
     }




//////////////////////

public function get_etat_facture()
        {
                $query = $this->db->get('etat_facture');
                return $query->result();
        }

 public function get_mode_paiement()
        {
                $query = $this->db->get('mode_paiement');
                return $query->result();
        }

 public function get_detaille($id)
        {
                //$query = $this->db->get('ligne_facture',array('ref_facture' => $id));


                $this->db->select('*');
                $this->db->from('ligne_facture');
                $this->db->where('ref_facture',$id);
                $query=$this->db->get();
                return $query->result();




        }

         public function get_factureByRef()
        {
                //$query = $this->db->get('ligne_facture',array('ref_facture' => $id));


               $query = $this->db->get('facture');

               foreach( $query->result() as $row)  
                {

                  $ref=$row->ref_facture;
                }


                $this->db->select('*');
                $this->db->from('facture');
                $this->db->where('ref_facture',$ref);
                $query=$this->db->get();
                return $query->result();


        }







        




}
?>