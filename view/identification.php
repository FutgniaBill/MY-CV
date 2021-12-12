

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
    <div class="card">
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
                        <div class="modal fade" id="exampleModal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5>Envoyer un message</h5>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="../MY-CV/mail.php">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Adresse mail:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="adresseMail">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                            <button type="submit" class="btn btn-primary">Envoyer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
</div>
                        <div class="about">
                        <div class="dropdown">
                            <div class="btn_plus"  id="btn" ><i class="fas fa-plus fa-3x" id="btnplus" ></i>
                                <i class="fas fa-times fa-3x" id="btnfois" style="display: none;"></i>
                            </div>

                            <div class="btnsend" id="plus">
                                    <a class="awe"><i class="fas fa-arrow-circle-down fa-2x" style="text-decoration:none; color:#fff;" ></i></a><br> 
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="awi"><i class="fas fa-share-alt-square fa-2x"  style="text-decoration: none;color:#fff;"></i> </a><br> 
                             </div>                             
                        
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
                
       
        <script>
                let btnplus =document.getElementById("btnplus");
                btnplus.addEventListener('click',affiche,false);
                let btnfois =document.getElementById("btnfois");
                btnfois.addEventListener('click',fermer,false);

                let plus=document.getElementById("plus");
               

                function affiche(){

                    plus.style.display="block";
                    btnplus.style.display="none";
                    btnfois.style.display="block";
                }
                function fermer(){
                    plus.style.display="none";
                    btnfois.style.display="none";
                    btnplus.style.display="block";
                }
        </script>
                   
                <?php 
                include("competence.php");
                ?>
    </div>
</section>
    