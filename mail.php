<?php
	if(isset($_POST['submit'])){
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$subject = "FCNY Contact Form Inquiry from: $fname $lname, $mailFrom";
		$mailFrom=$_POST['email'];
		$message=$_POST['message'];
		$to='christian.gallucci@fcnysoccer.club';
		$txt = "You have contact form mail from: $fname $lname \n\n Message: $message";
 		$headers = "$mailFrom";
		
		mail($to, $subject, $message, $headers);
		header("Location: contact.php?mailsend");
		echo "Thank you!  We will contact you asap.";
	}
?>