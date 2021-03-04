<!DOCTYPE html>
<html lang="fr">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
  
    <link rel="stylesheet" href="asset/style2.css">
    <title></title>
  </head>
  <body>
    <div class="wrap">
        <header class="page-header">
                <div class="logo">
                    <a class="logo" href="index.php" title="logo"><img src="asset/img/logo.png" alt=""></a>
                </div>
             <div class="container">
                    <nav class="navi">
                        <ul >
                            <li><a href="index.php">ACCUEIL</a></li>
                         </ul>
                    </nav>
            </div>
   
                <div class="clear"></div>
        </header>
    </div>
    <div class="wrap">
    <form action="mailto:lcor76@aol.com" method="post" enctype="text/plain"> 
<fieldset> 
<legend> <i>Client</i></legend><br />

Nom et prénom : 
<input type="text" name="Nom " required placeholder="Nom et Prénom " /> <br /><br />

Adresse : <br/>
<input type="text" name="Adresse " size="30" required /> <br /><br />

Ville : <br/>
<input type="text" name="Ville " size="30" required /> <br /><br />

Code Postal : <input type="number" name="CP " size="4" maxlength="5" required pattern="[0-9]" /> <br /><br />

Pays : <br/>
<input type="text" readonly name="Pays " value="France" /><br /> 
</fieldset> <br />

<fieldset> 
<legend><i>Réservation</i></legend><br /> 



Nombre adultes + enfants âge > 6ans : <br/><br/> 
                 <select name="nombre " id="personnes">

				<option value="">--Choisir une option--</option>
					<option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
				
				</select><br><br>


</fieldset> <br />
<fieldset>

<legend><i>Renseignez vos dates :</i></legend> <br /><br />

Date d'arrivée : 
<input type="date" name="ARRIVEE " /> <br /><br />

Date de départ : 
<input type="date" name="DEPART " /> <br /><br />


Heure d'arrivée : <br />
<input type="time" name="Heure " min="09:00" max="17:00" step="60" value="00:00" /><br/><br />
</fieldset>



<input type="submit" value="Réserver" /> 
<input type="reset" value="Effacer" /> 
</form>
</div>

</body>
</html>