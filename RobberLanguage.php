<?php
    class RobberLanguage 
    {
        // Shall return a 'translated' input to robber language
        public function translateInput ($input) {
            $translatedString = "";

            // check if input is empty, if not empty -> translate
            if (is_string($input) && strlen($input) > 0) {
                for ($i = 0; $i < strlen($input); $i++) {
                    // If there's a consonent, add an 'o' and repeat the consonent
                    $translatedString .= $this->Robberify($input[$i]);
                }
                return $translatedString;
            }
        }

        private function Robberify ($character) {
            $consonentArray = array('B', 'b', 'C', 'c', 'D', 'd', 'F', 'f', 'G', 'g', 'H', 'h', 'I', 'i', 'J', 'j', 'k', 'K', 'l', 'L', 'M', 'm', 'n', 'N', 'p', 'P', 'q', 'Q', 'r', 'R', 's', 'S', 't', 'T', 'v', 'V', 'W', 'w', 'x', 'X', 'Z', 'z');
            if (in_array($character, $consonentArray)) {
                return $character .= 'o' . $character;
            } else {
                return $character;
            }
        }
    }