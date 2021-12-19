

<?php 

    

    Class Experience_prof{

        public $poste;
        public $entreprise;
        public $date_debut;
        public $date_fin;
        public $tache;


        public function __construct( $poste, $entreprise, $date_debut, $date_fin, $tache)
        {
            
            $this->poste = $poste;
            $this->entreprise = $entreprise;
            $this->date_debut =$date_debut;
            $this->date_fin = $date_fin;
            $this->tache = $tache;

        }

        public function get_poste(){
            return $this->poste;
        }

        public function get_entreprise(){
            return $this->entreprise;
        }

        public function get_date_debut(){
            return $this->date_debut;
        }

        public function get_fin(){
            return $this->date_fin;
        }

        public function get_tache(){
            return $this->tache;
        }

        public function get_composant(){

            echo '
            <div class="profession">
            <p class="intitule">'. $this->poste.'- <span class="location">'.$this->entreprise.'</span>
            </p>
            <p class="date">'.$this->date_debut.''.$this->date_fin.'</p>
            <p class="subtitle"> '.$this->tache.'</p>
            <hr>
        </div>
            ';

        }

    }

?>