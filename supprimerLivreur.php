<?PHP
include "../core/LivreurC.php";
$livreurC=new LivreurC();
if (isset($_POST["num_tel"])){
	$livreurC->supprimerLivreur($_POST["num_tel"]);
	header('Location: afficherLivreur.php');
}

?>