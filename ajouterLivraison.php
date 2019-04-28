<?PHP
include "../entities/Livraison.php";
include "../core/LivraisonC.php";

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['num_tel']) and isset($_POST['adresse']) and isset($_POST['codepos'])){
$livraison1=new livraison($_POST['nom'],$_POST['prenom'],$_POST['num_tel'],$_POST['adresse'],$_POST['codepos']);
//Partie2
/*
var_dump($livraison1);
}
*/
//Partie3
$livraison1C=new LivraisonC();
$livraison1C->ajouterLivraison($livraison1);
header('Location: afficherLivraison.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>