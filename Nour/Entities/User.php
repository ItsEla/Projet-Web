<?php 
include 'C:\wamp64\www\melodyo\Core\dbconfig.php';
class User{
	private $login;
    private $pwd;
	private $Prenom;
	private $Nom;
    public $conn;
    	

	public function __construct($login,$pwd,$conn)
	{
		$this->login=$login;
		$this->pwd=$pwd;
		$c=new Database();
		$this->conn=$c->connexion();
		
	}
	
	function setLog(){
            $this->login = $login;
        }
	function getLog()
	{
		return $this->login;
	}
	function setPWD(){
            $this->pwd = $pwd;
        }
    function getPWD()
	{
		return $this->pwd;
		
	}
	
	function setPrenom(){
            $this->Prenom = $Prenom;
        }
	 function getPrenom()
	{
		return $this->Prenom;
		
	}
	function setNom(){
            $this->Nom = $Nom;
        }
	 function getNom()
	{
		return $this->Nom;
		
	}
	
	

	public function Logedin($conn,$login,$pwd)
	{
		$req="select * from administrateur where login='$login' && pwd='$pwd'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>