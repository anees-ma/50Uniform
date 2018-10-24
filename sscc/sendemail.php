<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$toemails = array();

// Form Processing Messages


$mail = new PHPMailer();

// If you intend you use SMTP, add your SMTP Code after this Line



		$name = $_post['name'];
		$email = $_post['email'];
		$phone = $_post['contact'];
		$message = $_post['message'];
		
		if(!$email){
			$email='-';
		}
	
		$subject='Website Visitor';

			$mail->SetFrom( 'aneeskader209@gmail.com' , $name );
			$mail->AddReplyTo( 'aneeskader209@gmail.com' , $name );
			$mail->AddAddress('aneeskader209@gmail.com' , 'Gotche Chemicals ' );
			$mail->Subject = $subject;
			
			 $mail->SMTPDebug = 2;

			$name = isset($name) ? "Name: $name<br><br>" : '';
			$email = isset($email) ? "Email: $email<br><br>" : '';
			$phone = isset($phone) ? "Phone: $phone<br><br>" : '';
			$message = isset($message) ? "Message: $message<br><br>" : '';

			$body = "$name $email $phone $message";

			$mail->MsgHTML( $body );
			if($mail->Send()){
				echo 'true';
			} else echo 'false';

		

	


?>