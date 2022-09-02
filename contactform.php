
<!-- Start session -->
<?php
  // Setting necessary variables from contact page form
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
?>

<!-- Setting up email variables -->
<?php
	$email_from = 'node108@peicloud.ca'; //placeholder due to not having a site e-mail
	$email_subject = "New Form submission";
	$email_body = "You have received a new message from the user $name.\n".
                    "Here is the message:\n $message";
?>

<!-- Sending email containing message -->
<?php
  $to = "contact@katrinaclow.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);
 ?>

<!-- Return to home page -->
<?php 
    header("Location: index.php") 
?>



