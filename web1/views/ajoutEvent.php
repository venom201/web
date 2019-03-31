<?PHP
include "../entities/event.php";
include "../core/eventC.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['date']) and isset($_POST['fin'])and isset($_POST['nbmax'])and isset($_POST['description'])and isset($_POST['image']))
{



	    $id=$_POST['id'];
		
		$fin=$_POST['fin'];
		$date=$_POST['date'];
		$today=date("Y-m-d");
		$nom=$_POST['nom'];
		$nbmax=$_POST['nbmax'];
		$image=$_POST['image'];
		$description=$_POST['description'];
		if ($date<$fin and $date>=$today and $id=$id)

		{ 
			$event1=new event ($id,$nom,$date,$fin,$nbmax,$description,$image);
		$event1C=new EventC();
		$event1C->ajouterEvent($event1);
		header('Location: afficherevents.php');
		}  
		else{
		echo '<script type="text/javascript">'; 
      echo 'alert("verifier les date");'; 
       echo 'window.location.href = "calendar.html";';
echo '</script>';


		}	



		}else{
			echo "vérifier les champs";
}
//*/

?>