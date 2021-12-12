<?php
require 'classes/Exper_prof.php';
$List_Exp_prof=array(
    new Exper_prof("Chef des projets technologiques -","@Ets. M DE M","De juillet 2019 à ce jour - http://mdem.cm","Chef du projet annuaire-universel.cm de l'ART"),

    new Exper_prof("Fondateur & DT -","@Startup ChickDev","De Juin 2015 à ce jour - http://chikdev.cm","Réalisation de plusieurs sites web et applications mobiles"),

    new Exper_prof("Enseignant -","@INSTITUT UNIVERSITAIRE DE LA CÔTE","De Octobre 2011 à ce jour - http://istdi.cm","Analyse UML, Merise, Dev android, IOS, big data"),

    new Exper_prof("Developpeur en chef -","@Kayroual group","De Mai 2013 à Juin 2015 - http://khayroual.cm","Réalisation de multiples projets et web"),

   new Exper_prof ("Responsable commercial-","@BAO Sarl","De Decmbre 2012 à Juin 2013 - http://bao-sarl.cm","Définition des stratégies commerciales, contrôle de qualité"),

    new Exper_prof ("Responsable marketing-","@Ets. M DE M","De juillet 2019 à ce jour - http://mdem.cm","Chef du projet annuaire-universel.cm de l'ART"),

);
$l1="img/l2.png";
$l2="img/l3.png";
$l3="img/l6.png";
$l4="img/l1.png";
$l5="img/l4.png";
$l5="img/l5.png";
require 'classes/interets.php';
    $List_interets=array(
        new interets($l1),
    
        new interets($l2),
    
        new interets($l3),
    
        new interets($l4),
    
        new interets($l5)
    );
require 'classes/Langue.php';
    $List_langues=array(
        new Langue("Français")
        )

?>

 


<?php
require 'classes/Exper_acad.php';
    $List_Exp_Acad=array(
        new Exper_acad("DIPET 2 Electrotechnique","-@Enset de Douala","Août 2016","Gestion d'éclairage d'une maison (arduino + Android)"),
    
        new Exper_acad("Oracle certified Associate","-@Kentnix Sarl","Mars 2009","Oracle Database 11g Administration"),
    
        new Exper_acad("Oracle SQL Certified","-@Kentnix Sarl","Dec 2008","SQL 2, SQL 3, XML"),
    
        new Exper_acad("DIPET 2 Electrotechnique","-@Enset de Douala","Août 2016","Gestion d'éclairage d'une maison (arduino + Android)"),
    
        new Exper_acad("Oracle certified Associate","-@Kentnix Sarl","Mars 2009","Oracle Database 11g Administration"),
    
        new Exper_acad("Oracle SQL Certified","-@Kentnix Sarl","Dec 2008","SQL 2, SQL 3, XML"),
    );
$img_experience="img/experiences.png";
$title_exp="Experience professionnel";
$title_exp2="expertise en entreprise";
$img_menu="img/menu.png";
$check1="img/cocher.png";
$check2="img/cocher.png";
$title_pasTps="Points d'interets";
$simple_past="simple passe temps pour se faire un peu plaisir";
$icon_stud="img/student_26px.png";
$icon_menu="img/menu.png";
$old_year=2011;
$recent_year=2021;
$Total_exp= ($recent_year - $old_year);
?>

<section id="c" class="potentiel">
    <div class="card">
                <div class="section_body">
                    <div class="section_body1">
                        <div class="expertise">
                            <div class="head">
                                <div class="expert">
                                    <img class="taillebigIcon" src="<?php echo $img_experience;?>" alt="">
                                    <div style="width: auto; margin-left: 8px;">
                                        <div id="arange1"><?php echo $title_exp,"&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp $Total_exp";?></div>
                                        <div id="arange"><?php echo $title_exp2;?></div>
                                    </div>

                                </div>
                            </div>
                            <img style="margin-right: 20px;" class="taillebigIcon" src="<?php echo $img_menu;?>" alt="">
                        </div>

                        <div class="expertise_list">
                            <div class="scrol">
                            <?php
                                         
                                         foreach($List_Exp_prof as $exper_prof){
                                             $exper_prof->get_Exper_prof();
                                         }
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="loisirs">
                        <div class="passe_temps">
                            <h1><?php echo $title_pasTps;?></h1>
                            <div style="margin-bottom: 10px;"><?php echo $simple_past;?></div>
                                <div class="detailsinteret">
                                    <?php
                                            
                                            foreach($List_interets as $interet){
                                                            $interet->get_interets();
                                            }
                                    ?>
                                </div>
                        </div>
                        <div class="language">
                            <h1><?php echo "Langues";?></h1>
                            <div> <?php echo "pratiquées en entreprise";?></div>
                            <div class="list_language">
                            <div class="lang">
                                <img src="<?php echo $check1;?>" alt="">
                                
                                <?php
                                            
                                            foreach($List_langues as $langue){
                                                            $langue->get_Langues();
                                            }
                                            
                                ?>
                            </div>
                            

                            </div>
                        </div>
                    </div>
                    
                    <div class="section_body">
                        <div class="section_body1">
                            <div class="expertise">
                                <div class="head">
                                    <div class="expert">
                                        <img class="taillebigIcon" src="<?php echo $icon_stud;?>" alt="">
                                        <div style="width: auto; margin-left: 8px;">
                                            <div  id="arange1"><?php echo "Cursus Académique";?></div>
                                            <div  id="arange"><?php echo "Diplôme et formations certifiantes";?></div>
                                        </div>
        
                                    </div>
                                </div>
                                <img style="margin-right: 20px;" class="taillebigIcon" src="<?php echo $icon_menu;?>" alt="">
                            </div>
        
                            <div class="expertise_list">
                                <div class="scrol">
                                <?php
                                         
                                         foreach($List_Exp_Acad as $exper_acad){
                                             $exper_acad->get_Exper_acad();
                                         }
                                ?>
                                    
                                </div>
                            </div>
                        </div>
                </div>
     </div>
</section>