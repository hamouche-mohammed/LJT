<?php

class views extends CI_CONTROLLER{

	public function clients(){



     $this->load->view('clients');

   }

  
   public function facture(){

     $this->load->view('facture');

   }

   

  
   public function BonLivraison(){

     $this->load->view('BonLivraison');

   }

      public function ventes(){

     $this->load->view('ventes');

   }


    public function articles(){

     $this->load->view('articles');

   }

}

?>