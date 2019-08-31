<?php 
/*
** Takes url, processing requests/calls method 
**
*/
class Bootstrap{

  private $controller;
  private $action;
  private $request;

  public function __construct($request){
    $this->request = $request;
    // If url is empty, ther is no controller, url ir root, show home controller
    if ($this->request['controller'] == "") {
      $this->controller = 'home'; 
      // Else if controler is in url, load that controller
    }else{
      $this->controller = $this->request['controller'];
    }
    // Action - second piece url. Example: /user/register
    if ($this->request['action'] == "") {
      $this->action = 'index';
    }else{
       $this->action = $this->request['action'];
    }
    // Test Controller
    //echo $this->controller;
  }

  public function createController(){
    //Check Class
    if (class_exists($this->controller)) {
      $parents = class_parents($this->controller);

      //Check extension
      if (in_array("Controller", $parents)) {
        if (method_exists($this->controller, $this->action)) {
          return new $this->controller($this->action, $this->request);
        } else {
          //Method Does not exist
          echo '<h1>Method does not exists</h1>';
          return;
        }
      }  else {
          //Base Controller Does not exist
          echo '<h1>Base Controller does not exists</h1>';
          return;
        }

    } else {
      //Controller Class Does not exist
      echo '<h1>Controller class does not exists</h1>';
      return;
    }
  }
}

?>