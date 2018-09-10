<?php
require_once("views/FormView.php");
require_once("RobberLanguage.php");
require_once("views/MainView.php");
require_once("views/TranslatedView.php");

// Views
$tv             = new TranslatedView();
$fv             = new FormView();
$mv             = new MainView();

$robberModel    = new RobberLanguage();

$input = $fv->getInput();
// Should be executed when the button has been hit
// $translated = $robberModel->translateInput($input);
// echo $translated;
// $fv->echoform();
$mv->renderHTML($fv, $tv->returnTranslation($input));