
<?php  

foreach($facturex as $row)  
                { $x = $row->ref_facture; } 


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="<?php echo base_url();?>assets/js/icons.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/bootstrap.css">
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="<?php base_url(); ?>assets/css/bootstrap.css">
    <style type="text/css">
 body{
         background-repeat: no-repeat;
         height: 100%;
         background-position: center;
         background-size: cover;
         background-size: fixed
       
    


   }
     .btn{
         margin-top: 40px;
         margin-bottom: 150px;
     }
     input#file-input{
       display : none;
       margin-top: 100px;
       margin-bottom: 350px;
       width:800px;
       height:1000px;
     }
     input#file-input + label{
       background-color:#0066ff;
       padding:8px;
       color:#fff;
       border:2px solid #9ec3ff;
       border-radius:9px;
       margin-left:20px;
    
     }
     input#file-input + label:hover{
       background-color:#3b73ce;
       border-color:#729fe7;
       cursor:pointer;

     } 
.blue {
background:#2abdfc;
color: #fff;
}    
.navbar {
padding: 10px 10%;
}
#logo {
display: inline-block;
margin-top: 7px;
color: #fff;
}
#link {
  color: #fff;
  font-weight: bold;
  margin: 0 10px;
}

i { margin: 0 7px; }
#sidebarCollapse {
  color: #fff;
  background: transparent;
  outline: none;
  margin: 0 20px;
}
#sidebarCollapse:hover {
  color: #2abdfc;
  background: #fff;
  outline: none;
}
.wrapper {
  display: flex;
  width: 100%;
  height:auto;
  align-items: stretch;
}.wrapper {
  display: flex;
  width: 100%;
  align-items: stretch;
}#sidebar {
    min-width: 250px;
    max-width: 250px;
    margin-top: 70px;
    background: #6a76f8;
    color: #fff;
    transition: all 0.3s;
}
#sidebar.active{
  margin-left: -250px;
}

#sidebar .sidebar-header{
  padding: 20px;
  background: #6a76f8;
}
#sidebar ul.components{
  padding: 20px 0px;
}

#sidebar ul p{
  padding: 10px;
  font-size: 1.1em;
  display: block;
}

#sidebar ul li a{
  padding: 10px 10px 10px 20px;
  font-size: 1.1em;
  display: block;
    color: #fff;
    font-weight: bold;
}
#sidebar ul li a:hover {
    color: #6240bd;
    background: #fff;
    text-decoration: none;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #8a5fff;
}
a[data-toggle="collapse"] {
    position: relative;
}
.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

#content {
    width: 100%;
    padding: 40px;
    min-height: 100vh;
    transition: all 0.3s;
    margin-top: 70px;
}
@media (max-width:800px) {
  #sidebar {
    margin-left: -250px;}
  #sidebar.active{
  margin-left: 0px;
  }
  #sidebarCollapse span{
  display: none;
  }
  .card {
    width:100%;
  }
}
@media (max-width:400px) {
  #sidebar {
    margin-top: -20px;
  }
  #logo {
    display: none;
  }
}
body, html {
  height:100%;
}

/*
 * Off Canvas sidebar at medium breakpoint
 * --------------------------------------------------
 */
@media screen and (max-width: 992px) {

  .row-offcanvas {
    position: relative;
    -webkit-transition: all 0.25s ease-out;
    -moz-transition: all 0.25s ease-out;
    transition: all 0.25s ease-out;
  }

  .row-offcanvas-left
  .sidebar-offcanvas {
    left: -33%;
  }

  .row-offcanvas-left.active {
    left: 33%;
    margin-left: -6px;
  }

  .sidebar-offcanvas {
    position: absolute;
    top: 0;
    width: 33%;
    height: 100%;
  }
}

/*
 * Off Canvas wider at sm breakpoint
 * --------------------------------------------------
 */
@media screen and (max-width: 34em) {
  .row-offcanvas-left
  .sidebar-offcanvas {
    left: -45%;
  }

  .row-offcanvas-left.active {
    left: 45%;
    margin-left: -6px;
  }
  
  .sidebar-offcanvas {
    width: 45%;
  }
}

.card {
    overflow:hidden;
}

.card-body .rotate {
    z-index: 8;
    float: right;
    height: 100%;
}

.card-body .rotate i {
    color: rgba(20, 20, 20, 0.15);
    position: absolute;
    left: 0;
    left: auto;
    right: -10px;
    bottom: 0;
    display: block;
    -webkit-transform: rotate(-44deg);
    -moz-transform: rotate(-44deg);
    -o-transform: rotate(-44deg);
    -ms-transform: rotate(-44deg);
    transform: rotate(-44deg);
}




    </style>
  </head>
  <body>
  
  <nav class="navbar navbar-expand-lg navbar-light blue fixed-top" style="background-color: black">
   <div class="container-fluid">
    <button id="sidebarCollapse" class="btn navbar-btn" >
        <i class="fas fa-lg fa-bars"></i>
    </button>
    <a class="navbar-brand"  href="">
    <h3 id="logo">Gestion</h3>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <li class="nav-item active">
           <a class="nav-link" id="link" href="<?php echo site_url('authentification/logout'); ?>">
              <i class="fas fa-sign-out-alt"></i>
          Déconnecté<span class="sr-only">(current) </span></a>
        </li>
        
      </ul>
    </div>
</nav>
<div class="wrapper fixed-left" style="">
    <nav id="sidebar" style="background-color: #708090" >
      <div class="sidebar-header" style="background-color: #708090">
      <h4><i class="fas fa-user"></i>Admin</h4>
      </div>

      <ul class="list-unstyled components">
     <li>
        <a href="<?php echo site_url('profile_con/profile_admin'); ?> "><i class="fas fa-home" style="color:black" ></i>Accueil</a>
        </li>
        <li>
              <a href="<?php echo site_url('client/clientData'); ?>"><i class="fas fa-users" style="color:black" ></i>Clients</a>
        </li>
        <li>
              <a href="<?php echo site_url('produit/produitData'); ?>"><i class="fab fa-product-hunt" style="color:black" ></i>Produits</a>
        </li>

        <li>
              <a href="<?php echo site_url('commande/commandeData'); ?>"><i class="fab fa-cuttlefish" style="color:black" ></i>Commande</a>
        </li>

         <li>
              <a href="<?php echo site_url('facture/factureData'); ?>"><i class="fas fa-file-invoice" style="color:black" ></i>Facture</a>
        </li>
        
        <li>
              <a href="<?php echo site_url('stock/stockData'); ?>"><i class="fas fa-shopping-cart" style="color:black" ></i>Stock</a>
        </li>
        
        
        
        <li>
        <a href="<?php echo site_url('fournisseur/fournisseurData'); ?>" ><img src="https://img.icons8.com/ios/50/000000/supplier.png" style=" height: 25px;width: 30px;margin: auto background-color:white;">&nbsp;Fournisseurs</a>
        </li>
      
        <?php   $y=$_SESSION['udser_id'];
                $this->db->select('type_user');
                $this->db->from('user_form');

                $this->db->where('udser_id',$y);
                $query=$this->db->get();

                foreach ($query->result() as $row) {
                 $x=$row->type_user;
                }
                
                if( $x=="admin"){ ?>
      
        <li>
        <a  href="<?php echo site_url('utilisateur/utilisateurData'); ?>"><img src="https://img.icons8.com/small/50/000000/command.png" style=" height: 25px;width: 25px;margin: auto background-color:white;">&nbsp;Utilisateur</a>
        </li>
      <?php } ?>
       
       
      </ul>
    </nav>
  

<div class="container">



 <div class="row">
        <div class="text-right">
          <div class="col-lg-12"><center><h1> Liste Clients</h1></center></div></div>
          <br /> 
</div>    

 <hr>
 <div class="row">
        <div class="text-right">
          <div class="col-lg-12"><center><h1>Facture N°<?php  echo $x;  ?></h1></center></div></div>
          
</div>

  
 <div>

          <form method="post" action="<?php echo base_url()?>index.php/facture/factureedite"><br/><br/>

         

    <div style="margin: auto; width: 90%;
                     position: relative; 
                      display: flex;   
                       flex-direction: row;     
                       flex-wrap: nowrap;      
                      justify-content: space-between; 
                      background-color: none;">  
           
          
        <div style="width: 300px;">

            <?php  
            
                foreach($facturex as $row)  
                {  
           ?> 

             <div class="form-group">  
                <label>Référence </label>  
                <input type="text" disabled="disabled" name="ref_facture"  class="form-control" value="<?php  echo $row->ref_facture;  ?>" />  
                <span class="text-danger"><?php echo form_error("ref_facture"); ?></span>  
             </div>  


           
             <div class="form-group">  
                <label>Date</label>  
                <input type="date" name="date_facture"  class="form-control" value="<?php  echo $row->date_facture; ?>"/>  
                <span class="text-danger"><?php echo form_error("date_facture"); ?></span>  
             </div> 

          

        </div>
           

         
         <div style="width: 300px;">

          
            <div class="form-group">

                   <label for="ref_client">Client</label><br />
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
        
                     <label for="numero_commande">Référence commande</label><br />

                     <select class="form-control"  name="numero_commande" type="text">
                        <option  value="<?php  echo $row->numero_commande;?>"><?php echo $row->numero_commande;?></option>
                     <?php foreach($commande as $fr) : ?>
                         <option  value="<?php  echo $fr->numero_commande;?>"><?php echo $fr->numero_commande;?></option>
                         <?php endforeach;?>
                     </select>
              </div>


           </div>



         
            <div style="width: 300px;">


                 <div class="form-group">
                     <label for="mode_paiement">Mode paiement</label><br />
                     <select class="form-control"  name="mode_paiement" type="text">
                       <option  value="<?php  echo $row->mode_paiement ;?>"><?php echo $row->mode_paiement ;?></option>
                     <?php foreach($mode_paiement as $fr) : ?>
                         <option  value="<?php  echo $fr->mode;?>"><?php echo $fr->mode;?></option>
                         <?php endforeach;?>
                         </select>
                 </div>




      
                 <div class="form-group">
                         <label for="etat">Etat facture</label><br />
                        <select class="form-control"  name="etat" type="text">
                         <option  value="<?php  echo $row->etat;?>"><?php echo $row->etat;?></option>
                         <?php foreach($etat_facture as $fr) : ?>
                          <option  value="<?php  echo $fr->etat;?>"><?php echo $fr->etat;?></option>
                          <?php endforeach;?>
                           </select>
                 </div>


           </div>

    </div>

    <div >

      <br /><br /><br />  
      <center><h1 >Details Facture </h1></center><br />


    </div>


     <div style="
                     position: relative;
                     
                    display: flex;   
                    flex-direction: row;     
                    flex-wrap: nowrap;      
                   justify-content: space-between; 
                    background-color: none;
                    border: 2px ;margin: auto;
                       width: 80%;">




            <div class="form-group" style="width: 200px">
                <label for="ref_produit">produit</label><br />
                 <select class="form-control"  name="ref_produit" type="text" required>

                   <option value="">Choisissez un produit</option>
                 <?php foreach($produits as $fr) : ?>

                   <option  value="<?php  echo $fr->reference;?>"><?php echo $fr->nom_produit;?></option>
                   <?php endforeach;?>
                 </select>
            </div>

 
            <div class="form-group" style="width: 200px">   
                <label>Prix vente</label>  
                <input  type="number"   step="0.01" name="prix_vente"  class="form-control" />  
                <span class="text-danger"><?php echo form_error("prix_vente"); ?></span>  
            </div> 


            <div class="form-group" style="width: 200px">


                <label>quantité </label>  
                <input type="number"  name="qté_produit"  class="form-control"  />  
                <span class="text-danger"><?php echo form_error("qté_produit"); ?></span>  
      

    
            </div>  


            <div class="form-group" style="width: 200px">  
                <label>montant</label>  
                <input type="number"  name="montant_facture"  class="form-control" "/>  
                <span class="text-danger"><?php echo form_error("montant_facture"); ?></span>  
            </div> 


            <?php       
                }  
            
            
           ?> 
    </div>


          

                 <center><div style="position: relative;height: 100px;">
                <input type="hidden" name="hidden_id" value="<?php echo $row->ref_facture; ?>" />  
                <input type="submit" name="insert_ligne_facture" value="Inserer ligne facture " class="btn btn-secondary"  />
                <input type="submit" name="ajouter_ligne_facture" value="Ajouter une ligne" class="btn btn-secondary" />  
                </div></center>
            


             
          
           
      </form>

 </div>

      <br /><br />


 <div style="position: relative;margin: auto; width: 80%;">



        <table border="2" class="table table-striped table-hover">

      <tr> <th>N° ligne</th><th>produit</th><th>QTE</th><th>reference facture</th><th>Prix vente</th>

          <?php  

               if(!empty($ligne_facture)){
                foreach( $ligne_facture as $row)  
                {  
           ?>  
                <tr>  
                     <td><?php echo $row->id ; ?></td>  
                    <td><?php                       


                                                     $x = $row->ref_produit; 

                                                  

                                                     $this->db->select('*');
                                                     $this->db->from('produits');
                                                     $this->db->where('reference',$x);
                                                     $query=$this->db->get();
                                                     $query->result(); 

                                                     foreach( $query->result() as $r){
                                                      echo $r->nom_produit;
                                                     } 

                                                     ?> 
                                                       


                                                     </td>
                     <td><?php  echo $row->qté_produit ?></td>
                      <td><?php echo $row->ref_facture ; ?></td>
                      <td><?php echo $row->prix_vente ; ?></td> 
                     
                </tr>  


                <?php  
               }
           }else{ ?><tr>  
                     <td  colspan="5" align="center">No data found</td></tr>
                     <?php


                     }
           ?>



     </table>
    


  </div>
 





   </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  


<script src="<?php echo base_url();?>assets/js/bootstrap.bundle.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
    <script src="<?php echo base_url();?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          $('#sidebarCollapse').on('click', function() {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            document.getElementById("bodyContent").style.width="100%";
          });
      });
      </script>
         </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"    crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
   
</body>
</html>


</body>
</html>




   