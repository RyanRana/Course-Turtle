<html>
	<div class="fb-header"></div>
	<br><br><br><br>
<link rel="icon" href="pic.png">
    <?php
	$id = $_GET["id"];
	$link = mysqli_connect("localhost", "root", "", "newapp");
	$result = mysqli_query($link,"SELECT * FROM users WHERE id = $id");
	$personal = mysqli_fetch_row($result);
	
	echo "<div class='show' id='full'>
		<h1 id='namedisplay'>$personal[2]</h1>
		<p id='schooldisplay'>$personal[6], $personal[5]</p>
		<p id='gradedisplay'>Grade: $personal[7]</p>
		<table id='tableid'>
			<tr>
				<td id='period0'>Period</td>
				<td id='class0'>Class</td>
				<td id='teacher0'>Teacher</td>
			</tr>
			<tr>
				<td id='period1'>1</td>
				<td id='class1'>$personal[8]</td>
				<td id='teacher1'>$personal[16]</td>
			</tr>
			<tr>
				<td id='period2'>2</td>
				<td id='class2'>$personal[9]</td>
				<td id='teacher2'>$personal[17]</td>
			</tr>
			<tr>
				<td id='period3'>3</td>
				<td id='class3'>$personal[10]</td>
				<td id='teacher3'>$personal[18]</td>
			</tr>
			<tr>
				<td id='period4'>4</td>
				<td id='class4'>$personal[11]</td>
				<td id='teacher4'>$personal[19]</td>
			</tr>
			<tr>
				<td id='period5'>5</td>
				<td id='class5'>$personal[12]</td>
				<td id='teacher5'>$personal[20]</td>
			</tr>
			<tr>
				<td id='period6'>6</td>
				<td id='class6'>$personal[13]</td>
				<td id='teacher6'>$personal[21]</td>
			</tr>
			<tr>
				<td id='period7'>7</td>
				<td id='class7'>$personal[14]</td>
				<td id='teacher7'>$personal[22]</td>
			</tr>
			<tr>
				<td id='period8'>8</td>
				<td id='class8'>$personal[15]</td>
				<td id='teacher8'>$personal[23]</td>
			</tr>
		</table>
	</div>";

	
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
			}
			td, th {
			  	border: 1px solid #dddddd;
			  	text-align: left;
			  	padding: 8px;
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
		</style>
</html>
