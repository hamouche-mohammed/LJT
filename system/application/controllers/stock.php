<?php

class Stock extends CI_CONTROLLER{

	public function stockData(){



	$this->load->model("stock1");

	$data["stock"] = $this->stock1->get_stock();

	if($this->input->post("insert_nouveau"))  
                {  
                     
                     redirect(base_url() . "index.php/stock/stockinsert");  
                } 

	$this->load->view("stock/stock",$data);
	}





	/////////////////////////////////////////






	public function stockinsert(){

 
           $this->load->library('form_validation');  
           $this->form_validation->set_rules("num_étage", "Num_étage", 'required');  
           $this->form_validation->set_rules("num_article", "Num_article", 'required'); 
           $this->form_validation->set_rules("quantité_stock", "Quantité_stock", 'required'); 


           if($this->form_validation->run())  
           {  
                //true  
                $this->load->model("stock1");  
                $data = array(  
                     "num_étage"     =>$this->input->post("num_étage"),  
                     "num_article"          =>$this->input->post("num_article"),
                     "quantité_stock"          =>$this->input->post("quantité_stock")  
                );   

                if($this->input->post("update"))  
                {  
                     $this->stock1->update_stock($data, $this->input->post("hidden_id"));  
                     redirect(base_url() . "index.php/stock/stockData");   
                } 

              if($this->input->post("insert"))  
                {  
                     $this->stock1->insert_stock($data);  
                     redirect(base_url() . "index.php/stock/stockData");  
                }

                  

            }  
          /*    else  
           {  
                //false  
                $this->stockData();  
           }   */


	
	        $this->load->view("stock/stock_insert");
	}




	/////////////////////////////////////////



	

           public function stockdelete(){  
                   $id = $this->uri->segment(3);  
                    $this->load->model("stock1");  
                    $this->stock1->delete_stock($id);  
                  redirect(base_url() . "index.php/stock/stockData");  
                   }  
          


	/////////////////////////////////////////




	

           public function stockupdate(){  
           $user_id = $this->uri->segment(3);  
           $this->load->model("stock1");  
           $data["user_data"] = $this->stock1->fetch_single_data($user_id);
           $data["stock"] = $this->stock1->get_stock();   
           $this->load->view("stock/stock_update", $data);  
      }  

}