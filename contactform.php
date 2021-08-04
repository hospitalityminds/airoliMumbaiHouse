<?php
	if(isset($_POST['submit'])){
	    $hotel=$_POST['hotel'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];

        if($hotel == 'Mumbai'){
            $to='info@mumbaihousehotels.com'; // Receiver Email ID, Replace with your email ID
            $subject='Form Submission';
            $message="Name :".$name."\n"."Phone :".$phone."\n"."Is enquiring about Hotel Mumbai House :"." ".$hotel;
            $headers="From: ".$email;
        } else if ($hotel == 'Udaipur'){
            $to='salesudaipur@mumbaihousehotels.com'; // Receiver Email ID, Replace with your email ID
            $subject='Form Submission';
            $message="Name :".$name."\n"."Phone :".$phone."\n"."Is enquiring about Hotel Mumbai House :"." ".$hotel;
            $headers="From: ".$email;
        } else if ($hotel == 'Goa'){
            $to='infogoa@mumbaihousehotels.com'; // Receiver Email ID, Replace with your email ID
            $subject='Form Submission';
            $message="Name :".$name."\n"."Phone :".$phone."\n"."Is enquiring about Hotel Mumbai House :"." ".$hotel;
            $headers="From: ".$email;
        } else {
            $to='reservations@mumbaihousehotels.com'; // Receiver Email ID, Replace with your email ID
            $subject='Form Submission';
            $message="Name :".$name."\n"."Phone :".$phone."\n"."Is enquiring about Hotel Mumbai House :"." ".$hotel;
            $headers="From: ".$email;
        }
        
		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>