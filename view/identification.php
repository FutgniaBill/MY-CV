<?php
 $img_backg = "img/sombre.jpg";
 $img_menu = "img/menu_filled_50px.png";
 $img_srch ="img/search_50px.png";
 $img_barre="img/vertical.png";
 $img_close="img/close.png";
 $img_prof="img/bill.jpg";
 $nom="FUTGNIA BILL";
 $metier="Data analist / web developer";
 $btn_send="img/send.png";
 $btn_birth="img/birthday_cake_24px.png";
 $localisation ="img/location_filled_50px.png";
 $phone="img/phone_24px.png";
 $email="img/mail_filled_50px.png";
 $txt_date="nee le 29 mars 2001";
 $txt_origin="originaire de l'ouest cameroun";
 $statut_m ="Célibataire - Santé RAS";
 $residence="Résidant à Logbessou";
 $ville="Douala - Cameroun";
 $map="MAP: 4.0532276,9.765047";
 $number="(+237) 690 898 428";
 $suivie="Mobile, Telegram, Whatsapp";
 $txt_email="billwilfriedfutgnia@gmail.com";
 $moteur_search="Google+, Twitter, Linkedin,Github";
 $nav1="+20 PROJETS";
 $nav2="+5 CONTRATS";
 $nav3="10 ANS D'EXP";
?>

<section id="a" class="identification">
                    <div class="first">
                        <div class="profil" style="background-image: url(<?php echo $img_backg;?>); height: 400px;background-size: cover; width: 100%;">
                            <div class="recherche">
                                <img src="<?php echo $img_menu;?>" alt="">
                                <input  class="inp" type="text" placeholder="Besoin d'un data analist?">
                                <img src="<?php echo $img_srch;?>" class="srch" alt="">
                                <img src="<?php echo $img_barre;?>" class="srch" alt="">
                                <img src="<?php echo $img_close;?>" class="srch" alt="">
                            </div>
                            <div class="name_pict">
                                <img class="picture" src="<?php echo $img_prof;?>" alt="">
                                    <div class="nom">
                                        <div class="text-1"><?php echo $nom;?></div>
                                        <div class="text-2"><?php echo $metier;?></div>
                                    </div>
                            </div>

                        </div>
                        <div class="about">
                            <div class="btn_envoyer">
                                <img id="btn_env" src="<?php echo $btn_send;?>" alt="">
                            </div>
                            <div class="info"></div>
                                <div class="naissance">
                                    <div class="date_naissance">
                                        <img style="margin-right: 35px;margin-top: -10px;" class="taillebigIcon" src="<?php echo $btn_birth;?>"
                                        alt="">
                                    </div>
                                    <div class="lieu_nais">
                                        <div class="text"><?php echo $txt_date;?></div>
                                        <div class="text"><?php echo $txt_origin;?></div>
                                        <div class="text"><?php echo $statut_m;?></div>
                                        <hr color="#ffffff">
                                    </div>
                                </div>
                                <div class="naissance">
                                    <div class="date_naissance">
                                        <img style="margin-right: 35px;margin-top: -10px;" class="taillebigIcon" src="<?php echo $localisation;?>"
                                        alt="">
                                    </div>
                                    <div class="lieu_nais">
                                        <div class="text"><?php echo $residence;?></div>
                                        <div class="text"><?php echo $ville;?></div>
                                        <div class="text"><?php echo $map;?></div>
                                        <hr color="#ffffff">
                                    </div>
                                </div>
                                <div class="naissance">
                                    <div class="date_naissance">
                                        <img style="margin-right: 35px;margin-top: -10px;" class="taillebigIcon" src="<?php echo $phone;?>"
                                        alt="">
                                    </div>
                                    <div class="lieu_nais">
                                        <div class="text"><?php echo $number;?></div>
                                        <div class="text"><?php echo $suivie;?></div>
                                        
                                        <hr color="#ffffff">
                                    </div>
                                </div>
                                <div class="naissance">
                                    <div class="date_naissance">
                                        <img style="margin-right: 35px;margin-top: -10px;" class="taillebigIcon" src="<?php echo $email;?>"
                                        alt="">
                                    </div>
                                    <div class="lieu_nais">
                                        <div class="text"><?php echo $txt_email;?></div>
                                        <div class="text"><?php echo $moteur_search;?></div>
                                        
                                        <hr color="#ffffff">
                                    </div>
                                </div>
                                
                                <div class="nav">
                                    <ul>
                                        <li><a class="a1" href="#home"><?php echo $nav1;?></a></li>
                                        <li><a href="#news"><?php echo $nav2;?></a></li>
                                        <li><a href="#contact"><?php echo $nav3;?></a></li>
                                    </ul>
                                </div>
                                
                            </div>


                        </div>
                    <!-- </div> -->
                <?php 
                include("competence.php");
                ?>
            </section>