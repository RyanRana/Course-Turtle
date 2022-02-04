<?php
       include_once 'db.inc.php';
?>
<html>
	<title>Browse</title>
<link rel="icon" href="pic.png">
	<meta name="viewport" content="width=500, initial-scale=1.0"> 	
	<div class="fb-header"></div>

	<br><br><br><br><br>
		<p id = "valueofperiod"></p>
<div id="divheader">
	<input type='button' id="backer" value='Back' onClick="back()"/>	
	<input id="myInput" onkeyup="myFunction(this.value)" placeholder="Search for names.." type='text'>
	<input id="searchschools" onkeyup="schools(this.value)" placeholder="Search for schools.." type='text'>
	<select id="gradevalue" name="choosegrade" onchange="changeFunc()">
		<option value="all">Grade</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
  	</select>
	<select id="agevalue" name="chooseage" onchange="changeage()">
		<option value="all">Occupation</option>
		<option value="Student">Student</option>
		<option value="Teacher">Teacher</option>

  	</select>
	<select id="findvalue" name="choosefind" onchange="findclassmates()">
		<option value="all">Classmates</option>
		<option value="p1">p1</option>
		<option value="p2">p2</option>
		<option value="p3">p3</option>
		<option value="p4">p4</option>
		<option value="p5">p5</option>
		<option value="p6">p6</option>
		<option value="p7">p7</option>
		<option value="p8">p8</option>
  	</select>
	</div>
	<button class="show" id="back" style="display:none" onclick="window.location.reload()">Back</button>
	<div class="show" style="width:500px" id="full">
		<h1 id="namedisplay"></h1>
		<p id="schooldisplay"></p>
		<p id="gradedisplay"></p>
		<p id="emaildisplay" ></p>
		<table id="tableid" style="display:none;">
			<tr>
				<td id="period0"></td>
				<td id="class0"></td>
				<td id="teacher0"></td>
			</tr>
			<tr>
				<td id="period1"></td>
				<td id="class1"></td>
				<td id="teacher1"></td>
			</tr>
			<tr>
				<td id="period2"></td>
				<td id="class2"></td>
				<td id="teacher2"></td>
			</tr>
			<tr>
				<td id="period3"></td>
				<td id="class3"></td>
				<td id="teacher3"></td>
			</tr>
			<tr>
				<td id="period4"></td>
				<td id="class4"></td>
				<td id="teacher4"></td>
			</tr>
			<tr>
				<td id="period5"></td>
				<td id="class5"></td>
				<td id="teacher5"></td>
			</tr>
			<tr>
				<td id="period6"></td>
				<td id="class6"></td>
				<td id="teacher6"></td>
			</tr>
			<tr>
				<td id="period7"></td>
				<td id="class7"></td>
				<td id="teacher7"></td>
			</tr>
			<tr>
				<td id="period8"></td>
				<td id="class8"></td>
				<td id="teacher8"></td>
			</tr>
		</table>
		
	</div>
    <?php
			$valueofperiod1 = "p1";
	$valueofperiod2 = "p2";
	$valueofperiod3 = "p3";
	$valueofperiod4 = "p4";
	$valueofperiod5 = "p5";
	$valueofperiod6 = "p6";
	$valueofperiod7 = "p7";
	$valueofperiod8 = "p8";
			$id = $_GET["id"];
			$res = mysqli_query($conn,"select * from users where random = '$id'");
			$result = mysqli_fetch_array($res);
			$sql = "SELECT * FROM users;";
			$result = mysqli_query($conn,$sql);
			$resultCheck = mysqli_num_rows($result);
			$rows = "<p id='rows' style='display:none'>$resultCheck</p>";
			$count = 0;
			if ($resultCheck > 0 ){
				while ($row = mysqli_fetch_assoc($result)){
					$name = $row['name'];
					$name_id = "name" . $count;
					$age = $row['age'];
					$age_id = "age" . $count;
					$grade = $row['grade'];
					$grade_id = "grade" . $count;
					$school = $row['school'];
					$school_id = "school" . $count;
					$state = $row['state'];
					$state_id = "state" . $count;
					$p1 = $row['p1'];
					$p1_id = "p1" . $count;
					$p2 = $row['p2'];
					$p2_id = "p2" . $count;
					$p3 = $row['p3'];
					$p3_id = "p3" . $count;
					$p4 = $row['p4'];
					$p4_id = "p4" . $count;
					$p5 = $row['p5'];
					$p5_id = "p5" . $count;
					$p6 = $row['p6'];
					$p6_id = "p6" . $count;
					$p7 = $row['p7'];
					$p7_id = "p7" . $count;
					$p8 = $row['p8'];
					$p8_id = "p8" . $count;
					$p1t = $row['p1t'];
					$p1t_id = "p1t" . $count;
					$p2t = $row['p2t'];
					$p2t_id = "p2" . $count;
					$p3t = $row['p3t'];
					$p3t_id = "p3t" . $count;
					$p4t = $row['p4t'];
					$p4t_id = "p4t" . $count;
					$p5t = $row['p5t'];
					$p5t_id = "p5t" . $count;
					$p6t = $row['p6t'];
					$p6t_id = "p6t" . $count;
					$p7t = $row['p7t'];
					$p7t_id = "p7t" . $count;
					$p8t = $row['p8t'];
					$p8t_id = "p8t" . $count;
					$email = $row["email"];
					$email_id = "email" . $count;
					if ($age=="Parent"){
						echo "<script>document.getElementById('$count').style.display='none'</script>";
					}
					if ($age=="Student"){
						$element = "<button id = $count   class = 'items' onclick='zoom(this.id)'>
						<h1 id=$name_id>$name </h1>
						<p>Grade: <span id=$grade_id>$grade</span></p>
						<p id='big'><span id=$age_id>$age</span> at <span id=$school_id><a href='school.page.php?name=$school&id=$id'>$school</a></span></p>
						
						<p style='display:none' id=$p1_id>$p1</p>
						<p style='display:none' id=$p2_id>$p2</p>
						<p style='display:none' id=$p3_id>$p3</p> 
						<p style='display:none' id=$p4_id>$p4</p>
						<p style='display:none' id=$p5_id>$p5</p>
						<p style='display:none' id=$p6_id>$p6</p>
						<p style='display:none' id=$p7_id>$p7</p>
						<p style='display:none' id=$p8_id>$p8</p>
						<p style='display:none' id=$p1t_id>$p1t</p>
						<p style='display:none' id=$p2t_id>$p2t</p>
						<p style='display:none' id=$p3t_id>$p3t</p> 
						<p style='display:none' id=$p4t_id>$p4t</p>
						<p style='display:none' id=$p5t_id>$p5t</p>
						<p style='display:none' id=$p6t_id>$p6t</p>
						<p style='display:none' id=$p7t_id>$p7t</p>
						<p style='display:none' id=$p8t_id>$p8t</p>
						<p style='display:none' id=$state_id>$state</p>
						<p style='display:none' id=$email_id>Email: $email</p>
					</button>";
					echo $element;
					$count = $count + 1;  
					}
					if ($age=="Teacher"){
						$element = "<button id = $count   class = 'items' onclick='zoom(this.id)'>
						<h1 id=$name_id>$name </h1>
						<p>Grade: <span id=$grade_id>$grade</span></p>
						<p id='big'><span id=$age_id>$age</span> at <span id=$school_id><a href='school.page.php?name=$school&id=$id'>$school</a></span></p>
						
						<p style='display:none' id=$p1_id>$p1</p>
						<p style='display:none' id=$p2_id>$p2</p>
						<p style='display:none' id=$p3_id>$p3</p> 
						<p style='display:none' id=$p4_id>$p4</p>
						<p style='display:none' id=$p5_id>$p5</p>
						<p style='display:none' id=$p6_id>$p6</p>
						<p style='display:none' id=$p7_id>$p7</p>
						<p style='display:none' id=$p8_id>$p8</p>
						<p style='display:none' id=$p1t_id>$p1t</p>
						<p style='display:none' id=$p2t_id>$p2t</p>
						<p style='display:none' id=$p3t_id>$p3t</p> 
						<p style='display:none' id=$p4t_id>$p4t</p>
						<p style='display:none' id=$p5t_id>$p5t</p>
						<p style='display:none' id=$p6t_id>$p6t</p>
						<p style='display:none' id=$p7t_id>$p7t</p>
						<p style='display:none' id=$p8t_id>$p8t</p>
						<p style='display:none' id=$state_id>$state</p>
						<p style='display:none' id=$email_id>Email: $email</p>
					</button>";
					echo $element;
					$count = $count + 1;  
					}

					
				}  
			}
	
		$res = mysqli_query($conn,"select * from users where random = '$id'");
		$result = mysqli_fetch_array($res);
	$resultp1 = $result["p1"];
	$resultp2 = $result["p2"];
	$resultp3 = $result["p3"];
	$resultp4 = $result["p4"];
	$resultp5 = $result["p5"];
	$resultp6 = $result["p6"];
	$resultp7 = $result["p7"];
	$resultp8 = $result["p8"];
	

		$personalhidden = "<div style='display:none'>
		<p id='p1'>$resultp1</p>
		<p id='p2'>$resultp2</p>
		<p id='p3'>$resultp3</p>
		<p id='p4'>$resultp4</p>
		<p id='p5'>$resultp5</p>
		<p id='p6'>$resultp6</p>
		<p id='p7'>$resultp7</p>
		<p id='p8'>$resultp8</p>
		</div>
		";
			echo $personalhidden;
        ?>
		<script>
			function zoom(clicked){
					var elements = document.querySelectorAll('.items')
					for (i = 0; i < elements.length; i++) { elements[i].style.display='none'}
					document.getElementById('tableid').style.display="block"
					document.getElementById('back').style.display="block"
					document.getElementById('backer').style.display="none"
					document.getElementById('myInput').style.display="none"
					document.getElementById('findvalue').style.display="none"
					document.getElementById('searchschools').style.display="none"
					document.getElementById('gradevalue').style.display="none"
					document.getElementById('agevalue').style.display="none"
					var rows = elements[clicked].children;
					console.log(rows)
					document.getElementById("namedisplay").innerHTML= rows[0].innerHTML;
					document.getElementById("schooldisplay").innerHTML=rows[2].innerHTML+", "+rows[19].innerHTML;
					document.getElementById("emaildisplay").innerHTML=rows[20].innerHTML;
					document.getElementById("gradedisplay").innerHTML=rows[1].innerHTML;
					document.getElementById("period0").innerHTML= "period"
					document.getElementById("class0").innerHTML= "class"
					document.getElementById("teacher0").innerHTML= "teacher"
					document.getElementById("period1").innerHTML= "1"
					document.getElementById("class1").innerHTML= rows[3].innerHTML
					document.getElementById("teacher1").innerHTML= rows[11].innerHTML
					document.getElementById("period2").innerHTML= "2"
					document.getElementById("class2").innerHTML= rows[4].innerHTML
					document.getElementById("teacher2").innerHTML= rows[12].innerHTML
					document.getElementById("period3").innerHTML= "3"
					document.getElementById("class3").innerHTML= rows[5].innerHTML
					document.getElementById("teacher3").innerHTML= rows[13].innerHTML
					document.getElementById("period4").innerHTML= "4"
					document.getElementById("class4").innerHTML= rows[6].innerHTML
					document.getElementById("teacher4").innerHTML= rows[14].innerHTML
					document.getElementById("period5").innerHTML= "5"
					document.getElementById("class5").innerHTML= rows[7].innerHTML
					document.getElementById("teacher5").innerHTML= rows[15].innerHTML
					document.getElementById("period6").innerHTML= "6"
					document.getElementById("class6").innerHTML= rows[8].innerHTML
					document.getElementById("teacher6").innerHTML= rows[16].innerHTML
					document.getElementById("period7").innerHTML= "7"
					document.getElementById("class7").innerHTML= rows[9].innerHTML
					document.getElementById("teacher7").innerHTML= rows[17].innerHTML
					document.getElementById("period8").innerHTML= "8"
					document.getElementById("class8").innerHTML= rows[10].innerHTML
					document.getElementById("teacher8").innerHTML= rows[18].innerHTML
			
					
			}
			function myFunction(inp) {
			var count = "<?php echo $count ?>";
			var arr = []
				for (var i = 0; i <= count; i++) {
					var x = document.getElementById("name"+i).innerHTML
					console.log(x)
					arr.push(x)
					document.getElementById(i).style.display="block"
					document.getElementById(i).style.float="left"
					if (!arr[i].toLowerCase().includes(inp)) { 
						document.getElementById(i).style.display="none"
					} 
					else { 
					   console.log("pass")      
					} 
				}
			}
			function schools(inp) {
			var count = "<?php echo $count ?>";
			var arr = []
				for (var i = 0; i <= count; i++) {
					var x = document.getElementById("school"+i).innerHTML
					console.log(x)
					arr.push(x)
					document.getElementById(i).style.display="block"
					document.getElementById(i).style.float="left"
					if (!arr[i].toLowerCase().includes(inp)) { 
						document.getElementById(i).style.display="none"
					} 
					else { 
					   console.log("pass")      
					} 
				}
			}
			function changeFunc() {
				var selectBox = document.getElementById("gradevalue");
				var count = "<?php echo $count ?>";
				var selectedValue = (selectBox.options[selectBox.selectedIndex].value).toString();
				var elements = document.querySelectorAll('.items')
				if (selectedValue == "all"){
					for (var i = 0; i < count; i++) { 
						document.getElementById(i).style.display='block'
						document.getElementById(i).style.float='left'
					}
				}
				else{
					 for (var i = 0; i < elements.length; i++) { elements[i].style.display='none'}
					 for (var x = 0; x <= count; x++) {
						var grader = (document.getElementById("grade"+x).innerHTML).toString()
						if (grader==selectedValue){	
							document.getElementById(x).style.display="block"
							document.getElementById(x).style.float="left"
						}
					}
				}	
		   }
			function changeage() {
				var selectBox = document.getElementById("agevalue");
				var count = "<?php echo $count ?>";
				var selectedValue = (selectBox.options[selectBox.selectedIndex].value).toString();
				var elements = document.querySelectorAll('.items')
				if (selectedValue == "all"){
					for (var i = 0; i < count; i++) { 
						document.getElementById(i).style.display='block'
						document.getElementById(i).style.float='left'
					}
				}
				else{
					 for (var i = 0; i < elements.length; i++) { elements[i].style.display='none'}
					 for (var x = 0; x <= count; x++) {
						var ager = (document.getElementById("age"+x).innerHTML).toString()
						if (ager==selectedValue){	
							document.getElementById(x).style.display="block"
							document.getElementById(x).style.float="left"
						}
					}
				}	
		   }
			function back(){
		var yo = "<?php echo $_GET['id'];?>"
		yo = "home.php?id="+yo
		window.location.replace(yo); 
		}
			function findclassmates(){
				var selectBox = document.getElementById("findvalue").value.toString();
				var count = "<?php echo $count ?>";
				var elements = document.querySelectorAll('.items');
				if (selectBox == "all"){
				
					for (var x = 0; x <= count; x++) {
							document.getElementById(x).style.display="block"
							document.getElementById(x).style.float="left"
						
					}
				}
				else{
				var condition = document.getElementById(selectBox).innerHTML.toString();
				

		
				
					if (condition != ""){
					for (var i = 0; i < elements.length; i++){
					elements[i].style.display='none'
					}
					for (var x = 0; x <= count; x++) {
						var ager = (document.getElementById(selectBox+x).innerHTML).toString()
						if (ager==condition){	
							document.getElementById(x).style.display="block"
							document.getElementById(x).style.float="left"
						}
					}
					}
					else{
					for (var i = 0; i < elements.length; i++){
					elements[i].style.display='none'
					}	
					}
				}
				
				
				
				
			}
		</script>
	
	<style>
			.items{
				width: 23.5%;
			}
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
  				min-width: 300px;
  				margin: 10px;;
				text-align: center;
  				font-family: arial;
				background-color: white;
				border: none;  
				border-radius:5px 5px 5px 5px;	
			}
			#backer{
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
			button:hover, a:hover {opacity: 0.7;}
			#myInput,#searchschools,#gradevalue,#agevalue,#findvalue{
    			border: none;  
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				min-width: 12.12%;
				height: 50px;
				margin-left: 10px;
				border-radius:5px 5px 5px 5px;
				font-size: 20;
  			}
			table {
			  	font-family: arial, sans-serif;
			  	border-collapse: collapse;
			  	width: 100%;
				padding-left: 14px;
			}
			td, th {
			  	border: 1px solid #dddddd;
			  	text-align: left;
			  	padding: 8px;
				width: 450px;
			}	
			tr:nth-child(even) {
			  	background-color: #dddddd;
			}
			form{
			  	margin: 0;
				padding: 0;
				border: 0;
				font-size: 100%;
				font: inherit;
				vertical-align: baseline;
			}
			input[type=text], #gradevalue, select, textarea {
				  
				  padding: 12px;
				
				  border-radius: 4px;
				  box-sizing: border-box;
				  margin-top: 6px;
				  margin-bottom: 6px;
				  resize: vertical;
			}
			
		#myInput,#searchschools{
			border: none;  
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				min-width: 25%;
				height: 50px;
				margin-left: 1%;
				border-radius:5px 5px 5px 5px;
				font-size: 20;
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
			ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #111;
  left: 10px;
				width: 110%;
  top: 40px;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 30px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
h1,h4,p{
			font-family: arial;
			padding-left: 15px;
		}
		#backer:hover{
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				background-color: ghostwhite;
  				
				
			}
		</style>	
</html>
