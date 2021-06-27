<html>  
 <head>  
   <title>Insert data stock</title>  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
   <link href="<?php echo base_url ();?>assets/css/bootstrap.min.css" rel="stylesheet">
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
      <h3 align="center">modifier facture </h3><br />  
      <form method="post" action="<?php echo base_url()?>index.php/facture/factureinsert">  
           
           <?php  
           if(isset($user_data))  
           {  
                foreach($user_data->result() as $row)  
                {  
           ?>  
           
        <div class="form-group">  
                <label>référence </label>  
                <input type="text" disabled="disabled" name="ref_facture" value="<?php echo $row->ref_facture; ?>" class="form-control"  />  
                <span class="text-danger"><?php echo form_error("ref_facture"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>date</label>  
                <input type="date" name="date_facture" value="<?php echo $row->date_facture; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("date_facture"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>montant</label>  
                <input type="number"  name="montant_facture"  value="<?php echo $row->montant_facture; ?>" class="form-control" />  
                <span class="text-danger"><?php echo form_error("montant_facture"); ?></span>  
           </div> 
           


         



         <div class="form-group">
        <label for="mode_paiement">mode paiement</label><br />
        <select class="form-control"  name="mode_paiement" type="text">
          <option  value="<?php  echo $row->mode_paiement ;?>"><?php echo $row->mode_paiement ;?></option>
        <?php foreach($mode_paiement as $fr) : ?>
            <option  value="<?php  echo $fr->mode;?>"><?php echo $fr->mode;?></option>
            <?php endforeach;?>
        </select>
        </div>



      

           <div class="form-group">
        <label for="etat">etat facture</label><br />
        <select class="form-control"  name="etat" type="text">
          <option  value="<?php  echo $row->etat;?>"><?php echo $row->etat;?></option>
        <?php foreach($etat_facture as $fr) : ?>
            <option  value="<?php  echo $fr->etat;?>"><?php echo $fr->etat;?></option>
            <?php endforeach;?>
        </select>
        </div>


         


          
            <div class="form-group">
        <label for="ref_client">client</label><br />
        <select class="form-control"  name="ref_client" type="text">
          <?php foreach($clients as $fr){ if ($fr->ref_client==$row->ref_client){ ?>
            <option  value="<?php  echo $fr->ref_client;?>"><?php echo $fr->nom;?></option>
            <?php }}?>
        <?php foreach($clients as $fr) : ?>
            <option  value="<?php  echo $fr->ref_client;?>"><?php echo $fr->nom;?></option>
            <?php endforeach;?>
        </select>
        </div>
            
        <div class="form-group">
        
        <label for="numero_commande">référence commande</label><br />

        <select class="form-control"  name="numero_commande" type="text">
           <option  value="<?php  echo $row->numero_commande;?>"><?php echo $row->numero_commande;?></option>
        <?php foreach($commande as $fr) : ?>
            <option  value="<?php  echo $fr->numero_commande;?>"><?php echo $fr->numero_commande;?></option>
            <?php endforeach;?>
        </select>
        </div>


        
           <div class="form-group">
                 <input type="hidden" name="hidden_id" value="<?php echo $row->ref_facture; ?>" />  
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