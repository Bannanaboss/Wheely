<?php

    class AutoOverzicht {
        private $naam = "";
        private $autos = array();

        public function voegAutoToe($auto) {
            $this->autos[] = $auto;
        }

        public function getAutoLijst(){
            return $this->autos;
        }

        public function getProgramma(){
            return array("naam" => $this->naam);
        }

        public function setNaam($n) {
            if (strlen($n)>=2) {
                $this->naam = $n;
            }
        }

        public function getNaam() {
            return $this->naam;
        }

    }
?>