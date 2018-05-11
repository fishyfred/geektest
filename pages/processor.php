<?php
/************************
*	PHP Form Processor	*
*************************/

//Trim removes white space after strip_tags gets rid of any html, javascript, etc tags from the input
$fname = trim(strip_tags($_POST['fname']));
$lname = trim(strip_tags($_POST['lname']));
$email = trim(strip_tags($_POST['email']));
$phone = trim(strip_tags($_POST['phone']));
$state = trim(strip_tags($_POST['state']));
$services = trim(strip_tags($_POST['services']));
$comments = trim(strip_tags($_POST['comments']));

//Creating a single variable to format and hold all the inputs
$body = "
Website Contact Form
First Name: $fname
Last Name: $lname
Email Address: $email
Phone Number: $phone
State: $state
Services: $services
Comments: $comments";

mail('fwinton@platt.edu','Geek Contact Submission',$body,$email);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form</title>

</head>

<body>
<h1>Success Page</h1>
<?php
//if the email was sent, show the success message
	echo '<div class="success">Thanks '.$fname.'. Your message was sent. Thank you for your time.</div>';
?>

</body>
</html>
