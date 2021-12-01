<?php
$Expertise_listes= array(
    array(
        "diplome" => "DIPET 2 Electrotechnique",
        "lieu" => "-@Enset de Douala",
        "year" => "Août 2016",
        "project" => "Gestion d'éclairage d'une maison (arduino + Android)"
    ),
    array(
        "diplome" => "Oracle certified Associate",
        "lieu" => "-@Kentnix Sarl",
        "year" => "Mars 2009",
        "project" => "Oracle Database 11g Administration"
    ),
    array(
        "diplome" => "Oracle SQL Certified",
        "lieu" => "-@Kentnix Sarl",
        "year" => "Decembre 2008",
        "project" => "SQL 2, SQL 3, XML"
    ),
    array(
        "diplome" => "Licence professionnelle",
        "lieu" => "-@Douala Institute of Tech.",
        "year" => "Octobre 2008",
        "project" => " Télécommunication / Réseaux"
    ),
    array(
        "diplome" => "DEC /BTS ",
        "lieu" => "- @CCNB Dieppe - Canadal",
        "year" => "Mars 2009",
        "project" => "Programmation Appliquée pour internet"
    ),
    array(
        "diplome" => "Baccalauréat",
        "lieu" => "-@Lycée Technique de Douala Bassa",
        "year" => "Juin 2005",
        "project" => "Electrotechnique, mention BIEN (major du centre)"
    ),
    );
$img_experience="img/experiences.png";
$title_exp="Experience professionnel";
$title_exp2="expertise en entreprise";
$img_menu="img/menu.png";
$expertise1="Chef des projets technologiques -";
$expertise2="Fondateur & DT -";
$expertise3="Enseignant -";
$expertise4="Developpeur en chef -";
$expertise5="Responsable commercial-";
$expertise6="Responsable marketing-";
$espert_year1="De juillet 2019 à ce jour - http://mdem.cm";
$espert_year2="De Juin 2015 à ce jour - http://chikdev.cm";
$espert_year3="De Octobre 2011 à ce jour - http://istdi.cm";
$espert_year4="De Mai 2013 à Juin 2015 - http://khayroual.cm";
$espert_year5="De Decmbre 2012 à Juin 2013 - http://bao-sarl.cm";
$espert_year6="De juillet 2019 à ce jour - http://mdem.cm";
$poste1="Chef du projet annuaire-universel.cm de l'ART";
$poste2="Réalisation de plusieurs sites web et applications mobiles";
$poste3="Analyse UML, Merise, Dev android, IOS, big data";
$poste4="Réalisation de multiples projets et web";
$poste5="Définition des stratégies commerciales, contrôle de qualité";
$poste6="Chef du projet annuaire-universel.cm de l'ART";
$title_pasTps="Points d'interets";
$simple_past="simple passe temps pour se faire un peu plaisir";
$l1="img/l2.png";
$l2="img/l3.png";
$l3="img/l6.png";
$l4="img/l1.png";
$l5="img/l4.png";
$l5="img/l5.png";
$check1="img/cocher.png";
$check2="img/cocher.png";
$icon_stud="img/student_26px.png";
$icon_menu="img/menu.png";
$old_year=2011;
$recent_year=2021;
$Total_exp= ($recent_year - $old_year);
?>

<section id="c" class="potentiel">
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
                                <div class="expertise_detail">
                                    <div class="work_post" id="arange_text"><?php echo $expertise1,"<b> @Ets. M DE M</b>";?></div>
                                    <div class="work_periode" id="arange_text" style="color: blue;"><?php echo $espert_year1;?></div>
                                    <div class="work_realize" id="arange_text"><?php echo $poste1;?></div>
                                    <div class="barre_division" >
                                        <hr color="#f0f0f0">
                                    </div>
                                </div>
                                <div class="expertise_detail">
                                    <div class="work_post" id="arange_text"><?php echo $expertise2,"<b> @Startup ChickDev</b>";?></div>
                                    <div class="work_periode" id="arange_text" style="color: blue;"><?php echo $espert_year2;?></div>
                                    <div class="work_realize" id="arange_text"><?php echo $poste2;?></div>
                                    <div class="barre_division">
                                        <hr color="#fafafa">
                                    </div>
                                </div>
                                <div class="expertise_detail">
                                    <div class="work_post" id="arange_text"><?php echo $expertise3,"<b> @INSTITUT UNIVERSITAIRE DE LA CÔTE</b>";?></div>
                                    <div class="work_periode" id="arange_text" style="color: blue;"><?php echo $espert_year3;?></div>
                                    <div class="work_realize" id="arange_text"><?php echo $poste3;?></div>
                                    <div class="barre_division">
                                        <hr color="#f0f0f0">
                                    </div>
                                </div>
                                <div class="expertise_detail">
                                    <div class="work_post" id="arange_text"><?php echo $expertise4,"<b> @Kayroual group</b>";?></div>
                                    <div class="work_periode" id="arange_text" style="color: blue;"><?php echo $espert_year4;?></div>
                                    <div class="work_realize" id="arange_text"><?php echo $poste4;?></div>
                                    <div class="barre_division">
                                        <hr color="#f0f0f0">
                                    </div>
                                </div>
                                <div class="expertise_detail">
                                <div class="work_post" id="arange_text"><?php echo $expertise4,"<b> @BAO Sarl</b>";?></div>
                                <div class="work_periode" id="arange_text" style="color: blue;"><?php echo $espert_year5;?></div>
                                <div class="work_realize" id="arange_text"><?php echo $poste5;?></div>
                                <div class="barre_division">
                                    <hr color="#f0f0f0">
                                </div>
                                </div>
                                <div class="expertise_detail">
                                    <div class="work_post" id="arange_text"><?php echo $expertise4,"<b> @BAO Sarl</b>";?></div>
                                    <div class="work_periode" id="arange_text" style="color: blue;"><?php echo $espert_year6;?></div>
                                    <div class="work_realize" id="arange_text"><?php echo $poste6;?></div>
                                    <div class="barre_division">
                                        <hr color="#f0f0f0">
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="loisirs">
                        <div class="passe_temps">
                            <h1><?php echo $title_pasTps;?></h1>
                            <div style="margin-bottom: 10px;"><?php echo $simple_past;?></div>
                            <div class="detailsinteret">
                                <div class="det1">
                                <img src="<?php echo $l1;?>" alt="">
                                <img src="<?php echo $l2;?>" alt="">
                                <img src="<?php echo $l3;?>" alt="">
                                </div>
                                <div class="det2">
                                <img src="<?php echo $l4;?>" alt="">
                                <img src="<?php echo $l5;?>" alt="">
                                <img src="<?php echo $l6;?>" alt="">
                                </div>
                            
                            </div>
                        </div>
                        <div class="language">
                            <h1><?php echo "Langues";?></h1>
                            <div> <?php echo "pratiquées en entreprise";?></div>
                            <div class="list_language">
                                <div class="lang">
                                    <img src="<?php echo $check1;?>" alt="">
                                    <div><?php echo "Français";?></div>
                                </div>
                                <div class="lang">
                                    <img src="<?php echo $check2;?>" alt="">
                                    <div><?php echo "Anglais";?></div>
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
                                        foreach ($Expertise_listes as $expertis )
                                        {
                                            echo '
                                            <div class="expertise_detail">
                                                <div class="work_post"  id="arange_text">'.$expertis["diplome"].'<b>'.$expertis["lieu"].'</b></div>
                                                <div class="work_periode" id="arange_text" style="color: blue;">'.$expertis["year"].'</div> <div id="arange_text">'.$expertis["project"].'</div>
                                                <div class="barre_division">
                                                    <hr color="#f0f0f0">
                                                </div>
                                            </div>
                                            ';
                                        }
                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                </div>
            </section>