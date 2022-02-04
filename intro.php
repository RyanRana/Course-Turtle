<html>
<link rel="icon" href="pic.png">
	<?php
//connect to mysql database
$connection = mysqli_connect("localhost","root","","newapp") or die("Error " . mysqli_error($connection));
//fetch data from database
$sql = "select school from schools";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));
?>
	<div class="fb-header">	</div>
	<title>Sign up</title>
	<br><br><br><br>
    <body style="font-family: Helvetica, Arial, sans-serif;">  
		<div id="center" >
        <form  id="form"  method="POST" enctype="multipart/form-data" style="font-family: Helvetica, Arial, sans-serif;">
			<h5>Fill in your information and course schedule in under a minute.</h5>
			<input type="text" id="name" style="margin-to:4px;" placeholder="name *" required name="name" /><br>
			<input type="email" id ="email" placeholder="email *" required name="email"/><br>
			<input type="password" id="password"placeholder="password *" required name="pass" /><br>
		
            <input required name="state" class="line4" placeholder="state *" list="stateo"id ="state" >
			<datalist id="stateo">
					<option value="AL">Alabama</option>
					<option value="AK">Alaska</option>
					<option value="AZ">Arizona</option>
					<option value="AR">Arkansas</option>
					<option value="CA">California</option>
					<option value="CO">Colorado</option>
					<option value="CT">Connecticut</option>
					<option value="DE">Delaware</option>
					<option value="DC">District Of Columbia</option>
					<option value="FL">Florida</option>
					<option value="GA">Georgia</option>
					<option value="HI">Hawaii</option>
					<option value="ID">Idaho</option>
					<option value="IL">Illinois</option>
					<option value="IN">Indiana</option>
					<option value="IA">Iowa</option>
					<option value="KS">Kansas</option>
					<option value="KY">Kentucky</option>
					<option value="LA">Louisiana</option>
					<option value="ME">Maine</option>
					<option value="MD">Maryland</option>
					<option value="MA">Massachusetts</option>
					<option value="MI">Michigan</option>
					<option value="MN">Minnesota</option>
					<option value="MS">Mississippi</option>
					<option value="MO">Missouri</option>
					<option value="MT">Montana</option>
					<option value="NE">Nebraska</option>
					<option value="NV">Nevada</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NM">New Mexico</option>
					<option value="NY">New York</option>
					<option value="NC">North Carolina</option>
					<option value="ND">North Dakota</option>
					<option value="OH">Ohio</option>
					<option value="OK">Oklahoma</option>
					<option value="OR">Oregon</option>
					<option value="PA">Pennsylvania</option>
					<option value="RI">Rhode Island</option>
					<option value="SC">South Carolina</option>
					<option value="SD">South Dakota</option>
					<option value="TN">Tennessee</option>
					<option value="TX">Texas</option>
					<option value="UT">Utah</option>
					<option value="VT">Vermont</option>
					<option value="VA">Virginia</option>
					<option value="WA">Washington</option>
					<option value="WV">West Virginia</option>
					<option value="WI">Wisconsin</option>
					<option value="WY">Wyoming</option>
			</datalist>
            <input required name="school" class="line4" placeholder="school *" id ="school" list="schooler">
			<datalist id="schooler">
                <?php while($row = mysqli_fetch_array($result)) { ?>
                    <option value="<?php echo $row['school']; ?>"><?php echo $row['school']; ?></option>
                <?php } ?>
			</datalist>
            <input class="line4" required placeholder="grade (# only) *" list="gradeo" value=""name="grade"><br>
			<datalist id="gradeo">
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </datalist>

			<input type="text" id="p1o" class="periods" placeholder="period 1" name="p1" list="p1">
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
			<input name="p1t" class="periods"placeholder="period 1 teacher"><br>
			<input type="text" id="p2o" class="periods"placeholder="period 2" name="p2" list="p2">
            <datalist id="p2">
			<option value="Accounting">
			<option value="Business Law">
			<option value="Buisness management">
			<option value="Consumer education">
			<option value="Entrprenurial skills">
			<option value="Intro to Business">
			<option value="Marketing">
			 <option value="Personal Finance">
			 <option value="Animation">
			<option value="App Development">
			<option value="Audio Production">
			 <option value="Computer programming">
			 <option value="Computer repair">
			<option value="Film production">
			 <option value="Graphic design">
			<option value="Keyboarding">
				<option value="Media Technology">	 <option value="Music production">
				  <option value="Video game development">
					   <option value="Web Design">
						    <option value="Word processing">
	 <option value="American literature">
		  <option value="British literature">
			   <option value="Contemporary literature">
				    <option value="Creative Writing">
						 <option value="Communication skills">
	 <option value="Debate">
		  <option value="English language and composition">
<option value="English literature and composition">		
<option value="Humanities">	
	<option value="Journalism">		
		<option value="Literary analysis">	
			<option value="Modern literature">	
				<option value="Poetry">	
					<option value="Popular literature">	
						<option value="Rhetoric">	
							<option value="Shakespeare">
<option value="Technical writing">	
	<option value="World literature">	
		<option value="Written and oral communication">	
			<option value="Chemistry of food">
				<option value="CPR">	
					<option value="Culinary arts">	
						<option value="Early childhood development">	
							<option value="Early childhood education">	
<option value="Family Studies">	
	<option value="Fashion and retail merchandising">
		<option value="Fashion construction">
			<option value="Home economics">	
				<option value="Interior design">
					<option value="Nutrition">	
<option value="Sign Language">	
	<option value="Greek">	
		<option value="Arabic">
			<option value="Mandarin">	
				<option value="French">	
					<option value="German">
						<option value="Hebrew">	
							<option value="Italian">	
								<option value="Japanese">	
									<option value="Korean">	
										<option value="Latin">	
											<option value="Portuguese">	
												<option value="Russian">	
													<option value="Spanish">
<option value="Algebra 1">	
	<option value="Algebra 2">
		<option value="Calculas">	
			<option value="Geometry">	
				<option value="Precalculas">
					<option value="Probability">
						<option value="Statistics">	
<option value="Choir">	
	<option value="Concert band">	
<option value="Dance">	
<option value="Drama">	
	<option value="Guitar">	
		<option value="Jazz Band">	
			<option value="Marching band">
				<option value="Music theory">	
					<option value="Orchestra">	
						<option value="Percussion">	
							<option value="Piano">	
								<option value="Theater technology">	
									<option value="World music">
<option value="Gym">	
	<option value="Aerboics">	
		<option value="Dance">	
			<option value="Gymnastics">	
				<option value="Health">	
					<option value="Lifeguard training">	
						<option value="Pilates">
							<option value="Racket sports">
								<option value="Specialized sports">	
									<option value="Swimming">	
										<option value="Weight training">	
											<option value="Yoga">	
<option value="Agriculture">
	<option value="Astronomy">	
		<option value="Biology">	
			<option value="Botany">	
				<option value="Chemistry">	
					<option value="Earth science">	
						<option value="Electronics">	
							<option value="Environmental Science">	
								<option value="Forensic Science">
									<option value="Geology">
										<option value="Marine biology">	
											<option value="Oceanography">	
<option value="Physical science">	
	<option value="Physics">	
		<option value="Zoology">	
			<option value="Culural anthropolgy">	
				<option value="Current events">	
					<option value="European history">	
						<option value="Geography">	
							<option value="Global studies">	
								<option value="Human geography">
									<option value="Internal relations">	
										<option value="Law">	
<option value="Macroeconomics">
	<option value="Microeconomics">
		<option value="Modern world studies">
			<option value="Physical antropology">
				<option value="Political studies">
					<option value="Psychology">
						<option value="Religious Studies">
							<option value="Sociology">
								<option value="US goverment">
									<option value="US history">
<option value="Woman's studies">
	<option value="World history">
		<option value="World Politics">
			<option value="World religions">
				<option value="3-D Art">
					<option value="Art history">
						<option value="Ceramics">
							<option value="Digital media">
								<option value="Drawing">
									<option value="Film production">
										<option value="Jewelry design">
											<option value="Painting">
												<option value="Photography">
<option value="Printmaking">
	<option value="Sculpture">
		<option value="Auto body repair">
			<option value="Auto mechanics">
				<option value="Building construction">
					<option value="Computer-aided drafting">
						<option value="Cosmetology">
							<option value="Criminal justice">
								<option value="Driver education">
									<option value="Electronics">
										<option value="FFA">
											<option value="Fire science">
												<option value="Heating and cooling systems">
<option value="Hospitality and tourism">
	<option value="JROTC">
		<option value="Metalworking">
			<option value="Networking">
				<option value="Plumbing">
					<option value="Production technology">
						<option value="Refrigeration fundamentals">
							<option value="Woodworking">

			</datalist>
			<input name="p2t" class="periods"placeholder="period 2 teacher"><br>
			<input type="text"class="periods" id="p3o" placeholder="period 3"name="p3" list="p3">
            <datalist id="p3">
			<option value="Accounting">
			<option value="Business Law">
			<option value="Buisness management">
			<option value="Consumer education">
			<option value="Entrprenurial skills">
			<option value="Intro to Business">
			<option value="Marketing">
			 <option value="Personal Finance">
			 <option value="Animation">
			<option value="App Development">
			<option value="Audio Production">
			 <option value="Computer programming">
			 <option value="Computer repair">
			<option value="Film production">
			 <option value="Graphic design">
			<option value="Keyboarding">
				<option value="Media Technology">	 <option value="Music production">
				  <option value="Video game development">
					   <option value="Web Design">
						    <option value="Word processing">
	 <option value="American literature">
		  <option value="British literature">
			   <option value="Contemporary literature">
				    <option value="Creative Writing">
						 <option value="Communication skills">
	 <option value="Debate">
		  <option value="English language and composition">
<option value="English literature and composition">		
<option value="Humanities">	
	<option value="Journalism">		
		<option value="Literary analysis">	
			<option value="Modern literature">	
				<option value="Poetry">	
					<option value="Popular literature">	
						<option value="Rhetoric">	
							<option value="Shakespeare">
<option value="Technical writing">	
	<option value="World literature">	
		<option value="Written and oral communication">	
			<option value="Chemistry of food">
				<option value="CPR">	
					<option value="Culinary arts">	
						<option value="Early childhood development">	
							<option value="Early childhood education">	
<option value="Family Studies">	
	<option value="Fashion and retail merchandising">
		<option value="Fashion construction">
			<option value="Home economics">	
				<option value="Interior design">
					<option value="Nutrition">	
<option value="Sign Language">	
	<option value="Greek">	
		<option value="Arabic">
			<option value="Mandarin">	
				<option value="French">	
					<option value="German">
						<option value="Hebrew">	
							<option value="Italian">	
								<option value="Japanese">	
									<option value="Korean">	
										<option value="Latin">	
											<option value="Portuguese">	
												<option value="Russian">	
													<option value="Spanish">
<option value="Algebra 1">	
	<option value="Algebra 2">
		<option value="Calculas">	
			<option value="Geometry">	
				<option value="Precalculas">
					<option value="Probability">
						<option value="Statistics">	
<option value="Choir">	
	<option value="Concert band">	
<option value="Dance">	
<option value="Drama">	
	<option value="Guitar">	
		<option value="Jazz Band">	
			<option value="Marching band">
				<option value="Music theory">	
					<option value="Orchestra">	
						<option value="Percussion">	
							<option value="Piano">	
								<option value="Theater technology">	
									<option value="World music">
<option value="Gym">	
	<option value="Aerboics">	
		<option value="Dance">	
			<option value="Gymnastics">	
				<option value="Health">	
					<option value="Lifeguard training">	
						<option value="Pilates">
							<option value="Racket sports">
								<option value="Specialized sports">	
									<option value="Swimming">	
										<option value="Weight training">	
											<option value="Yoga">	
<option value="Agriculture">
	<option value="Astronomy">	
		<option value="Biology">	
			<option value="Botany">	
				<option value="Chemistry">	
					<option value="Earth science">	
						<option value="Electronics">	
							<option value="Environmental Science">	
								<option value="Forensic Science">
									<option value="Geology">
										<option value="Marine biology">	
											<option value="Oceanography">	
<option value="Physical science">	
	<option value="Physics">	
		<option value="Zoology">	
			<option value="Culural anthropolgy">	
				<option value="Current events">	
					<option value="European history">	
						<option value="Geography">	
							<option value="Global studies">	
								<option value="Human geography">
									<option value="Internal relations">	
										<option value="Law">	
<option value="Macroeconomics">
	<option value="Microeconomics">
		<option value="Modern world studies">
			<option value="Physical antropology">
				<option value="Political studies">
					<option value="Psychology">
						<option value="Religious Studies">
							<option value="Sociology">
								<option value="US goverment">
									<option value="US history">
<option value="Woman's studies">
	<option value="World history">
		<option value="World Politics">
			<option value="World religions">
				<option value="3-D Art">
					<option value="Art history">
						<option value="Ceramics">
							<option value="Digital media">
								<option value="Drawing">
									<option value="Film production">
										<option value="Jewelry design">
											<option value="Painting">
												<option value="Photography">
<option value="Printmaking">
	<option value="Sculpture">
		<option value="Auto body repair">
			<option value="Auto mechanics">
				<option value="Building construction">
					<option value="Computer-aided drafting">
						<option value="Cosmetology">
							<option value="Criminal justice">
								<option value="Driver education">
									<option value="Electronics">
										<option value="FFA">
											<option value="Fire science">
												<option value="Heating and cooling systems">
<option value="Hospitality and tourism">
	<option value="JROTC">
		<option value="Metalworking">
			<option value="Networking">
				<option value="Plumbing">
					<option value="Production technology">
						<option value="Refrigeration fundamentals">
							<option value="Woodworking">

			</datalist>
			 <input  name="p3t" class="periods" placeholder="period 3 teacher"><br>
			<input type="text" id="p4o" class="periods" placeholder="period 4" name="p4" list="p4">
            <datalist id="p4">
			<option value="Accounting">
			<option value="Business Law">
			<option value="Buisness management">
			<option value="Consumer education">
			<option value="Entrprenurial skills">
			<option value="Intro to Business">
			<option value="Marketing">
			 <option value="Personal Finance">
			 <option value="Animation">
			<option value="App Development">
			<option value="Audio Production">
			 <option value="Computer programming">
			 <option value="Computer repair">
			<option value="Film production">
			 <option value="Graphic design">
			<option value="Keyboarding">
				<option value="Media Technology">	 <option value="Music production">
				  <option value="Video game development">
					   <option value="Web Design">
						    <option value="Word processing">
	 <option value="American literature">
		  <option value="British literature">
			   <option value="Contemporary literature">
				    <option value="Creative Writing">
						 <option value="Communication skills">
	 <option value="Debate">
		  <option value="English language and composition">
<option value="English literature and composition">		
<option value="Humanities">	
	<option value="Journalism">		
		<option value="Literary analysis">	
			<option value="Modern literature">	
				<option value="Poetry">	
					<option value="Popular literature">	
						<option value="Rhetoric">	
							<option value="Shakespeare">
<option value="Technical writing">	
	<option value="World literature">	
		<option value="Written and oral communication">	
			<option value="Chemistry of food">
				<option value="CPR">	
					<option value="Culinary arts">	
						<option value="Early childhood development">	
							<option value="Early childhood education">	
<option value="Family Studies">	
	<option value="Fashion and retail merchandising">
		<option value="Fashion construction">
			<option value="Home economics">	
				<option value="Interior design">
					<option value="Nutrition">	
<option value="Sign Language">	
	<option value="Greek">	
		<option value="Arabic">
			<option value="Mandarin">	
				<option value="French">	
					<option value="German">
						<option value="Hebrew">	
							<option value="Italian">	
								<option value="Japanese">	
									<option value="Korean">	
										<option value="Latin">	
											<option value="Portuguese">	
												<option value="Russian">	
													<option value="Spanish">
<option value="Algebra 1">	
	<option value="Algebra 2">
		<option value="Calculas">	
			<option value="Geometry">	
				<option value="Precalculas">
					<option value="Probability">
						<option value="Statistics">	
<option value="Choir">	
	<option value="Concert band">	
<option value="Dance">	
<option value="Drama">	
	<option value="Guitar">	
		<option value="Jazz Band">	
			<option value="Marching band">
				<option value="Music theory">	
					<option value="Orchestra">	
						<option value="Percussion">	
							<option value="Piano">	
								<option value="Theater technology">	
									<option value="World music">
<option value="Gym">	
	<option value="Aerboics">	
		<option value="Dance">	
			<option value="Gymnastics">	
				<option value="Health">	
					<option value="Lifeguard training">	
						<option value="Pilates">
							<option value="Racket sports">
								<option value="Specialized sports">	
									<option value="Swimming">	
										<option value="Weight training">	
											<option value="Yoga">	
<option value="Agriculture">
	<option value="Astronomy">	
		<option value="Biology">	
			<option value="Botany">	
				<option value="Chemistry">	
					<option value="Earth science">	
						<option value="Electronics">	
							<option value="Environmental Science">	
								<option value="Forensic Science">
									<option value="Geology">
										<option value="Marine biology">	
											<option value="Oceanography">	
<option value="Physical science">	
	<option value="Physics">	
		<option value="Zoology">	
			<option value="Culural anthropolgy">	
				<option value="Current events">	
					<option value="European history">	
						<option value="Geography">	
							<option value="Global studies">	
								<option value="Human geography">
									<option value="Internal relations">	
										<option value="Law">	
<option value="Macroeconomics">
	<option value="Microeconomics">
		<option value="Modern world studies">
			<option value="Physical antropology">
				<option value="Political studies">
					<option value="Psychology">
						<option value="Religious Studies">
							<option value="Sociology">
								<option value="US goverment">
									<option value="US history">
<option value="Woman's studies">
	<option value="World history">
		<option value="World Politics">
			<option value="World religions">
				<option value="3-D Art">
					<option value="Art history">
						<option value="Ceramics">
							<option value="Digital media">
								<option value="Drawing">
									<option value="Film production">
										<option value="Jewelry design">
											<option value="Painting">
												<option value="Photography">
<option value="Printmaking">
	<option value="Sculpture">
		<option value="Auto body repair">
			<option value="Auto mechanics">
				<option value="Building construction">
					<option value="Computer-aided drafting">
						<option value="Cosmetology">
							<option value="Criminal justice">
								<option value="Driver education">
									<option value="Electronics">
										<option value="FFA">
											<option value="Fire science">
												<option value="Heating and cooling systems">
<option value="Hospitality and tourism">
	<option value="JROTC">
		<option value="Metalworking">
			<option value="Networking">
				<option value="Plumbing">
					<option value="Production technology">
						<option value="Refrigeration fundamentals">
							<option value="Woodworking">

			</datalist>
			 <input name="p4t" class="periods" placeholder="period 4 teacher"><br>
			<input type="text" id="p5o" class="periods" placeholder="period 5" name="p5" list="p5">
            <datalist id="p5">
			<option value="Accounting">
			<option value="Business Law">
			<option value="Buisness management">
			<option value="Consumer education">
			<option value="Entrprenurial skills">
			<option value="Intro to Business">
			<option value="Marketing">
			 <option value="Personal Finance">
			 <option value="Animation">
			<option value="App Development">
			<option value="Audio Production">
			 <option value="Computer programming">
			 <option value="Computer repair">
			<option value="Film production">
			 <option value="Graphic design">
			<option value="Keyboarding">
				<option value="Media Technology">	 <option value="Music production">
				  <option value="Video game development">
					   <option value="Web Design">
						    <option value="Word processing">
	 <option value="American literature">
		  <option value="British literature">
			   <option value="Contemporary literature">
				    <option value="Creative Writing">
						 <option value="Communication skills">
	 <option value="Debate">
		  <option value="English language and composition">
<option value="English literature and composition">		
<option value="Humanities">	
	<option value="Journalism">		
		<option value="Literary analysis">	
			<option value="Modern literature">	
				<option value="Poetry">	
					<option value="Popular literature">	
						<option value="Rhetoric">	
							<option value="Shakespeare">
<option value="Technical writing">	
	<option value="World literature">	
		<option value="Written and oral communication">	
			<option value="Chemistry of food">
				<option value="CPR">	
					<option value="Culinary arts">	
						<option value="Early childhood development">	
							<option value="Early childhood education">	
<option value="Family Studies">	
	<option value="Fashion and retail merchandising">
		<option value="Fashion construction">
			<option value="Home economics">	
				<option value="Interior design">
					<option value="Nutrition">	
<option value="Sign Language">	
	<option value="Greek">	
		<option value="Arabic">
			<option value="Mandarin">	
				<option value="French">	
					<option value="German">
						<option value="Hebrew">	
							<option value="Italian">	
								<option value="Japanese">	
									<option value="Korean">	
										<option value="Latin">	
											<option value="Portuguese">	
												<option value="Russian">	
													<option value="Spanish">
<option value="Algebra 1">	
	<option value="Algebra 2">
		<option value="Calculas">	
			<option value="Geometry">	
				<option value="Precalculas">
					<option value="Probability">
						<option value="Statistics">	
<option value="Choir">	
	<option value="Concert band">	
<option value="Dance">	
<option value="Drama">	
	<option value="Guitar">	
		<option value="Jazz Band">	
			<option value="Marching band">
				<option value="Music theory">	
					<option value="Orchestra">	
						<option value="Percussion">	
							<option value="Piano">	
								<option value="Theater technology">	
									<option value="World music">
<option value="Gym">	
	<option value="Aerboics">	
		<option value="Dance">	
			<option value="Gymnastics">	
				<option value="Health">	
					<option value="Lifeguard training">	
						<option value="Pilates">
							<option value="Racket sports">
								<option value="Specialized sports">	
									<option value="Swimming">	
										<option value="Weight training">	
											<option value="Yoga">	
<option value="Agriculture">
	<option value="Astronomy">	
		<option value="Biology">	
			<option value="Botany">	
				<option value="Chemistry">	
					<option value="Earth science">	
						<option value="Electronics">	
							<option value="Environmental Science">	
								<option value="Forensic Science">
									<option value="Geology">
										<option value="Marine biology">	
											<option value="Oceanography">	
<option value="Physical science">	
	<option value="Physics">	
		<option value="Zoology">	
			<option value="Culural anthropolgy">	
				<option value="Current events">	
					<option value="European history">	
						<option value="Geography">	
							<option value="Global studies">	
								<option value="Human geography">
									<option value="Internal relations">	
										<option value="Law">	
<option value="Macroeconomics">
	<option value="Microeconomics">
		<option value="Modern world studies">
			<option value="Physical antropology">
				<option value="Political studies">
					<option value="Psychology">
						<option value="Religious Studies">
							<option value="Sociology">
								<option value="US goverment">
									<option value="US history">
<option value="Woman's studies">
	<option value="World history">
		<option value="World Politics">
			<option value="World religions">
				<option value="3-D Art">
					<option value="Art history">
						<option value="Ceramics">
							<option value="Digital media">
								<option value="Drawing">
									<option value="Film production">
										<option value="Jewelry design">
											<option value="Painting">
												<option value="Photography">
<option value="Printmaking">
	<option value="Sculpture">
		<option value="Auto body repair">
			<option value="Auto mechanics">
				<option value="Building construction">
					<option value="Computer-aided drafting">
						<option value="Cosmetology">
							<option value="Criminal justice">
								<option value="Driver education">
									<option value="Electronics">
										<option value="FFA">
											<option value="Fire science">
												<option value="Heating and cooling systems">
<option value="Hospitality and tourism">
	<option value="JROTC">
		<option value="Metalworking">
			<option value="Networking">
				<option value="Plumbing">
					<option value="Production technology">
						<option value="Refrigeration fundamentals">
							<option value="Woodworking">

			</datalist>
			<input  name="p5t" class="periods" placeholder="period 5 teacher"><br>
			<input class="periods" id="p6o" type="text"placeholder="period 6" name="p6" list="p6">
            <datalist id="p6">
			<option value="Accounting">
			<option value="Business Law">
			<option value="Buisness management">
			<option value="Consumer education">
			<option value="Entrprenurial skills">
			<option value="Intro to Business">
			<option value="Marketing">
			 <option value="Personal Finance">
			 <option value="Animation">
			<option value="App Development">
			<option value="Audio Production">
			 <option value="Computer programming">
			 <option value="Computer repair">
			<option value="Film production">
			 <option value="Graphic design">
			<option value="Keyboarding">
				<option value="Media Technology">	 <option value="Music production">
				  <option value="Video game development">
					   <option value="Web Design">
						    <option value="Word processing">
	 <option value="American literature">
		  <option value="British literature">
			   <option value="Contemporary literature">
				    <option value="Creative Writing">
						 <option value="Communication skills">
	 <option value="Debate">
		  <option value="English language and composition">
<option value="English literature and composition">		
<option value="Humanities">	
	<option value="Journalism">		
		<option value="Literary analysis">	
			<option value="Modern literature">	
				<option value="Poetry">	
					<option value="Popular literature">	
						<option value="Rhetoric">	
							<option value="Shakespeare">
<option value="Technical writing">	
	<option value="World literature">	
		<option value="Written and oral communication">	
			<option value="Chemistry of food">
				<option value="CPR">	
					<option value="Culinary arts">	
						<option value="Early childhood development">	
							<option value="Early childhood education">	
<option value="Family Studies">	
	<option value="Fashion and retail merchandising">
		<option value="Fashion construction">
			<option value="Home economics">	
				<option value="Interior design">
					<option value="Nutrition">	
<option value="Sign Language">	
	<option value="Greek">	
		<option value="Arabic">
			<option value="Mandarin">	
				<option value="French">	
					<option value="German">
						<option value="Hebrew">	
							<option value="Italian">	
								<option value="Japanese">	
									<option value="Korean">	
										<option value="Latin">	
											<option value="Portuguese">	
												<option value="Russian">	
													<option value="Spanish">
<option value="Algebra 1">	
	<option value="Algebra 2">
		<option value="Calculas">	
			<option value="Geometry">	
				<option value="Precalculas">
					<option value="Probability">
						<option value="Statistics">	
<option value="Choir">	
	<option value="Concert band">	
<option value="Dance">	
<option value="Drama">	
	<option value="Guitar">	
		<option value="Jazz Band">	
			<option value="Marching band">
				<option value="Music theory">	
					<option value="Orchestra">	
						<option value="Percussion">	
							<option value="Piano">	
								<option value="Theater technology">	
									<option value="World music">
<option value="Gym">	
	<option value="Aerboics">	
		<option value="Dance">	
			<option value="Gymnastics">	
				<option value="Health">	
					<option value="Lifeguard training">	
						<option value="Pilates">
							<option value="Racket sports">
								<option value="Specialized sports">	
									<option value="Swimming">	
										<option value="Weight training">	
											<option value="Yoga">	
<option value="Agriculture">
	<option value="Astronomy">	
		<option value="Biology">	
			<option value="Botany">	
				<option value="Chemistry">	
					<option value="Earth science">	
						<option value="Electronics">	
							<option value="Environmental Science">	
								<option value="Forensic Science">
									<option value="Geology">
										<option value="Marine biology">	
											<option value="Oceanography">	
<option value="Physical science">	
	<option value="Physics">	
		<option value="Zoology">	
			<option value="Culural anthropolgy">	
				<option value="Current events">	
					<option value="European history">	
						<option value="Geography">	
							<option value="Global studies">	
								<option value="Human geography">
									<option value="Internal relations">	
										<option value="Law">	
<option value="Macroeconomics">
	<option value="Microeconomics">
		<option value="Modern world studies">
			<option value="Physical antropology">
				<option value="Political studies">
					<option value="Psychology">
						<option value="Religious Studies">
							<option value="Sociology">
								<option value="US goverment">
									<option value="US history">
<option value="Woman's studies">
	<option value="World history">
		<option value="World Politics">
			<option value="World religions">
				<option value="3-D Art">
					<option value="Art history">
						<option value="Ceramics">
							<option value="Digital media">
								<option value="Drawing">
									<option value="Film production">
										<option value="Jewelry design">
											<option value="Painting">
												<option value="Photography">
<option value="Printmaking">
	<option value="Sculpture">
		<option value="Auto body repair">
			<option value="Auto mechanics">
				<option value="Building construction">
					<option value="Computer-aided drafting">
						<option value="Cosmetology">
							<option value="Criminal justice">
								<option value="Driver education">
									<option value="Electronics">
										<option value="FFA">
											<option value="Fire science">
												<option value="Heating and cooling systems">
<option value="Hospitality and tourism">
	<option value="JROTC">
		<option value="Metalworking">
			<option value="Networking">
				<option value="Plumbing">
					<option value="Production technology">
						<option value="Refrigeration fundamentals">
							<option value="Woodworking">

			</datalist>
			 <input class="periods"  name="p6t" placeholder="period 6 teacher"><br>
            <input class="periods"  id="p7o" type="text" placeholder="period 7" name="p7" list="p7">
            <datalist id="p7">
			<option value="Accounting">
			<option value="Business Law">
			<option value="Buisness management">
			<option value="Consumer education">
			<option value="Entrprenurial skills">
			<option value="Intro to Business">
			<option value="Marketing">
			 <option value="Personal Finance">
			 <option value="Animation">
			<option value="App Development">
			<option value="Audio Production">
			 <option value="Computer programming">
			 <option value="Computer repair">
			<option value="Film production">
			 <option value="Graphic design">
			<option value="Keyboarding">
				<option value="Media Technology">	 <option value="Music production">
				  <option value="Video game development">
					   <option value="Web Design">
						    <option value="Word processing">
	 <option value="American literature">
		  <option value="British literature">
			   <option value="Contemporary literature">
				    <option value="Creative Writing">
						 <option value="Communication skills">
	 <option value="Debate">
		  <option value="English language and composition">
<option value="English literature and composition">		
<option value="Humanities">	
	<option value="Journalism">		
		<option value="Literary analysis">	
			<option value="Modern literature">	
				<option value="Poetry">	
					<option value="Popular literature">	
						<option value="Rhetoric">	
							<option value="Shakespeare">
<option value="Technical writing">	
	<option value="World literature">	
		<option value="Written and oral communication">	
			<option value="Chemistry of food">
				<option value="CPR">	
					<option value="Culinary arts">	
						<option value="Early childhood development">	
							<option value="Early childhood education">	
<option value="Family Studies">	
	<option value="Fashion and retail merchandising">
		<option value="Fashion construction">
			<option value="Home economics">	
				<option value="Interior design">
					<option value="Nutrition">	
<option value="Sign Language">	
	<option value="Greek">	
		<option value="Arabic">
			<option value="Mandarin">	
				<option value="French">	
					<option value="German">
						<option value="Hebrew">	
							<option value="Italian">	
								<option value="Japanese">	
									<option value="Korean">	
										<option value="Latin">	
											<option value="Portuguese">	
												<option value="Russian">	
													<option value="Spanish">
<option value="Algebra 1">	
	<option value="Algebra 2">
		<option value="Calculas">	
			<option value="Geometry">	
				<option value="Precalculas">
					<option value="Probability">
						<option value="Statistics">	
<option value="Choir">	
	<option value="Concert band">	
<option value="Dance">	
<option value="Drama">	
	<option value="Guitar">	
		<option value="Jazz Band">	
			<option value="Marching band">
				<option value="Music theory">	
					<option value="Orchestra">	
						<option value="Percussion">	
							<option value="Piano">	
								<option value="Theater technology">	
									<option value="World music">
<option value="Gym">	
	<option value="Aerboics">	
		<option value="Dance">	
			<option value="Gymnastics">	
				<option value="Health">	
					<option value="Lifeguard training">	
						<option value="Pilates">
							<option value="Racket sports">
								<option value="Specialized sports">	
									<option value="Swimming">	
										<option value="Weight training">	
											<option value="Yoga">	
<option value="Agriculture">
	<option value="Astronomy">	
		<option value="Biology">	
			<option value="Botany">	
				<option value="Chemistry">	
					<option value="Earth science">	
						<option value="Electronics">	
							<option value="Environmental Science">	
								<option value="Forensic Science">
									<option value="Geology">
										<option value="Marine biology">	
											<option value="Oceanography">	
<option value="Physical science">	
	<option value="Physics">	
		<option value="Zoology">	
			<option value="Culural anthropolgy">	
				<option value="Current events">	
					<option value="European history">	
						<option value="Geography">	
							<option value="Global studies">	
								<option value="Human geography">
									<option value="Internal relations">	
										<option value="Law">	
<option value="Macroeconomics">
	<option value="Microeconomics">
		<option value="Modern world studies">
			<option value="Physical antropology">
				<option value="Political studies">
					<option value="Psychology">
						<option value="Religious Studies">
							<option value="Sociology">
								<option value="US goverment">
									<option value="US history">
<option value="Woman's studies">
	<option value="World history">
		<option value="World Politics">
			<option value="World religions">
				<option value="3-D Art">
					<option value="Art history">
						<option value="Ceramics">
							<option value="Digital media">
								<option value="Drawing">
									<option value="Film production">
										<option value="Jewelry design">
											<option value="Painting">
												<option value="Photography">
<option value="Printmaking">
	<option value="Sculpture">
		<option value="Auto body repair">
			<option value="Auto mechanics">
				<option value="Building construction">
					<option value="Computer-aided drafting">
						<option value="Cosmetology">
							<option value="Criminal justice">
								<option value="Driver education">
									<option value="Electronics">
										<option value="FFA">
											<option value="Fire science">
												<option value="Heating and cooling systems">
<option value="Hospitality and tourism">
	<option value="JROTC">
		<option value="Metalworking">
			<option value="Networking">
				<option value="Plumbing">
					<option value="Production technology">
						<option value="Refrigeration fundamentals">
							<option value="Woodworking">

			</datalist>
			<input class="periods" name="p7t" placeholder="period 7 teacher"><br>
            <input class="periods"  id="p8o" type="text" placeholder="period 8" name="p8" list="p8">
            <datalist id="p8">
			<option value="Accounting">
			<option value="Business Law">
			<option value="Buisness management">
			<option value="Consumer education">
			<option value="Entrprenurial skills">
			<option value="Intro to Business">
			<option value="Marketing">
			 <option value="Personal Finance">
			 <option value="Animation">
			<option value="App Development">
			<option value="Audio Production">
			 <option value="Computer programming">
			 <option value="Computer repair">
			<option value="Film production">
			 <option value="Graphic design">
			<option value="Keyboarding">
				<option value="Media Technology">	 <option value="Music production">
				  <option value="Video game development">
					   <option value="Web Design">
						    <option value="Word processing">
	 <option value="American literature">
		  <option value="British literature">
			   <option value="Contemporary literature">
				    <option value="Creative Writing">
						 <option value="Communication skills">
	 <option value="Debate">
		  <option value="English language and composition">
<option value="English literature and composition">		
<option value="Humanities">	
	<option value="Journalism">		
		<option value="Literary analysis">	
			<option value="Modern literature">	
				<option value="Poetry">	
					<option value="Popular literature">	
						<option value="Rhetoric">	
							<option value="Shakespeare">
<option value="Technical writing">	
	<option value="World literature">	
		<option value="Written and oral communication">	
			<option value="Chemistry of food">
				<option value="CPR">	
					<option value="Culinary arts">	
						<option value="Early childhood development">	
							<option value="Early childhood education">	
<option value="Family Studies">	
	<option value="Fashion and retail merchandising">
		<option value="Fashion construction">
			<option value="Home economics">	
				<option value="Interior design">
					<option value="Nutrition">	
<option value="Sign Language">	
	<option value="Greek">	
		<option value="Arabic">
			<option value="Mandarin">	
				<option value="French">	
					<option value="German">
						<option value="Hebrew">	
							<option value="Italian">	
								<option value="Japanese">	
									<option value="Korean">	
										<option value="Latin">	
											<option value="Portuguese">	
												<option value="Russian">	
													<option value="Spanish">
<option value="Algebra 1">	
	<option value="Algebra 2">
		<option value="Calculas">	
			<option value="Geometry">	
				<option value="Precalculas">
					<option value="Probability">
						<option value="Statistics">	
<option value="Choir">	
	<option value="Concert band">	
<option value="Dance">	
<option value="Drama">	
	<option value="Guitar">	
		<option value="Jazz Band">	
			<option value="Marching band">
				<option value="Music theory">	
					<option value="Orchestra">	
						<option value="Percussion">	
							<option value="Piano">	
								<option value="Theater technology">	
									<option value="World music">
<option value="Gym">	
	<option value="Aerboics">	
		<option value="Dance">	
			<option value="Gymnastics">	
				<option value="Health">	
					<option value="Lifeguard training">	
						<option value="Pilates">
							<option value="Racket sports">
								<option value="Specialized sports">	
									<option value="Swimming">	
										<option value="Weight training">	
											<option value="Yoga">	
<option value="Agriculture">
	<option value="Astronomy">	
		<option value="Biology">	
			<option value="Botany">	
				<option value="Chemistry">	
					<option value="Earth science">	
						<option value="Electronics">	
							<option value="Environmental Science">	
								<option value="Forensic Science">
									<option value="Geology">
										<option value="Marine biology">	
											<option value="Oceanography">	
<option value="Physical science">	
	<option value="Physics">	
		<option value="Zoology">	
			<option value="Culural anthropolgy">	
				<option value="Current events">	
					<option value="European history">	
						<option value="Geography">	
							<option value="Global studies">	
								<option value="Human geography">
									<option value="Internal relations">	
										<option value="Law">	
<option value="Macroeconomics">
	<option value="Microeconomics">
		<option value="Modern world studies">
			<option value="Physical antropology">
				<option value="Political studies">
					<option value="Psychology">
						<option value="Religious Studies">
							<option value="Sociology">
								<option value="US goverment">
									<option value="US history">
<option value="Woman's studies">
	<option value="World history">
		<option value="World Politics">
			<option value="World religions">
				<option value="3-D Art">
					<option value="Art history">
						<option value="Ceramics">
							<option value="Digital media">
								<option value="Drawing">
									<option value="Film production">
										<option value="Jewelry design">
											<option value="Painting">
												<option value="Photography">
<option value="Printmaking">
	<option value="Sculpture">
		<option value="Auto body repair">
			<option value="Auto mechanics">
				<option value="Building construction">
					<option value="Computer-aided drafting">
						<option value="Cosmetology">
							<option value="Criminal justice">
								<option value="Driver education">
									<option value="Electronics">
										<option value="FFA">
											<option value="Fire science">
												<option value="Heating and cooling systems">
<option value="Hospitality and tourism">
	<option value="JROTC">
		<option value="Metalworking">
			<option value="Networking">
				<option value="Plumbing">
					<option value="Production technology">
						<option value="Refrigeration fundamentals">
							<option value="Woodworking">

			</datalist>
			<input class="periods" name="p8t" placeholder="period 8 teacher"><br>
			<input type="button" onClick="window.location = 'index.php'" id="button" value="Cancel">
            <input  name="submit" id="submit" type="submit" value="Submit">
        </form> 
		</div>
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
				$age="Student";
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
			margin-top:0;
margin-right:33%;
margin-bottom:0;
margin-left:33%;
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
		

input[type=submit],input[type=button] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
	width: 49%;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
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
			</style>

</html>
