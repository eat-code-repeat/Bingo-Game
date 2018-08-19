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
        .heading {
          font-size: 18px;
          font-weight: bold;
          margin-left: 30%;
        }
        .tobebold {
          font-weight: bold;
          font-size: 16px;
          margin-left: 5px;
          color: green;
        }
        .tobeitalic {
          font-size: 16px;
          font-style: italic;
          margin-left: 5px;
          color: red;
        }
        .b {
          margin-left: 42%;
          padding: 10px 20px;
          font-size: 18px;
          text-align: center;
          outline: none;
          color: #fff;
          background-color: #9c27b0;
          border: none;
          border-radius: 5px;
          box-shadow: 0 9px #999;
        }
        .b:active {
          background-color: #9c27b0;
          box-shadow: 0 5px #666;
          transform: translateY(4px);
        }
        .rule {
          margin-left: 5px;
          font-size: 16px;
        }
        .rulebox {
          background-color: #fafafa;
          border: 1px solid #000;
          border-radius: 5px;
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

     <p><span class="heading"> Welcome To Bingo Game</span></p>
      <?php
      $randcode = rand(0,10000000);
      echo "<p class='tobebold'> Programmed by Sahdev Surolia</p>
      <p class='tobebold'> Instagram (@iamsahdev.s)</p>
<p class='tobebold'>This is multiplayer game, so you must invite your friend to start the game by sharing this given below URL to your friend. </p>
      <p class='tobeitalic'> http://thebingo.mygamesonline.org/player2.php?code=$randcode </p>"; 
          echo "<p class='tobebold'> After sharing above URL to your friend, click on START button to play the game </p>
 <p class='tobebold'> After clicking the start button you and your friend are connected together with server to play the game.</p>
<p class='tobebold'>Kindly read the Instruction give below to play the game.</p>";
        echo "<a href='player1.php?code=$randcode' class='b' >Start</a>";
     ?>
    <br>
    <br>
    <br>
    <div class="rulebox">
    <p class="rule" style="font-weight: bold;"> How to play</p>
    <p class="rule"> Bingo is a game of chance in which each player matches numbers printed in different arrangements on 5×5 cards with the numbers the other play draw, marking the selected numbers with tiles.</p>
    <p class="rule"> You have to be first to complete 5 row/column by folllowing the below rules</p>
    <p class="rule"> Select any one number from 5x5 cards, and wait for other player to select the same number plus a new number of his/her choice then again you choose the number that was choosen by your opponent and additional select one more number and vice versa until and unless one of the player complete its bingo.</p>
    </div>
      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">

      </script>
    </body>
    </html>
