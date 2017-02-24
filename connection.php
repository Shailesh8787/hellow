<?php
  class connection{
    public function connectDatabase(){
      $connectionValue = mysqli_connect('localhost','root','shailesh!@#')
      or die(mysql_error());
      mysqli_select_db('test');
      return true;
    }
  }
 ?>
