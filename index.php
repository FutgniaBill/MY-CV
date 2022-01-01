<?php 
    include ("BD/connexionBD.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESUME PROFIL FUTGNIA BILL</title>
    <link rel="stylesheet" href="css/media_screen.css">
    <link rel="stylesheet" href="css/CV.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.11.2-web/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css"> -->
    <!-- <link rel="stylesheet" href="css/W3shool.css"> -->
</head>

<body>
    <div class="content" id="content">
       <?php
            include ("View/Identification.php") ;
            include ("View/allCompetence.php");
        ?>
       <div class="rigthBigOne" id="rigthBigOne"> 
           <?php
                require "View/experience.php";
                 include ("View/experienceProf.php");
                 include ("View/Loisirs.php");
                 include ("View/experienceAcad.php");
            ?>
       </div>
    </div>
</body>

</html>