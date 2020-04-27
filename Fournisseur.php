<?php
    class fournisseur{
        private $cinfournisseur;
        private $nomfournisseur;
        private $prenomfournisseur;
        private $telephonefournisseur;
        private $Mdpfournisseur;
        private $Emailfournisseur;
    
        function __construct($cinfournisseur, $nomfournisseur, $prenomfournisseur, $telephonefournisseur, $Mdpfournisseur,$Emailfournisseur){
            $this->cinfournisseur = $cinfournisseur;
            $this->nomfournisseur = $nomfournisseur;
            $this->prenomfournisseur = $prenomfournisseur;
            $this->telephonefournisseur = $telephonefournisseur;
            $this->Mdpfournisseur = $Mdpfournisseur;
            $this->Emailfournisseur = $Emailfournisseur;
        }

        function setcinfournisseur(){
            $this->cinfournisseur = $cinfournisseur;
        }
    
        function setnomfournisseur(){
            $this->nomfournisseur = $nomfournisseur;
        }

        function setprenomfournisseur(){
            $this->prenomfournisseur = $prenomfournisseur;
        }

        function settelephonefournisseur(){
            $this->telephonefournisseur = $telephonefournisseur;
        }

        function setMdpfournisseur(){
            $this->Mdpfournisseur = $Mdpfournisseur;
        }
        function setEmailfournisseur(){
            $this->Mdpfournisseur = $Mdpfournisseur;
        }
        function getcinfournisseur(){
            return $this->cinfournisseur;
        }
    
        function getnomfournisseur(){
            return $this->nomfournisseur;
        }

        function getprenomfournisseur(){
            return $this->prenomfournisseur;
        }

        function gettelephonefournisseur(){
            return $this->telephonefournisseur;
        }

        function getMdpfournisseur(){
            return $this->Mdpfournisseur;
        }
        function getEmailfournisseur(){
            return $this->Emailfournisseur;
        }

    }
?>