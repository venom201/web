<?PHP
include "../core/LivraisonC.php";
$livraisonC=new LivraisonC();
if (isset($_POST["num_tel"])){
	$livraisonC->supprimerLivraison($_POST["num_tel"]);
	header('Location: afficherLivraison.php');
}

?>