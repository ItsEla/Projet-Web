<?PHP
class livr{
	private $id_livr;
	private $prix;
	private $id_livreur;
	private $id_res;
    
	function __construct($id_livr,$prix,$id_livreur,$id_res){
		$this->id_livr=$id_livr;
		$this->prix=$prix;
		$this->id_livreur=$id_livreur;
		$this->id_res=$id_res;
	}
	
	function getId(){
		return $this->id_livr;
	}
	function getPrix(){
		return $this->prix;
	}
	function getId_livreur(){
		return $this->id_livreur;
	}
	function getId_res(){
		return $this->id_res;
	}
    
    //************************ */
    
    function setId($id_livr){
		$this->id_livr=$id_livr;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function setId_livreur($id_livreur){
		$this->id_livreur=$id_livreur;
	}
	function setId_res($id_res){
		$this->id_res=$id_res;
	}
}

?>