<?php 
class Conpetence{

    public function __construct( $titre, $language, $level)
    {
        $this->titre=$titre;
        $this->language=$language;
        $this->level=$level;
    }

    public function get_conpetence(){
        echo '
        <div class="falculte">
            <img class="icon_check" src="img/checkbox.png" alt="">
            <div class="fac1">
                <div class="titre_fac">
                    <h4>'.$this->titre.'</h4>
                    <img class="specialicon" id="etoile" src="img/star.png" alt="">
                </div>
                <div>'.$this->language.'</div>
                <div class="progresbar">
                    <div style="background: #1376ba; width: 85%; height: 5px;"> </div>
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        ';
    }
 

}
?>

  