<?php
    class evenement{
        private $ide;
        private $datee;
        private $name;
        private $id;
        private $descr;
        private $image;



        function __construct ($ide, $datee, $name, $id, $descr, $image){
            $this->ide = $ide;
            $this->datee = $datee;
            $this->name = $name;
            $this->id = $id;
            $this->descr = $descr;
            $this->image = $image;
        }

        function setide(){
            $this->ide = $ide;
        }

        function getide(){
            return $this->ide;
        }

        function setdatee(){
            $this->datee = $datee;
        }

        function getdatee(){
            return $this->datee;
        }
        function setname(){
            $this->name = $name;
        }

        function getname(){
            return $this->name;
        }
        function setid(){
            $this->id = $id;
        }

        function getid(){
            return $this->id;
        }
        function setdescr(){
            $this->descr = $descr;
        }

        function getdescr(){
            return $this->descr;
        }
        function setimage(){
            $this->image = $image;
        }

        function getimage(){
            return $this->image;
        }
    }
?>