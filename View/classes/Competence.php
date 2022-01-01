<?php 

class Competence{

    public $libelle_group;
    public $langages;
    public $percent;

    public function __construct($nomCompetence,$langages,$percent)
    {
        $this->nomCompetence=$nomCompetence;
        $this->percent=$percent;
        $this->langages=$langages;
    }

    public function get_competence(){
        $libelle_group=100-$this->percent;
        echo '
        <div class="checked " id="checked ">
                        <i class="fas fa-check-square fa-2x " id="myCheck"></i>
                        <div class="properlyProject ">
                        <?php
                            $sql = "SELECT competenceName FROM `competence`";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "$row["competenceName"]";
                            }
                        ?>
                            <div class="mediumBlackText "><b> ' .$this->nomCompetence.' </b> </div>
                            <div class="simpleBlackText "> ' . $this->langages .'</div>
                            <div class="slidecontainer ">
                                <span class="theFulled " style="width:'. $this->percent.'%; "></span>
                                <span class="theEmpty " style="right:'.$libelle_group.'%; "></span>
                            </div>
                        </div>
                        <div class="contentStar">
                            <img src="image/star_24px.png " alt=" " class="smallStar ">
                        </div>
                    </div>';
    }
    public function get_competence_preview(){
        $libelle_group=100-$this->percent;
        echo '
        
        <div class="checked " id="checked ">
                        <i class="fas fa-check-square fa-2x " id="myCheck"></i>
                        <div class="properlyProject ">
                            <div class="mediumBlackText "><b> ' .$this->nomCompetence.' </b> </div>
                            <div class="simpleBlackText "> ' . $this->langages .'</div>
                            <div class="slidecontainer ">
                                <span class="theFulled " style="width:'. $this->percent.'%; "></span>
                                <span class="theEmpty " style="right:'.$libelle_group.'%; "></span>
                            </div>
                        </div>
                        <div class="contentStar">
                            <img src="../image/star_24px.png " alt=" " class="smallStar ">
                        </div>
                    </div>';
    }
}

    $allCompetences =[
        new Competence(
            "Développement front-end",
            "HTML5, SASS, VueJS, Angular, JavaFx",
            90
        ),
        new Competence(
            "Développement back-end",
            "Lavarel, Dupral 8, NodeJS, Kotlin, Java EE 7",
            75
        ),
        new Competence(
            "Développement mobile",
            "Android Kotlin, IOS Swift, Cordova, Flutter",
            80
        ),
        new Competence(
            "UI / UX Design",
            "Photoshop CC, Adobe XD, Material Design",
            65
        ),
        new Competence(
            "Base de données & Big Data",
            "Oracle 11g, PostgreSQL, Hadoop, TalendDI",
            95
        ),
        new Competence(
            "langages / Environnements",
            "Visual Paradigm, Git, Docker, K8s, Linux",
            85
        )
        ];
?>