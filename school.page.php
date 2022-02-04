<html>

<link rel="icon" href="pic.png">
<title>School Page</title>
	<div class="fb-header"></div>
	<script>
		
			function zoom(clicked){
					var elements = document.querySelectorAll('.items')
					for (i = 0; i < elements.length; i++) { elements[i].style.display='none'}
					document.getElementById('tableid').style.display="block"
					document.getElementById('back').style.display="block"
					var rows = elements[clicked].children;
					console.log(rows)
					document.getElementById("namedisplay").innerHTML= rows[0].innerHTML;
					document.getElementById("schooldisplay").innerHTML=rows[2].innerHTML+", "+rows[19].innerHTML;
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
					document.getElementById("emailform").style.display= "block"
			}
		function back(){
		var yo = "<?php echo $_GET['id'];?>"
		yo = "home.php?id="+yo
		window.location.replace(yo); 
		}
			
	</script>
	<br><br><br><br><br>
	<input type='button' id="backer" value='Back' onClick="back()"/>	
	
	<h1 id="SchoolName">School, State</h1>
	<h4 id="users">Total Users: ####</h4>
	<h4 id="teachers">Total Teachers: ####</h4>
	<h4 id="students">Total Student: ####</h4>
	<button class="show" id="back" style="display:none" onclick="window.location.reload();">Back</button>
	<div class="show" style="width:500px" id="full">
		<h1 id="namedisplay"></h1>
		<p id="schooldisplay"></p>
		<p id="gradedisplay"></p>
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
			$id = $_GET["name"];
			$link = mysqli_connect("localhost", "root", "", "newapp");
			$result = mysqli_query($link,"SELECT * FROM users WHERE school = '$id' AND age!='Parent' ");
			$enrollment = mysqli_num_rows($result);
			echo "<script>document.getElementById('users').innerHTML='Total Users: $enrollment'</script>";
			$result = mysqli_query($link,"SELECT * FROM users WHERE school = '$id' AND age='teacher'");
			$enrollment = mysqli_num_rows($result);
			echo "<script>document.getElementById('teachers').innerHTML='Total Teachers: $enrollment'</script>";
			$result = mysqli_query($link,"SELECT * FROM users WHERE school = '$id' AND age='student'");
			$enrollment = mysqli_num_rows($result);
			echo "<script>document.getElementById('students').innerHTML='Total Students: $enrollment'</script>";
	
			$link = mysqli_connect("localhost", "root", "", "newapp");
			$sql = "SELECT * FROM users WHERE school = '$id'";
			$result = mysqli_query($link,$sql);
			$resultCheck = mysqli_num_rows($result);
			$rows = "<p id='rows' style='display:none'>$resultCheck</p>";
			echo $rows;
			$row = mysqli_fetch_assoc($result);
		
	$count = 0;
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
					$element = "<button id = $count   class = 'items' onclick='zoom(this.id)'>
									<h1 id=$name_id>$name</h1>
									<p>Grade: <span id=$grade_id>$grade</span></p>
									<p id='big'><span id=$age_id>$age</span> at <span id=$school_id>$school</span></p>
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
								</button>";
								echo $element;
								if ($age=="Parent"){
									echo "<script>document.getElementById('$count').style.display='none'</script>";
								}
			$school = $row['school']; $state = $row['state'];
			echo "<script>document.getElementById('SchoolName').innerHTML='$school, $state'</script>";
			$count = 1;
			if ($resultCheck >= 0 ){
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
					$element = "<button id = $count   class = 'items' onclick='zoom(this.id)'>
									<h1 id=$name_id>$name</h1>
									<p>Grade: <span id=$grade_id>$grade</span></p>
									<p id='big'><span id=$age_id>$age</span> at <span id=$school_id>$school</span></p>
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
								</button>";
								echo $element;
								if ($age=="Parent"){
									echo "<script>document.getElementById('$count').style.display='none'</script>";
								}
					$count = $count + 1;  
				}  
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
		.items{
				width: 23.5%;
			}
			button, input[type=button]{
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  				min-width: 300px;
  				margin: 10px;;
				text-align: center;
  				font-family: arial;
				background-color: white;
				border: none;  
				border-radius:5px 5px 5px 5px;	
			}
			button:hover, a:hover {opacity: 0.7;}
			#myInput,#searchschools,#gradevalue{
    			border: none;  
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				min-width: 24.25%;
				height: 50px;
				margin-left: 10px;
				border-radius:5px 5px 5px 5px;
				font-size: 20;
  			}
			table {
			  	font-family: arial, sans-serif;
			  	border-collapse: collapse;
			  	width: 30%;
				width: 500px;
				padding-left: 15px;
			}
		p{
			font-family: arial, sans-serif;
			padding-left: 15px;
		}
			td, th {
			  	border: 1px solid #dddddd;
			  	text-align: left;
			  	padding: 8px;
				width: 500px;
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
		h1,h4{
			font-family: arial;
			padding-left: 15px;
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
		</style>
</html>
