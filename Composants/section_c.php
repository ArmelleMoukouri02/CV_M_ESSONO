
<?php  

    $array_cursus=array(
        array("diplome" => "DIPET 2 Electronique","ecole" => "ENSET de Douala","date" => "Aout 2016","role" => "Gestion d'eclairage d'une
        maison(Android + Arduino)"),

        array("diplome" => "Oracle Certified Associate ","ecole" => "@Kentnix Sarl ","date" => "Mars 2009","role" => "Oracle Database 11g
        Administration"),

        array("diplome" => "Oracle Certified Associate ","ecole"=> "@Kentnix Sarl ","date" => "Decembre","role" => "SQL 2, SQL 3, XML"),

        array("diplome" => "Licence professionnelle ","ecole"=> "@Douala Institute of Tech." , "date" => "Octobre 2008","role" => "Telecommunication & Reseaux"),

        array("diplome" => "DEC / BTS","ecole"=> "@CCNB Dieppe - Canada. ","date" => "Septembre 2007","role" => "Electrotechnique, mention
        BIEN(major de centre)"),
    );

    $array_profession=array(
        array("profession_pro"=>"Chef des projets technologiques -", "entreprise"=>"@Ets. M DE M", "date_pro"=>"De juillet 2019 a ce jour - http://mdm.cm", "role_pro"=>"Chef du projet annuaire-universel.cm de l'ART;"),

        array("profession_pro"=>"Fondateur & DT -", "entreprise"=>"@Startup ChickDev", "date_pro"=>"De juin 2015 a ce jour - http://chickdev.com", "role_pro"=>"Realisation de plusieurs sites web et applications web et mobiles"),

        array("profession_pro"=>"Enseignant -", "entreprise"=>"@Institut Universitaire de la cote", "date_pro"=>"De Octobre 2011 a ce jour - http://istdi.net", "role_pro"=>"Analyse. UML & MERISE; BD/SQL. ORACLE & MySQL;Dev. iOS & Android; BI & BIG Data Talend DI & Hadoop. 1<sup>ere</sup>, 2<sup>eme</sup> et 4<sup>eme</sup> annee"),

        array("profession_pro"=>"Developpeur en chef -", "entreprise"=>"@Kayroual group", "date_pro"=>"De Mai 2013 a Juin 2015 - http://khayroual.com", "role_pro"=>"Realisation de multiples projets logiciels et web, Infographie, ..."),

        array("profession_pro"=>"Responsable commercial - ", "entreprise"=>"@BAO Sarl", "date_pro"=>"De Decembre 2012 a Juin 2013 - http://bao-sarl.com", "role_pro"=>"Definition des strategies commerciales, Controle de qualite, suivi, ..."),
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
                        ?>

                        <div class="profession">
                            <p class="intitule"> <?= $profession['profession_pro']?>- <span class="location"><?= $profession['entreprise']?></span>
                            </p>
                            <p class="date"><?= $profession['date_pro']?></p>
                            <p class="subtitle"> <?= $profession['role_pro']?></p>
                            <hr>
                        </div>

                        <?php } ?>
    
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

            <div class="divertissement">
                <div class="point_interet card">
                    <h3>Points d'interets</h3>
                    <p class="header_subtitle"> Simple passe temps pour se faire un peu plaisir </p>
                    <div class="logo_divertissement">
                        <img src="img/photo_7.jpg" style="height: 50px;" alt="">
                        <img src="img/photo_9.jpg" style="height: 30px;" alt="">
                        <img src="img/photo1.jpg" alt="">
                    </div>
                    <div class="logo_divertissement">
                        <img src="img/photo_8.jpg" style="height: 50px;" alt="">
                        <img src="img/photo4.jpg" style="height: 40px;" alt="">
                        <img src="img/photo_5.jpg" style="height: 30px;" alt="">
                        <img src="img/photo_6.jpg" style="height: 40px;" alt="">
                    </div>

                </div>

                <div class=" langue card">
                    <h3>Langue</h3>
                    <p class="header_subtitle"> Pratiquées en entreprise </p>
                    <div class="langue_check">
                        <input class="check" type="checkbox" checked style="color: #185383;">
                        <label for="">Francais</label>
                    </div>
                    <div class="langue_check">
                        <input class="check" type="checkbox" checked>
                        <label for="">Anglais</label>
                    </div>
                </div>

            </div>

            <div class="cursus card">

                <div class="entete">
                    <div class="entete_information">
                        <span><i class="fas fa-graduation-cap fa-3x"></i></span>
                        <div class="entete_info">
                            <h3 class="entete_title">Cursus academique</h3>
                            <p class="header_subtitle competence">Diplomes et formations certifiantes</p>
                        </div>
                    </div>

                    <div class="points_3">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                </div>

                <div class="bar_defilement">

                    <div class="cursus_academique">

                        <?php 
                        foreach($array_cursus as $cursusacademique){

                        ?>

                        <div class="profession">
                            <p class="intitule"> <?= $cursusacademique['diplome']?> <span class="location"><?= $cursusacademique['ecole']?></span></p>
                            <p class="date_cursus"> <span class="date"><?= $cursusacademique['date']?>- </span> &nbsp; <span class="cursus_role"><?= $cursusacademique['role']?></span> </p>
                            <hr>
                        </div>

                        <?php } ?>
    
                        <!-- <div class="profession">
                            <p class="intitule"> Oracle Certified Associate - <span class="location">@Kentnix Sarl</span></p>
                            <p class="date_cursus"> <span class="date">Mars 2009 -</span> &nbsp; <span class="cursus_role">Oracle Database 11g
                                    Administration</span> </p>
                            <hr>
                        </div>
    
                        <div class="profession">
                            <p class="intitule"> Oracle SQL Certified - <span class="location">@Kentnix Sarl</span></p>
                            <p class="date_cursus"> <span class="date">Decembre - </span> &nbsp; <span class="cursus_role">SQL 2, SQL 3, XML</span> </p>
                            <hr>
                        </div>
    
                        <div class="profession">
                            <p class="intitule"> Licence professionnelle - <span class="location">@Douala Institute of
                                    Tech.</span></p>
                            <p class="date_cursus"> <span class="date"> Octobre 2008 - </span> &nbsp; <span class="cursus_role">Telecommunication &
                                    Reseaux</span> </p>
                            <hr>
                        </div>
    
                        <div class="profession">
                            <p class="intitule"> DEC / BTS - <span class="location">@CCNB Dieppe - Canada.</span></p>
                            <p class="date_cursus"> <span class="date"> Septembre 2007 - </span> &nbsp; <span class="cursus_role"> Electrotechnique, mention
                                    BIEN(major de centre) </span> </p>
                            <hr>
                        </div> -->

                    </div>

                </div>
            </div>