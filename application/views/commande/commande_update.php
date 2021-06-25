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
                <li><a href="<?php echo site_url('facture/factureData'); ?>">facture</a></li>
            </ul>
             <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('commande/commandeData'); ?>">commandes</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('views/ventes'); ?>">ventes</a></li>
            </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('client/clientData'); ?>">client</a></li>
            </ul>
             <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('fournisseur/fournisseurData'); ?>">Founisseur</a></li>
            </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('produit/produitData'); ?>">produits</a></li>
            </ul>
             <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('stock/stockData'); ?>">stock</a></li>
            </ul>

           
            
        </div>
    </nav>



 <div style="width: 500px;position: absolute; left: 33%;top: 10%"> 
      <br /><br /><br />  
      <h3 align="center">modifier commande </h3><br />  
      <form method="post" action="<?php echo base_url()?>index.php/commande/commandeinsert">  
           
           <?php  
           if(isset($user_data))  
           {  
                foreach($user_data->result() as $row)  
                {  
           ?>  
           <div class="form-group">  
                <label>numéro commande</label>  
                <input type="text" disabled="disabled"name="numero_commande" value="<?php echo $row->numero_commande; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("numero_commande"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>date</label>  
                <input type="date" name="date_commande" value="<?php echo $row->date_commande; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("date_commande"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>total</label>  
                <input type="number" name="total_commande" value="<?php echo $row->total_commande; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("total_commande"); ?></span>  
           </div> 
           <div class="form-group">  
                <input type="hidden" name="hidden_id" value="<?php echo $row->numero_commande; ?>" />  
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