<?php

	if(isset($_POST['g-recaptcha-response'])){
	  $captcha=$_POST['g-recaptcha-response'];
	}
	
	if($captcha){
		
		$secretKey = "6Le8fF8UAAAAALTMOhDTafoBYpGKzIZeRx3GRtL6";
		$ip = $_SERVER['REMOTE_ADDR'];
		$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
		$responseKeys = json_decode($response,true);
		if(intval($responseKeys["success"]) == 1) {
		   
			$to = "info@samagarments.com";
			$from = $_SERVER['PHP_SELF']." ".$_POST["email"];
			$email = $_POST["email"];
			$name = $_POST["name"];
			$headers = "From: $name <$email>";
			$message = $_POST["message"];
			$phone = $_POST["phoneNumber"];
			$subject="Website visitor";

			$body = " \n\n\t Name: ".$name." ";
			$body .= " \n\n\t Email: ".$email;
			$body .= " \n\n\t Phone: ".$phone;
			$body .= " \n\n\t Message: ".$message;

			if(mail($to, $subject, $body, $headers)){
				echo '1';
			}else{
				echo '0';
			}
		}else echo '00';
	
	}else{
		echo '10';
	}
	
		