<?php

 $str = "FACT000";


$query = $this->db->get('facture');

if($query->result()){

foreach ($query->result() as $row) {

  $id_four = $row->ref_facture;
  $last_four = explode("000", $id_four);
 /* print_r (explode("r",$id_four));*/
 /* echo  $last_four[1];*/
  $x=$last_four[1]+1;

  $id1 = $str.$last_four[1];

  $id = $str.$x;

               }

}else{
  
    $id = "FACT0001";
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


<div style="width: 500px;position: absolute; left: 30%;top: 2%"> 
      <br /><br /><br />  
      <h3 align="center">Creer nouvelle facture </h3><br />  

       </div>  

  

          <form method="post" action="<?php echo base_url()?>index.php/facture/factureinsert">

          <div style="position: absolute;left: 10%;top:30%;background-color: red;">  
           
          
           <div style="width: 300px;position: absolute;">
           <div class="form-group">  
                <label>référence </label>  
                <input type="text" disabled="disabled" name="ref_facture"  class="form-control" placeholder="<?php  echo $id ?>" />  
                <span class="text-danger"><?php echo form_error("ref_facture"); ?></span>  
           </div>  
           <div class="form-group">  
                <label>date</label>  
                <input type="date" name="date_facture"  class="form-control" />  
                <span class="text-danger"><?php echo form_error("date_facture"); ?></span>  
           </div>  
           

           </div>
           

         
         <div style="width: 300px;position: absolute;left: 350px">

          
            <div class="form-group">
        <label for="ref_client">client</label><br />
        <select class="form-control"  name="ref_client" type="text">
        <?php foreach($clients as $fr) : ?>
            <option  value="<?php  echo $fr->ref_client;?>"><?php echo $fr->nom;?></option>
            <?php endforeach;?>
        </select>
        </div>
            
        <div class="form-group">
        
        <label for="numero_commande">référence commande</label><br />
        <select class="form-control"  name="numero_commande" type="text">
        <?php foreach($commande as $fr) : ?>
            <option  value="<?php  echo $fr->numero_commande;?>"><?php echo $fr->numero_commande;?></option>
            <?php endforeach;?>
        </select>
        </div>

        </div>



         
         <div style="width: 300px;position: absolute;left: 700px">


         <div class="form-group">
        <label for="mode_paiement">mode paiement</label><br />
        <select class="form-control"  name="mode_paiement" type="text">
        <?php foreach($mode_paiement as $fr) : ?>
            <option  value="<?php  echo $fr->mode;?>"><?php echo $fr->mode;?></option>
            <?php endforeach;?>
        </select>
        </div>



      

           <div class="form-group">
        <label for="etat">etat facture</label><br />
        <select class="form-control"  name="etat" type="text">
        <?php foreach($etat_facture as $fr) : ?>
            <option  value="<?php  echo $fr->etat;?>"><?php echo $fr->etat;?></option>
            <?php endforeach;?>
        </select>

        </div>
      </div>

         <div style="width: 300px;position: absolute;top: 200px">





           <div class="form-group" style="position: absolute;left:430px;" >  
                <input type="submit" name="valider" value="Valider" class="btn btn-primary" /> 
                <input style="position: absolute;float: right;margin-left: 10px;" type="submit" name="retour" value="Retour" class="btn btn-primary" />  
           </div>      
                 




        </div>


      </div>

                  
          
           
      </form>  
      <br /><br /> 

    <!--  <div style="width: auto;position: absolute; left: 19%;top: 130%">


      
    <table border="2" class="table table-striped table-hover">

      <tr> <th>référence</th> <th>date</th><th>montant</th><th>mode paiement</th><th>etat</th><th>client</th><th>commande</th><th>détaille</th><th>modifier</th></tr>


          <?php  
                foreach( $facture as $row)if($row->ref_facture == $id1)  
                {  
           ?>  
                <tr>  
                     <td><?php echo $row->ref_facture;$x = $row->ref_facture ; ?></td>  
                     <td><?php echo $row->date_facture; ?></td>
                     <td><?php echo $row->montant_facture." DH"; ?></td>
                      <td><?php echo $row->mode_paiement; ?></td> 
                      <td><?php echo $row->etat; ?></td> 
                     <td><?php echo $row->ref_client; ?></td>  
                     <td><?php echo $row->numero_commande; ?></td>

                      <td><a href="<?php echo base_url(); ?>index.php/facture/facturdetaille/<?php echo $row->ref_facture; ?>">détaille</td>
                     
                     <td><a href="<?php echo base_url(); ?>index.php/facture/factureupdate/<?php echo $row->ref_facture; ?>">modifier</a></td>  
                     
                </tr>  


                <?php  
               }
           ?>



     </table>
    <form method="post" action=""> -->

      

    
     
     
 
 </body>  
 </html>