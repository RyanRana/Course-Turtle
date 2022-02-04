<html>
<link rel="icon" href="pic.png">
	<script>
		
		function back(){
		var yo = "<?php echo $_GET['id'];?>"
		yo = "home.php?id="+yo
		window.location.replace(yo); 
		}
	function oldview() {
  var x = document.getElementById("oldpassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
		function newview() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
	</script>
	<div class="fb-header">	</div>
	<title>Change Password</title>
	<br><br><br><br><br><br>
	<input type='button' id="back" value='Back' onClick="back()"/>	
    <body style="font-family: Helvetica, Arial, sans-serif;">  
		
		<div id="center" >
        <form  id="form"  method="POST" enctype="multipart/form-data" style="font-family: Helvetica, Arial, sans-serif;">
			<h3>Old Password: </h3>
			<input type="password" id="oldpassword" required name="oldpass" />
			<input type="checkbox" onclick="oldview()">View<br>
			<h3>New Password: </h3>
			<input type="password" id="password" required name="pass" />
			<input type="checkbox" onclick="newview()">View<br>
			<h3>Cofirm New Password: </h3>
			<input type="password" id="confirmpassword"required name="confirmpass" /><br><br>
			 <input  name="submit" type="submit" value="Submit">
        </form> 
		</div>
     </body>
	<?php
            include_once 'db.inc.php';
            if (isset($_POST["submit"])){
				$id = $_GET["id"];
				$oldpass=$_POST["oldpass"];
                $pass=$_POST["pass"];
				$confirmpass=$_POST["confirmpass"];
				$user_check_query = "SELECT * FROM users WHERE random = '$id'";
				$db = mysqli_connect('localhost', 'root', '', 'newapp');
			    $result = mysqli_query($db, $user_check_query);
			    $user = mysqli_fetch_assoc($result);
				
				if ($oldpass == $user["pass"]){
			
					if ($pass == $confirmpass){
						$sql = "UPDATE users set pass='" . $_POST['pass'] . "' WHERE random='" . $id . "'";
						if (mysqli_query($db,$sql)){
							echo'<script>alert("Your edit has went through succesfully")</script>';
							$id = $_GET["id"];
							$URL="home.php?id=$id";
							echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
							echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
							exit();
						}
					}
					else{
						echo "<script>alert('Password Confirmation Incorrect')</script>";
					}
				}
				else{
				    echo "<script>alert('Old Password Is Incorrect')</script>";
				}
			} 
    ?>
	
<style>
	#center{
			margin-top:0;
margin-right:33%;
margin-bottom:0;
margin-left:33%;

		}
	body{background-color: ghostwhite;}
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
	button:hover, a:hover {opacity: 0.7;}
	input[type=password], input[type=text],input[type=submit]{
				  width: 100%;
				  padding: 12px;
				  border: 1px solid #ccc;
				  border-radius: 4px;
				  box-sizing: border-box;
				margin-top: 4px;
				  margin-bottom: 4px;
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
	#back{
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  		min-width: 100px;
		min-height: 50px;			
  		text-align: center;
  		font-family: arial;
		background-color: white;
		border: none;  
		margin-left: 10px;
		border-radius:5px 5px 5px 5px;
	
	}



body, html {
 box-sizing: border-box;
  width: 100%; height: 100%;
  font-size: 16px; font-family: $open-sans; 
  -webkit-font-smoothing: antialiased;
  background-color: ghostwhite;
}

body:not(:-moz-handler-blocked) fieldset {display: table-cell;}
#back:hover{
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				background-color: ghostwhite;
  				
				
			}

			</style>
</html>
