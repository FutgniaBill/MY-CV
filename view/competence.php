<?php
   
require 'classes/Conpetence.php';
$List_competence=array(
    new Conpetence("developpement front-end","HTML5,SASS,VueJS,Angular,JavaFx",90),

    new Conpetence("developpement back-end","NodeJs,Drupal 8,Laravel,Java EE 7",90),

    new Conpetence("developpement mobile","Android Kotlin,IOS Swift,Cordova,Flutter",90),

    new Conpetence("UI/UX Design","photoshop CC,Adobe XD,Material Design",90)
    

    )

?>
                                

<section id="b" class="competences">
                        
                                         <?php
                                         
                                         foreach($List_competence as $competence){
                                             $competence->get_conpetence();
                                         }
                                         
                                       /* foreach ($com_listes as $comp )
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
                                        }*/
                                        ?> 
                                        
                            
                        
                    
</section>