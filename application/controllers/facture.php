<?php 


class facture extends CI_CONTROLLER{
  
  public function factureData(){



  $this->load->model("facture1");

  $data["facture"] = $this->facture1->get_facture();

  if($this->input->post("insert_nouveau"))  
                {  
                     
                     redirect(base_url() . "index.php/facture/factureinsert");  
                } 

  $this->load->view("facture/facture",$data);
  }





  /////////////////////////////////////////


   





///////////////////////////////////////



  public function factureinsert(){


       

          
         

 
           $this->load->library('form_validation');  
             
     
            $this->form_validation->set_rules("date_facture","date_facture", 'required'); 
         
            //$this->form_validation->set_rules("montant_facture", "montant_facture", 'required'); 
            $this->form_validation->set_rules("mode_paiement", "mode_paiement", 'required'); 
            $this->form_validation->set_rules("etat", "etat", 'required'); 
            $this->form_validation->set_rules("ref_client", "ref_client", 'required'); 
            $this->form_validation->set_rules("numero_commande", "numero_commande", 'required');

            // $this->form_validation->set_rules("prix_vente", "prix_vente", 'required');

           
       
            


           if($this->form_validation->run()==false)  
           {  

                $this->load->model("client1");
                $this->load->model("commande1");
                $this->load->model("facture1");
                $this->load->model("produit1");


                $data['clients']=$this->client1->get_client();
               

                $data['commande']=$this->commande1->get_commande();

               //  $data['produits']=$this->produit1->get_produit();

                $data['etat_facture']=$this->facture1->get_etat_facture();

                $data['mode_paiement']=$this->facture1->get_mode_paiement();


                $this->load->view("facture/facture_insert",$data);

              }else{

                 
                //true  
                $this->load->model("facture1");  
                $data = array(  
                     "ref_facture"     =>$this->facture1->getid(),  
                     "date_facture"     =>$this->input->post("date_facture"),
                     "montant_facture"     =>"0",
                     "mode_paiement"     =>$this->input->post("mode_paiement"),
                     "etat" =>$this->input->post("etat"),
                    
                     "ref_client"     =>$this->input->post("ref_client"),
                     "numero_commande"     =>$this->input->post("numero_commande")
                    
                       
                ); 





                if($this->input->post("update"))  
                {    



                    $data = array(  
                    
                     "date_facture"     =>$this->input->post("date_facture"),
                     "montant_facture"     =>$this->input->post("montant_facture"),
                     "mode_paiement"     =>$this->input->post("mode_paiement"),
                     "etat" =>$this->input->post("etat"),
                    
                     "ref_client"     =>$this->input->post("ref_client"),
                     "numero_commande"     =>$this->input->post("numero_commande")
                    
                       
                ); 



                     $this->facture1->update_facture($data, $this->input->post("hidden_id"));  
                     redirect(base_url() . "index.php/facture/factureData");   
                } 

                
               if($this->input->post("valider"))  
                {  

                    $this->session->set_flashdata('ref_facture', $this->facture1->getid());


                     $this->facture1->insert_facture($data); 

                     

                     //$this->facture1->insert_ligne_facture($data1);  
                     redirect(base_url() . "index.php/facture/factureedite");  
                }

                  

            }  

             if($this->input->post("retour"))  
                {  
                       
                     redirect(base_url() . "index.php/facture/factureData");   
                } 

          

  
      


  }



       


  /////////////////////////////////////////




  

  

           public function facturedelete(){  
                   $id = $this->uri->segment(3);  
                    $this->load->model("facture1");  
                    $this->facture1->delete_facture($id);  
                  redirect(base_url() . "index.php/facture/factureData");  
                   }  
          


  /////////////////////////////////////////




  

           public function factureupdate(){  


 
               $this->load->model("client1");
                $this->load->model("commande1");
                $this->load->model("facture1");


                $data['clients']=$this->client1->get_client();
               

                $data['commande']=$this->commande1->get_commande();

                $data['etat_facture']=$this->facture1->get_etat_facture();

                $data['mode_paiement']=$this->facture1->get_mode_paiement();
                




           $user_id = $this->uri->segment(3);  
           $this->load->model("facture1");  
           $data["user_data"] = $this->facture1->fetch_single_data($user_id);
           $data["facture"] = $this->facture1->get_facture();   
           $this->load->view("facture/facture_update", $data);  
      }  


           public function facturdetaille(){
           
           $id = $this->uri->segment(3);

           $this->load->model("facture1");  

           $data["ligne_facture"] = $this->facture1->get_detaille($id); 

           $this->load->view("facture/facturedetaille", $data);  
      }  



      public function factureedite(){





              $this->load->library('form_validation');  
             
     
            $this->form_validation->set_rules("date_facture","date_facture", 'required'); 
            $this->form_validation->set_rules("ref_client", "ref_client", 'required'); 
            $this->form_validation->set_rules("numero_commande", "numero_commande", 'required');
            $this->form_validation->set_rules("mode_paiement", "mode_paiement", 'required'); 
             $this->form_validation->set_rules("etat", "etat", 'required'); 
           


            $this->form_validation->set_rules("prix_vente", "prix_vente", 'required');
            $this->form_validation->set_rules("qté_produit", "qté_produit", 'required');
            $this->form_validation->set_rules("ref_produit", "ref_produit", 'required');
            $this->form_validation->set_rules("montant_facture", "montant_facture", 'required'); 







           if($this->form_validation->run()==false)  
           { 



                $this->load->model("client1");
                $this->load->model("commande1");
                $this->load->model("facture1");
                $this->load->model("produit1");


                $data['clients']=$this->client1->get_client();
               

                $data['commande']=$this->commande1->get_commande();

               $data['produits']=$this->produit1->get_produit();

                $data['etat_facture']=$this->facture1->get_etat_facture();

                $data['mode_paiement']=$this->facture1->get_mode_paiement();


 

   
        //$ref_facture = $this->session->flashdata('ref_facture');
              
      
          $this->load->model("facture1");

           $data["facturex"] = $this->facture1->get_factureByRef();


           $this->load->view("facture/facture_edit",$data);  






                }else{
           


               

                  $data = array(  
                       
                     "date_facture"     =>$this->input->post("date_facture"),
                     "montant_facture"     =>$this->input->post("montant_facture"),
                     "mode_paiement"     =>$this->input->post("mode_paiement"),
                     "etat" =>$this->input->post("etat"),
                    
                     "ref_client"     =>$this->input->post("ref_client"),
                     "numero_commande"     =>$this->input->post("numero_commande")
                    
                       
                ); 
                        

                $query = $this->db->get('facture');

                 foreach( $query->result() as $row)  
                   {
 
                    $ref=$row->ref_facture;
                    }

                 
 
                $data1 = array(  
 

                     "qté_produit"     =>$this->input->post("qté_produit"),
                     "ref_facture"     =>$ref,  
                     "ref_produit"     =>$this->input->post("ref_produit"),
                     "prix_vente"     =>$this->input->post("prix_vente")
                       
                );  
                   if($this->input->post("insert_ligne_facture")){


                    $this->load->model("facture1");

                    $this->facture1->update_facture($data, $ref); 

                    $this->facture1->insert_ligne_facture($data1); 

                       
                     
                    redirect(base_url() . "index.php/facture/facturedata"); 
                }

       if($this->input->post("ajouter_ligne_facture")){



                $this->load->model("facture1");


                $this->facture1->update_facture($data, $ref); 
 
                $this->facture1->insert_ligne_facture($data1); 


        


                $this->load->model("client1");
                $this->load->model("commande1");
                $this->load->model("facture1");
                $this->load->model("produit1");


                $data['clients']=$this->client1->get_client();
               

                $data['commande']=$this->commande1->get_commande();

               $data['produits']=$this->produit1->get_produit();

                $data['etat_facture']=$this->facture1->get_etat_facture();

                $data['mode_paiement']=$this->facture1->get_mode_paiement();

                 $data["facturex"] = $this->facture1->get_factureByRef();


 

   
        //$ref_facture = $this->session->flashdata('ref_facture');
              
      
          

                     

           $this->load->view("facture/facture_edit",$data); 


                } 
       
           }

   }



}

?>
