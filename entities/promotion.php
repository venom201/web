<?PHP
class Promotion{
	private $id;
	private $nom;
	private $debut;
	private $fin;
	private $pourcentage;
	private $prix;
	private $solde;
   
	function __construct($id,$nom,$debut,$fin,$pourcentage,$prix,$solde){
		$this->id=$id;
		$this->nom=$nom;
		$this->debut=$debut;
		$this->fin=$fin;
		$this->pourcentage=$pourcentage;
		$this->prix=$prix;
		$this->solde=$solde;
		
		
	}
	
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getDebut(){
		return $this->debut;
	}
	function getFin(){
		return $this->fin;
	}
	function getPourcentage(){
		return $this->pourcentage;
	}
	function getPrix(){
		return $this->prix;
	}
	function getSolde(){
		return $this->solde;
	}
	
	
	

	function setNom($nom){
		$this->nom=$nom;
	}
	function setDebut($debut){
		$this->debut=$debut;
	}
	function setFin($fin){
		$this->fin=$fin;
	}
	function setPourcentage($pourcentage){
		$this->pourcentage=$pourcentage;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	
	
	

}
?>