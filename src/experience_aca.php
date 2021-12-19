

<?php 

    

    Class Experience_aca {

        public $diplome;
        public $institut;
        public $date;
        public $filiere;

        public function __construct( $diplome, $institut, $date, $filiere)
        {
            
            $this->diplome = $diplome;
            $this->institut = $institut;
            $this->date = $date;
            $this->filiere = $filiere;
            
        }

        public function get_diplome(){
            return $this->diplome;
        }

        public function get_institut(){
            return $this->institut;
        }

        public function get_date(){
            return $this->date;
        }

        public function get_filiere(){
            return $this->filiere;
        }

        public function get_composants(){

            echo '
            
            <div class="profession">
                <p class="intitule"> '. $this->diplome .' <span class="location">'.$this->institut.'</span></p>
                <p class="date_cursus"> <span class="date">'.$this->date.'- </span> &nbsp; <span class="cursus_role">'.$this->filiere.'</span> </p>
                <hr>
            </div>

            ';
        }

    }

?>