<?php
require_once("views/FormView.php");
require_once("Model/RobberModel.php");
require_once("views/MainView.php");
// require_once("views/TranslatedView.php");

// Views
$fv             = new FormView();
$mv             = new MainView();

// Models
$robberModel    = new RobberModel();

// Get input text from the form
$input = $fv->getUserInput();

// Get input language from the form
$chosenLanguage = $fv->getChosenLanguage();
echo $chosenLanguage; // Use this variable instead of '$robberModel->returnTranslation($input)' below.

$mv->renderHTML($fv, $robberModel->returnTranslation($input));

/*
    TODO: Finish the ability to change language based on ẃhich radio button is chosen --

    We just finished the formview module. Use getChosenLanguage() in index.php to chose appropriate 
    translation model. Now we only have robber language pre-chosen. Create for example a reverse language model
    and the ability to change between the two (or more).
*/