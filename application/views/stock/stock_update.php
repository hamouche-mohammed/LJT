<html>  
 <head>  
   <title>Insert data stock</title>  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
 </head>  
 <body>  

  <nav class="navbar navbar-inverse">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
           
            <a href="#" class="navbar-brand">LJT</a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('authentification/logout'); ?>">déconnecter</a></li>
            </ul>
             <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('commande/commandeData'); ?>">commandes</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('views/ventes'); ?>">ventes</a></li>
            </ul>
             <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('views/clients'); ?>">client</a></li>
            </ul>
             <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('fournisseur/fournisseurData'); ?>">Founisseur</a></li>
            </ul>
             <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('views/articles'); ?>">articles</a></li>
            </ul>
             <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('stock/stockData'); ?>">stock</a></li>
            </ul>

           
            
        </div>
    </nav>



 <div style="width: 500px;position: absolute; left: 33%;top: 10%"> 
      <br /><br /><br />  
      <h3 align="center">modifier le Stock </h3><br />  
      <form method="post" action="<?php echo base_url()?>index.php/stock/stockinsert">  
           
           <?php  
           if(isset($user_data))  
           {  
                foreach($user_data->result() as $row)  
                {  
           ?>  
           <div class="form-group">  
                <label>numéro étage</label>  
                <input type="text" name="num_étage" value="<?php echo $row->num_étage; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("num_étage"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>numéro article</label>  
                <input type="text" name="num_article" value="<?php echo $row->num_article; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("num_article"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>quantité stock</label>  
                <input type="number" name="quantité_stock" value="<?php echo $row->quantité_stock; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("quantité_stock"); ?></span>  
           </div> 
           <div class="form-group">  
                <input type="hidden" name="hidden_id" value="<?php echo $row->id; ?>" />  
                <input type="submit" name="update" value="modifier" class="btn btn-primary" />  
           </div>       
           <?php       
                }  
           }  
            
           ?>  
           
      </form>  
      <br /><br />  
     
 </div>  
 </body>  
 </html>