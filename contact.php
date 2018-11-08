<?php 
	print '
	<h1>Contact</h1>
	<div id="contact">
		<form action="send-contact.php" id="contact_form" name="contact_form" method="POST">
			<label for="fname">First Name</label>
			<input type="text" id="fname" name="firstname" placeholder=" Your name.." required>
			
			<label for="lname">Last Name</label>
			<input type="text" id="lname" name="lastname" placeholder=" Your last natme.." required>
				
			<label for="email">Your E-mail</label>
			<input type="email" id="email" name="email" placeholder=" Your e-mail.." required>
			<label for="country">Country</label>
			<select name="country" id="country">
            <option value="">molimo odaberite</option>';
                
				// Select all countries from database webprog, table countries
				$query  = "SELECT * FROM countries";
				$result = @mysqli_query($MySQL, $query);
				while($row = @mysqli_fetch_array($result)) {
					print '<option value="' . $row['country_code'] . '">' . $row['country_name'] . '</option>';
				}
			print '
			</select>
			<label for="subject">Subject</label>
			<textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>
			<input type="submit" value="Contact Us">
		</form>
	</div>
	';
?>