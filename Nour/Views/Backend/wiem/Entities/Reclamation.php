<?php
    class reclamation{
        private $idreclamation;
        private $email;
        private $probleme;
        private $cause;
        function __construct ($idreclamation, $email,$probleme,$cause){
            $this->idreclamation = $idreclamation;
            $this->email = $email;
            $this->probleme = $probleme;
            $this->cause = $cause;
        }

        function setidreclamation(){
            $this->idreclamation = $idreclamation;
        }

        function getidreclamation(){
            return $this->idreclamation;
        }

        function setemail(){
            $this->email = $email;
        }

        function getemail(){
            return $this->email;
        }

        function setprobleme(){
            $this->probleme = $probleme;
        }

        function getprobleme(){
            return $this->probleme;
        }

        function setcause(){
            $this->cause = $cause;
        }

        function getcause(){
            return $this->cause;
        }
    }
    
    
?>