<?php
        class FormView 
        {
            private $inputfield = "svenska";
            public function returnForm() {

                $returningHTMLString =  "<h1>1DV610</h1>
                <form action='index.php' method='GET'><input type='text' name='$this->inputfield'></input><input type='submit' value='Send'></form>";
            
                // var_dump($_GET);
                
                if ($this->isFieldNotEmpty()) {
                    $returningHTMLString .= "Du vill översätta: ". $this->getInput() . ".";
                    // Save the translated input here
                } else {
                    $returningHTMLString .= "Skriv in texten du vill ha översatt"; 
                }

                return $returningHTMLString;
            }

            // Returns what should be translated
            public function getInput () {
                if ($this->isFieldNotEmpty()) {
                    return $_GET[$this->inputfield];
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