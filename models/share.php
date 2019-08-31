<?php 
class ShareModel extends Model{
  public function Index(){
    $this->query('SELECT * FROM shares');
    $rows = $this->resultSet();
    //Testing
   /*  echo '<pre>';
    print_r($rows);
    echo '</pre>'; */
     return $rows;

  }
}

?>