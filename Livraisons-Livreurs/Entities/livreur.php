<?PHP
class livreur{
	private $id_livreur;
	private $nom;
	private $prenom;
	private $salaire;
    private $email;
    private $mdp;
	function __construct($id_livreur,$nom,$prenom,$salaire,$email,$mdp){
		$this->id_livreur=$id_livreur;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->salaire=$salaire;
        $this->email=$email;
        $this->mdp=$mdp;
	}
	
	function getId(){
		return $this->id_livreur;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getSalaire(){
		return $this->salaire;
	}
	function getEmail(){
		return $this->email;
    }
    function getMdp(){
		return $this->mdp;
    }
    
    //************************ */
    
    function setId($id_livreur){
		$this->id_livreur=$id_livreur;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	function setSalaire($salaire){
		$this->salaire=$salaire;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setMdp($mdp){
		$this->mdp=$mdp;
	}
}

?>