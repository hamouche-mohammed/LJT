<?php

class nav extends CI_CONTROLLER{

	public function nav1(){
        
        $this->load->view('add\nav');
        
         
          }

          public function footer(){
        
           $this->load->view('add\footer');
         
          }
}