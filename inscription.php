
<?php
	//On teste si le formulaire a été soumis
	if ((isset($_POST['nom'])) && (isset($_POST['prenom']))	&& (isset($_POST['age'])) && (isset($_POST['paye'])) && (isset($_POST['sexe']) ))
	{
	//on teste si tous les champs du formulaire sont remplits
	if ((!empty($_POST['nom'])) && (!empty($_POST['prenom']))	&& (!empty($_POST['age'])) && (!empty($_POST['paye'])) && (!empty($_POST['sexe'])))
	{
	//on se connecte au serveur
			$servname = 'localhost';
            $dbname = 'exampweb';
            $user = 'root';
            $pass = '';
            
            try{
                $pdo = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $date_inscrit= date("Y-m-d");

              /* = "INSERT INTO textes(id_text, Nom, Prenom, Age, Paye, Sexe, Date_inscrit)
						VALUES('','dddd','bbbbb','gggg','ttttt','vvvv','33333')";
						*/
                   $sql = "INSERT INTO textes(id_text, Nom, Prenom, Age, Paye, Sexe, Date_inscrit)
                        VALUES('','$_POST[nom]','$_POST[prenom]','$_POST[age]','$_POST[paye]','$_POST[sexe]','$date_inscrit')";
                
                $pdo->exec($sql);
                
            }
            catch(PDOException $e){
              echo "Erreur : " . $e->getMessage();
          }
		}
	}

 ?>





<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Veuillez vous inscrire <small>c'est gratuit!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="prenom" id="prenom" class="form-control input-sm" placeholder=" Votre Prenom">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="nom" id="nom" class="form-control input-sm" placeholder=" Votre Nom">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder=" Votre Adresse Email">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Votre Mot de Passe">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirmez votre Mot de Passe">
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input type="submit" value="S'inscrire" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>