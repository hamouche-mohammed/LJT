<?php
$str = "CLT000";


$query = $this->db->get('clients');

if($query->result()){

foreach ($query->result() as $row) {

  $id_four = $row->ref_client;
  $last_four = explode("000", $id_four);
 /* print_r (explode("r",$id_four));*/
 /* echo  $last_four[1];*/
  $last_four[1]++;

  $id = $str.$last_four[1];

               }

}else{
  
    $id = "CLT0001";
}

?>
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
                <li><a href="<?php echo site_url('client/client'); ?>">client</a></li>
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



 <div style="width: 500px;position: absolute; left: 31%;top: 10%"> 
      <br /><br /><br />  
      <h3 align="center">Entrer nouveau client </h3><br />  
      <form method="post" action="<?php echo base_url()?>index.php/client/clientinsert">  
           <div class="form-group">  
                <label>référence </label>  
                <input type="text" disabled="disabled" name="ref_client" class="form-control" placeholder="<?php  echo $id ?>" />  
                <span class="text-danger"><?php echo form_error("ref_client"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>nom</label>  
                <input type="text" name="nom" class="form-control" />  
                <span class="text-danger"><?php echo form_error("nom"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>prenom</label>  
                <input type="text"  name="prenom" class="form-control" />  
                <span class="text-danger"><?php echo form_error("prenom"); ?></span>  
           </div> 
            <div class="form-group">  
                <label>email</label>  
                <input type="email"  name="mail" class="form-control" />  
                <span class="text-danger"><?php echo form_error("mail"); ?></span>  
           </div> 
            <div class="form-group">  
                <label>téléphone</label>  
                <input type="number"  name="telephone" class="form-control" />  
                <span class="text-danger"><?php echo form_error("telephone"); ?></span>  
           </div> 
            <div class="form-group">  
                <label>adresse</label>  
                <input type="text"  name="adresse" class="form-control" />  
                <span class="text-danger"><?php echo form_error("adresse"); ?></span>  
           </div> 
            <div class="form-group">  
                <label>ville</label>  
                <input type="text"  name="nom_ville" class="form-control" />  
                <span class="text-danger"><?php echo form_error("nom_ville"); ?></span>  
           </div> 
            <div class="form-group">  
                <label>status</label>  
                <input type="number"  name="status" class="form-control" />  
                <span class="text-danger"><?php echo form_error("status"); ?></span>  
           </div> 
           
           <div class="form-group">  
                <label>genre</label>  
                <input type="text"  name="gender" class="form-control" />  
                <span class="text-danger"><?php echo form_error("gender"); ?></span>  
           </div> 

           <div class="form-group">  
                <input type="submit" name="insert" value="Inserer" class="btn btn-primary" />  
           </div>       
           
      </form>  
      <br /><br />  
     
 </div>  
 </body>  
 </html>