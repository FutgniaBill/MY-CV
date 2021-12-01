<?php
    $com_listes= array(
        array(
            "titre" => "Développement front-end",
            "langues" => "HTML5, SASS, VueJS, Angular, JavaFX",
        ),
        array(
            "titre" => "Développement front-end",
            "langues" => "HTML5, SASS, VueJS, Angular, JavaFX",
        ),
        array(
            "titre" => "FrameWork front-end",
            "langues" => "HTML5, SASS, VueJS, Angular, JavaFX",
        ),
        array(
            "titre" => "Développement back-end",
            "langues" => "NodeJs, Dupral 8, Laravel, Kotlin, C-sharp",
        )
        );
                                
?>
<section id="b" class="competences">
                        
                                        <?php
                                        foreach ($com_listes as $comp )
                                        {
                                            echo '
                                            <div class="falculte">
                                                <img class="icon_check" src="img/checkbox.png" alt="">
                                                <div class="fac1">
                                                    <div class="titre_fac">
                                                        <h4>'.$comp["titre"].'</h4>
                                                        <img class="specialicon" id="etoile" src="img/star.png" alt="">
                                                    </div>
                                                    <div>'.$comp["langues"].'</div>
                                                    <div class="progresbar">
                                                        <div style="background: #1376ba; width: 85%; height: 5px;"> </div>
                                                        <div class="circle"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            ';
                                        }
                                        ?>
                                        
                            
                        
                    
                    </section>