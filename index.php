<?php 
//include config
require('config.php');

//Classes
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

//Controllers
require('controllers/home.php');
require('controllers/shares.php');
require('controllers/users.php');

//Models
require('models/home.php');
require('models/share.php');
require('models/user.php');
$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createController();
if ($controller) {
  $controller->executeAction();
}
?>