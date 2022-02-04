<html>
<body>
	
	<div class="form-container sign-in-container">
		<form  method="post">
			<h1>Sign in</h1>
			<input name = "email" type="email" placeholder="Email" />
			<input name = "pass" type="password" placeholder="Password" />
			<input name="logger" id="submit2" type="submit" value="Sign in">
		</form>
	</div>
	</body>
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
									$id = $row['id'];
									$_SESSION['id'] = $id;
									header('Location: home.php?id='.$id);
								}
								else{echo "<p> Nope 1</p>";}
							}
							else{echo "<p> Nope 2</p>";
							}
						}
				 	}
				}
			}
	?>
	

</html>