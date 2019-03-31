<?PHP
class Event{
	private $id;
	private $nom;
	private $date;
	
	private $fin;
	private $nbmax;
	private $description;
	private $image;
	function __construct($id,$nom,$date,$fin,$nbmax,$description,$image){
		$this->id=$id;
		$this->nom=$nom;
		$this->date=$date;
		$this->fin=$fin;
		$this->nbmax=$nbmax;
		$this->description=$description;
		$this->image=$image;
	}
	
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getDate(){
		return $this->date;
	}
	
	function getFin(){
		return $this->fin;
	}
	function getNbmax(){
		return $this->nbmax;
	}
	function getDescription(){
		return $this->description;
	}
	function getImage(){
		return $this->image;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setDate($date){
		$this->date=$date;
	}
	
	function setFin($fin){
		$this->fin=$fin;
	}
	function setNbmax($nbmax){
		$this->nbmax=$nbmax;
	}
	function setDescription($description){
		$this->description=$description;
	}
	function setImage($image){
		$this->image=$image;
	}
}

?>