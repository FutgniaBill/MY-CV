<?php 
class Langue{
    public $libelle_langue;

    public function __construct($libelle_langue)
    {
         $this->libelle_langue=$libelle_langue;
    }

    public function getLangues(){
        echo '
            <div class="checkLanguage ">
                <img src="image/checked_checkbox_24px.png " alt=" ">
                <div class="bigGreyText ">'.$this->libelle_langue.'</div>
            </div>
            ';
    }
    public function getLanguesPreview(){
        echo '
            <div class="checkLanguage ">
                <img src="../image/checked_checkbox_24px.png " alt=" ">
                <div class="bigGreyText ">'.$this->libelle_langue.'</div>
            </div>
            ';
    }

}


$langues=[
    new Langue('Français'),
    new Langue('Anglais')
];
?>