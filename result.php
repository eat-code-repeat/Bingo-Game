<?php

$link = mysqli_connect("fdb21.awardspace.net","2718357_bingo","sadu2016","2718357_bingo");
  if(mysqli_connect_errno()) {
    echo " Failed to connect ".mysqli_connect_errno();
  }

if($_GET['act'] == 'update') {

    if(mysqli_query($link, "UPDATE game SET winner = '1' WHERE code = '".$_POST['code']."'")) {
          echo "5";
        }
}
else if($_GET['act'] == 'update2'){

	  if(mysqli_query($link, "UPDATE game SET winner = '2' WHERE code = '".$_POST['code']."'")) {
          echo "6";
        }
}

?>