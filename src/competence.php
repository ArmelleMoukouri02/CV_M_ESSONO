
<?php 

    Class Competence{

        public $nom_comp;
        public $lang_technologie;
        public int $niveau;


        public function __construct($nom_comp, $lang_technologie, int $niveau)
        {
            $this->nom_comp = $nom_comp;
            $this->lang_technologie = $lang_technologie;
            $this->niveau = $niveau;
        }

        public function get_nom_comp(){
            return $this->nom_comp;
        }

        public function get_lang_technologie(){
            return $this->lang_technologie;
        }

        public function get_composant3(){
            echo '
            
            <div class="experience">
    <input checked type="checkbox" class="check">
    <div class="plus_info">
        <div class="skill">
            <h4>'.$this->nom_comp.'</h4>
            <i class="fas fa-star" style="color: rgb(201, 40, 40); margin-top: 5px;"></i>
        </div>
        <p class="competence">'.$this->lang_technologie.'</p>
        <div class="switcher">
            <div class="switcher_bar" style="width: '.$this->niveau.'%;"></div>
            <span class="switcher_circle" style="right: '. 100 - $this->niveau .'%;"></span>
        </div>
        
    </div>
</div>
            
            ';
        }

        public function get_composant6(){

            echo '
            
            <div class="langue_check">
            <input class="check" type="checkbox" checked>
            <label for="">'.$this->nom_comp.'</label>
        </div>
            
            ';

        }

    }

?>