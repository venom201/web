
<?PHP
session_start();
include "../../core/eventC.php";




$promoC=new EventC();
if (isset($_POST["id"]) AND isset($_SESSION['id_membre']))
{   

	$nb=0;
	$i=$_POST["id"];

	$sql="insert into participe (id,id_membre) values (:id,:id_membre)";
	$db = config::getConnexion();
	    try
		{
			$req=$db->prepare($sql);
								
			 $id=$_POST["id"];
			 $id_membre=$_SESSION['id_membre'];
			
			
		     $req->bindValue(':id',$id);
		     $req->bindValue(':id_membre',$id_membre);
		   
			
	         $req->execute();
	          $promoC->capacite_moins($i);
	          $nb++;
			           
		}

	    catch (Exception $e)
	    {
        	echo 'Erreur: '.$e->getMessage();
        }
 
   
 
	header('Location:index.php');
	
    

}

else {
	echo"vous devez etre connectés pour pouvoir participer</br> " ;
     ?><a href="connexion.php">se connecter</a>

<?php

}


?>


