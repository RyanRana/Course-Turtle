<html>
<link rel="icon" href="pic.png">
	
	<div class="fb-header">	</div>
	<title>Choose</title>
	<br><br><br><br><br><br>
    <body style="font-family: Helvetica, Arial, sans-serif;">  
	<input type='button' value='Back' onClick="window.location = 'index.php'"/>
<div id="center">

<div id="intro0" class="fb-body">CourseTurtle</div>
<h2>First off, what category best suites you?</h2>
			<div class="box" id="box1" style="display:inline-block"><button onclick="location.href='intro.php';"><h1>Student</h1><img src="Student.png" width="70%"></button></div>
			<div class="box" id="box2" style="display:inline-block"><button onclick="location.href='Teacher.php';"><h1>Teacher</h1><img id="teacherimg" src="Teacher.png" width="70%"></button></div>
			<div class="box" id="box3" style="display:inline-block" ><button onclick="location.href='Parent.php';"><h1>Parent</h1><img src="Parent.png" width="70%"></button></div>
</div>
     </body>
	<style>
		img{
			margin-bottom:5%;
		}
		#teacherimg{
			margin-bottom:3.5%;
		}
		h1{
			font-size:40px;
		}
		#intro0{

	
	font-size:60px;
font-weight: 550;
	color:#0e6352;

}
		.box{
		top:290px;
		width:25%;}
		#box1{
		position:fixed;
		left: 9%;}
		#box2{
		position:fixed;
		left: 34%;
	    width:31.5%;}
		#box3{
		position:fixed;
		left: 65.5%;
		width:24.5%;}
		#box1 {
                float:left; 
				display: inline-block;
                width:25%;
                height:280px;
            }
            #box2{
                float:left; 
				display: inline-block;
               
                height:280px;
            }
            #box3{
                float:right;
           display: inline-block;
             
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
			input[type=button]:hover, a:hover {
  opacity: 0.7;
}
		#center{
			margin-top:0;
margin-right:5%;
margin-bottom:0;
margin-left:5%;
			text-align: center;

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
		

			</style>

</html>
