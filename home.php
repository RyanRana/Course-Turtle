<html>
	<title>Home</title>
<link rel="icon" href="pic.png">
 	<div class="fb-header"></div>
	<br><br><br><br><br><br>
	<input type='button' value='Logout' onClick="window.location = 'index.php'"/>
	<input type='button' value='Browse' onClick="browse()"/>
	<input type='button' value='Settings' onClick="edit()"/>
	<input type='button' id = 'change' value='Change Password' onClick="change()"/>
	
	<br>
	<script>
		function browse(){
		var yo = "<?php echo $_GET['id'];?>"
		yo = "browse.php?id="+yo
		window.location.replace(yo); 
		}
		function classmates(){
		var yo = "<?php echo $_GET['id'];?>"
		yo = "classmates.php?id="+yo
		window.location.replace(yo); 
		}
		function edit(){
		var yo = "<?php echo $_GET['id'];?>"
		yo = "edit.php?id="+yo
		window.location.replace(yo); 
		}
		function change(){
		var yo = "<?php echo $_GET['id'];?>"
		yo = "change.php?id="+yo
		window.location.replace(yo); 
		}
		function inbox(){
		var yo = "<?php echo $_GET['id'];?>"
		yo = "inbox.php?id="+yo
		window.location.replace(yo); 
		}
		function expandp1(len){
			document.getElementById("more1").style.display="none";
			var loop = 0;
			var loopr=0;
			for (let i = 2; i < len; i++) {
				loop = "expand1"+i;
				if (i==len-1){
					document.getElementById(loop).style.display="inline-block";
				}
				else{
					document.getElementById(loop).style.display="inline-block";
					document.getElementById(loop).innerHTML+=", "
				}	
			}
		}
		function expandp2(len){
			document.getElementById("more2").style.display="none";
			var loop = 0;
			var loopr=0;
			for (let i = 2; i < len; i++) {
				loop = "expand2"+i;
				if (i==len-1){
					document.getElementById(loop).style.display="inline-block";
				}
				else{
					document.getElementById(loop).style.display="inline-block";
					document.getElementById(loop).innerHTML+=", "
				}	
			}
		}
		function expandp3(len){
			document.getElementById("more3").style.display="none";
			var loop = 0;
			var loopr=0;
			for (let i = 2; i < len; i++) {
				loop = "expand3"+i;
				if (i==len-1){
					document.getElementById(loop).style.display="inline-block";
				}
				else{
					document.getElementById(loop).style.display="inline-block";
					document.getElementById(loop).innerHTML+=", "
				}	
			}
		}
		function expandp4(len){
			document.getElementById("more4").style.display="none";
			var loop = 0;
			var loopr=0;
			for (let i = 2; i < len; i++) {
				loop = "expand4"+i;
				if (i==len-1){
					document.getElementById(loop).style.display="inline-block";
				}
				else{
					document.getElementById(loop).style.display="inline-block";
					document.getElementById(loop).innerHTML+=", "
				}	
			}
		}
		function expandp5(len){
			document.getElementById("more5").style.display="none";
			var loop = 0;
			var loopr=0;
			for (let i = 2; i < len; i++) {
				loop = "expand5"+i;
				if (i==len-1){
					document.getElementById(loop).style.display="inline-block";
				}
				else{
					document.getElementById(loop).style.display="inline-block";
					document.getElementById(loop).innerHTML+=", "
				}	
			}
		}
		function expandp6(len){
			document.getElementById("more6").style.display="none";
			var loop = 0;
			var loopr=0;
			for (let i = 2; i < len; i++) {
				loop = "expand6"+i;
				if (i==len-1){
					document.getElementById(loop).style.display="inline-block";
				}
				else{
					document.getElementById(loop).style.display="inline-block";
					document.getElementById(loop).innerHTML+=", "
				}	
			}
		}
		function expandp7(len){
			document.getElementById("more7").style.display="none";
			var loop = 0;
			var loopr=0;
			for (let i = 2; i < len; i++) {
				loop = "expand7"+i;
				if (i==len-1){
					document.getElementById(loop).style.display="inline-block";
				}
				else{
					document.getElementById(loop).style.display="inline-block";
					document.getElementById(loop).innerHTML+=", "
				}	
			}
		}
		function expandp8(len){
			document.getElementById("more8").style.display="none";
			var loop = 0;
			var loopr=0;
			for (let i = 2; i < len; i++) {
				loop = "expand8"+i;
				if (i==len-1){
					document.getElementById(loop).style.display="inline-block";
				}
				else{
					document.getElementById(loop).style.display="inline-block";
					document.getElementById(loop).innerHTML+=", "
				}	
			}
		}
	</script>
    <?php
		$arrp1 = array();$arrp2 = array();$arrp3 = array();$arrp4 = array();
		$arrp5 = array();$arrp6 = array();$arrp7 = array();$arrp8 = array();
		$arrn1 = array();$arrn2 = array();$arrn3 = array();$arrn4 = array();
		$arrn5 = array();$arrn6 = array();$arrn7 = array();$arrn8 = array();
		$id = $_GET["id"];
		$link = mysqli_connect("localhost", "root", "", "newapp");
		$sql = "SELECT * FROM users WHERE random = '$id'";
		$result = mysqli_query($link,$sql)or die( mysqli_error($link));
		$personal = mysqli_fetch_row($result);
		$sql = "SELECT * FROM users";
		if ($personal[8]==""){echo null;}
		else if($result = mysqli_query($link, $sql)){
			if(mysqli_num_rows($result) > 0){	
				while($row = mysqli_fetch_array($result)){
					if ($id != $row['id']){
						if ($row['p1']==$personal[8]){
							$rowname = $row['name'];
							$rowid = $row['id'];
							$_SESSION['id'] = $rowid;
							$redirect = 'browse.page.php?id='.$rowid;
							array_push($arrp1,$rowid);
							array_push($arrn1,$rowname);

						}
					}
				}

			}}
		if ($personal[9]==""){echo null;}
		else if($result = mysqli_query($link, $sql)){
			if(mysqli_num_rows($result) > 0){

				

				while($row = mysqli_fetch_array($result)){

					if ($id != $row['id']){

						if ($row['p2']==$personal[9]){

							$rowname = $row['name'];
							$rowid = $row['id'];
							$_SESSION['id'] = $rowid;
							$redirect = 'browse.page.php?id='.$rowid;
							array_push($arrp2,$rowid);
							array_push($arrn2,$rowname);
							
						}
					}
				}

			}}	
		if ($personal[10]==""){echo null;}
		else if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result) > 0){

				
				while($row = mysqli_fetch_array($result)){
					if ($id != $row['id']){
						if ($row['p3']==$personal[10]){

							$rowname = $row['name'];
							$rowid = $row['id'];
							$_SESSION['id'] = $rowid;
							$redirect = 'browse.page.php?id='.$rowid;
							array_push($arrp3,$rowid);
							array_push($arrn3,$rowname);
							
						}
					}
				}
			}}
		if ($personal[11]==""){echo null;}
		else if($result = mysqli_query($link, $sql)){
			if(mysqli_num_rows($result) > 0){
			
				
				while($row = mysqli_fetch_array($result)){
					if ($id != $row['id']){
						if ($row['p4']==$personal[11]){
							$rowname = $row['name'];
							$rowid = $row['id'];
							$_SESSION['id'] = $rowid;
							$redirect = 'browse.page.php?id='.$rowid;
							array_push($arrp4,$rowid);
							array_push($arrn4,$rowname);
							
						}
					}
				}
			}}
		if ($personal[12]==""){echo null;}
		else if($result = mysqli_query($link, $sql)){
			if(mysqli_num_rows($result) > 0){
		
			
				while($row = mysqli_fetch_array($result)){
					if ($id != $row['id']){
						if ($row['p5']==$personal[12]){

							$rowname = $row['name'];
							$rowid = $row['id'];
							$_SESSION['id'] = $rowid;
							$redirect = 'browse.page.php?id='.$rowid;
							array_push($arrp5,$rowid);
							array_push($arrn5,$rowname);
							
						}
					}
				}
			}}
		if ($personal[13]==""){echo null;}
		else if($result = mysqli_query($link, $sql)){
			if(mysqli_num_rows($result) > 0){
	
				
				while($row = mysqli_fetch_array($result)){
					if ($id != $row['id']){
						if ($row['p6']==$personal[13]){

							$rowname = $row['name'];
							$rowid = $row['id'];
							$_SESSION['id'] = $rowid;
							$redirect = 'browse.page.php?id='.$rowid;
							array_push($arrp6,$rowid);
							array_push($arrn6,$rowname);
							
						}
					}
				}
			}}
		if ($personal[14]==""){echo null;}
		else if($result = mysqli_query($link, $sql)){
			if(mysqli_num_rows($result) > 0){

			
				while($row = mysqli_fetch_array($result)){
					if ($id != $row['id']){
						if ($row['p7']==$personal[14]){

							$rowname = $row['name'];
							$rowid = $row['id'];
							$_SESSION['id'] = $rowid;
							$redirect = 'browse.page.php?id='.$rowid;
							array_push($arrp7,$rowid);
							array_push($arrn7,$rowname);
							
						}
					}
				}
			}}
		if ($personal[15]==""){echo null;}
		else if($result = mysqli_query($link, $sql)){
			if(mysqli_num_rows($result) > 0){
		
				
				while($row = mysqli_fetch_array($result)){
					if ($id != $row['id']){
						if ($row['p8']==$personal[15]){

							$rowname = $row['name'];
							$rowid = $row['id'];
							$_SESSION['id'] = $rowid;
							$redirect = 'browse.page.php?id='.$rowid;
							array_push($arrp8,$rowid);
							array_push($arrn8,$rowname);
							
						}
					}
				}
			}}	
		include_once 'db.inc.php';
        $id = $_GET["id"]; $sel = mysqli_connect("localhost", "root", "", "newapp");
		$result = mysqli_fetch_array(mysqli_query($sel,"select * from users where random = '$id'"));
		$name = $result["name"];
        $age = $result["age"];
   
        if ($age=="Student") {
          $nameo= "Hey, ".$result["name"]."!";
        }
        if ($age=="Teacher") {
          $nameo= "Welcome, ".$result["name"]."!";
        }
		if ($age=="Parent") {
			$nameo= "Welcome, ".$result["name"]."!";
		  }
		$email = $result["email"];$state = $result["state"]; 
		$school = $result["school"];$grade = $result["grade"]; $p1 = $result["p1"]; 
		$p2 = $result["p2"]; $p3 = $result["p3"]; $p4 = $result["p4"]; 
		$p5 = $result["p5"]; $p6 = $result["p6"]; $p7 = $result["p7"]; 
		$p8 = $result["p8"]; $p1t = $result["p1t"]; $p2t = $result["p2t"];
		$p3t = $result["p3t"]; $p4t = $result["p4t"]; $p5t = $result["p5t"]; 
		$p6t = $result["p6t"]; $p7t = $result["p7t"]; $p8t = $result["p8t"]; 
		if ($age=="Parent") {
			echo "<div class='show' id='full'><h1 id='namedisplay'>$nameo</h1>
		<p id='schooldisplay'>$school, $state</p>
    
		</div>";
	
	echo '</br>';
		}
		else{
		echo "<div class='show' id='full'><h1 id='namedisplay'>$nameo</h1>
		<p id='schooldisplay'>$school, $state</p><p id='gradedisplay'>Grade: $grade</p>
		<table id='tableid'>
			<tr><td id='period0'>Period</td><td id='class0'>Class</td><td id='teacher0'>Teacher</td></tr>
			<tr><td id='period1'>1</td><td id='class1'>$p1</td><td id='teacher1'>$p1t</td></tr>
			<tr><td id='period2'>2</td><td id='class2'>$p2</td><td id='teacher2'>$p2t</td></tr>
			<tr><td id='period3'>3</td><td id='class3'>$p3</td><td id='teacher3'>$p3t</td></tr>
			<tr><td id='period4'>4</td><td id='class4'>$p4</td><td id='teacher4'>$p4t</td></tr>
			<tr><td id='period5'>5</td><td id='class5'>$p5</td><td id='teacher5'>$p5t</td></tr>
			<tr><td id='period6'>6</td><td id='class6'>$p6</td><td id='teacher6'>$p6t</td></tr>
			<tr><td id='period7'>7</td><td id='class7'>$p7</td><td id='teacher7'>$p7t</td></tr>
			<tr><td id='period8'>8</td><td id='class8'>$p8</td><td id='teacher8'>$p8t</td></tr>
		</table></div>";
	
	echo '</br>';
		}
	
    ?>
	<style>	
	.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #117964;
   color: white;
   text-align: center;
}
	body{
					background-color: ghostwhite;
				}
	.fb-header-base{
	width:100%;
	height:90px;
	position:absolute;
	top:0;
	left:0;
	color:white;
	z-index:7;
	font-family:verdana;
	-webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
}
    .fb-header{
	width:100%;
	height:90px;
	position:absolute;
	background:#117964;
	top:0;
	left:0;
	color:white;
	z-index:7;
	font-family:verdana;
	
}
	button{
					box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  min-width: 335px;
  margin: 10px;;
  text-align: center;
  font-family: arial;
					background-color: white;
					border: none;  
					border-radius:5px 5px 5px 5px;
					
					
				}
	button:hover, a:hover {
  opacity: 0.7;
}
    #myInput{
    border: none;  
					box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
					min-width: 98.5%;
					height: 50px;
					margin-left: 10px;
					border-radius:5px 5px 5px 5px;
					
					font-size: 25;
  }
	table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
	td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
	tr:nth-child(even) {
  background-color: #dddddd;
}
	a{
			color: darkblue;
		}
	form{
					margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
				}
	input[type=text], select, textarea {
  width: 20%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
	input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
	input[type=submit]:hover {
  background-color: #45a049;
}
	.container {
  border-radius: 5px;
  background-color: #f2f2f2;
				}
	#back{
					box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  min-width: 100px;
		min-height: 50px;			
  margin-left: 10px;;
  text-align: center;
  font-family: arial;
					background-color: white;
					border: none;  
					border-radius:5px 5px 5px 5px;
				}
	table {
			  	font-family: arial, sans-serif;
			  	border-collapse: collapse;
			  	width: 35%;
		margin-left: 10px;;
			}
	td, th {
			  	border: 1px solid #dddddd;
			  	text-align: left;
		width: 450px;
			  	padding: 8px;
			}	
	tr:nth-child(even) {
			  	background-color: #dddddd;
			}
	.more{
			background: none!important;
  border: none;
  padding: 0!important;
  /*optional*/
  font-family: "Times New Roman", Times, serif;
  /*input has OS specific font-family*/
  color: darkblue;
  text-decoration: underline;
  cursor: pointer;
			font-size: 16px;
		}
		h1,h4,p,a,input[type=button]{
			font-family: arial;
			margin-left: 10px;;
			
		}
		input[type=button]{
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  				min-width: 100px;
				min-height: 50px;			
  				margin-left: 10px;;
  				text-align: center;
  				font-family: arial;
				background-color: white;
				border: none;  
				border-radius:5px 5px 5px 5px;	
			}
			
		#change{
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  				min-width: 130px;
				min-height: 50px;			
  				margin-left: 10px;;
  				text-align: center;
  				font-family: arial;
				background-color: white;
				border: none;  
				border-radius:5px 5px 5px 5px;	
			}
			input[type=button]:hover{
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				background-color: ghostwhite;
  				
				
			}
			#change:hover{
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				background-color: ghostwhite;
  				
				

			}
			input[type=button]:hover, a:hover {
  opacity: 0.7;
}
			</style>
</html>
