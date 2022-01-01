<?php
setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set('Europe/Paris');
require 'classes/Personne.php';
?> 
<!-- Profil utilisateur-->
<div class="Identification">
    <div class="background-image" style="background: url('<?php echo $pernonne1->getPhotoCouverture() ?>');background-size: cover;">
        <div class="recherche" id="recherche">
            <img src="image/menu_filled_50px.png" alt="" class="icon_size" id="icon_size">
            <input type="search" placeholder="Besoin d'un chef de projet ?" class="inp">
            <img src="image/search_50px.png" alt="" class="smallIcon" id="smallIcon">
            <img src="image/vertical.png" alt="" class="smallIcon" id="smallIcon">
            <img src="image/delete.svg" alt="" class="smallIcon" id="smallIcon">
        </div>
        <div class="info" id="info">
            <img src="<?php echo $pernonne1->getPhotoProfil() ?>" alt="" class="pp">
            <div style="margin-left: 20px;">
                <div class="nom"> <b> <?php echo $pernonne1->getNom(). " " . $pernonne1->getPrenom() ?> </b> </div>
                <div class="text"><?php echo $pernonne1->getMetier() ?></div>
            </div>
        </div>
    </div> 
    <div class="general_info" id="general_info">

       <!-- drop down : Modal  -->
        <div class="smallCircleButtonTree" id="smallCircleButtonTree" data-toggle="modal" data-target="#">
            <form action="#" method="post" style="width: inherit; height:inherit;">
                <button style="width: inherit; height:inherit;border:none;border-radius:50%;background-color:inherit;">
                <img src="img/edit.png" alt="" srcset="" class="sentedIcon" id="sentedIcon3"></button>
            </form>
        </div>
        <div class="smallCircleButtonOne" id="smallCircleButtonOne" data-toggle="modal" data-target="#myPdfModal">
                <button style="width: inherit; height:inherit;border:none;border-radius:50%;background-color:inherit;">
                <img src="image/pdf_2_48px.png" alt="" srcset="" class="sentedIcon" id="sentedIcon1" >
        </div>
        <div class="smallCircleButtonTwo" id="smallCircleButtonTwo"  data-toggle="modal" data-target="#myModal">
                <button style="width: inherit; height:inherit;border:none;border-radius:50%;background-color:inherit;">
                <img src="image/gmail_48px.svg" alt="" srcset="" class="sentedIcon" id="sentedIcon2">
        </div>
        <div class="circleButton" id="circleButton" onclick="myScript()">
            <img src="img/plus.png" alt="" class="sentIcon" id="sentIcon">
            <img src="image/delete_sign_32px.png" alt="" class="deleteIcon" id="deleteIcon">
        </div>
        <!-- </div>  -->
        <!-- Info personnel (bitrhday, contact) -->
        <div class="naissance" id="naissance">
            <img src="image/naissance.png" alt="" class="icon_size">
            <div style="margin-left: 20px; width:100%;">
                <div class="text">Née le <?php echo utf8_encode(strftime("%d %B %Y",strtotime($pernonne1->getDateNaissance()))) ?></div>
                <div class="text">Originaire de <?php echo $pernonne1->getRegionOrigine(). " " . $pernonne1->getPaysOrigine() ?></div>
                <div class="text"><?php echo $pernonne1->getStatutMatrimonial() ?>,
                    <?php
                    if ($pernonne1->getnombreEnfant() < 1) {
                        echo "Pas d'enfant";
                    } elseif ($pernonne1->getNombreEnfant() == 1) {
                        echo $pernonne1->getNombreEnfant() . " enfant";
                    } else {
                        echo $pernonne1->getNombreEnfant() . " enfants";
                    }
                    ?>
                    - Santé <?php echo $pernonne1->getStatutSante() ?></div>
                <div class="separator"></div>
            </div>
        </div>

        <div class="address" id="address">
            <img src="image/location_filled_50px.png" alt="" class="icon_size">
            <div style="margin-left: 20px; width:100%;">
                <div class="text">Resident à <?php echo $pernonne1->getQuartier() ?></div>
                <div class="text"> <?php echo $pernonne1->getVilleResidence() ?> - <?php echo $pernonne1->getPaysResidence() ?></div>
                <div class="oneLineText">
                    <div class="text">Map : </div>
                    <div class="Text_form"> <?php echo $pernonne1->getLongituteResidence()." . ".$pernonne1->getLatitudeResidence() ?></div>
                </div>
                <div class="separator"></div>
            </div>
        </div>

        <div class="phone_number" id="phone_number">
            <img src="image/phone_24px.png" alt="" class="icon_size">
            <div style="margin-left: 20px; width:100%;">
                <div class="text">(+237) <?php echo $pernonne1->getTelephone() ?></div>
                <div class="Text_form"> <?php echo $pernonne1->getContactMobile() ?></div>
                <div class="separator"></div>
            </div>
        </div>
        <div class="email" id="email">
            <img src="image/filled_message_24px.png" alt="" class="icon_size">
            <div style="margin-left: 20px; width:100%;">
                <div class="text"> <?php echo $pernonne1->getMail() ?></div>
                <div class="Text_form"> <?php echo $pernonne1->getContactElectronique() ?></div>
            </div>
        </div>
    </div>
<!-- Barre de navigation -->
    <div class="PCA" id="PCA">
        <div class="PCA_element">
            <div class="contentSlideBar">
                <div class="text" style=" margin-bottom: 10px;">+ <?php echo $pernonne1->getNombreProjet() ?> projets </div>
            </div>
            <div class="Text_form " style="margin-bottom: 10px; ">+ <?php echo $pernonne1->getNombreContrat() ?> contrats</div>
            <div class="Text_form " style="margin-bottom: 10px; ">+ <?php echo $pernonne1->getAnneeExperience() ?> ans d'Exp</div>
        </div>
    </div>
    <div class="contentRedBar">
        <div class="soulign"></div>
    </div>
</div>

<!-- Envoie d'email -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Envoyer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" >
                <div style="display: flex;justify-content:center;" >
                        <div style="display: flex;flex-flow:column;align-items:center;">  
                        <i class="fas fa-spinner loadingImage" id="loadingIcon1"></i>
                        </div>
                </div>
                <form method="get" action="mail.php">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input type="text" class="form-control" id="receptionEmail" name="receptionEmail" style="width: 94%;" placeholder="exemple@gmail.com..." required>

                        <div class="modal-footer" style="display:flex; justify-content:space-between;">
                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button onclick="sendButton();" type="submit" name="sendEmailButton" class="btn btn-primary" >Envoyer</button>
                        </div>
                       
                    </div>
                </form>
           </div>
        </div>
    </div>
</div>

<!-- cas d'envoie avec succès -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Envoie Reussi !</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cancelButton();">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" >
                    <form method="" action="sendMail.php">
                        <div style="display: flex;justify-content:center;" >
                            <div style="display: flex;flex-flow:column;align-items:center;">
                            <i class="fas fa-check-circle appearImage " style="color: green;"></i>
                            <i class="fas exclamation-triangle appearImage " style="color: tomato;"></i>
                            </div>
                        </div>
                            <div class="modal-footer" style="display:flex; justify-content:flex-end;">
                                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="cancelButton();">OK</button>
                            </div>
                    </form>
            </div>
            </div>
        </div>
</div>

<!-- cas d'echec d'envoie -->
<div class="modal fade" id="failedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
<div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Echec de l'envoie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cancelButton();">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" >
                <div style="display: flex;justify-content:center;" >
                    <div style="display: flex;flex-flow:column;align-items:center;">  
                    <i class="fas fa-exclamation-triangle appearImage" id ="errorImage" style="color: tomato;"></i>
                    <h6 class="modal-title" id="exampleModalLabel"><?php echo $_SESSION["feedBack"] ?></h6>
                    </div>
                </div>
                <form method="get" action="sendMail.php">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <?php 
                            if(isset($_SESSION["resentMail"])){
                                $resentEmail=$_SESSION["resentMail"];
                                
                            }
                        ?>
                        <input type="text" value="<?php echo $resentEmail ?>" class="form-control" id="receptionEmail" name="receptionEmail" style="width: 94%;" placeholder="exemple@gmail.com..." required>

                        <div class="modal-footer" style="display:flex; justify-content:space-between;">
                            <button type="button" onclick="cancelButton();" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button onclick="resendButton();" type="submit" name="sendEmailButton" class="btn btn-primary" >Renvoyer</button>
                        </div>
                       
                    </div>
                </form>
           </div>
        </div>
    </div>
</div>



<script>
    function myScript() {
        if(document.getElementById('circleButton').className == 'circleButton'){
            document.getElementById('circleButton').className='activeCircleButton';
            document.getElementById('sentIcon').className = 'unactiveImage';
            document.getElementById('deleteIcon').className = 'activeImage';
            document.getElementById('smallCircleButtonTwo').className ='activeSmallCircleButtonTwo';
            document.getElementById('smallCircleButtonTree').className ='activeSmallCircleButtonTree';
            document.getElementById('sentedIcon1').className ='sentIcon';
            document.getElementById('sentedIcon2').className ='sentIcon';
            document.getElementById('sentedIcon3').className ='sentIcon';
        }
        else{
            document.getElementById('circleButton').className='circleButton';
            document.getElementById('sentIcon').className = 'sentIcon';
            document.getElementById('deleteIcon').className= 'unactiveImage';
            document.getElementById('smallCircleButtonTwo').className ='smallCircleButtonTwo';
            document.getElementById('smallCircleButtonTree').className ='smallCircleButtonTree';
            document.getElementById('sentedIcon1').className ='sentedIcon';
            document.getElementById('sentedIcon2').className ='sentedIcon';
            document.getElementById('sentedIcon3').className ='sentedIcon';
        }
    }
    function sendButton(){
        if(document.getElementById('loadingIcon1').className='fas fa-spinner loadingImage'){
            document.getElementById('loadingIcon1').className='fas fa-spinner loadingImageActive';
        }
    }
    function resendButton(){
        if(document.getElementById('errorImage').className='fas fa-exclamation-triangle appearImage'){
            document.getElementById('errorImage').className='fas fa-spinner appeaurToloadingImageActive';
        }
    }
    function cancelButton(){
        if(document.getElementById('successModal').className='modal fade show'){
            $("#successModal").modal("hide");          
        }
        if(document.getElementById('failedModal').className='modal fade show'){
            $("#failedModal").modal("hide");
        }
    }
    function recancelButton(){}
</script>