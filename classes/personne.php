<?php
    class personne{

        public function __construct(public $id ,public $nom,public $prenom_personne, public $birth_day,public $telephone,public $ville,public $pays,public $map,public $langue)

        {
            $this ->id=$id;
            $this->nom=$nom;
            $this->prenom_personne=$prenom_personne;
            $this->birth_day=$birth_day;
            $this->telephone=$telephone;
            $this->ville=$ville;
            $this->pays=$pays;
            $this->map=$map;
            $this->langue=$langue;
        }

        public function ge_id(){
            return $this->id;
        }
        public function get_nom(){
            return $this->nom;
        }
        public function get_prenom_personne(){
            return $this->prenom;
        }
        public function get_birth_day(){
            return $this->birth_day;
        }
        public function get_telephone(){
            return $this->telephone;
        }
        public function get_ville(){
            return $this->ville;

        }
        public function get_pays(){
            return $this->pays;
        }
        public function get_map(){
            return $this->map;
        }

        public function editer()
    {

    }
        public function supprimer()

    {

    }
        public function envoyer()
        {

        }
    
}
    
?>