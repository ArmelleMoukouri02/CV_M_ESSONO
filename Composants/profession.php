<?php

$array_profession=array(
    new Experience_prof("Chef des projets technologiques", "@Ets. M DE M","De juillet 2019", "à ce jour- http://mdm.cm","Chef du projet annuaire-universel.cm de l'ART;"),

    new Experience_prof("Fondateur & DT ","@Startup ChickDev","De juin 2015 ","a ce jour - http://chickdev.com","Realisation de plusieurs sites web et applications web et mobiles"),

    new Experience_prof("Enseignant ","@Institut Universitaire de la cote","De Octobre 2011","a ce jour - http://istdi.net","Analyse. UML & MERISE; BD/SQL. ORACLE & MySQL;Dev. iOS & Android; BI & BIG Data Talend DI & Hadoop. 1<sup>ere</sup>, 2<sup>eme</sup> et 4<sup>eme</sup> annee"),

    new Experience_prof("Developpeur en chef ","@Kayroual group","De Mai 2013", "a Juin 2015 - http://khayroual.com","Realisation de multiples projets logiciels et web, Infographie, ..."),

    new Experience_prof("Responsable commercial ","@BAO Sarl","De Decembre 2012","a Juin 2013 - http://bao-sarl.com","Definition des strategies commerciales, Controle de qualite, suivi, ..."),
)


?>

<div class="experience_professionnelle card">

    
    <div class="entete">
        <div class="entete_information">
            <span><i class="fab fa-buromobelexperte fa-3x"></i></span>
            <div class="entete_info">
                <h3 class="entete_title">Experience professionnelle</h3>
                <p class="header_subtitle competence">Expertise en entreprise</p>
            </div>
        </div>

        <div class="points_3">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </div>
    <div class="bar_defilement">

        <div class="professional_experience_main ">

            <?php 
                foreach($array_profession as $profession){
                    $profession->get_composant();

                }
            ?>

            <!-- <div class="profession">
                <p class="intitule"> Fondateur & DT - <span class="location">@Startup ChickDev</span></p>
                <p class="date">De juin 2015 a ce jour - http://chickdev.com</p>
                <p class="subtitle"> Realisation de plusieurs sites web et applications web et mobiles </p>
                <hr>
            </div>

            <div class="profession">
                <p class="intitule"> Enseignant - <span class="location">@Institut Universitaire de la cote</span>
                </p>
                <p class="date">De Octobre 2011 a ce jour - http://istdi.net</p>
                <p class="subtitle"> "Analyse. UML & MERISE"; "BD/SQL. ORACLE & MySQL";"Dev. iOS & Android"; "BI & BIG Data Talend DI & Hadoop". 1<sup>ere</sup>, 2<sup>eme</sup> et 4<sup>eme</sup> annee
                </p>
                <hr>
            </div>

            <div class="profession">
                <p class="intitule"> Developpeur en chef - <span class="location">@Kayroual group</span></p>
                <p class="date">De Mai 2013 a Juin 2015 - http://khayroual.com</p>
                <p class="subtitle">Realisation de multiples projets logiciels et web, Infographie, ...</p>
                <hr>
            </div>

            <div class="profession">
                <p class="intitule"> Responsable commercial - <span class="location">@BAO Sarl</span></p>
                <p class="date">De Decembre 2012 a Juin 2013 - http://bao-sarl.com</p>
                <p class="subtitle">Definition des strategies commerciales, Controle de qualite, suivi, ...</p>
            </div> -->
        </div>
    </div>
</div>