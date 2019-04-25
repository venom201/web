<?PHP
include "../core/eventC.php";
$eventC=new EventC();
if (isset($_POST["id"])){
	$eventC->supprimerEvent($_POST["id"]);
	header('Location: afficherevents.php');
}

?>