<?php 
//include config
require('config.php');

//Classes
require('classes/Bootstrap.php');
require('classes/Controller.php');

//Controllers
require('controllers/home.php');
require('controllers/shares.php');
require('controllers/users.php');

//Models

$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createController();
if ($controller) {
  $controller->executeAction();
}
?>