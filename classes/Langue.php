<?php
class Langue{
    public function __construct($libelle)
    {
        $this->libelle=$libelle;
    }
    public function get_Langues(){
        echo ' 
        <div>'.$this->libelle.'</div>
           ';
    }
}
?>