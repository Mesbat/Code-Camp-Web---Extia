<?php
function johnny() {
			require_once "vendor/autoload.php";

			$mail = new PHPMailer;
		//Enable SMTP debugging. 
			$mail->SMTPDebug = 3;                               
		//Set PHPMailer to use SMTP.
			$mail->isSMTP();            
		//Set SMTP host name                          
			$mail->Host = "smtp.gmail.com";
		//Set this to true if SMTP host requires authentication to send email
			$mail->SMTPAuth = true;                          
		//Provide username and password     
			$mail->Username = "reminder.extia@gmail.com";                 
			$mail->Password = "reminderextia";                           
		//If SMTP requires TLS encryption then set it
			$mail->SMTPSecure = "ssl";                           
		//Set TCP port to connect to 
			$mail->Port = 465;                                   
			
			$mail->From = "reminder.extia@gmail.com";
			$mail->FromName = "EXTIA EVENT";
			
			$mail->addAddress("smida_h@etna-alternance.net", "Collabs");
			
			$mail->isHTML(true);
			
			$mail->Subject = "Inscription à EXTIA EVENT";
			$mail->Body = 'Bonjour #!$%^  !*&&* vous êtes maintenant inscrit a&grave; EXTIA EVENT. <br/><br/> Voici votre login : @#$%^&* <br/> <br/> <br/><br/> <span style="font-size:12.8px;font-family:Verdana,sans-serif"><img width="420" height="41" src="https://ci5.googleusercontent.com/proxy/Y5Du51lEr77UvvHVGMreuuHqTT0FqozKlAw-jkH4ju5iyBa2XKDW47a43oqhf2R-QlSqpsFtbdYC8I34c9aWc8JVYqqjKCb5c0u0jmVRo66VnMuraj2gxYnjPP1L=s0-d-e1-ft#http://img15.hostingpics.net/pics/915608BandeauMail2015baselinejour.png" class="CToWUd"></span>';
			$mail->AltBody = "Bonjour #!$%^       !*&&* vous êtes inscrics à EXTIA EVENT. Voici votre login : @#$%^&*";
			
			if(!$mail->send()) {
				echo "Mailer Error: " . $mail->ErrorInfo;
			} 
			else {
				echo "Message has been sent successfully";
			}
		}
		johnny();

// $now = date('Y-m-d');
// $date2 = 
// $diff = abs($date)
// ignore_user_abort(1);


// function fini()
// 	{
// 		fopen('./ERREUR', 'w');
// 	}
// register_shutdown_function(fini);

// function johnny() {
// 		require_once "vendor/autoload.php";

// 		$mail = new PHPMailer;
// 		//Enable SMTP debugging. 
// 		$mail->SMTPDebug = 3;                               
// 		//Set PHPMailer to use SMTP.
// 		$mail->isSMTP();            
// 		//Set SMTP host name                          
// 		$mail->Host = "smtp.gmail.com";
// 		//Set this to true if SMTP host requires authentication to send email
// 		$mail->SMTPAuth = true;                          
// 		//Provide username and password     
// 		$mail->Username = "reminder.extia@gmail.com";                 
// 		$mail->Password = "reminderextia";                           
// 		//If SMTP requires TLS encryption then set it
// 		$mail->SMTPSecure = "ssl";                           
// 		//Set TCP port to connect to 
// 		$mail->Port = 465;                                   
		
// 		$mail->From = "reminder.extia@gmail.com";
// 		$mail->FromName = "EXTIA EVENT";
		
// 		$mail->addAddress("smida_h@etna-alternance.net", "Collabs");
		
// 		$mail->isHTML(true);
		
// 		$mail->Subject = "Inscription à EXTIA EVENT";
// 		$mail->Body = 'Bonjour #!$%^  !*&&* vous êtes maintenant inscrit a&grave; EXTIA EVENT. <br/><br/> Voici votre login : @#$%^&* <br/> <br/> <br/><br/> <span style="font-size:12.8px;font-family:Verdana,sans-serif"><img width="420" height="41" src="https://ci5.googleusercontent.com/proxy/Y5Du51lEr77UvvHVGMreuuHqTT0FqozKlAw-jkH4ju5iyBa2XKDW47a43oqhf2R-QlSqpsFtbdYC8I34c9aWc8JVYqqjKCb5c0u0jmVRo66VnMuraj2gxYnjPP1L=s0-d-e1-ft#http://img15.hostingpics.net/pics/915608BandeauMail2015baselinejour.png" class="CToWUd"></span>';
// 		$mail->AltBody = "Bonjour #!$%^       !*&&* vous êtes inscrics à EXTIA EVENT. Voici votre login : @#$%^&*";
		
// 			if(!$mail->send()) {
// 		    	echo "Mailer Error: " . $mail->ErrorInfo;
// 								} 
// 			else {
// 		    	echo "Message has been sent successfully";
// 				 }
// 				 			}
// 				johnny();
?>