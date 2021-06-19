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
      <form method="post" action="<?php echo base_url()?>index.php/fournisseur/fournisseurinsert">  
           
           <?php  
           if(isset($user_data))  
           {  
                foreach($user_data->result() as $row)  
                {  
           ?>  
          

           <div class="form-group">  
                <label>référence</label>  
                <input type="text" name="ref_fournisseur" value="<?php echo $row->ref_fournisseur; ?>"class="form-control" />  
                <span class="text-danger"><?php echo form_error("ref_fournisseur"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>nom</label>  
                <input type="text" name="nom_fournisseur" value="<?php echo $row->nom_fournisseur; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("num_article"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>adresse</label>  
                <input type="text" name="adresse_fournisseur" value="<?php echo $row->adresse_fournisseur; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("adresse_fournisseur"); ?></span>  
           </div>
           <div class="form-group">  
                <label>téléphone</label>  
                <input type="number" name="tel_fournisseur" value="<?php echo $row->tel_fournisseur; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("tel_fournisseur"); ?></span>  
           </div>  
           <div class="form-group">  
                <input type="hidden" name="hidden_id" value="<?php echo $row->ref_fournisseur; ?>" />  
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