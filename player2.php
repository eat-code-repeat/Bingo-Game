<?php
session_start();
$code = $_GET['code'];
$_SESSION['code2']=$code;
?>
 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      	<style type="text/css">
         @import url('https://fonts.googleapis.com/css?family=Roboto');
        body {
          background-color: #cfd8dc;
          font-family: 'Roboto', sans-serif;
        }
          #show {
          margin-top: 8px;
          margin-left: 10px;
          height: 100px;
          white-space: nowrap; 
          overflow-x: hidden;
          overflow-x: scroll;
          background-color: #cfd8dc;
        }
         #bingotable {
         	margin: 40px auto;
         	text-align: center;
         	width: 400px;
         	height: 400px;
         	border-collapse: collapse;
         	border-radius: 5px;
         	background: white; 
         	         }
         td,th {
         	margin: 0, auto;
         	text-align: center;
         }
         #head {
         	background-color: #eceff1;
         }
    </style>
      </head>

    <body>
       <nav>
    <div style="background-color: #9c27b0" class="nav-wrapper">
      <a href="index.php" class="brand-logo left"><i class="material-icons"></i>Bingo!</a>
      <ul id="nav-mobile" class="right">
         <li><a href="index.php"><i class="material-icons">home</i></a></li>
        <li><a href="feedback.php"><i class="material-icons">feedback</i></a></li>
        <li><a href="about.php"><i class="material-icons">info</i></a></li>
      </ul>
    </div>
  </nav>
         <div id="show">
    </div>
         <div id="container">
         	<div id="bingobox">
     <table id="bingotable">
     	<tr>
            <th id="B">B</th>
            <th id="I">I</th>
            <th id="N">N</th>
            <th id="G">G</th>
            <th id="O">O</th>
     	</tr>
     	<tr>
     		<td class="sq" id="square0" value="0" onClick=get_id(this.id)>&nbsp;</td>
     		<td class="sq" id="square1" value="0" onClick=get_id(this.id)>&nbsp;</td>
     		<td class="sq" id="square2" value="0" onClick=get_id(this.id)>&nbsp;</td>
     		<td class="sq" id="square3" value="0" onClick=get_id(this.id)>&nbsp;</td>
     		<td class="sq" id="square4" value="0" onClick=get_id(this.id)>&nbsp;</td>
     	</tr>
     	<tr>
     		<td class="sq" id="square5" value="0" onClick=get_id(this.id)>&nbsp;</td>
     		<td class="sq" id="square6" value="0" onClick=get_id(this.id)>&nbsp;</td>
     		<td class="sq" id="square7" value="0" onClick=get_id(this.id)>&nbsp;</td>
     		<td class="sq" id="square8" value="0" onClick=get_id(this.id)>&nbsp;</td>
     		<td class="sq" id="square9" value="0" onClick=get_id(this.id)>&nbsp;</td>
     	</tr>
     	<tr>
     		<td class="sq" id="square10" value="0" onClick=get_id(this.id)>&nbsp;</td>
     		<td class="sq" id="square11" value="0" onClick=get_id(this.id)>&nbsp;</td>
     		<td class="sq" id="square12" value="0" onClick=get_id(this.id)>&nbsp;</td>
     		<td class="sq" id="square13" value="0" onClick=get_id(this.id)>&nbsp;</td>
     		<td class="sq" id="square14" value="0" onClick=get_id(this.id)>&nbsp;</td>
     	</tr>
     	<tr>
     		<td class="sq" id="square15" value="0" onClick=get_id(this.id)>&nbsp;</td>
     		<td class="sq" id="square16" value="0" onClick=get_id(this.id)>&nbsp;</td>
     		<td class="sq" id="square17" value="0" onClick=get_id(this.id)>&nbsp;</td>
     		<td class="sq" id="square18" value="0" onClick=get_id(this.id)>&nbsp;</td>
     		<td class="sq" id="square19" value="0" onClick=get_id(this.id)>&nbsp;</td>
     	</tr>
     	<tr>
     		<td class="sq" id="square20" value="0" onClick=get_id(this.id)>&nbsp;</td>
     		<td class="sq" id="square21" value="0" onClick=get_id(this.id)>&nbsp;</td>
     		<td class="sq" id="square22" value="0" onClick=get_id(this.id)>&nbsp;</td>
     		<td class="sq" id="square23" value="0" onClick=get_id(this.id)>&nbsp;</td>
     		<td class="sq" id="square24" value="0" onClick=get_id(this.id)>&nbsp;</td>
     	</tr>
     	
     </table>
 </div>

         </div>

      <!--JavaScript at end of body for optimized loading-->
       <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">

        $(document).ready(function(){
          name = prompt("Enter you name to continue");
          if(name == ""){
            name = "anonymous";
          }
        })


      	var array=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25];
        var i=0,k=0,j=0;
      	var temp=0;
      	k=array.length;
      	while(k!=0) {
      		var square = "square"+j;
      		i=Math.floor(Math.random()*k);
      		k-=1;
      		temp=array[k];
      		array[k]=array[i];
      		array[i]=temp;
      		document.getElementById(square).innerHTML = array[k];
            ++j;
      		     	}

      		function get_id(id) {
      			var number = document.getElementById(id).innerHTML;
            var player2 = name;
            var ptype = "2";
      			document.getElementById(id).style.backgroundColor = "#4db6ac";
      			$.ajax({
                 method: "POST",
                 url: "action.php",
                 data: {num: number,player: player2,ptype: ptype,code:<?php echo $code ?>},
                 success: function(result){
                 	if(result == "1"){
                 		
                 	} else {
                 		alert("failed");
                 	}
                 } 
      			});
      		}

            $(function(){
              var colorToCheck = "rgb(0, 0, 0)";
              var color = "rgb(255, 255, 255)";
           var arr = [
           ['square0','square1','square2','square3','square4'],
           ['square5','square6','square7','square8','square9'],
           ['square10','square11','square12','square13','square14'],
           ['square15','square16','square17','square18','square19'],
           ['square20','square21','square22','square23','square24'],
           ['square0','square5','square10','square15','square20'],
           ['square1','square6','square11','square16','square21'],
           ['square2','square7','square12','square17','square22'],
           ['square3','square8','square13','square18','square23'],
           ['square4','square9','square14','square19','square24']
           ];
           var win = arr.length;
           var selected = [];
           $('.sq').click(function(){

            selected.push($(this).attr('id'));
            var count = 0;
            for(var i=0; i< win; i++){
              var cell = 0;
              for(var j=0; j<5; j++){
                if($.inArray(arr[i][j], selected) > -1){
                  cell++;
                }
              }
                 if(cell == 5){
                  count++;
                }
            }
            if(count == 1){
              document.getElementById('B').style.backgroundColor = "#000000";
              document.getElementById('B').style.color = "#ffffff";

            } 
            else if(count == 2){
              document.getElementById('I').style.backgroundColor = "#000000";
              document.getElementById('I').style.color = "#ffffff";
            }
             else if(count == 3){
              document.getElementById('N').style.backgroundColor = "#000000";
              document.getElementById('N').style.color = "#ffffff";
            }
             else if(count == 4){
              document.getElementById('G').style.backgroundColor = "#000000";
              document.getElementById('G').style.color = "#ffffff";
            }
             else if(count == 5){
              document.getElementById('O').style.backgroundColor = "#000000";
              document.getElementById('O').style.color = "#ffffff";
               $.ajax({
                 method: "POST",
                 url: "result.php?act=update2",
                 data: {code:<?php echo $code ?>},
                 success: function(result){
                  if(result == "6"){
                  } else {
                  }
                 } 
            }); //ajax end
    
            }
           })
         });

           $(document).ready(function(){
            setInterval(function() {
              $('#show').load('fetch2.php')
            }, 1000);
           });
      </script>
    </body>
  </html>