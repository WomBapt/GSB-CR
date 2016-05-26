<!DOCTYPE html>
<html lang="fr">
  <head>
 	<?php
		$this->load->helper('url');
		$path = base_url();
	?>
    <title>Accueil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   	<link href="<?php echo $path.'bootstrap-3.3.6-dist/css/bootstrap.min.css';?>" rel="stylesheet">
  </head>
  <body>
	<nav class="navbar navbar-inverse">
 		  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand">GSB</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><?php echo anchor('c_default/index','Accueil');?></li>     
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Compte rendu <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li class="active"><?php echo anchor('c_default/loadAjouter','Ajouter');?></li>
           <li><?php echo anchor('c_default/LoadConsulter','Consulter');?></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      		<li><a href="<?php echo $path.'c_default/deconnecter';?>">Déconnexion</a></li>	
      </ul>
    </div><!-- /.navbar-collapse -->
  	</div><!-- /.container-fluid -->
	</nav>
	
	<H2 class="col-lg-12">RAPPORTS DE VISITE</H2>
	
<form method="POST" action="<?php echo $path.'Welcome/ajouterCR';?>">
	
  <div class="col-lg-4">
  
	</br>
	
    <div class="input-group">
    <span class="input-group-addon" id="basic-addon3">Praticien</span>

        <?php 
        echo "<select name='praticiens'>";
        foreach($praticiens as $prat)
        {  
        	echo "<option name = ".$prat['PRA_NUM']." value=".$prat['PRA_NOM'].' '.$prat['PRA_PRENOM'].">".$prat['PRA_NOM'].' '.$prat['PRA_PRENOM']."</option>"; 
        	
		}
		echo "</select>";
		?>

    </div><!-- /input-group -->
    
    </br>
    
    <div class="input-group">
  		<span class="input-group-addon" id="basic-addon3">Date Rapport</span>
 		<input type="date" class="form-control" name="dateRapport" aria-describedby="basic-addon3">
	</div>
	
	</br>
	
	<div class="input-group">
		<span class="input-group-addon" id="basic-addon3">Motif visite</span>
 		<input type="text" class="form-control" name="motif" aria-describedby="basic-addon3">
	</div>
	
	</br>
	
	<div class="input-group">
		<span class="input-group-addon" id="basic-addon3">BILAN</span>
		<input type="text" class="form-control" name="bilan" aria-describedby="basic-addon3">
	</div>
	
	</br>
	
	<button type="submit" class="btn btn-default" name="enregistrer">Enregistrer</button>

  </div><!-- /.col-lg-4 -->
  
 </form>
	
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script src="<?php echo $path.'bootstrap-3.3.6-dist/js/bootstrap.min.js';?>"></script>
  </body>
</html>