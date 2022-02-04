<html>
<link rel="icon" href="pic.png">
	

	<div class="fb-header">	</div>
	<title>About</title>
	<br><br><br><br>
	
    <body style="font-family: Helvetica, Arial, sans-serif;">  
	<input type='button' value='Back' onClick="window.location = 'index.php'"/>
		<div id="center" >
        <h1>About</h1>
		<div class="fb-header1">	
			<p style="padding-top: 8%; padding-left: 5%; padding-right: 5%;"> 
			CourseTurtle.com enables students and teachers to share their class schedules online 
			with their classmates, students, and friends. It helps students to meet their classmates
			 and teachers before and during the school year. This fosters deeper collaboration and 
			 provides ability to compare notes, ask for help, share thoughts and opinions and much more.
			</p>
<p style="padding-top: 8%; padding-left: 5%; padding-right: 5%;">
CourseTurtle.com provides a plethora of different features that allow you to find people by
grade level, class period, occupation, and name. These filtering and search features make it
 incredibly easy to identify an entire demographic of people with your school ecosystem.
</p>
<p style="padding-top: 8%; padding-left: 5%; padding-right: 5%;">
The inspiration for this venture came across when the school released the
 course schedules for the 2021 school year. My friends and I were all discussing our schedules to figure out who is taking
  what course, but there wasn't an easy way to share and analyze these schedules. This is when the idea struck,
  to make this information to be easily accessible yet secure, so I begin building CourseTurtle. CourseTurle
   was launched In August of 2021. <br><br>
   - Sincerley, Ryan Rana
</p>
<input type="button" onclick="window.location.href='choose.php'" value= "Are You Ready to Set up your account?" id="Setup"
style="margin-top:6%; padding-top: 5%;padding-bottom: 6%;  padding-left: 5%; padding-right: 5%;">
</div>

			
			

		</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			
     </body>
	<?php
            include_once 'db.inc.php';
	
            if (isset($_POST["submit"])){
				$school = $_POST["school"];
				$userr = "SELECT * FROM schools WHERE school='$school' LIMIT 1";
				$db = mysqli_connect('localhost', 'root', '', 'newapp');
			    $result = mysqli_query($db, $userr);
			    $user = mysqli_fetch_assoc($result);	
				if ($user){
					echo null;
				}
				else{
					$sqlr = "INSERT INTO schools (school) VALUES ('$school') ";
					if (mysqli_query($db,$sqlr)){
                   		echo'';
					} 
		  		} 
				$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$charactersLength = strlen($characters);
				$randomString = '';
				for ($i = 0; $i < 50; $i++) {
					$randomString .= $characters[rand(0, $charactersLength - 1)];
				}
				$user_check_query = "SELECT * FROM users WHERE random='$randomString' LIMIT 1";
				$db = mysqli_connect('localhost', 'root', '', 'newapp');
			    $result = mysqli_query($db, $user_check_query);
			    $user = mysqli_fetch_assoc($result);
				if ($user) { // if user exists
				  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$charactersLength = strlen($characters);
				$randomString = '';
				for ($i = 0; $i < 20; $i++) {
					$randomString .= $characters[rand(0, $charactersLength - 1)];
				}
			  	}
				$age=$_POST["age"];
                $name = $_POST["name"];
                $state = $_POST["state"];
                $grade = $_POST["grade"];
                $pass = $_POST["pass"];
                $email = $_POST["email"];
                $p1 = $_POST["p1"];
                $p2 = $_POST["p2"];
                $p3 = $_POST["p3"];
                $p4 = $_POST["p4"];
                $p5 = $_POST["p5"];
                $p6 = $_POST["p6"];
                $p7 = $_POST["p7"];
                $p8 = $_POST["p8"];
                $p1t = $_POST["p1t"];
                $p2t = $_POST["p2t"];
                $p3t = $_POST["p3t"];
                $p4t = $_POST["p4t"];
                $p5t = $_POST["p5t"];
                $p6t = $_POST["p6t"];
                $p7t = $_POST["p7t"];
                $p8t = $_POST["p8t"];
				$user_check_query = "SELECT * FROM users WHERE name='$name' OR email='$email' LIMIT 1";
				$db = mysqli_connect('localhost', 'root', '', 'newapp');
			    $result = mysqli_query($db, $user_check_query);
			    $user = mysqli_fetch_assoc($result);
				if ($user) { // if user exists
				  if ($user['name'] === $name) {
					echo "<script>alert('Username already exists')</script>";
				}	
					if ($user['email'] === $email) {
						echo "<script>alert('Email already exists')</script>";
					}
			  	}
			  	else{
				 $sql = "INSERT INTO users (age,name,pass,email,state,school,grade,p1,p2,p3,p4,p5,p6,p7,p8,p1t,p2t,p3t,p4t,p5t,p6t,p7t,p8t,random) VALUES ('$age','$name','$pass','$email','$state','$school','$grade','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p1t','$p2t','$p3t','$p4t','$p5t','$p6t','$p7t','$p8t','$randomString') ";
                if (mysqli_query($conn,$sql)){
                    $URL="index.php";
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
		exit();
				} 
					
				 
            }
		}
    ?>
	<style>
		#center{
			width:50%;
			margin-top:0;
margin-right:25%;
margin-bottom:0;
margin-left:25%;
			text-align: center;

		}
		.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
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

	
}
.fb-header5{

	height:30%;
	
			
	
}
.fb-header1{
	width:500%;
	height:100%;
	position:absolute;
	background:#e1ebdc;

	left:0;
	color:black;
	z-index:7;

	width:50%;
			margin-top:0;
margin-right:25%;
margin-bottom:0;
margin-left:25%;
			text-align: center;
			
	
}
.fb-header2{
	width:500%;
	height:30%;
	position:absolute;
	background:lavender;

	left:0;
	color:black;
	z-index:7;
	
	width:50%;
			margin-top:0;
margin-right:25%;
margin-bottom:0;
margin-left:25%;
			text-align: center;
	
}
.fb-header3{
	width:500%;
	height:40%;
	position:absolute;
	background:mistyrose;

	left:0;
	color:black;
	z-index:7;

	width:50%;
			margin-top:0;
margin-right:25%;
margin-bottom:0;
margin-left:25%;
			text-align: center;
	
}
p{
	font-size:18px;
}
.fb-header4{
	width:500%;
	height:20%;
	position:absolute;
	background:darkslategray;

	left:0;
	color:black;
	z-index:7;

	width:50%;
			margin-top:0;
margin-right:25%;
margin-bottom:0;
margin-left:25%;
			text-align: center;
	
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
		h5{
			font-size:15.2px;
		}
				
				
				input[type=text], textarea, input[type=email],input[type=password], input{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
margin-top: 4px;
  margin-bottom: 4px;
  resize: vertical;
}
		#p1o,.periods,#p2o,#p3o,#p4o,#p5o,#p6o,#p7o,#p8o{
  width: 49%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 4px;
  margin-bottom: 4px;
  resize: vertical;
}
		
		.line4{
  width: 32.5%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 6px;
  resize: vertical;
}
		


		#button{
			background-color:	#C41E3A;
		}

.container {
 float:left;
	height: 50px;
				}
				
				#back{
					box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 100px;
		min-height: 50px;			
  margin-left: 10px;;
  text-align: center;
  font-family: arial;
					background-color: white;
					border: none;  
					border-radius:5px 5px 5px 5px;
				}
		/* VARS */
$open-sans: 'Open Sans', 'Helvetica', sans-serif;

$darkNavy: #213140;
$teal1: #66B3FB;
$teal2: #4B9DEA;
$charcoal: #555555;
$gold: #B6985A;

$activeShadow: 0 0 10px rgba($teal1, .5);

/* MIXINS */
@mixin focusOutline {outline: dotted 1px #CCC; outline-offset: .45rem;}
@mixin hideInput {width: 0; height: 0; position: absolute; left: -9999px;}
@mixin breakpoint($point) {
  @if $point == 1100 {
    @media (max-width: 1100px) { @content ; }
  }
  @else if $point == 800 {
    @media (max-width: 800px) { @content ; }
  }
}

/* STYLE THE HTML ELEMENTS (INCLUDES RESETS FOR THE DEFAULT FIELDSET AND LEGEND STYLES) */
body, html {
  margin: 0; padding: 1rem; box-sizing: border-box;
  width: 100%; height: 100%;
  font-size: 16px; font-family: $open-sans; 
  -webkit-font-smoothing: antialiased;
  background-color: ghostwhite;
}
fieldset {
  margin: 0; padding: 2rem; 
  box-sizing: border-box; display: block;
  border: none; border: solid 1px #CCC;
  min-width: 0;
  background-color: #FFF;
  legend {
    margin: 0 0 1.5rem; padding: 0;
    width: 100%; float: left; display: table;
    font-size: 1.5rem; line-height: 140%; font-weight: 600; color: #333;  
    + * {clear: both;}
  }
}
body:not(:-moz-handler-blocked) fieldset {display: table-cell;}

/* TOGGLE STYLING */
.toggle {
  margin: 0 0 1.5rem; box-sizing: border-box;
  font-size: 0;
  display: flex; flex-flow: row nowrap;
  justify-content: flex-start; align-items: stretch;
  input {@include hideInput;}
  input + label {
    margin: 0; padding: .75rem 2rem; box-sizing: border-box;
    position: relative; display: inline-block;
    border: solid 1px #DDD; background-color: #FFF;
    font-size: 1rem; line-height: 140%; font-weight: 600; text-align: center;
    box-shadow: 0 0 0 rgba(255,255,255,0);
    transition:   border-color .15s ease-out, 
          color .25s ease-out, 
          background-color .15s ease-out,
          box-shadow .15s ease-out;
    
    /* ADD THESE PROPERTIES TO SWITCH FROM AUTO WIDTH TO FULL WIDTH */
    /*flex: 0 0 50%; display: flex; justify-content: center; align-items: center;*/
    /* ----- */
    
    &:first-of-type {border-radius: 6px 0 0 6px; border-right: none;}
    &:last-of-type {border-radius: 0 6px 6px 0; border-left: none;}
  }
  input:hover + label {border-color: $darkNavy;}
  input:checked + label {
    background-color: $teal2;
    color: #FFF;
    box-shadow: $activeShadow;
    border-color: $teal2;
    z-index: 1;
  }
  input:focus + label {@include focusOutline;}

  @include breakpoint(800) {
    input + label {
      padding: .75rem .25rem;
      flex: 0 0 50%;
      display: flex; justify-content: center; align-items: center;
    }
  }
}

/* STYLING FOR THE STATUS HELPER TEXT FOR THE DEMO */
.status {
  margin: 0;
  font-size: 1rem; font-weight: 400;
  span {
    font-weight: 600; color: $gold;
    &:first-of-type {display: inline;}
    &:last-of-type {display: none;}
  }
  @include breakpoint(800) {
    span {
      &:first-of-type {display: none;}
      &:last-of-type {display: inline;}     
    }
  }
}
input[type=button]{
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  				max-width: 100px;
				min-height: 50px;			
  				margin-left: 0px;;
  				text-align: center;
  				font-family: arial;
				background-color: white;
				border: none;  
				color:black;
				border-radius:5px 5px 5px 5px;	
			}
			#Setup{
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  				max-width: 48%;
				  max-height: 20px;	
  				margin-left: 26%;
				  margin-right: 26%;
  				text-align: center;
  				font-family: arial;
				
				border: none;  
				color:black;
				border-radius:5px 5px 5px 5px;	
				
			}
			input[type=button]:hover{
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				background-color: ghostwhite;
  				
				
			}
			button:hover{
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				background-color: ghostwhite;
  				
				
			}
			</style>

</html>
