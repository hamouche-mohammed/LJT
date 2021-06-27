<?php 


class produit extends CI_CONTROLLER{
	
	public function produitData(){



	$this->load->model("produit1");

	$data["produits"] = $this->produit1->get_produit();

	if($this->input->post("insert_nouveau"))  
                {  
                     
                     redirect(base_url() . "index.php/produit/produitinsert");  
                } 

	$this->load->view("produit/produit",$data);
	}





	/////////////////////////////////////////


   
public function getidx(){

   $this->load->model("fournisseur1"); 
   $x = $this->fournisseur1->getid();
}




///////////////////////////////////////



	public function produitinsert(){


       

          
         

 
           $this->load->library('form_validation');  
             
     
            $this->form_validation->set_rules("nom_produit", "nom_produit", 'required'); 
           $this->form_validation->set_rules("prix", "prix", 'required'); 
           $this->form_validation->set_rules("quantite", "quantite", 'required'); 
            $this->form_validation->set_rules("created_date", "acreated_date", 'required'); 
            $this->form_validation->set_rules("category_id", "category_id", 'required'); 
            $this->form_validation->set_rules("ref_fournisseur", "ref_fournisseur", 'required'); 
      
            


           if($this->form_validation->run()==false)  
           {  

                $this->load->model("fournisseur1");
                $this->load->model("produit1");

                $data['fournisseur']=$this->fournisseur1->get_fournisseur();
               

                $data['categories']=$this->produit1->get_categories();
               
              }else{

                 
                //true  
                $this->load->model("produit1");  

                
                $data = array(  
                     "reference"     =>$this->produit1->getid(),  
                     "nom_produit"     =>$this->input->post("nom_produit"),
                     "prix"     =>$this->input->post("prix"),
                     "quantite"               =>$this->input->post("quantite"),
                     "created_date"     =>$this->input->post("created_date"),
                     "category_id" =>$this->input->post("category_id"),
                    
                     "ref_fournisseur"     =>$this->input->post("ref_fournisseur")
                    
                       
                );   




                if($this->input->post("update"))  
                {  

                   $data = array(  
                    
                     "nom_produit"     =>$this->input->post("nom_produit"),
                     "prix"     =>$this->input->post("prix"),
                     "quantite"               =>$this->input->post("quantite"),
                     "created_date"     =>$this->input->post("created_date"),
                     "category_id" =>$this->input->post("category_id"),
                    
                     "ref_fournisseur"     =>$this->input->post("ref_fournisseur")
                    
                       
                ); 
                     $this->produit1->update_produit($data, $this->input->post("hidden_id"));  
                     redirect(base_url() . "index.php/produit/produitData");   
                } 

              if($this->input->post("insert"))  
                {  
                     $this->produit1->insert_produit($data);  
                     redirect(base_url() . "index.php/produit/produitData");  
                }

                  

            }  
           $this->load->view("produit/produit_insert",$data);


	
	       // $this->load->view("produit/produit_insert");
	}



       


	/////////////////////////////////////////




	

	

           public function produitdelete(){  
                   $id = $this->uri->segment(3);  
                    $this->load->model("produit1");  
                    $this->produit1->delete_produit($id);  
                  redirect(base_url() . "index.php/produit/produitData");  
                   }  
          


	/////////////////////////////////////////




	

           public function produitupdate(){  

 

                $this->load->model("fournisseur1");
                $this->load->model("produit1");

                $data['fournisseur']=$this->fournisseur1->get_fournisseur();
               

                $data['categories']=$this->produit1->get_categories();
                




           $user_id = $this->uri->segment(3);  
           $this->load->model("produit1");  
           $data["user_data"] = $this->produit1->fetch_single_data($user_id);
           $data["produits"] = $this->produit1->get_produit();   
           $this->load->view("produit/produit_update", $data);  
      }  

}

?>