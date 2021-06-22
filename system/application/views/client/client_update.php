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
                <li><a href="<?php echo site_url('client/clientData'); ?>">client</a></li>
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
      <h3 align="center">modifier commande </h3><br />  
      <form method="post" action="<?php echo base_url()?>index.php/client/clientinsert">  
           
           <?php  
           if(isset($user_data))  
           {  
                foreach($user_data->result() as $row)  
                {  
           ?>  
           
        <div class="form-group">  
                <label>référence </label>  
                <input type="text" disabled="disabled" name="ref_client" value="<?php echo $row->ref_client; ?>" class="form-control"  />  
                <span class="text-danger"><?php echo form_error("ref_client"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>nom</label>  
                <input type="text" name="nom" value="<?php echo $row->nom; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("nom"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>prenom</label>  
                <input type="text"  name="prenom"  value="<?php echo $row->prenom; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("prenom"); ?></span>  
           </div> 
            <div class="form-group">  
                <label>email</label>  
                <input type="email"  name="mail" value="<?php echo $row->mail; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("mail"); ?></span>  
           </div> 
            <div class="form-group">  
                <label>téléphone</label>  
                <input type="number"  name="telephone"  value="<?php echo $row->telephone; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("telephone"); ?></span>  
           </div> 
            <div class="form-group">  
                <label>adresse</label>  
                <input type="text"  name="adresse" value="<?php echo $row->adresse; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("adresse"); ?></span>  
           </div> 
            <div class="form-group">  
                <label>ville</label>  
                <input type="text"  name="nom_ville" value="<?php echo $row->nom_ville; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("nom_ville"); ?></span>  
           </div> 
            <div class="form-group">  
                <label>status</label>  
                <input type="number"  name="status" value="<?php echo $row->status; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("status"); ?></span>  
           </div> 
           
           <div class="form-group">  
                <label>genre</label>  
                <input type="text"  name="gender" value="<?php echo $row->gender; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("gender"); ?></span>  
           </div> 

           <div class="form-group">  
                <input type="submit" name="insert" value="Inserer" class="btn btn-primary" />  
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