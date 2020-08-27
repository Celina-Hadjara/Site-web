<?php
ini_set('display_errors','on');
error_reporting(E_ALL);
// On commence par récupérer les champs
if(isset($_POST['Id'])) $num=$_POST['Id'];
else $num="";
if(isset($_POST['Nom'])) $nom=$_POST['Nom'];
else $nom="";
if(isset($_POST['Prenom'])) $prenom=$_POST['Prenom'];
else $prenom="";
if(isset($_POST['sexe'])) $sexe=$_POST['sexe'];
else $sexe="";
if(isset($_POST['Année'])) $annee=$_POST['Année'];
else $annee="";
if(isset($_POST['monfichier'])) $photo=$_POST['monfichier'];
else $photo="";
//On vérifie si les champs sont vides
If(empty($num) OR empty($nom) OR empty($prenom) )
{
echo '<center>Attention, les champs Numéro étudiant, Nom, Prenom, Promotion et Voie ne peuvent pas rester
vide !</center>';
}
else {
include("connexion.php");
$query = "INSERT INTO membre(Id, nom, Prénom, sexe, Année_naissance, Photo) VALUES('$num', '$nom', '$prenom','$sexe','$annee','$photo' );";
mysqli_query($conn,$query).mysqli_error($conn);
//if(mysqli_query($conn, $query))
//{
    echo(mysqli_error($conn));
//echo '<center><h2> Vos infos on été ajoutées.</h2></center>';
//}
//else
//{ echo '<center><h2> Une erreur est intervenue lors de l introduction dans la base.</h2></center>';
//}
}
$sql = 'SELECT * FROM membre;';

$resultat = mysqli_query($conn,$sql);//.mysqli_error($conn);
		if($resultat){
            while($membre = mysqli_fetch_array($resultat)){
                echo $membre["Id"]." ".$membre["Prénom"]." ".$membre["nom"]." ".$membre["sexe"]." ".$membre["Année_naissance"]." ".$membre["Photo"]."<br>";
            }

        }else{
            echo "Erreur dans l'excution de la requette. ";
            echo "Le message d'erreur est : ".mysqli_error($conn);

        }		
?>
