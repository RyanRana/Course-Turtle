<html>
	<title>Edit</title>
<link rel="icon" href="pic.png">
 <div class="fb-header">	</div>
	<br>
	<br>
	<br>
	<br>
	<br><br>
	
	<input type='button' value='Back' onClick="back()"/>	
	

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
		function back(){
		var yo = "<?php echo $_GET['id'];?>"
		yo = "home.php?id="+yo
		window.location.replace(yo); 
		}
		
		
		
	</script>
    <?php
		include_once 'db.inc.php';
        $id = $_GET["id"];
		$sel = mysqli_connect("localhost", "root", "", "newapp");
		$res = mysqli_query($sel,"select * from users where random = '$id'");
		$result = mysqli_fetch_array($res);
		$name = $result["name"]; echo "<p>Edit Name:</p>";
	echo "<html>
		<form  id='nameform' method='POST' enctype='multipart/form-data'>
		<input type='text' id='name' name='nametext' placeholder='$name'>
		<input name='namesubmit' type='submit' value='Submit'>
		</form>
		</html>";
		$email = $result["email"];  echo "<p>Edit Email:</p>"; 
	echo "<html>
		<form  id='emailform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='emailtext' placeholder=$email>
		<input name='emailsubmit' type='submit' value='Submit'>
		</form>
		</html>";
	
		$state = $result["state"]; echo "<p>Edit State:</p>"; 
	echo "<html>
		<form  id='stateform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='statetext' placeholder='$state'>
		<input name='statesubmit' type='submit' value='Submit'>
		</form>
		</html>";
		$school = $result["school"]; echo "<p>Edit School:</p>"; 
	echo "<html>
		<form  id='schoolform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='schooltext' placeholder='$school'>
		<input name='schoolsubmit' type='submit' value='Submit'>
		</form>
		</html>";
		$grade = $result["grade"]; echo "<p>Edit Grade:</p>";
	echo "<html>
		<form  id='gradeform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='gradetext'placeholder=$grade>
		<input name='gradesubmit' type='submit' value='Submit'>
		</form>
		</html>";
		$p1 = $result["p1"]; echo "<p>Edit Period 1:</p>"; 

	echo "<html> 
		<form  id='p1form' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p1text' placeholder='$p1' list='p1'>
		<datalist id='p1'>
			<option value='Accounting'>
			<option value='Business Law'>
			<option value='Buisness management'>
			<option value='Consumer education'>
			<option value='Entrprenurial skills'>
			<option value='Intro to Business'>
			<option value='Marketing'>
			 <option value='Personal Finance'>
			 <option value='Animation'>
			<option value='App Development'>
			<option value='Audio Production'>
			 <option value='Computer programming'>
			 <option value='Computer repair'>
			<option value='Film production'>
			 <option value='Graphic design'>
			<option value='Keyboarding'>
				<option value='Media Technology'>	 <option value='Music production'>
				  <option value='Video game development'>
					   <option value='Web Design'>
						    <option value='Word processing'>
	 <option value='American literature'>
		  <option value='British literature'>
			   <option value='Contemporary literature'>
				    <option value='Creative Writing'>
						 <option value='Communication skills'>
	 <option value='Debate'>
		  <option value='English language and composition'>
<option value='English literature and composition'>		
<option value='Humanities'>	
	<option value='Journalism'>		
		<option value='Literary analysis'>	
			<option value='Modern literature'>	
				<option value='Poetry'>	
					<option value='Popular literature'>	
						<option value='Rhetoric'>	
							<option value='Shakespeare'>
<option value='Technical writing'>	
	<option value='World literature'>	
		<option value='Written and oral communication'>	
			<option value='Chemistry of food'>
				<option value='CPR'>	
					<option value='Culinary arts'>	
						<option value='Early childhood development'>	
							<option value='Early childhood education'>	
<option value='Family Studies'>	
	<option value='Fashion and retail merchandising'>
		<option value='Fashion construction'>
			<option value='Home economics'>	
				<option value='Interior design'>
					<option value='Nutrition'>	
<option value='Sign Language'>	
	<option value='Greek'>	
		<option value='Arabic'>
			<option value='Mandarin'>	
				<option value='French'>	
					<option value='German'>
						<option value='Hebrew'>	
							<option value='Italian'>	
								<option value='Japanese'>	
									<option value='Korean'>	
										<option value='Latin'>	
											<option value='Portuguese'>	
												<option value='Russian'>	
													<option value='Spanish'>
<option value='Algebra 1'>	
	<option value='Algebra 2'>
		<option value='Calculas'>	
			<option value='Geometry'>	
				<option value='Precalculas'>
					<option value='Probability'>
						<option value='Statistics'>	
<option value='Choir'>	
	<option value='Concert band'>	
<option value='Dance'>	
<option value='Drama'>	
	<option value='Guitar'>	
		<option value='Jazz Band'>	
			<option value='Marching band'>
				<option value='Music theory'>	
					<option value='Orchestra'>	
						<option value='Percussion'>	
							<option value='Piano'>	
								<option value='Theater technology'>	
									<option value='World music'>
<option value='Gym'>	
	<option value='Aerboics'>	
		<option value='Dance'>	
			<option value='Gymnastics'>	
				<option value='Health'>	
					<option value='Lifeguard training'>	
						<option value='Pilates'>
							<option value='Racket sports'>
								<option value='Specialized sports'>	
									<option value='Swimming'>	
										<option value='Weight training'>	
											<option value='Yoga'>	
<option value='Agriculture'>
	<option value='Astronomy'>	
		<option value='Biology'>	
			<option value='Botany'>	
				<option value='Chemistry'>	
					<option value='Earth science'>	
						<option value='Electronics'>	
							<option value='Environmental Science'>	
								<option value='Forensic Science'>
									<option value='Geology'>
										<option value='Marine biology'>	
											<option value='Oceanography'>	
<option value='Physical science'>	
	<option value='Physics'>	
		<option value='Zoology'>	
			<option value='Culural anthropolgy'>	
				<option value='Current events'>	
					<option value='European history'>	
						<option value='Geography'>	
							<option value='Global studies'>	
								<option value='Human geography'>
									<option value='Internal relations'>	
										<option value='Law'>	
<option value='Macroeconomics'>
	<option value='Microeconomics'>
		<option value='Modern world studies'>
			<option value='Physical antropology'>
				<option value='Political studies'>
					<option value='Psychology'>
						<option value='Religious Studies'>
							<option value='Sociology'>
								<option value='US goverment'>
									<option value='US history'>
<option value='Womans studies'>
	<option value='World history'>
		<option value='World Politics'>
			<option value='World religions'>
				<option value='3-D Art'>
					<option value='Art history'>
						<option value='Ceramics'>
							<option value='Digital media'>
								<option value='Drawing'>
									<option value='Film production'>
										<option value='Jewelry design'>
											<option value='Painting'>
												<option value='Photography'>
<option value='Printmaking'>
	<option value='Sculpture'>
		<option value='Auto body repair'>
			<option value='Auto mechanics'>
				<option value='Building construction'>
					<option value='Computer-aided drafting'>
						<option value='Cosmetology'>
							<option value='Criminal justice'>
								<option value='Driver education'>
									<option value='Electronics'>
										<option value='FFA'>
											<option value='Fire science'>
												<option value='Heating and cooling systems'>
<option value='Hospitality and tourism'>
	<option value='JROTC'>
		<option value='Metalworking'>
			<option value='Networking'>
				<option value='Plumbing'>
					<option value='Production technology'>
						<option value='Refrigeration fundamentals'>
							<option value='Woodworking'>

			</datalist>
		<input name='p1submit' type='submit' value='Submit'>
		</form>
		</html>";
		$p2 = $result["p2"]; echo "<p>Edit Period 2:</p>"; 
	echo "<html>
		<form  id='p2form' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p2text' placeholder='$p2' list='p2'>
		<datalist id='p2'>
			<option value='Accounting'>
			<option value='Business Law'>
			<option value='Buisness management'>
			<option value='Consumer education'>
			<option value='Entrprenurial skills'>
			<option value='Intro to Business'>
			<option value='Marketing'>
			 <option value='Personal Finance'>
			 <option value='Animation'>
			<option value='App Development'>
			<option value='Audio Production'>
			 <option value='Computer programming'>
			 <option value='Computer repair'>
			<option value='Film production'>
			 <option value='Graphic design'>
			<option value='Keyboarding'>
				<option value='Media Technology'>	 <option value='Music production'>
				  <option value='Video game development'>
					   <option value='Web Design'>
						    <option value='Word processing'>
	 <option value='American literature'>
		  <option value='British literature'>
			   <option value='Contemporary literature'>
				    <option value='Creative Writing'>
						 <option value='Communication skills'>
	 <option value='Debate'>
		  <option value='English language and composition'>
<option value='English literature and composition'>		
<option value='Humanities'>	
	<option value='Journalism'>		
		<option value='Literary analysis'>	
			<option value='Modern literature'>	
				<option value='Poetry'>	
					<option value='Popular literature'>	
						<option value='Rhetoric'>	
							<option value='Shakespeare'>
<option value='Technical writing'>	
	<option value='World literature'>	
		<option value='Written and oral communication'>	
			<option value='Chemistry of food'>
				<option value='CPR'>	
					<option value='Culinary arts'>	
						<option value='Early childhood development'>	
							<option value='Early childhood education'>	
<option value='Family Studies'>	
	<option value='Fashion and retail merchandising'>
		<option value='Fashion construction'>
			<option value='Home economics'>	
				<option value='Interior design'>
					<option value='Nutrition'>	
<option value='Sign Language'>	
	<option value='Greek'>	
		<option value='Arabic'>
			<option value='Mandarin'>	
				<option value='French'>	
					<option value='German'>
						<option value='Hebrew'>	
							<option value='Italian'>	
								<option value='Japanese'>	
									<option value='Korean'>	
										<option value='Latin'>	
											<option value='Portuguese'>	
												<option value='Russian'>	
													<option value='Spanish'>
<option value='Algebra 1'>	
	<option value='Algebra 2'>
		<option value='Calculas'>	
			<option value='Geometry'>	
				<option value='Precalculas'>
					<option value='Probability'>
						<option value='Statistics'>	
<option value='Choir'>	
	<option value='Concert band'>	
<option value='Dance'>	
<option value='Drama'>	
	<option value='Guitar'>	
		<option value='Jazz Band'>	
			<option value='Marching band'>
				<option value='Music theory'>	
					<option value='Orchestra'>	
						<option value='Percussion'>	
							<option value='Piano'>	
								<option value='Theater technology'>	
									<option value='World music'>
<option value='Gym'>	
	<option value='Aerboics'>	
		<option value='Dance'>	
			<option value='Gymnastics'>	
				<option value='Health'>	
					<option value='Lifeguard training'>	
						<option value='Pilates'>
							<option value='Racket sports'>
								<option value='Specialized sports'>	
									<option value='Swimming'>	
										<option value='Weight training'>	
											<option value='Yoga'>	
<option value='Agriculture'>
	<option value='Astronomy'>	
		<option value='Biology'>	
			<option value='Botany'>	
				<option value='Chemistry'>	
					<option value='Earth science'>	
						<option value='Electronics'>	
							<option value='Environmental Science'>	
								<option value='Forensic Science'>
									<option value='Geology'>
										<option value='Marine biology'>	
											<option value='Oceanography'>	
<option value='Physical science'>	
	<option value='Physics'>	
		<option value='Zoology'>	
			<option value='Culural anthropolgy'>	
				<option value='Current events'>	
					<option value='European history'>	
						<option value='Geography'>	
							<option value='Global studies'>	
								<option value='Human geography'>
									<option value='Internal relations'>	
										<option value='Law'>	
<option value='Macroeconomics'>
	<option value='Microeconomics'>
		<option value='Modern world studies'>
			<option value='Physical antropology'>
				<option value='Political studies'>
					<option value='Psychology'>
						<option value='Religious Studies'>
							<option value='Sociology'>
								<option value='US goverment'>
									<option value='US history'>
<option value='Womans studies'>
	<option value='World history'>
		<option value='World Politics'>
			<option value='World religions'>
				<option value='3-D Art'>
					<option value='Art history'>
						<option value='Ceramics'>
							<option value='Digital media'>
								<option value='Drawing'>
									<option value='Film production'>
										<option value='Jewelry design'>
											<option value='Painting'>
												<option value='Photography'>
<option value='Printmaking'>
	<option value='Sculpture'>
		<option value='Auto body repair'>
			<option value='Auto mechanics'>
				<option value='Building construction'>
					<option value='Computer-aided drafting'>
						<option value='Cosmetology'>
							<option value='Criminal justice'>
								<option value='Driver education'>
									<option value='Electronics'>
										<option value='FFA'>
											<option value='Fire science'>
												<option value='Heating and cooling systems'>
<option value='Hospitality and tourism'>
	<option value='JROTC'>
		<option value='Metalworking'>
			<option value='Networking'>
				<option value='Plumbing'>
					<option value='Production technology'>
						<option value='Refrigeration fundamentals'>
							<option value='Woodworking'>

			</datalist>
		<input name='p2submit' type='submit' value='Submit'>
		</form>
		</html>";
		$p3 = $result["p3"]; echo "<p>Edit Period 3:</p>"; 
	echo "<html>
		<form  id='p3form' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p3text' placeholder='$p3' list='p3'>
		<datalist id='p3'>
			<option value='Accounting'>
			<option value='Business Law'>
			<option value='Buisness management'>
			<option value='Consumer education'>
			<option value='Entrprenurial skills'>
			<option value='Intro to Business'>
			<option value='Marketing'>
			 <option value='Personal Finance'>
			 <option value='Animation'>
			<option value='App Development'>
			<option value='Audio Production'>
			 <option value='Computer programming'>
			 <option value='Computer repair'>
			<option value='Film production'>
			 <option value='Graphic design'>
			<option value='Keyboarding'>
				<option value='Media Technology'>	 <option value='Music production'>
				  <option value='Video game development'>
					   <option value='Web Design'>
						    <option value='Word processing'>
	 <option value='American literature'>
		  <option value='British literature'>
			   <option value='Contemporary literature'>
				    <option value='Creative Writing'>
						 <option value='Communication skills'>
	 <option value='Debate'>
		  <option value='English language and composition'>
<option value='English literature and composition'>		
<option value='Humanities'>	
	<option value='Journalism'>		
		<option value='Literary analysis'>	
			<option value='Modern literature'>	
				<option value='Poetry'>	
					<option value='Popular literature'>	
						<option value='Rhetoric'>	
							<option value='Shakespeare'>
<option value='Technical writing'>	
	<option value='World literature'>	
		<option value='Written and oral communication'>	
			<option value='Chemistry of food'>
				<option value='CPR'>	
					<option value='Culinary arts'>	
						<option value='Early childhood development'>	
							<option value='Early childhood education'>	
<option value='Family Studies'>	
	<option value='Fashion and retail merchandising'>
		<option value='Fashion construction'>
			<option value='Home economics'>	
				<option value='Interior design'>
					<option value='Nutrition'>	
<option value='Sign Language'>	
	<option value='Greek'>	
		<option value='Arabic'>
			<option value='Mandarin'>	
				<option value='French'>	
					<option value='German'>
						<option value='Hebrew'>	
							<option value='Italian'>	
								<option value='Japanese'>	
									<option value='Korean'>	
										<option value='Latin'>	
											<option value='Portuguese'>	
												<option value='Russian'>	
													<option value='Spanish'>
<option value='Algebra 1'>	
	<option value='Algebra 2'>
		<option value='Calculas'>	
			<option value='Geometry'>	
				<option value='Precalculas'>
					<option value='Probability'>
						<option value='Statistics'>	
<option value='Choir'>	
	<option value='Concert band'>	
<option value='Dance'>	
<option value='Drama'>	
	<option value='Guitar'>	
		<option value='Jazz Band'>	
			<option value='Marching band'>
				<option value='Music theory'>	
					<option value='Orchestra'>	
						<option value='Percussion'>	
							<option value='Piano'>	
								<option value='Theater technology'>	
									<option value='World music'>
<option value='Gym'>	
	<option value='Aerboics'>	
		<option value='Dance'>	
			<option value='Gymnastics'>	
				<option value='Health'>	
					<option value='Lifeguard training'>	
						<option value='Pilates'>
							<option value='Racket sports'>
								<option value='Specialized sports'>	
									<option value='Swimming'>	
										<option value='Weight training'>	
											<option value='Yoga'>	
<option value='Agriculture'>
	<option value='Astronomy'>	
		<option value='Biology'>	
			<option value='Botany'>	
				<option value='Chemistry'>	
					<option value='Earth science'>	
						<option value='Electronics'>	
							<option value='Environmental Science'>	
								<option value='Forensic Science'>
									<option value='Geology'>
										<option value='Marine biology'>	
											<option value='Oceanography'>	
<option value='Physical science'>	
	<option value='Physics'>	
		<option value='Zoology'>	
			<option value='Culural anthropolgy'>	
				<option value='Current events'>	
					<option value='European history'>	
						<option value='Geography'>	
							<option value='Global studies'>	
								<option value='Human geography'>
									<option value='Internal relations'>	
										<option value='Law'>	
<option value='Macroeconomics'>
	<option value='Microeconomics'>
		<option value='Modern world studies'>
			<option value='Physical antropology'>
				<option value='Political studies'>
					<option value='Psychology'>
						<option value='Religious Studies'>
							<option value='Sociology'>
								<option value='US goverment'>
									<option value='US history'>
<option value='Womans studies'>
	<option value='World history'>
		<option value='World Politics'>
			<option value='World religions'>
				<option value='3-D Art'>
					<option value='Art history'>
						<option value='Ceramics'>
							<option value='Digital media'>
								<option value='Drawing'>
									<option value='Film production'>
										<option value='Jewelry design'>
											<option value='Painting'>
												<option value='Photography'>
<option value='Printmaking'>
	<option value='Sculpture'>
		<option value='Auto body repair'>
			<option value='Auto mechanics'>
				<option value='Building construction'>
					<option value='Computer-aided drafting'>
						<option value='Cosmetology'>
							<option value='Criminal justice'>
								<option value='Driver education'>
									<option value='Electronics'>
										<option value='FFA'>
											<option value='Fire science'>
												<option value='Heating and cooling systems'>
<option value='Hospitality and tourism'>
	<option value='JROTC'>
		<option value='Metalworking'>
			<option value='Networking'>
				<option value='Plumbing'>
					<option value='Production technology'>
						<option value='Refrigeration fundamentals'>
							<option value='Woodworking'>

			</datalist>
		<input name='p3submit' type='submit' value='Submit'>
		</form>
		</html>";
		$p4 = $result["p4"]; echo "<p>Edit Period 4:</p>"; 
	echo "<html>
		<form  id='p4form' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p4text' placeholder='$p4' list='p4'>
		<datalist id='p4'>
			<option value='Accounting'>
			<option value='Business Law'>
			<option value='Buisness management'>
			<option value='Consumer education'>
			<option value='Entrprenurial skills'>
			<option value='Intro to Business'>
			<option value='Marketing'>
			 <option value='Personal Finance'>
			 <option value='Animation'>
			<option value='App Development'>
			<option value='Audio Production'>
			 <option value='Computer programming'>
			 <option value='Computer repair'>
			<option value='Film production'>
			 <option value='Graphic design'>
			<option value='Keyboarding'>
				<option value='Media Technology'>	 <option value='Music production'>
				  <option value='Video game development'>
					   <option value='Web Design'>
						    <option value='Word processing'>
	 <option value='American literature'>
		  <option value='British literature'>
			   <option value='Contemporary literature'>
				    <option value='Creative Writing'>
						 <option value='Communication skills'>
	 <option value='Debate'>
		  <option value='English language and composition'>
<option value='English literature and composition'>		
<option value='Humanities'>	
	<option value='Journalism'>		
		<option value='Literary analysis'>	
			<option value='Modern literature'>	
				<option value='Poetry'>	
					<option value='Popular literature'>	
						<option value='Rhetoric'>	
							<option value='Shakespeare'>
<option value='Technical writing'>	
	<option value='World literature'>	
		<option value='Written and oral communication'>	
			<option value='Chemistry of food'>
				<option value='CPR'>	
					<option value='Culinary arts'>	
						<option value='Early childhood development'>	
							<option value='Early childhood education'>	
<option value='Family Studies'>	
	<option value='Fashion and retail merchandising'>
		<option value='Fashion construction'>
			<option value='Home economics'>	
				<option value='Interior design'>
					<option value='Nutrition'>	
<option value='Sign Language'>	
	<option value='Greek'>	
		<option value='Arabic'>
			<option value='Mandarin'>	
				<option value='French'>	
					<option value='German'>
						<option value='Hebrew'>	
							<option value='Italian'>	
								<option value='Japanese'>	
									<option value='Korean'>	
										<option value='Latin'>	
											<option value='Portuguese'>	
												<option value='Russian'>	
													<option value='Spanish'>
<option value='Algebra 1'>	
	<option value='Algebra 2'>
		<option value='Calculas'>	
			<option value='Geometry'>	
				<option value='Precalculas'>
					<option value='Probability'>
						<option value='Statistics'>	
<option value='Choir'>	
	<option value='Concert band'>	
<option value='Dance'>	
<option value='Drama'>	
	<option value='Guitar'>	
		<option value='Jazz Band'>	
			<option value='Marching band'>
				<option value='Music theory'>	
					<option value='Orchestra'>	
						<option value='Percussion'>	
							<option value='Piano'>	
								<option value='Theater technology'>	
									<option value='World music'>
<option value='Gym'>	
	<option value='Aerboics'>	
		<option value='Dance'>	
			<option value='Gymnastics'>	
				<option value='Health'>	
					<option value='Lifeguard training'>	
						<option value='Pilates'>
							<option value='Racket sports'>
								<option value='Specialized sports'>	
									<option value='Swimming'>	
										<option value='Weight training'>	
											<option value='Yoga'>	
<option value='Agriculture'>
	<option value='Astronomy'>	
		<option value='Biology'>	
			<option value='Botany'>	
				<option value='Chemistry'>	
					<option value='Earth science'>	
						<option value='Electronics'>	
							<option value='Environmental Science'>	
								<option value='Forensic Science'>
									<option value='Geology'>
										<option value='Marine biology'>	
											<option value='Oceanography'>	
<option value='Physical science'>	
	<option value='Physics'>	
		<option value='Zoology'>	
			<option value='Culural anthropolgy'>	
				<option value='Current events'>	
					<option value='European history'>	
						<option value='Geography'>	
							<option value='Global studies'>	
								<option value='Human geography'>
									<option value='Internal relations'>	
										<option value='Law'>	
<option value='Macroeconomics'>
	<option value='Microeconomics'>
		<option value='Modern world studies'>
			<option value='Physical antropology'>
				<option value='Political studies'>
					<option value='Psychology'>
						<option value='Religious Studies'>
							<option value='Sociology'>
								<option value='US goverment'>
									<option value='US history'>
<option value='Womans studies'>
	<option value='World history'>
		<option value='World Politics'>
			<option value='World religions'>
				<option value='3-D Art'>
					<option value='Art history'>
						<option value='Ceramics'>
							<option value='Digital media'>
								<option value='Drawing'>
									<option value='Film production'>
										<option value='Jewelry design'>
											<option value='Painting'>
												<option value='Photography'>
<option value='Printmaking'>
	<option value='Sculpture'>
		<option value='Auto body repair'>
			<option value='Auto mechanics'>
				<option value='Building construction'>
					<option value='Computer-aided drafting'>
						<option value='Cosmetology'>
							<option value='Criminal justice'>
								<option value='Driver education'>
									<option value='Electronics'>
										<option value='FFA'>
											<option value='Fire science'>
												<option value='Heating and cooling systems'>
<option value='Hospitality and tourism'>
	<option value='JROTC'>
		<option value='Metalworking'>
			<option value='Networking'>
				<option value='Plumbing'>
					<option value='Production technology'>
						<option value='Refrigeration fundamentals'>
							<option value='Woodworking'>

			</datalist>
		<input name='p4submit' type='submit' value='Submit'>
		</form>
		</html>";
		$p5 = $result["p5"]; echo "<p>Edit Period 5:</p>"; 
	echo "<html>
		<form  id='p5form' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p5text' placeholder='$p5' list='p5'>
		<datalist id='p5'>
			<option value='Accounting'>
			<option value='Business Law'>
			<option value='Buisness management'>
			<option value='Consumer education'>
			<option value='Entrprenurial skills'>
			<option value='Intro to Business'>
			<option value='Marketing'>
			 <option value='Personal Finance'>
			 <option value='Animation'>
			<option value='App Development'>
			<option value='Audio Production'>
			 <option value='Computer programming'>
			 <option value='Computer repair'>
			<option value='Film production'>
			 <option value='Graphic design'>
			<option value='Keyboarding'>
				<option value='Media Technology'>	 <option value='Music production'>
				  <option value='Video game development'>
					   <option value='Web Design'>
						    <option value='Word processing'>
	 <option value='American literature'>
		  <option value='British literature'>
			   <option value='Contemporary literature'>
				    <option value='Creative Writing'>
						 <option value='Communication skills'>
	 <option value='Debate'>
		  <option value='English language and composition'>
<option value='English literature and composition'>		
<option value='Humanities'>	
	<option value='Journalism'>		
		<option value='Literary analysis'>	
			<option value='Modern literature'>	
				<option value='Poetry'>	
					<option value='Popular literature'>	
						<option value='Rhetoric'>	
							<option value='Shakespeare'>
<option value='Technical writing'>	
	<option value='World literature'>	
		<option value='Written and oral communication'>	
			<option value='Chemistry of food'>
				<option value='CPR'>	
					<option value='Culinary arts'>	
						<option value='Early childhood development'>	
							<option value='Early childhood education'>	
<option value='Family Studies'>	
	<option value='Fashion and retail merchandising'>
		<option value='Fashion construction'>
			<option value='Home economics'>	
				<option value='Interior design'>
					<option value='Nutrition'>	
<option value='Sign Language'>	
	<option value='Greek'>	
		<option value='Arabic'>
			<option value='Mandarin'>	
				<option value='French'>	
					<option value='German'>
						<option value='Hebrew'>	
							<option value='Italian'>	
								<option value='Japanese'>	
									<option value='Korean'>	
										<option value='Latin'>	
											<option value='Portuguese'>	
												<option value='Russian'>	
													<option value='Spanish'>
<option value='Algebra 1'>	
	<option value='Algebra 2'>
		<option value='Calculas'>	
			<option value='Geometry'>	
				<option value='Precalculas'>
					<option value='Probability'>
						<option value='Statistics'>	
<option value='Choir'>	
	<option value='Concert band'>	
<option value='Dance'>	
<option value='Drama'>	
	<option value='Guitar'>	
		<option value='Jazz Band'>	
			<option value='Marching band'>
				<option value='Music theory'>	
					<option value='Orchestra'>	
						<option value='Percussion'>	
							<option value='Piano'>	
								<option value='Theater technology'>	
									<option value='World music'>
<option value='Gym'>	
	<option value='Aerboics'>	
		<option value='Dance'>	
			<option value='Gymnastics'>	
				<option value='Health'>	
					<option value='Lifeguard training'>	
						<option value='Pilates'>
							<option value='Racket sports'>
								<option value='Specialized sports'>	
									<option value='Swimming'>	
										<option value='Weight training'>	
											<option value='Yoga'>	
<option value='Agriculture'>
	<option value='Astronomy'>	
		<option value='Biology'>	
			<option value='Botany'>	
				<option value='Chemistry'>	
					<option value='Earth science'>	
						<option value='Electronics'>	
							<option value='Environmental Science'>	
								<option value='Forensic Science'>
									<option value='Geology'>
										<option value='Marine biology'>	
											<option value='Oceanography'>	
<option value='Physical science'>	
	<option value='Physics'>	
		<option value='Zoology'>	
			<option value='Culural anthropolgy'>	
				<option value='Current events'>	
					<option value='European history'>	
						<option value='Geography'>	
							<option value='Global studies'>	
								<option value='Human geography'>
									<option value='Internal relations'>	
										<option value='Law'>	
<option value='Macroeconomics'>
	<option value='Microeconomics'>
		<option value='Modern world studies'>
			<option value='Physical antropology'>
				<option value='Political studies'>
					<option value='Psychology'>
						<option value='Religious Studies'>
							<option value='Sociology'>
								<option value='US goverment'>
									<option value='US history'>
<option value='Womans studies'>
	<option value='World history'>
		<option value='World Politics'>
			<option value='World religions'>
				<option value='3-D Art'>
					<option value='Art history'>
						<option value='Ceramics'>
							<option value='Digital media'>
								<option value='Drawing'>
									<option value='Film production'>
										<option value='Jewelry design'>
											<option value='Painting'>
												<option value='Photography'>
<option value='Printmaking'>
	<option value='Sculpture'>
		<option value='Auto body repair'>
			<option value='Auto mechanics'>
				<option value='Building construction'>
					<option value='Computer-aided drafting'>
						<option value='Cosmetology'>
							<option value='Criminal justice'>
								<option value='Driver education'>
									<option value='Electronics'>
										<option value='FFA'>
											<option value='Fire science'>
												<option value='Heating and cooling systems'>
<option value='Hospitality and tourism'>
	<option value='JROTC'>
		<option value='Metalworking'>
			<option value='Networking'>
				<option value='Plumbing'>
					<option value='Production technology'>
						<option value='Refrigeration fundamentals'>
							<option value='Woodworking'>

			</datalist>
		<input name='p5submit' type='submit' value='Submit'>
		</form>
		</html>";

		$p6 = $result["p6"]; echo "<p>Edit Period 6:</p>"; 
	echo "<html>
		<form  id='p6form' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p6text' placeholder='$p6' list='p6'>
		<datalist id='p6'>
			<option value='Accounting'>
			<option value='Business Law'>
			<option value='Buisness management'>
			<option value='Consumer education'>
			<option value='Entrprenurial skills'>
			<option value='Intro to Business'>
			<option value='Marketing'>
			 <option value='Personal Finance'>
			 <option value='Animation'>
			<option value='App Development'>
			<option value='Audio Production'>
			 <option value='Computer programming'>
			 <option value='Computer repair'>
			<option value='Film production'>
			 <option value='Graphic design'>
			<option value='Keyboarding'>
				<option value='Media Technology'>	 <option value='Music production'>
				  <option value='Video game development'>
					   <option value='Web Design'>
						    <option value='Word processing'>
	 <option value='American literature'>
		  <option value='British literature'>
			   <option value='Contemporary literature'>
				    <option value='Creative Writing'>
						 <option value='Communication skills'>
	 <option value='Debate'>
		  <option value='English language and composition'>
<option value='English literature and composition'>		
<option value='Humanities'>	
	<option value='Journalism'>		
		<option value='Literary analysis'>	
			<option value='Modern literature'>	
				<option value='Poetry'>	
					<option value='Popular literature'>	
						<option value='Rhetoric'>	
							<option value='Shakespeare'>
<option value='Technical writing'>	
	<option value='World literature'>	
		<option value='Written and oral communication'>	
			<option value='Chemistry of food'>
				<option value='CPR'>	
					<option value='Culinary arts'>	
						<option value='Early childhood development'>	
							<option value='Early childhood education'>	
<option value='Family Studies'>	
	<option value='Fashion and retail merchandising'>
		<option value='Fashion construction'>
			<option value='Home economics'>	
				<option value='Interior design'>
					<option value='Nutrition'>	
<option value='Sign Language'>	
	<option value='Greek'>	
		<option value='Arabic'>
			<option value='Mandarin'>	
				<option value='French'>	
					<option value='German'>
						<option value='Hebrew'>	
							<option value='Italian'>	
								<option value='Japanese'>	
									<option value='Korean'>	
										<option value='Latin'>	
											<option value='Portuguese'>	
												<option value='Russian'>	
													<option value='Spanish'>
<option value='Algebra 1'>	
	<option value='Algebra 2'>
		<option value='Calculas'>	
			<option value='Geometry'>	
				<option value='Precalculas'>
					<option value='Probability'>
						<option value='Statistics'>	
<option value='Choir'>	
	<option value='Concert band'>	
<option value='Dance'>	
<option value='Drama'>	
	<option value='Guitar'>	
		<option value='Jazz Band'>	
			<option value='Marching band'>
				<option value='Music theory'>	
					<option value='Orchestra'>	
						<option value='Percussion'>	
							<option value='Piano'>	
								<option value='Theater technology'>	
									<option value='World music'>
<option value='Gym'>	
	<option value='Aerboics'>	
		<option value='Dance'>	
			<option value='Gymnastics'>	
				<option value='Health'>	
					<option value='Lifeguard training'>	
						<option value='Pilates'>
							<option value='Racket sports'>
								<option value='Specialized sports'>	
									<option value='Swimming'>	
										<option value='Weight training'>	
											<option value='Yoga'>	
<option value='Agriculture'>
	<option value='Astronomy'>	
		<option value='Biology'>	
			<option value='Botany'>	
				<option value='Chemistry'>	
					<option value='Earth science'>	
						<option value='Electronics'>	
							<option value='Environmental Science'>	
								<option value='Forensic Science'>
									<option value='Geology'>
										<option value='Marine biology'>	
											<option value='Oceanography'>	
<option value='Physical science'>	
	<option value='Physics'>	
		<option value='Zoology'>	
			<option value='Culural anthropolgy'>	
				<option value='Current events'>	
					<option value='European history'>	
						<option value='Geography'>	
							<option value='Global studies'>	
								<option value='Human geography'>
									<option value='Internal relations'>	
										<option value='Law'>	
<option value='Macroeconomics'>
	<option value='Microeconomics'>
		<option value='Modern world studies'>
			<option value='Physical antropology'>
				<option value='Political studies'>
					<option value='Psychology'>
						<option value='Religious Studies'>
							<option value='Sociology'>
								<option value='US goverment'>
									<option value='US history'>
<option value='Womans studies'>
	<option value='World history'>
		<option value='World Politics'>
			<option value='World religions'>
				<option value='3-D Art'>
					<option value='Art history'>
						<option value='Ceramics'>
							<option value='Digital media'>
								<option value='Drawing'>
									<option value='Film production'>
										<option value='Jewelry design'>
											<option value='Painting'>
												<option value='Photography'>
<option value='Printmaking'>
	<option value='Sculpture'>
		<option value='Auto body repair'>
			<option value='Auto mechanics'>
				<option value='Building construction'>
					<option value='Computer-aided drafting'>
						<option value='Cosmetology'>
							<option value='Criminal justice'>
								<option value='Driver education'>
									<option value='Electronics'>
										<option value='FFA'>
											<option value='Fire science'>
												<option value='Heating and cooling systems'>
<option value='Hospitality and tourism'>
	<option value='JROTC'>
		<option value='Metalworking'>
			<option value='Networking'>
				<option value='Plumbing'>
					<option value='Production technology'>
						<option value='Refrigeration fundamentals'>
							<option value='Woodworking'>

			</datalist>
		<input name='p6submit' type='submit' value='Submit'>
		</form>
		</html>";

		$p7 = $result["p7"]; echo "<p>Edit Period 7:</p>"; 
	echo "<html>
		<form  id='p7form' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p7text' placeholder='$p7' list='p7'>
		<datalist id='p7'>
			<option value='Accounting'>
			<option value='Business Law'>
			<option value='Buisness management'>
			<option value='Consumer education'>
			<option value='Entrprenurial skills'>
			<option value='Intro to Business'>
			<option value='Marketing'>
			 <option value='Personal Finance'>
			 <option value='Animation'>
			<option value='App Development'>
			<option value='Audio Production'>
			 <option value='Computer programming'>
			 <option value='Computer repair'>
			<option value='Film production'>
			 <option value='Graphic design'>
			<option value='Keyboarding'>
				<option value='Media Technology'>	 <option value='Music production'>
				  <option value='Video game development'>
					   <option value='Web Design'>
						    <option value='Word processing'>
	 <option value='American literature'>
		  <option value='British literature'>
			   <option value='Contemporary literature'>
				    <option value='Creative Writing'>
						 <option value='Communication skills'>
	 <option value='Debate'>
		  <option value='English language and composition'>
<option value='English literature and composition'>		
<option value='Humanities'>	
	<option value='Journalism'>		
		<option value='Literary analysis'>	
			<option value='Modern literature'>	
				<option value='Poetry'>	
					<option value='Popular literature'>	
						<option value='Rhetoric'>	
							<option value='Shakespeare'>
<option value='Technical writing'>	
	<option value='World literature'>	
		<option value='Written and oral communication'>	
			<option value='Chemistry of food'>
				<option value='CPR'>	
					<option value='Culinary arts'>	
						<option value='Early childhood development'>	
							<option value='Early childhood education'>	
<option value='Family Studies'>	
	<option value='Fashion and retail merchandising'>
		<option value='Fashion construction'>
			<option value='Home economics'>	
				<option value='Interior design'>
					<option value='Nutrition'>	
<option value='Sign Language'>	
	<option value='Greek'>	
		<option value='Arabic'>
			<option value='Mandarin'>	
				<option value='French'>	
					<option value='German'>
						<option value='Hebrew'>	
							<option value='Italian'>	
								<option value='Japanese'>	
									<option value='Korean'>	
										<option value='Latin'>	
											<option value='Portuguese'>	
												<option value='Russian'>	
													<option value='Spanish'>
<option value='Algebra 1'>	
	<option value='Algebra 2'>
		<option value='Calculas'>	
			<option value='Geometry'>	
				<option value='Precalculas'>
					<option value='Probability'>
						<option value='Statistics'>	
<option value='Choir'>	
	<option value='Concert band'>	
<option value='Dance'>	
<option value='Drama'>	
	<option value='Guitar'>	
		<option value='Jazz Band'>	
			<option value='Marching band'>
				<option value='Music theory'>	
					<option value='Orchestra'>	
						<option value='Percussion'>	
							<option value='Piano'>	
								<option value='Theater technology'>	
									<option value='World music'>
<option value='Gym'>	
	<option value='Aerboics'>	
		<option value='Dance'>	
			<option value='Gymnastics'>	
				<option value='Health'>	
					<option value='Lifeguard training'>	
						<option value='Pilates'>
							<option value='Racket sports'>
								<option value='Specialized sports'>	
									<option value='Swimming'>	
										<option value='Weight training'>	
											<option value='Yoga'>	
<option value='Agriculture'>
	<option value='Astronomy'>	
		<option value='Biology'>	
			<option value='Botany'>	
				<option value='Chemistry'>	
					<option value='Earth science'>	
						<option value='Electronics'>	
							<option value='Environmental Science'>	
								<option value='Forensic Science'>
									<option value='Geology'>
										<option value='Marine biology'>	
											<option value='Oceanography'>	
<option value='Physical science'>	
	<option value='Physics'>	
		<option value='Zoology'>	
			<option value='Culural anthropolgy'>	
				<option value='Current events'>	
					<option value='European history'>	
						<option value='Geography'>	
							<option value='Global studies'>	
								<option value='Human geography'>
									<option value='Internal relations'>	
										<option value='Law'>	
<option value='Macroeconomics'>
	<option value='Microeconomics'>
		<option value='Modern world studies'>
			<option value='Physical antropology'>
				<option value='Political studies'>
					<option value='Psychology'>
						<option value='Religious Studies'>
							<option value='Sociology'>
								<option value='US goverment'>
									<option value='US history'>
<option value='Womans studies'>
	<option value='World history'>
		<option value='World Politics'>
			<option value='World religions'>
				<option value='3-D Art'>
					<option value='Art history'>
						<option value='Ceramics'>
							<option value='Digital media'>
								<option value='Drawing'>
									<option value='Film production'>
										<option value='Jewelry design'>
											<option value='Painting'>
												<option value='Photography'>
<option value='Printmaking'>
	<option value='Sculpture'>
		<option value='Auto body repair'>
			<option value='Auto mechanics'>
				<option value='Building construction'>
					<option value='Computer-aided drafting'>
						<option value='Cosmetology'>
							<option value='Criminal justice'>
								<option value='Driver education'>
									<option value='Electronics'>
										<option value='FFA'>
											<option value='Fire science'>
												<option value='Heating and cooling systems'>
<option value='Hospitality and tourism'>
	<option value='JROTC'>
		<option value='Metalworking'>
			<option value='Networking'>
				<option value='Plumbing'>
					<option value='Production technology'>
						<option value='Refrigeration fundamentals'>
							<option value='Woodworking'>

			</datalist>
		<input name='p7submit' type='submit' value='Submit'>
		</form>
		</html>";

		$p8 = $result["p8"];echo "<p>Edit Period 8:</p>";  
	echo "<html>
		<form  id='p8form' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p8text' placeholder='$p8' list='p8'>
		<datalist id='p8'>
			<option value='Accounting'>
			<option value='Business Law'>
			<option value='Buisness management'>
			<option value='Consumer education'>
			<option value='Entrprenurial skills'>
			<option value='Intro to Business'>
			<option value='Marketing'>
            <option value='Personal Finance'>
            <option value='Animation'>
			<option value='App Development'>
			<option value='Audio Production'>
            <option value='Computer programming'>
            <option value='Computer repair'>
			<option value='Film production'>
            <option value='Graphic design'>
			<option value='Keyboarding'>
            <option value='Media Technology'>
            <option value='Music production'>
            <option value='Video game development'>
            <option value='Web Design'>
            <option value='Word processing'>
            <option value='American literature'>
            <option value='British literature'>
            <option value='Contemporary literature'>
            <option value='Creative Writing'>
            <option value='Communication skills'>
            <option value='Debate'>
		    <option value='English language and composition'>
            <option value='English literature and composition'>
            <option value='Humanities'>
            <option value='Journalism'>
            <option value='Literary analysis'>
			<option value='Modern literature'>	
            <option value='Poetry'>
            <option value='Popular literature'>
            <option value='Rhetoric'>
            <option value='Shakespeare'>
<option value='Technical writing'>	
	<option value='World literature'>	
		<option value='Written and oral communication'>	
			<option value='Chemistry of food'>
				<option value='CPR'>	
					<option value='Culinary arts'>	
						<option value='Early childhood development'>	
							<option value='Early childhood education'>	
<option value='Family Studies'>	
	<option value='Fashion and retail merchandising'>
		<option value='Fashion construction'>
			<option value='Home economics'>	
				<option value='Interior design'>
					<option value='Nutrition'>	
<option value='Sign Language'>	
	<option value='Greek'>	
		<option value='Arabic'>
			<option value='Mandarin'>	
				<option value='French'>	
					<option value='German'>
						<option value='Hebrew'>	
							<option value='Italian'>	
								<option value='Japanese'>	
									<option value='Korean'>	
										<option value='Latin'>	
											<option value='Portuguese'>	
												<option value='Russian'>	
													<option value='Spanish'>
<option value='Algebra 1'>	
	<option value='Algebra 2'>
		<option value='Calculas'>	
			<option value='Geometry'>	
				<option value='Precalculas'>
					<option value='Probability'>
						<option value='Statistics'>	
<option value='Choir'>	
	<option value='Concert band'>	
<option value='Dance'>	
<option value='Drama'>	
	<option value='Guitar'>	
		<option value='Jazz Band'>	
			<option value='Marching band'>
				<option value='Music theory'>	
					<option value='Orchestra'>	
						<option value='Percussion'>	
							<option value='Piano'>	
								<option value='Theater technology'>	
									<option value='World music'>
<option value='Gym'>	
	<option value='Aerboics'>	
		<option value='Dance'>	
			<option value='Gymnastics'>	
				<option value='Health'>	
					<option value='Lifeguard training'>	
						<option value='Pilates'>
							<option value='Racket sports'>
								<option value='Specialized sports'>	
									<option value='Swimming'>	
										<option value='Weight training'>	
											<option value='Yoga'>	
<option value='Agriculture'>
	<option value='Astronomy'>	
		<option value='Biology'>	
			<option value='Botany'>	
				<option value='Chemistry'>	
					<option value='Earth science'>	
						<option value='Electronics'>	
							<option value='Environmental Science'>	
								<option value='Forensic Science'>
									<option value='Geology'>
										<option value='Marine biology'>	
											<option value='Oceanography'>	
<option value='Physical science'>	
	<option value='Physics'>	
		<option value='Zoology'>	
			<option value='Culural anthropolgy'>	
				<option value='Current events'>	
					<option value='European history'>	
						<option value='Geography'>	
							<option value='Global studies'>	
								<option value='Human geography'>
									<option value='Internal relations'>	
										<option value='Law'>	
<option value='Macroeconomics'>
	<option value='Microeconomics'>
		<option value='Modern world studies'>
			<option value='Physical antropology'>
				<option value='Political studies'>
					<option value='Psychology'>
						<option value='Religious Studies'>
							<option value='Sociology'>
								<option value='US goverment'>
									<option value='US history'>
<option value='Womans studies'>
	<option value='World history'>
		<option value='World Politics'>
			<option value='World religions'>
				<option value='3-D Art'>
					<option value='Art history'>
						<option value='Ceramics'>
							<option value='Digital media'>
								<option value='Drawing'>
									<option value='Film production'>
										<option value='Jewelry design'>
											<option value='Painting'>
												<option value='Photography'>
<option value='Printmaking'>
	<option value='Sculpture'>
		<option value='Auto body repair'>
			<option value='Auto mechanics'>
				<option value='Building construction'>
					<option value='Computer-aided drafting'>
						<option value='Cosmetology'>
							<option value='Criminal justice'>
								<option value='Driver education'>
									<option value='Electronics'>
										<option value='FFA'>
											<option value='Fire science'>
												<option value='Heating and cooling systems'>
<option value='Hospitality and tourism'>
	<option value='JROTC'>
		<option value='Metalworking'>
			<option value='Networking'>
				<option value='Plumbing'>
					<option value='Production technology'>
						<option value='Refrigeration fundamentals'>
							<option value='Woodworking'>

			</datalist>
		<input name='p8submit' type='submit' value='Submit'>
		</form>
		</html>";

		$p1t = $result["p1t"]; echo "<p>Edit Period 1 Teacher:</p>"; 
	echo "<html>
		<form  id='p1tform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p1ttext' placeholder='$p1t'>
		<input name='p1tsubmit' type='submit' value='Submit'>
		</form>
		</html>";
	
		$p2t = $result["p2t"]; echo "<p>Edit Period 2 Teacher:</p>"; 
	echo "<html>
		<form  id='p2tform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p2ttext' placeholder='$p2t'>
		<input name='p2tsubmit' type='submit' value='Submit'>
		</form>
		</html>";

		$p3t = $result["p3t"]; echo "<p>Edit Period 3 Teacher:</p>"; 
	echo "<html>
		<form  id='p3tform' method='POST' enctype='multipart/form-data'>
		
		<input type='text' name='p3ttext' placeholder='$p3t'>
		<input name='p3tsubmit' type='submit' value='Submit'>
		</form>
		</html>";
	
		$p4t = $result["p4t"]; echo "<p>Edit Period 4 Teacher:</p>"; 
	echo "<html>
		<form  id='p4tform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p4ttext' placeholder='$p4t'>
		<input name='p4tsubmit' type='submit' value='Submit'>
		</form>
		</html>";
	
		$p5t = $result["p5t"]; echo "<p>Edit Period 5 Teacher:</p>"; ;
	echo "<html>
		<form  id='p5tform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p5ttext' placeholder='$p5t'>
		<input name='p5tsubmit' type='submit' value='Submit'>
		</form>
		</html>";

		$p6t = $result["p6t"]; echo "<p>Edit Period 6 Teacher:</p>"; 
	echo "<html>
		<form  id='p6tform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p6ttext' placeholder='$p6t'>
		<input name='p6tsubmit' type='submit' value='Submit'>
		</form>
		</html>";

		$p7t = $result["p7t"]; echo "<p>Edit Period 7 Teacher:</p>"; 
	echo "<html>
		<form  id='p7tform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p7ttext' placeholder='$p7t'>
		<input name='p7tsubmit' type='submit' value='Submit'>
		</form>
		</html>";

		$p8t = $result["p8t"];echo "<p>Edit Period 8 Teacher:</p>"; 
	echo "<html>
		<form  id='p8tform' method='POST' enctype='multipart/form-data'>
		<input type='text' name='p8ttext' placeholder='$p8t'>
		<input name='p8tsubmit' type='submit' value='Submit'>
		</form>
		</html>";
	
	echo "<html>
		<form  id='delete' method='POST' enctype='multipart/form-data'>
		<input name='delete' id='deletebutton' type='submit' value='Delete Account'>
		</form>
		<html>
		</html>";
	
		if (isset($_POST["namesubmit"])){
				$nametext= $_POST["nametext"];
	
			    $sql = "UPDATE users set name='" . $_POST['nametext'] . "' WHERE random='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
					$thing = $_POST['name'];
					echo "<script>
			document.getElementsByName('name')[0].placeholder='$thing'
			</script>";
                }
            }
	if (isset($_POST["emailsubmit"])){
				$emailtext= $_POST["emailtext"];
	
			    $sql = "UPDATE users set email='" . $_POST['emailtext'] . "' WHERE random='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
					

                }
            }
	if (isset($_POST["passsubmit"])){
				$passtext= $_POST["passtext"];
				$person ='<script> prompt("Confirm Password Change") </script>';
		echo $person;
			  if ($person == $passtext) {
				$sql = "UPDATE users set pass='" . $_POST['passtext'] . "' WHERE random='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
			  } 
			    
            }
	if (isset($_POST["statesubmit"])){
				$statetext= $_POST["statetext"];
			
			    $sql = "UPDATE users set state='" . $_POST['statetext'] . "' WHERE random='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["schoolsubmit"])){
				$schooltext= $_POST["schooltext"];
	
			    $sql = "UPDATE users set school='" . $_POST['schooltext'] . "' WHERE random='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["gradesubmit"])){
				$gradetext= $_POST["gradetext"];
		
			    $sql = "UPDATE users set grade='" . $_POST['gradetext'] . "' WHERE random='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p1submit"])){
				$p1text= $_POST["p1text"];
				echo $p1text;
			    $sql = "UPDATE users set p1='" . $_POST['p1text'] . "' WHERE random='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p2submit"])){
				$p2text= $_POST["p2text"];
		
			    $sql = "UPDATE users set p2='" . $_POST['p2text'] . "' WHERE random='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p3submit"])){
				$p3text= $_POST["p3text"];
	
			    $sql = "UPDATE users set p3='" . $_POST['p3text'] . "' WHERE random='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p4submit"])){
				$p4text= $_POST["p4text"];

			    $sql = "UPDATE users set p4='" . $_POST['p4text'] . "' WHERE random='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p5submit"])){
				$p5text= $_POST["p5text"];

			    $sql = "UPDATE users set p5='" . $_POST['p5text'] . "' WHERE random='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p6submit"])){
				$p6text= $_POST["p6text"];
		
			    $sql = "UPDATE users set p6='" . $_POST['p6text'] . "' WHERE random='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p7submit"])){
				$p7text= $_POST["p7text"];
		
			    $sql = "UPDATE users set p7='" . $_POST['p7text'] . "' WHERE random='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p8submit"])){
				$p8text= $_POST["p8text"];
			
			    $sql = "UPDATE users set p8='" . $_POST['p8text'] . "' WHERE random='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p1tsubmit"])){
				$p1tttext= $_POST["p1ttext"];
			
			    $sql = "UPDATE users set p1t='" . $_POST['p1ttext'] . "' WHERE random='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p2tsubmit"])){
				$p2ttext= $_POST["p2ttext"];
			
			    $sql = "UPDATE users set p2t='" . $_POST['p2ttext'] . "' WHERE random='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p3tsubmit"])){
				$p3tttext= $_POST["p3ttext"];
			
			    $sql = "UPDATE users set p3t='" . $_POST['p3ttext'] . "' WHERE random='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p4tsubmit"])){
				$p4ttext= $_POST["p4ttext"];
		
			    $sql = "UPDATE users set p4t='" . $_POST['p4ttext'] . "' WHERE random='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p5tsubmit"])){
				$p5tttext= $_POST["p5ttext"];
	
			    $sql = "UPDATE users set p5t='" . $_POST['p5tttext'] . "' WHERE random='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p6tsubmit"])){
				$p6ttext= $_POST["p6ttext"];

			    $sql = "UPDATE users set p6t='" . $_POST['p6ttext'] . "' WHERE random='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p7tsubmit"])){
				$p7ttext= $_POST["p7ttext"];

			    $sql = "UPDATE users set p7t='" . $_POST['p7ttext'] . "' WHERE random='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["p8tsubmit"])){
				$p8tttext= $_POST["p8ttext"];
			    $sql = "UPDATE users set p8t='" . $_POST['p8ttext'] . "' WHERE random='" . $id . "'";
                if (mysqli_query($conn,$sql)){
                    echo'<script>alert("Your edit has went through succesfully")</script>';
                }
            }
	if (isset($_POST["delete"])){
		$result = "<script> confirm('Do you want to confirm?') </script>";
if ($result) {
     $id = $_GET["id"];
		$query = mysqli_query($sel = mysqli_connect("localhost", "root", "", "newapp"), "DELETE FROM users WHERE random = '{$_GET['id']}'")or die('Error : ' . mysql_error());
		echo '<script>alert("Are you sure?")</script>';
	$URL="index.php";
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
		exit();
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
  
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
					width: 50%;
					margin-left: 10px;;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
		
		#delete {
 
  color: white;
 margin-left: 10px;;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
		#deletebutton{
			background-color: red;
		
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
		
		.gang{
			margin:0;
    padding:0;
    border: solid 1px black;
    margin-left: 20px;
    font-size: 36px;
    display: inline-block;
    line-height: 80px;
			display: inline-block;
    vertical-align: top;
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
		p{
			margin-left: 10px;;
			font-family: arial;
		}
		input[type=button]:hover{
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				background-color: ghostwhite;
  				
				
			}
			</style>
</html>
