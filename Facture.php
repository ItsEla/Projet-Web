<?php
    class facture{
        private $idfacture;
        private $montant;

        function __construct ($idfacture, $montant){
            $this->idfacture = $idfacture;
            $this->montant = $montant;
        }

        function setidfacture(){
            $this->idfacture = $idfacture;
        }

        function getidfacture(){
            return $this->idfacture;
        }

        function setmontant(){
            $this->montant = $montant;
        }

        function getmontant(){
            return $this->montant;
        }
    }
?>