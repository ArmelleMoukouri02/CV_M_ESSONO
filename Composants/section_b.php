
<?php


    $array_competences=array(
        new Competence("Developpement front-end", "HTML5, SASS, VueJS, Angular, JavaFx,..",90),

        new Competence("Developpement back-end", "NodeJS, Drupal 8, Laravel, Kotlin, Java EE 7",80),

        new Competence("Developpement mobile", "Android Kotlin, IOS Swift, Cordova, Flutter", 70),

        new Competence("UI / UX Designer", "Photoshop CC, Adobe XD, Material Design", 80),

        new Competence("Base de données & Big Data", "Oracle 11g, PostgreSQL, Hadoop, Talend DI", 30),

        new Competence("Outils / Environnements", "Visual Paradigm, Git, Docker, K8s, Linux", 80),
    )

?>

<?php foreach($array_competences as $competences){
    $competences->get_composant3();
}
    
    ?>



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