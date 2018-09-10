<?php
        class FormView 
        {
            private $inputfield = "svenska"; // Unecessary variable
            private $chosenLanguage;

            public function returnForm() {

                $returningHTMLString =  "
                <h1>1DV610</h1>

                <form action='index.php' method='GET'>
                <input type='text' name='$this->inputfield'></input>
                <input type='submit' value='Send'>

                <input type='radio' value='robber' id='robber' checked name='radio'/>
                <label for='robber'> Robber </label>

                <input type='radio' value='reverse' id='reverse' name='radio'/>
                <label for='reverse'> Reverse </label>

                </form>";
            
                // var_dump($_GET);
                
                if ($this->isFieldNotEmpty()) {
                    $returningHTMLString .= "Du vill översätta: ". $this->getUserInput() . ".";
                    // Save the translated input here
                } else {
                    $returningHTMLString .= "Skriv in texten du vill ha översatt"; 
                }

                return $returningHTMLString;
            }

            // Returns what should be translated
            public function getUserInput () {
                if ($this->isFieldNotEmpty()) {
                    return $_GET[$this->inputfield];
                } 
            }

            // Return the chosen language from the radio buttons
            public function getChosenLanguage () {
                if ($this->isFieldNotEmpty()) {
                    return $_GET['radio'];
                } 
            }

            // Return true if the user has pressed 'Send'
            public function isFieldNotEmpty () {
                if (isset($_GET[$this->inputfield])) {
                    if ($_GET[$this->inputfield] != "") {
                        return true;
                    }   
                }
            }    
        }