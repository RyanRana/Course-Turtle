<html>
	<title>CourseCheck</title>
 <div class="fb-header">	</div>
	<br>
	<br>
	<br>
	<br>
	<br><br>
	<input type='button' value='logout' onClick="window.location = 'intro.php'"/>

	<input type='button' value='browse' onClick="browse()"/>

	<input type='button' value='find classmates' onClick="classmates()"/>
<br><br>
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
	</script>
    <?php
		include_once 'db.inc.php';
        $id = $_GET["id"];
		$sel = mysqli_connect("localhost", "root", "", "newapp");
		$res = mysqli_query($sel,"select * from users where `id` = $id");
		$result = mysqli_fetch_array($res);
		$name = $result["name"]; echo $name;
	echo "<html>
		<form  id='nameform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='nametext'>
		<input name='namesubmit' type='submit' value='Submit'>
		</form>
		</html>";
		$email = $result["email"]; echo $email; 
	echo "<html>
		<form  id='emailform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='emailtext'>
		<input name='emailsubmit' type='submit' value='Submit'>
		</form>
		</html>";
		$state = $result["state"]; echo $state; 
	echo "<html>
		<form  id='stateform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='statetext'>
		<input name='statesubmit' type='submit' value='Submit'>
		</form>
		</html>";
		$school = $result["school"]; echo $school; 
	echo "<html>
		<form  id='schoolform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='schooltext'>
		<input name='schoolsubmit' type='submit' value='Submit'>
		</form>
		</html>";
		$grade = $result["grade"]; echo $grade;
	echo "<html>
		<form  id='gradeform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='gradetext'>
		<input name='gradesubmit' type='submit' value='Submit'>
		</form>
		</html>";
		$p1 = $result["p1"]; echo $p1; 
	echo "<html>
		<form  id='p1form' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p1text'>
		<input name='p1submit' type='submit' value='Submit'>
		</form>
		</html>";
		$p2 = $result["p2"]; echo $p2;
	echo "<html>
		<form  id='p2form' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p2text'>
		<input name='p2submit' type='submit' value='Submit'>
		</form>
		</html>";
		$p3 = $result["p3"]; echo $p3;
	echo "<html>
		<form  id='p3form' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p3text'>
		<input name='p3submit' type='submit' value='Submit'>
		</form>
		</html>";
		$p4 = $result["p4"]; echo $p4; 
	echo "<html>
		<form  id='p4form' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p4text'>
		<input name='p4submit' type='submit' value='Submit'>
		</form>
		</html>";
		$p5 = $result["p5"]; echo $p5;
	echo "<html>
		<form  id='p5form' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p5text'>
		<input name='p5submit' type='submit' value='Submit'>
		</form>
		</html>";

		$p6 = $result["p6"]; echo $p6;
	echo "<html>
		<form  id='p6form' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p6text'>
		<input name='p6submit' type='submit' value='Submit'>
		</form>
		</html>";

		$p7 = $result["p7"]; echo $p7;
	echo "<html>
		<form  id='p7form' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p7text'>
		<input name='p7submit' type='submit' value='Submit'>
		</form>
		</html>";

		$p8 = $result["p8"]; echo $p8; 
	echo "<html>
		<form  id='p8form' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p8text'>
		<input name='p8submit' type='submit' value='Submit'>
		</form>
		</html>";

		$p1t = $result["p1t"]; echo $p1t;
	echo "<html>
		<form  id='p1tform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p1ttext'>
		<input name='p1tsubmit' type='submit' value='Submit'>
		</form>
		</html>";
	
		$p2t = $result["p2t"]; echo $p2t;
	echo "<html>
		<form  id='p2tform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p2ttext'>
		<input name='p2tsubmit' type='submit' value='Submit'>
		</form>
		</html>";

		$p3t = $result["p3t"]; echo $p3t;
	echo "<html>
		<form  id='p3tform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p3ttext'>
		<input name='p3tsubmit' type='submit' value='Submit'>
		</form>
		</html>";
	
		$p4t = $result["p4t"]; echo $p4t;
	echo "<html>
		<form  id='p4tform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p4ttext'>
		<input name='p4tsubmit' type='submit' value='Submit'>
		</form>
		</html>";
	
		$p5t = $result["p5t"]; echo $p5t;
	echo "<html>
		<form  id='p5tform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p5ttext'>
		<input name='p5tsubmit' type='submit' value='Submit'>
		</form>
		</html>";

		$p6t = $result["p6t"]; echo $p6t;
	echo "<html>
		<form  id='p6tform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p6ttext'>
		<input name='p6tsubmit' type='submit' value='Submit'>
		</form>
		</html>";

		$p7t = $result["p7t"]; echo $p7t;
	echo "<html>
		<form  id='p7tform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p7ttext'>
		<input name='p7tsubmit' type='submit' value='Submit'>
		</form>
		</html>";

		$p8t = $result["p8t"]; echo $p8t;
	echo "<html>
		<form  id='p8tform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p8ttext'>
		<input name='p8tsubmit' type='submit' value='Submit'>
		</form>
		</html>";
	
		if (isset($_POST["namesubmit"])){
				$nametext= $_POST["nametext"];
	
			    $sql = "UPDATE users set name='" . $_POST['nametext'] . "' WHERE id='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["emailsubmit"])){
				$emailtext= $_POST["emailtext"];
	
			    $sql = "UPDATE users set email='" . $_POST['emailtext'] . "' WHERE id='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["statesubmit"])){
				$statetext= $_POST["statetext"];
			
			    $sql = "UPDATE users set state='" . $_POST['statetext'] . "' WHERE id='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["schoolsubmit"])){
				$schooltext= $_POST["schooltext"];
	
			    $sql = "UPDATE users set school='" . $_POST['schooltext'] . "' WHERE id='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["gradesubmit"])){
				$gradetext= $_POST["gradetext"];
		
			    $sql = "UPDATE users set grade='" . $_POST['gradetext'] . "' WHERE id='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p1submit"])){
				$p1text= $_POST["p1text"];
				echo $p1text;
			    $sql = "UPDATE users set p1='" . $_POST['p1text'] . "' WHERE id='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p2submit"])){
				$p2text= $_POST["p2text"];
				echo $p2text;
			    $sql = "UPDATE users set p2='" . $_POST['p2text'] . "' WHERE id='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p3submit"])){
				$p3text= $_POST["p3text"];
	
			    $sql = "UPDATE users set p3='" . $_POST['p3text'] . "' WHERE id='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p4submit"])){
				$p4text= $_POST["p4text"];

			    $sql = "UPDATE users set p4='" . $_POST['p4text'] . "' WHERE id='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p5submit"])){
				$p5text= $_POST["p5text"];

			    $sql = "UPDATE users set p5='" . $_POST['p5text'] . "' WHERE id='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p6submit"])){
				$p6text= $_POST["p6text"];
		
			    $sql = "UPDATE users set p6='" . $_POST['p6text'] . "' WHERE id='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p7submit"])){
				$p7text= $_POST["p7text"];
		
			    $sql = "UPDATE users set p7='" . $_POST['p7text'] . "' WHERE id='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p8submit"])){
				$p8text= $_POST["p8text"];
			
			    $sql = "UPDATE users set p8='" . $_POST['p8text'] . "' WHERE id='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p1tsubmit"])){
				$p1tttext= $_POST["p1ttext"];
			
			    $sql = "UPDATE users set p1t='" . $_POST['p1ttext'] . "' WHERE id='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p2tsubmit"])){
				$p2ttext= $_POST["p2ttext"];
			
			    $sql = "UPDATE users set p2t='" . $_POST['p2ttext'] . "' WHERE id='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p3tsubmit"])){
				$p3tttext= $_POST["p3ttext"];
			
			    $sql = "UPDATE users set p3t='" . $_POST['p3ttext'] . "' WHERE id='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p4tsubmit"])){
				$p4ttext= $_POST["p4ttext"];
		
			    $sql = "UPDATE users set p4t='" . $_POST['p4ttext'] . "' WHERE id='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p5tsubmit"])){
				$p5tttext= $_POST["p5ttext"];
	
			    $sql = "UPDATE users set p5t='" . $_POST['p5tttext'] . "' WHERE id='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p6tsubmit"])){
				$p6ttext= $_POST["p6ttext"];

			    $sql = "UPDATE users set p6t='" . $_POST['p6ttext'] . "' WHERE id='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p7tsubmit"])){
				$p7ttext= $_POST["p7ttext"];

			    $sql = "UPDATE users set p7t='" . $_POST['p7ttext'] . "' WHERE id='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p8tsubmit"])){
				$p8tttext= $_POST["p8ttext"];
			    $sql = "UPDATE users set p8t='" . $_POST['p8ttext'] . "' WHERE id='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
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
			</style>
</html>