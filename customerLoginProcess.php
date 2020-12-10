<?php

    require_once('connection.php');
  //  $db = "minorproject";
    //mysqli_select_db($db);
    //mysql_select_db( 'minorproject');
    if (isset($_POST['UserName'])) {

      $Username = $_POST['UserName'];
      $Password = $_POST['Password'];

      $sql = "select * from customer where Email = '".$Username."' AND Password = '".$Password."' limit 1";

      $result = mysql_query($sql);
      if (mysql_num_rows($result)==1) {
        echo "Logged In";


      }
      else {
        echo "Incorrect username/password";
        exit();
      }

    }


 ?>
