<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            
                require_once('Composants/section_c.php');

            ?>

        </section>
        
    </div>
</body>
</html>