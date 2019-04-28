<?PHP
include "../entities/Livreur.php";
include "../core/LivreurC.php";

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['num_tel']) and isset($_POST['etat']) and isset($_POST['charge'])){
$livreur1=new livreur($_POST['nom'],$_POST['prenom'],$_POST['num_tel'],$_POST['etat'],$_POST['charge']);
//Partie2
/*
var_dump($livreur1);
}
*/
//Partie3
$livreur1C=new LivreurC();
$livreur1C->ajouterLivreur($livreur1);
header('Location: afficherLivreur.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>