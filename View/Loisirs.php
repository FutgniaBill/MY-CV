<?php
include 'classes/Loisir.php';
include 'classes/Langue.php';
    
?>
 <div class="doubleDiv " id="doubleDiv ">
    <div class="interestPoint " id="interestPoint ">
        <div class="mediumBlackText "><b>Point d'interêt</b></div>
        <div class="simpleGreyText " style="padding-bottom: 1%; ">Simple passe-temps pour se faire un peu plaisir</div>
        <div class="listeImageInteret ">
        <?php
            foreach ($elements as $valeur) {
                $valeur->getLoisir();
            }
        ?>
        </div>
    </div>
    <div class="language " id="language ">
        <div class="mediumBlackText "><b>Langue</b></div>
        <div class="simpleGreyText " style="padding-bottom: 1%; ">Pratiquées en entreprise</div>
        <div class="contentLanguage">
        <?php
            foreach ($langues as $valeur) {
                $valeur->getLangues();
            } 
        ?>
        </div>
    </div>
</div>