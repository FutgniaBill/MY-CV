<?php 
    abstract class Experience{

        public $titre ;
        public $entreprise ;
        public $dateDebut ;

        public function __construct($titre,$entreprise,$dateDebut)
        {
            $this->titre=$titre;
            $this->entreprise=$entreprise;
            $this->dateDebut=$dateDebut;
        }

        public function __destruct()
        {
        }

        public abstract function getExperience();


    }  
?>