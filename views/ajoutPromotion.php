<?PHP
include "../entities/promotion.php";
include "../core/promotionC.php";

if ( isset($_POST['nom']) and isset($_POST['debut']) and isset($_POST['fin']) and isset($_POST['pourcentage'])and isset($_POST['prix'])){

	    $id=$_POST['id'];
		$fin=$_POST['fin'];
		$debut=$_POST['debut'];
		$today=date("Y-m-d");
		$nom=$_POST['nom'];
		$pourcentage=$_POST['pourcentage'];
		$prix=$_POST['prix'];
		$solde=$_POST['solde'];
		if ($debut<$fin and $debut>=$today)

		{ 
			$promotion1=new promotion ($id,$nom,$debut,$fin,$pourcentage,$prix,$solde);
			$promotion1C=new PromotionC();
            $promotion1C->ajouterPromotion($promotion1);
            header('Location: afficherpromotions.php');
			
		}  
		else{
		echo '<script type="text/javascript">'; 
      echo 'alert("verifier les date");'; 
       echo 'window.location.href = "signin.html";';
       echo '</script>';


		}	
	
}else{
	echo "vérifier les champs";
}
//*/

?>