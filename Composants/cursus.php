
<?php  


    $array_cursus=array(
        new Experience_aca("DIPET 2 Electronique","ENSET de Douala", "Aout 2016", "Gestion d'eclairage d'une maison(Android + Arduino)"),

        new Experience_aca("Oracle Certified Associate ","@Kentnix Sarl ","Mars 2009","Oracle Database 11g Administration"),

        new Experience_aca("Oracle Certified Associate ","@Kentnix Sarl ","Decembre","SQL 2, SQL 3, XML"),

        new Experience_aca("Licence professionnelle ","@Douala Institute of Tech." ,"Octobre 2008","Telecommunication & Reseaux"),

        new Experience_aca("DEC / BTS","@CCNB Dieppe - Canada. ", "Septembre 2007", "Electrotechnique, mention BIEN(major de centre)"),
    );

    

?>

                

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

                $cursusacademique->get_composants();
             }
            ?>

            

            

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