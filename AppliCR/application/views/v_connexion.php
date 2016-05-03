<!DOCTYPE html>
<html lang="fr">
  <head>
  	<?php
		$this->load->helper('url');
		$path = base_url();
	?>
    <title>Connexion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo $path.'bootstrap-3.3.6-dist/css/bootstrap.min.css';?>" rel="stylesheet">
    <link href="<?php echo $path.'bootstrap-3.3.6-dist/css/connexion.css';?>" rel="stylesheet">
    
  </head>
  <body>
   
	
<div class="container">
<div class="row">
<div class="col-xs-12">
	
	<div class="main">
			
		<div class="row">
		<div class="col-xs-12 col-sm-6 col-sm-offset-1">
					
			<h1>Galaxy Swiss-Bourdin</h1>
			<h2>Identification utilisateur</h2>
					
			<?php if (isset($erreur))	echo '<div class ="erreur"><ul><li>'.$erreur.'</li></ul></div>'; ?>

			<form method="POST" action="<?php echo $path.'c_default/connecter';?>">
				
					<div class="form-group">
					<div class="col-md-8"><input id="login" placeholder="Identifiant" type="text" class="form-control" name="login" size="30" maxlength="45"/></div>
					</div>
				
					<div class="form-group">
					<div class="col-md-8"><input id="mdp" placeholder="Mot de passe" type="password" class="form-control" name="mdp" size="30" maxlength="45"/></div>
					</div>

					<div class="form-group">
					<div class="col-md-offset-0 col-md-8"><input class="btn btn-success" type="submit" value="Valider" name="valider"/>
					<input class="btn btn-success" type="reset" value="Annuler" name="annuler"/>
					</div>
				</div> 
			</form>

			</div>
		</div>
		
	</div>

</div>
</div>
</div>
	
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script src="<?php echo $path.'bootstrap-3.3.6-dist/js/bootstrap.min.js';?>"></script>
  </body>
</html>