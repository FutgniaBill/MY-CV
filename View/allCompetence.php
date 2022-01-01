<?php 
    include 'classes/Competence.php';
?>
<div class="detailProject" id="detailProject ">
            <?php
                foreach($allCompetences as $competence){
                        $competence->get_competence();
                }
            ?>
</div>