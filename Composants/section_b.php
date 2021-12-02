
<?php

    $array_competences=array(
        array("intitule"=>"Developpement front-end", "technologies"=>"HTML5, SASS, VueJS, Angular, JavaFx,.."),

        array("intitule"=>"Developpement back-end", "technologies"=>"NodeJS, Drupal 8, Laravel, Kotlin, Java EE 7", "switcher_bar"=>80),

        array("intitule"=>"Developpement mobile", "technologies"=>"Android Kotlin, IOS Swift, Cordova, Flutter"),

        array("intitule"=>"UI / UX Designer", "technologies"=>"Photoshop CC, Adobe XD, Material Design"),

        array("intitule"=>"Base de données & Big Data", "technologies"=>"Oracle 11g, PostgreSQL, Hadoop, Talend DI"),

        array("intitule"=>"Outils / Environnements", "technologies"=>"Visual Paradigm, Git, Docker, K8s, Linux"),
    )

?>

<?php foreach($array_competences as $competences){ ?>

<div class="experience">
    <input checked type="checkbox" class="check">
    <div class="plus_info">
        <div class="skill">
            <h4><?= $competences['intitule']?></h4>
            <i class="fas fa-star" style="color: rgb(201, 40, 40); margin-top: 5px;"></i>
        </div>
        <p class="competence"><?= $competences['technologies']?></p>
        <div class="switcher">
            <div class="switcher_bar" style="width: 90%;"></div>
            <span class="switcher_circle" style="right: 10%;"></span>
        </div>
        
    </div>
</div>

<?php }?>

<!-- <div class="experience"> 
    <input checked type="checkbox" class="check">
    <div class="plus_info">
        <div class="skill">
            <h4>Developpement back-end</h4>
            <i class="fas fa-star" style="color: rgb(201, 40, 40); margin-top: 5px;"></i>
        </div>
        <p class="competence">NodeJS, Drupal 8, Laravel, Kotlin, Java EE 7</p>
        <div class="switcher">
            <div class="switcher_bar" style="width: 80%;"></div>
            <span class="switcher_circle" style="right: 20%;"></span>
        </div>
    </div>
</div>

<div class="experience">
    <input checked type="checkbox" class="check">
    <div class="plus_info">
        <div class="skill">
            <h4>Developpement mobile</h4>
            <i class="fas fa-star" style="color: rgb(201, 40, 40); margin-top: 5px;"></i>
        </div>
        <p class="competence">Android Kotlin, IOS Swift, Cordova, Flutter</p>
        <div class="switcher">
            <div class="switcher_bar" style="width: 60%;"></div>
            <span class="switcher_circle" style="right: 40%;"></span>
        </div>
    </div>
</div>

<div class="experience">
    <input checked type="checkbox" class="check">
    <div class="plus_info">
        <div class="skill">
            <h4> UI / UX Design</h4>
            <i class="fas fa-star" style="color: rgb(201, 40, 40); margin-top: 5px;"></i>
        </div>
        <p class="competence">Photoshop CC, Adobe XD, Material Design</p>
        <div class="switcher">
            <div class="switcher_bar" style="width: 75%;"></div>
            <span class="switcher_circle" style="right: 25%;"></span>
        </div>
    </div>
</div>

<div class="experience">
    <input checked type="checkbox" class="check">
    <div class="plus_info">
        <div class="skill">
            <h4>Base de donnees & Big Data</h4>
            <i class="fas fa-star" style="color: rgb(201, 40, 40); margin-top: 5px;"></i>
        </div>
        <p class="competence">Oracle 11g, PostgreSQL, Hadoop, Talend DI</p>
        <div class="switcher">
            <div class="switcher_bar" style="width: 95%;"></div>
            <span class="switcher_circle" style="right: 5%;"></span>
        </div>
    </div>
</div>

<div class="experience">
    <input checked type="checkbox" class="check">
    <div class="plus_info">
        <div class="skill">

            <h4>Outils / Environnements</h4>
            <i class="fas fa-star" style="color: rgb(201, 40, 40); margin-top: 5px;"></i>
        </div>
        <p class="competence">Visual Paradigm, Git, Docker, K8s, Linux</p>
        <div class="switcher">
            <div class="switcher_bar"></div>
            <span class="switcher_circle"></span>
        </div>
    </div>
</div> -->