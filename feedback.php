 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      	<style type="text/css">
        * {
          font-family: 'Roboto', sans-serif;
        }
        body {
          background-color: #f5f5f5;
        }
      </style>

    </head>
    <body>

  <nav>
    <div style="background-color: #9c27b0" class="nav-wrapper">
      <a href="#!" class="brand-logo left"><i class="material-icons"></i>Bingo!</a>
      <ul id="nav-mobile" class="right">
         <li><a href="index.php"><i class="material-icons">home</i></a></li>
        <li><a href="feedback.php"><i class="material-icons">feedback</i></a></li>
        <li><a href="about.php"><i class="material-icons">info</i></a></li>
      </ul>
    </div>
  </nav>

    <p style="font-size: 24px; font-weight: bold; margin-left: 38%;"> FEEDBACK </p>
    <br>
    <div class="row">
    <form action="feedback.php" method="post" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input type="text" placeholder="Enter name with branch" name="username" id="first_name">
          <label for="first_name">Name with branch</label>
        </div>
         <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="feedb"></textarea>
          <label for="textarea1">feedback</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action" style="margin-left: 5px;">Submit
    <i class="material-icons right">send</i>
  </button>
    </form>
  </div>

<?php
$link = mysqli_connect("fdb21.awardspace.net","2718357_bingo","sadu2016","2718357_bingo");
 if(isset($_POST['username']) && isset($_POST['feedb'])){
  $name = mysqli_real_escape_string($link, $_POST['username']);
  $feedback = mysqli_real_escape_string($link, $_POST['feedb']);
  if(mysqli_query($link, "INSERT INTO feedback (name,feedb) VALUES ('".$name."','".$feedback."')")) {
  echo "<p style='font-size:20px; font-weight: bold;'> Thanks a lot for your feedback</p>";
 }
 else {
  echo "Error";
 }
}
 
?>
    <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">

      </script>

    </body>
    </html>