<?php
    class categorie{
        private $id;
        private $nom;
        function __construct ($id, $nom){
            $this->id = $id;
            $this->nom = $nom;

        }

        function setid(){
            $this->id = $id;
        }
        

        function getid(){
            return $this->id;
        }

        function setnom(){
            $this->nom = $nom;
        }

        function getnom(){
            return $this->nom;
        }
        
       
    }
?>