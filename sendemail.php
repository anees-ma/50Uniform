<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$toemails = array();

// Form Processing Messages


$mail = new PHPMailer();

// If you intend you use SMTP, add your SMTP Code after this Line



		$name = 'name';
		$email = 'aneeskader209@gmail.com';
		$phone = '9999';
		$message = 'llllll';
	
		$subject='Website Visitor';

			$mail->SetFrom( $email , $name );
			$mail->AddReplyTo( $email , $name );
			$mail->AddAddress('aneeskader209@gmail.com' , 'Gotche Chemicals ' );
			$mail->Subject = $subject;
			
			$name = isset($name) ? "Name: $name<br><br>" : '';
			$email = isset($email) ? "Email: $email<br><br>" : '';
			$phone = isset($phone) ? "Phone: $phone<br><br>" : '';
			$message = isset($message) ? "Message: $message<br><br>" : '';

			$body = "$name $email $phone $message";
			
			$mail->MsgHTML($body);
			
			
			$sendEmail = $mail->Send();
			if($sendEmail){
				echo 'true';
			} else{
				echo 'false';
				
			}
			
			$mail->SMTPDebug = 2;

		

	


?>