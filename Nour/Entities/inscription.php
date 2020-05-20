<?php
    class inscription{
        private $idc;
        private $Nom;
        private $Prenom;
        private $Email;
                private $ide;



        function __construct ($idc, $Nom, $Prenom, $Email,$ide){
            $this->idc = $idc;
            $this->Nom = $Nom;
            $this->Prenom = $Prenom;
            $this->Email = $Email;
            $this->ide = $ide;

        }

        function setidc(){
            $this->idc = $idc;
        }

        function getidc(){
            return $this->idc;
        }

        function setNom(){
            $this->Nom = $Nom;
        }

        function getNom(){
            return $this->Nom;
        }
        function setPrenom(){
            $this->Prenom = $Prenom;
        }

        function getPrenom(){
            return $this->Prenom;
        }
         function setEmail(){
            $this->Email = $Email;
        }

        function getEmail(){
            return $this->Email;
        }
         function setide(){
            $this->ide = $ide;
        }

        function getide(){
            return $this->ide;
        }
      
       
    }
?>