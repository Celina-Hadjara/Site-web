<!DOCTYPE html>
<html>
<head>
<title>Acc�s membre</title>
</head>
<body>
<form method="post"  action="suite.php"> 
Identifiant : <input type ="text" name="Identifiant" autofocus  pattern="^[A-Z].*"   title="Premi�re lettre en majuscule"><br><br>

Mot de passe : <input type ="password" name="Identifiant" autofocus  pattern="(?=^.{4,8}$)(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).*\W.*$"   title="mot de passe contenant
imp�rativement entre 4 et 8 caract�res contenant au moins un chiffre, une lettre
majuscule, une lettre minuscule et un autre caract�re."><br><br>

<input type="submit" value="Envoyer" name = "membre"  />


</form>
</body>
</html>
