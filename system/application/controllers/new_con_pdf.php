<?php
class new_con_pdf extends CI_Controller{

    public function index(){
        $this->load->view('pdf_welcome');
        
        #$this->load->view('pdf_exemple');
        
        
      
    }
    public function testpdf(){
        $this->load->library('pdf');
       
       $html="<h1>HAMOUCHE</h1><strong><p>Bonjours tous le monde</p></strong>";

       $this->dompdf->loadHtml($html);
       
       $output=$this->dompdf->output();
        file_put_contents('test.pdf',$output);
        $this->dompdf->stream();
    }
}