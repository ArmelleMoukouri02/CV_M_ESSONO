<?php

Class Interets{

    public $image=array();

    public function __construct($image){


        $this->image = $image;

    }

    
    public function get_composant4(){

        echo "<div class=\"point_interet card\">
        <h3>Points d'interets</h3>
        <p class=\"header_subtitle\"> Simple passe temps pour se faire un peu plaisir </p>
        <div class=\"logo_divertissement\">
            <img src=\"".$this->image['photo_7']."\" style=\"height: 50px;\" alt=\"\">
            <img src=\"".$this->image['photo_9']."\" style=\"height: 30px;\" alt=\"\">
            <img src=\"".$this->image['photo_1']."\" alt=\"\">
        
            <img src=\"".$this->image['photo_8']."\" style=\"height: 50px;\" alt=\"\">
            <img src=\"".$this->image['photo_4']."\" style=\"height: 40px;\" alt=\"\">
            <img src=\"".$this->image['photo_5']."\" style=\"height: 30px;\" alt=\"\">
            <img src=\"".$this->image['photo_6']."\" style=\"height: 40px;\" alt=\"\">
        </div>
    </div>";


    }

}

?>