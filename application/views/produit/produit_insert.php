<?php

     $str = "PRT000";


$query = $this->db->get('produits');

if($query->result()){

foreach ($query->result() as $row) {

  $id_four = $row->reference;
  $last_four = explode("000", $id_four);
 /* print_r (explode("r",$id_four));*/
 /* echo  $last_four[1];*/
  $last_four[1]++;

  $id = $str.$last_four[1];

               }

}else{
  
    $id = "PRT0001";
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
      <h3 align="center">Entrer nouveau produit </h3><br />  
      <form method="post" action="<?php echo base_url()?>index.php/produit/produitinsert">  
           
           <div class="form-group">  
                <label>référence </label>  
                <input type="text" disabled="disabled" name="reference" class="form-control" placeholder="<?php  echo $id ?>"  />  
                <span class="text-danger"><?php echo form_error("reference"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>nom</label>  
                <input type="text" name="nom_produit" class="form-control" />  
                <span class="text-danger"><?php echo form_error("nom_produit"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>prix</label>  
                <input type="number"  name="prix"  class="form-control" />  
                <span class="text-danger"><?php echo form_error("prix"); ?></span>  
           </div> 
            <div class="form-group">  
                <label>quantité</label>  
                <input type="number"  name="quantite"  class="form-control" />  
                <span class="text-danger"><?php echo form_error("quantite"); ?></span>  
           </div> 
            <div class="form-group">  
                <label>date de creation</label>  
                <input type="date"  name="created_date"  class="form-control" />  
                <span class="text-danger"><?php echo form_error("created_date"); ?></span>  
           </div> 
            
           <div class="form-group">
        
        <label for="category_id">catégorie</label><br />
        <select class="form-control"  name="category_id" type="text">
        <?php foreach($categories as $fr) : ?>
            <option  value="<?php  echo $fr->id;?>"><?php echo $fr->name;?></option>
            <?php endforeach;?>
        </select>
        </div>
            
           <div class="form-group">
        
        <label for="ref_fournisseur">nom_fournisseur</label><br />
        <select class="form-control"  name="ref_fournisseur" type="text">
        <?php foreach($fournisseur as $fr) : ?>
            <option  value="<?php  echo $fr->ref_fournisseur;?>"><?php echo $fr->nom_fournisseur;?></option>
            <?php endforeach;?>
        </select>
        </div>
            
           <div class="form-group">  
                <input type="submit" name="insert" value="Inserer" class="btn btn-primary" />  
           </div>       
      </form>  
      <br /><br />  
     
 </div>  
 </body>  
 </html>