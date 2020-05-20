<?php
    class Client{
        private $idClient;
        private $nomClient;
        private $prenomClient;
        private $telephoneClient;
        private $MdpClient;
        private $EmailClient;
    
        function __construct($idClient, $nomClient, $prenomClient, $telephoneClient, $MdpClient,$EmailClient){
            $this->idClient = $idClient;
            $this->nomClient = $nomClient;
            $this->prenomClient = $prenomClient;
            $this->telephoneClient = $telephoneClient;
            $this->MdpClient = $MdpClient;
            $this->EmailClient = $EmailClient;
        }

       
    
        function setnomClient(){
            $this->nomClient = $nomClient;
        }

        function setprenomClient(){
            $this->prenomClient = $prenomClient;
        }

        function settelephoneClient(){
            $this->telephoneClient = $telephoneClient;
        }

        function setMdpClient(){
            $this->MdpClient = $MdpClient;
        }
        function setEmailClient(){
            $this->EmailClient = $EmailClient;
        }
        function getidClient(){
            return $this->idClient;
        }
    
        function getnomClient(){
            return $this->nomClient;
        }

        function getprenomClient(){
            return $this->prenomClient;
        }

        function gettelephoneClient(){
            return $this->telephoneClient;
        }

        function getMdpClient(){
            return $this->MdpClient;
        }
        function getEmailClient(){
            return $this->EmailClient;
        }

    }
?>