<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Page d'inscription</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url ();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <style>

.div-logo{
    background-image: url("<?php echo base_url ();?>assets/img/logo3.png");
    background-repeat: no-repeat;
    height: 200px;
    width: 240px;
    margin: auto;

    padding: 10px;

</style>
  </head>
  <body background="">


    <nav class="navbar navbar-inverse" style="background-color: black">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">LJT</a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('authentification/Login'); ?>">Connexion</a></li>
            </ul>

           
        </div>
    </nav>





  
    
    <div   class="col-lg-4 col-lg-offset-2" style="color:black;position: absolute; left: 17%;top: 20%;background-color: rgba(220,220,220,0.2);padding: 20px;padding-bottom: 40px;">

      <div class="div-logo">
    
      </div>

      <?php if(isset($_SESSION['error'])){?>

        <div class="alert alert-danger"><?php echo $_SESSION['error']?></div>
        <?php } ?>

    

       </br>

       <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

       <form action="" method="POST">

        <div class="form-group">
          <label for="email" >EMAIL :</label>
          <input class="form-control" type="email" name="email" id="email">
        </div>

        <div class="form-group">
          <label for="password" >PASSWORD :</label>
          <input class="form-control" type="password" name="password" id="password">
        </div>

        <div class="text-center">
             <button class="btn btn-primary" name="login" style="float: left;width: 100px;">Connexion</button>
        </div>
        <div>
        
              <a href="<?php echo site_url('authentification/mpor'); ?>"  style="float: right;">Récuprérer mot de passe</a>
        </div>
        
        </form>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url ();?>assets/css/bootstrap.min.js"></script>
  </body>
</html>