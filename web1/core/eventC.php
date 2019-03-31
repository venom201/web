<?PHP
include "../config.php";
class EventC {
function afficherEvent ($event){
		echo "Id: ".$event->getId()."<br>";
		echo "Nom: ".$event->getNom()."<br>";
		echo "Date D: ".$event->getDate()."<br>";
		
		echo "debute: ".$event->getFin()."<br>";
		echo "Nbmax: ".$event->getNbmax()."<br>";
		echo "description: ".$event->getDescription()."<br>";
		echo "Image: ".$event->getImage()."<br>";
	}

	function calculerSalaire($event){
		echo $event->getdescription() * $event->getfin();
	}
	function ajouterEvent($event){
		$sql="insert into event (id,nom,date,fin,nbmax,description,image) values (:id, :nom,:date,:fin,:nbmax,:description,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$event->getId();
        $nom=$event->getNom();
        $date=$event->getDate();
        
        $fin=$event->getFin();
        $nbmax=$event->getNbmax();
        $description=$event->getDescription();
        $image=$event->getImage();
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':date',$date);
		
		$req->bindValue(':fin',$fin);
		$req->bindValue(':nbmax',$nbmax);
		$req->bindValue(':description',$description);
		$req->bindValue(':image',$image);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherEvents(){
		//$sql="SElECT * From event e inner join formationphp.event a on e.id= a.id";
		$sql="SElECT * From event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerevent($id){
		$sql="DELETE FROM event where id= :id";
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
	function modifierEvent($event,$id){
		$sql="UPDATE event SET id=:idd, nom=:nom,date=:date,fin=:fin,nbmax=:nbmax,description=:description,image=:image WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$event->getId();
		
        $nom=$event->getNom();
        $date=$event->getDate();
        $fin=$event->getFin();
        
        $nbmax=$event->getNbmax();
        $description=$event->getDescription();
        $image=$event->getImage();
$datas = array(':idd'=>$idd,':id'=>$id, ':nom'=>$nom,':date'=>$date,':fin'=>$fin,':nbmax'=>$nbmax,':description'=>$description,':image'=>$image);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':date',$date);
		
		$req->bindValue(':fin',$fin);
		$req->bindValue(':nbmax',$nbmax);
		$req->bindValue(':description',$description);
			$req->bindValue(':image',$image);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererEvent($id){
		$sql="SELECT * from event where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEvents($id){
		$sql="SELECT * from event where id=$id";
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