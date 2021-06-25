<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Page d'inscription</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url ();?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url ();?>assets/css/pop-up.css" rel="stylesheet">
    
    


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body background="">


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

    <h1 align="center" style="color:red">Les factures</h1>




 <div style="width: 600px;position: absolute; left: 27%;top: 30%">


      
    <table border="2" class="table table-striped table-hover">

      <tr> <th>N° ligne</th><th>produit</th><th>QTE</th><th>reference facture</th>

          <?php  
                foreach( $ligne_facture as $row)  
                {  
           ?>  
                <tr>  
                     <td><?php echo $row->id ; }?></td>  
                     <td><?php                       


                                                     $x=$row->ref_produit; 
                                                     $this->db->select('*');
                                                     $this->db->from('produits');
                                                     $this->db->where('reference',$x);
                                                     $query=$this->db->get();
                                                     $query->result(); 
                                                     foreach( $query->result() as $row){
                                                      echo $row->nom_produit;
                                                     } 

                                                     ?>
                                                       


                                                     </td>
                     <td><?php  foreach( $ligne_facture as $row){  
                      echo $row->qté_produit ?></td>
                      <td><?php echo $row->ref_facture ; ?></td> 
                     
                </tr>  


                <?php  
               }
           ?>



     </table>
    

     </form> 



    </div>









 <!--<script>  
      $(document).ready(function(){  
           $('.produitdelete').click(function(){  
                var id = $(this).attr("id");  
                if(confirm("Voulez-vous vraiment supprimer ce champ ?"))  
                {  
                     window.location="<?php echo base_url(); ?>index.php/produit/produitdelete/"+id;  
                }  
                else  
                {  
                     return false;  
                }  
           });  
      });  
      </script> -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url ();?>assets/css/bootstrap.min.js"></script>
    <script src=”assets/js/index.js”></script>
  </body>
</html>