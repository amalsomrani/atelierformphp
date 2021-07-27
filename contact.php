<?php
  // déclaration
 if(isset($_GET['nom'])){

    @$nom=$_GET['nom'];
    @$prenom=$_GET['prenom'];
    @$adresse=$_GET['adresse'];
    @$email=$_GET['email'];
    @$telephone=$_GET['telephone'];
    $envoyer=$_GET["envoyer"];
    $erreur="";
 
 }
 
 
 if(isset($envoyer))
 {
     if(empty($nom)) $erreur= "<li> saisir votre nom !</li>";
     if(empty($prenom)) $erreur.= "<li> Saisir votre prenom  !</li>";
     if(empty($email)) $erreur.= "<li> saisir votre email !</li>";
     if(empty($adresse)) $erreur.= "<li>saisir votre adresse!</li>";
     if(empty($telephone)) $erreur.= "<li>saisir votre numéro de telephone svp !</li>";
 
   }
 
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <container>
    <form name="form" method="GET" action="">
      <fieldset>
          <legend>inscription</legend>
        
          <div class="label">Nom</div>
          <div class="input">
              <input type="text" name="nom" value="" />
          </div>
         <div class="label">Prénom</div>
         <div class="input">
             <input type="text" name="prenom" value="" />
          </div>
          <div class="label">Email</div>
          <div class="input">
             <input type="text" name="email" value="" />
          </div>
          <div class="label">Adresse</div>
          <div class="input">
              <input type="adresse" name="adresse" value="" />
          </div>
          <div class="label">telephone</div>
          <div class="input">
             <input type="telephone" name="telephone" value="" />
           </div>
          <div class="input">
             <input type="submit" name="envoyer" value="envoyer" />
           </div>
       </fieldset>
    </form>
      <?php if(!empty($erreur)){ ?>

       <div id="erreur"> <?php echo $erreur ?></div>
       <?php }  
       ?>
   </container>
   </body>
</html>