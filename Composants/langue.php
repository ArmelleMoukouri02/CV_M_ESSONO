<?php 
                
$array_langage=array(

    new Competence("Anglais", "", 100),
    new Competence("Français", "", 100),
);

   
?>

<div class=" langue card">
    <h3>Langue</h3>
    <p class="header_subtitle"> Pratiquées en entreprise </p>
           
    <?php foreach ($array_langage as $langage){
        $langage->get_composant6();
        }

    ?>    
</div>



           