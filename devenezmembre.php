<!DOCTYPE html>
<html>
<head>
<title>Devenez membre</title>
</head>
<body>
<form action="membre.php" method="post" autocomplete="on" enctype="multipart/form-data" >
N° Etudiant : <input type="number" name="Id" ><br><br>

Prénom : <input type="text" name="Prenom" ><br><br>

Nom : <input type="text" name="Nom" ><br><br>

Date de naissance : <select name="Année" autocomplete="off">
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
</select><br><br>

Sexe :  <input type="radio" name="sexe" value="homme"> Homme
  <input type="radio" name="sexe" value="femme"> Femme<br><br>

Joindre une photo : <input type="file" name="monfichier" /><br /> <br>


<input type="image" src="inscription.jpg" name="inscription" >
</form>
</html>
