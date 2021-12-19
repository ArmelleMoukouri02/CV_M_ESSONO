<?php  
    require "src/competence.php";
    require "src/personne.php";
    require "src/experience_prof.php";
    require "src/interets.php";
     require "src/experience_aca.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css”>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>CV</title>
</head>
<body>
    <div class="container">

        <!-- BLOC GAUCHE_HAUT -->

        <section class="a">
            <?php 
            
                require_once('Composants/section_a.php');

            ?>
        </section>


        <!-- BLOC GAUCHE_BAS -->

        <section class="b">
            <?php
            
                require_once('Composants/section_b.php');

            ?>
        </section>

        <!-- BLOC DROIT -->

        <section class="c">

            
            <?php 
            
                require_once('Composants/profession.php');

            ?>
                <div class="divertissement">
                    <?php
                    require_once('Composants/point_interet.php');

                    require_once('Composants/langue.php');?>

                    </div>
                <?php
                 require_once('Composants/cursus.php');
                ?>

            ?>

        </section>
        
    </div>
</body>
</html>