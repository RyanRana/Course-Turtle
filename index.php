<html>
<title>CourseTurtle</title>
<meta name="viewport" content="width=500, initial-scale=1.0"> 	<link rel="icon" href="pic.png">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="fb-header">	
	<a id="about" href="about.php">About</a>
</div>
	<br><br><br><br><br>
<div class="fb-body">
	
	<div id="intro0" class="fb-body">CourseTurtle</div>
	<div id="intro1" class="fb-body"><br><b>Students</b> - Share and find out what courses your friends and classmates are taking.
<br><br>
<b>Teachers</b> - Share and find out who all are in your course and what your colleagues are teaching.
<br><br>
<b>Parents</b> - See the courses of your child and their classmates.<br><br>



<br><br><br><br><br><br>
<img style="display:none" width="83%"src="pic.001.png"></div>
	<div id="intro2" class="fb-body">Log in to your account</div>
	<div id="intro3" class="fb-body">And you have it.</div>
	<div id="form3" class="fb-body">
		<form  method="post">
			<input name = "email" id="mailbox" type="email" placeholder="Email" />
			<input name = "pass" type="password" id="mailbox" placeholder="Password" />
			<p id="intro4"></p>
			<input type="submit" name="logger" class="button2" value="Login" />
			<p id="errortext">Your Email or Password is incorrect. Please try again.</p>
			<hr>
			<p id="intro4">Don't have an account. Let's create one in under a minute.</p>
<div id="intro6"><a href="Choose.php">Create my Account</a></div>
		</form>
    </div>
	<div class="footer">
  		<p id="intro5">&copy; 2021 CourseTurtle.Com. All Rights Reserved  
			  <span style="visibility:hidden;">ez</span>
            
				<a href="mailto:courseturtle@gmail.com"  style="color:#117964"  title="Email">
					<i style="color:white;font-size:23px;" class="fa fa-envelope"></i>
				</a>

				<span style="visibility:hidden;">e</span>

				<a href="https://twitter.com/CourseTurtle" style="color:#117964"  title="Twitter">
				<i style="color:white;font-size:23px;" class='fa fa-fw fa-twitter'></i>
				</a>

				<a href="https://instagram.com/courseturtle" style="color:#117964" title="Instagram">
				<i style="color:white;font-size:23px;" class='fa fa-fw fa-instagram'></i>
				</a>
		
				<a href="https://www.linkedin.com/company/75068550/admin/" style="color:#117964"  title="Linkedin">
				<i style="color:white;font-size:23px;" class='fa fa-fw fa-linkedin'></i>
				</a>
				
		</p>
	</div>
</div>
	
</html>
<?php
            include_once 'db.inc.php';
            if (isset($_POST["logger"])){
				$link = mysqli_connect("localhost", "root", "", "newapp");
				$email= $_POST["email"];
                $pass = $_POST["pass"];
				// Attempt select query execution
				$sql = "SELECT * FROM users";
				if($result = mysqli_query($link, $sql)){
					if(mysqli_num_rows($result) > 0){
						while($row = mysqli_fetch_array($result)){
							if ($email == $row['email']){
								if ($pass == $row['pass']){
									echo "<p> Sucess!</p>";
									
								$id = $row['random'];
								$_SESSION['id'] = $id;
								header('Location: home.php?id='.$id);
								}
								else{
									echo "<script>alert('Username or Password does not match.');window.location.href = 'index.php';</script>";
				
								}
							}
							else{
								echo "<script>alert('Username or Password does not match.');window.location.href = 'index.php';</script>";
							
							}
						}
				 	}
				}
			}			
    ?>
	<style>
	body{
	background-color: ghostwhite;
	overflow-y: hidden; /* Hide scrollbars */
		

}
		.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #117964;
   color: white;
   text-align: center;
		font-family: verdana;
}

.fb-header{
	width:100%;
	height:90px;
	position:fixed;
	background:#117964;
	top:0;
	left:0;
	color:white;
	z-index:7;
	font-family:verdana;
	
}
#about{

	height:30px;
	padding-top:33px;
	float:right;
	color:white;
	padding-right:2%;
	text-decoration: none;
}
#about:hover{
	text-decoration: underline;
}
#img1{
	left:178px;
	height:50px;
	width:100px;
	top:25px;
}
#form1{
	left:750px;
	height:60px;
	width:180px;
	top:20px;
	font-family:verdana;
	font-size:12px;
}
#form2{
	left:940px;
	height:80px;
	width:250px;
	top:20px;
	font-family:verdana;
	font-size:12px;
}
.submit1{
	left:1130px;
	top:35px;
	background:#0e6352;
	color:white;
	position:fixed;
	z-index:20;
	height:22px;
	width:50px;
	cursor:pointer;
	

	
}
.fb-body{
	position:absolute;
	left:0px;

	width:100%;
	height:100%;
	

}
#intro0{
	left:178px;
	top:20px;
	font-family:verdana;
	font-size:60px;
font-weight: 550;
	color:#0e6352;
	height:75px;
	width:550px;
}
#intro1{
	left:178px;
	top:100px;
	font-family:verdana;
	font-size:20px;
	color:#0e6352;
	height:75px;
	width:550px;
}
#intro2{
	left:750px;
	top:30px;
	font-family:verdana;
	font-size:30px;
	color:#000;
	font-weight:bold;
	height:75px;
	width:500px;
}
#img2{
	top:130px;
	left:178px;
	width:537px;
	height:195px;
}
#intro3{
	left:750px;
	top:70px;
	font-family:verdana;
	font-size:18px;
	color:#000;
	height:50px;
	width:300px;
}
#intro6{
    left:750px;
    top:70px;
    font-family:verdana;
    font-size:18px;
    color:#000;
    height:50px;
    width:300px;
}
#form3{
	top:120px;
	left:750px;
	font-family:verdana;
	font-size:20px;
	color:#142170;
	width:450px;
	height:700px;
	
}
#namebox{
	width:200px;
	height:40px;
	border-radius:5px 5px 5px 5px;
	background:white;
	padding:10px;
	font-size:18px;
	margin-top:8px;
	border-width: 1px;
	border-style:solid;
	border-color: gray;
}
#mailbox{
	width:408px;
	height:40px;
	border-radius:5px 5px 5px 5px;
	background:white;
	padding:10px;
	font-size:18px;
	margin-top:8px;
	border-width: 1px;
	border-style:solid;
	border-color: gray;
}
#r-b{
	font-size:12px;
	height:15px;
	width:15px;
}
.button2{
	width:250px;
	height:40px;
	left:750px;
	top:995px;
	padding: 10px;
	background:green;
	font-family:verdana;
	font-size:18px;
	color:white;
	border-radius:5px 5px 5px 5px;
	border-width: 0px;
	border-style:solid;
	
	cursor:pointer;
	outline:none;
	
}
#intro4{
	font-family:verdana;
	font-size:16px;
	color:gray;
	
}
#intro5{
	font-family:verdana;
	font-size:12px;
	color:white;
	
}
		#errortext{
	font-family:verdana;
	font-size:16px;
	color:red;
	display: none;
			
	
}

.fb-body-footer{
	width:100%;
	position:absolute;
	left:0px;
	height:80px;
	background-color: ghostwhite;

	
}
input[type=submit]:hover, a:hover {
  opacity: 0.7;
}
</html>
