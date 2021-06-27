
<?php  

foreach($facturex as $row)  
                { $x = $row->ref_facture; } 


?>
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


    <div style="width: 500px;position: relative; left: 32%;top: 15px;background-color: none"> 
      <br /><br /><br />  
      <h3 align="center" style="margin-right: 0px">Facture N°<?php  echo $x;  ?> </h3><br />  

       </div> 

 <div>

          <form method="post" action="<?php echo base_url()?>index.php/facture/factureedite">

         

    <div style="margin: auto; width: 90%;
                     position: relative; top:100px;
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

    <div style="width: 500px;height:0px;position: relative; left: 32%;margin-top: 80px;background-color: none">

      <br /><br /><br />  
      <h3 align="center" style="margin-right: 0px">Details Facture </h3><br />  

    </div>


     <div style="
                     position: relative;
                     top: 200px;
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


          

          <div class="form-group" style="position: relative;margin: auto; width: 39%; top: 250px;"> 
                <input type="hidden" name="hidden_id" value="<?php echo $row->ref_facture; ?>" />  
                <input type="submit" name="insert_ligne_facture" value="Inserer ligne facture " class="btn btn-secondary" style="margin-left: 80px" />
                <input type="submit" name="ajouter_ligne_facture" value="Ajouter une ligne" class="btn btn-secondary" style="margin-left: 60px" />  
           </div>   


             
          
           
      </form>

 </div>

      <br /><br />


 <div style="position: relative;margin: auto; width: 80%;top: 300px">



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
 

  
     
     
 
 </body>  
 </html>