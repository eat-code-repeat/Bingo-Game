<?php
    
    $link = mysqli_connect("hostname","username","password","database_name");
  if(mysqli_connect_errno()) {
    echo " Failed to connect ".mysqli_connect_errno();
  }


    if(isset($_POST['num']) && isset($_POST['player'])) {
        if(mysqli_query($link, "INSERT INTO game (value,name,code,ptype,winner) VALUES ('".$_POST['num']."','".mysqli_real_escape_string($link, $_POST['player'])."','".$_POST['code']."','".$_POST['ptype']."','0')")) {
          echo "1";
        }
          else  {
            echo "2";
          }
        }

?>
