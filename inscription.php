<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>inscription</title>
        <link rel="stylesheet" href="asset/style.css">
    </head>
 
    <body>



<div id="espace2" >
  <form id="espace" >
    <div class="mb-3" >
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
      <div id="emailHelp" class="form-text">Ne partagez jamais votre adresse E-mail.</div>
    </div>
    <div class="mb-3"  style="width:100%" >
      <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
      <input type="password" class="form-control" id="exampleInputPassword1" >
    </div>
    <div class="mb-3 form-check"  >
      <input type="checkbox" class="form-check-input" id="exampleCheck1" >
      <label class="form-check-label" for="exampleCheck1">Enregistrer</label>
    </div>
    <a href="index.php" button  id="envoyer" type="text" class="btn btn-primary"
     style="background:orange;padding:5px 15px 5px 15px;text-decoration:none;border-radius:5px;color:black">Envoyer</></a>
    <div class="clear"></div>
  </form>
  
 
</div>

<?php
        include ("footer2.html");
    ?>
  

    </body>
</html>
