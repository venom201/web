<?PHP
include "../config.php";
class PromotionC {
function afficherPromotion ($promotion){
		echo "Id: ".$promotion->getId()."<br>";
		echo "Nom: ".$promotion->getNom()."<br>";
		echo "Date Debut: ".$promotion->getDebut()."<br>";
		echo "Date Fin: ".$promotion->getFin()."<br>";
		echo "Pourcentage: ".$promotion->getPourcentage()."<br>";
		echo "Prix: ".$promotion->getPrix()."<br>";
		echo "Solde: ".$promotion->getSolde()."<br>";

		
		
	}
	
	function ajouterPromotion($promotion){
		$sql="insert into promotion (nom,debut,fin,pourcentage,prix,solde) values ( :nom,:debut,:fin,:pourcentage,:prix,:solde)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $nom=$promotion->getNom();
        $debut=$promotion->getDebut();
        $fin=$promotion->getFin();
        $pourcentage=$promotion->getPourcentage();
        $prix=$promotion->getPrix();
         $solde=$promotion->getSolde();
          
     
		$req->bindValue(':nom',$nom);
		$req->bindValue(':debut',$debut);
		$req->bindValue(':fin',$fin);
		$req->bindValue(':pourcentage',$pourcentage);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':solde',$solde);
		
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherPromotions(){
		//$sql="SElECT * From promotion e inner join formationphp.promotion a on e.id= a.id";
		$sql="SElECT * From promotion";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerPromotion($id){
		$sql="DELETE FROM promotion where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierPromotion($promotion,$id){
		$sql="UPDATE promotion SET id=:idd, nom=:nom,debut=:debut,fin=:fin,pourcentage=:pourcentage,prix=:prix WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$promotion->getId();
		
        $nom=$promotion->getNom();
        $debut=$promotion->getDebut();
        $fin=$promotion->getFin();
        $pourcentage=$promotion->getPourcentage();
        $prix=$promotion->getprix();
$datas = array(':idd'=>$idd,':id'=>$id,':nom'=>$nom,':debut'=>$debut,':fin'=>$fin,':pourcentage'=>$pourcentage,':prix'=>$prix);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':debut',$debut);
		$req->bindValue(':fin',$fin);
		$req->bindValue(':pourcentage',$pourcentage);
		$req->bindValue(':prix',$prix);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererPromotion($id){
		$sql="SELECT * from promotion where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListePromotions($pourcentage){
		$sql="SELECT * from promotion where pourcentage=$pourcentage";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>