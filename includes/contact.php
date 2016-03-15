<?php
			

			/*pick up post values*/
			$from = $_POST['useremail'];
            $name = $_POST['username'];
            $topic = $_POST['subject'];
            $message = $_POST['message'];
           
			$subject = $topic."|".$name;
								 
			$headers = 'From:'.$from . "\r\n";
			
			mail('helpdesk@yuunga.com', $subject, $message, $headers);

			$feedbackMsg = "

Hello ".$name.",

Your equiry	has been received by our help desk Team.

We will respond to your query shortly.

Thanks for contacting Yuunga

Enquiry :

--------------------------------------------------------------

".$message."
			

";

			$feebBHeader = 'From:'.'helpdesk@yuunga.com' . "\r\n";

			mail($from, 'Enquiry', $feedbackMsg, $feebBHeader);


			header ('Location: ../');

 ?>