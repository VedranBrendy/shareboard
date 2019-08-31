<?php 
class ShareModel extends Model{
  public function Index(){
    $this->query('SELECT * FROM shares');
    $rows = $this->resultSet();
    //Testing db read
   /*  echo '<pre>';
    print_r($rows);
    echo '</pre>'; */
     return $row;

  }
}

?>