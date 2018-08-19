<?php
session_start();
$getcode = $_SESSION['code2'];
$link = mysqli_connect("fdb21.awardspace.net","2718357_bingo","sadu2016","2718357_bingo");

$i =1;

$query = mysqli_query($link, "SELECT * FROM game WHERE code = ".$getcode."");
$query_result = mysqli_fetch_assoc($query);
  $winner = $query_result['winner'];
  if($winner == "1"){
   echo "<p style='width:200px; border:2px solid black;'>You Loss The Game!</p>";
       echo "<script type='text/javascript'>window.location.href='hurray.php';</script>";
       $delete = mysqli_query("DELETE FROM game WHERE code = ".$getcode."");
  }
  else if($winner == "2"){
      echo "<p style='width:200px; border:2px solid black;'>Hurray you won the Game</p>";
      echo "<script type='text/javascript'>window.location.href='loss.php';</script>";
      $delete = mysqli_query("DELETE FROM game WHERE code = ".$getcode."");
  } 
  else {
$result = mysqli_query($link, "SELECT * FROM game WHERE code = ".$getcode." AND ptype = '2'");
  	if(mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        if($i>0){
  		echo "<span style='color: #1b5e20; font-weight: bold;'>".$row['name'].":&nbsp;&nbsp;&nbsp;</span>";
    }
          echo "<span style='color: #1b5e20; font-weight: bold;'>".$row['value'].",&nbsp;</span>";
          --$i;
}
  	}

echo "<br><br>";
  	$result = mysqli_query($link, "SELECT * FROM game WHERE code = ".$getcode." AND ptype = '1'");
  	if(mysqli_num_rows($result) > 0) {
  		  echo "<span style='color:#b71c1c; font-weight: bold;'>You:&nbsp;&nbsp;&nbsp;</span>";
          while($row = mysqli_fetch_assoc($result)) {
          echo "<span style='color:#b71c1c; font-weight: bold;'>".$row['value'].",&nbsp;</span>";
}
  	}
  }
?>