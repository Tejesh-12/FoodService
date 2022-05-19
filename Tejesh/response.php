<?php
// Get data from form
$name = $_POST['name'];
$email= $_POST['email'];
$phone=$_POST['phone'];
$message= $_POST['message'];

$to = "chandutejett@gmail.com";
$subject = "Customer_Message";
$txt ="Name = ". $name . "\r\n Email = "
	. $email . "\r\n Phone = ".$phone . "\r\n Message =" . $message;

$headers = "From: $email";
?>
<?php

if(mail($to, $subject, $txt, $headers)){
	?>
	<div class="alert alert-success text-center">
	<?php echo "Your compliant sent sucessfully" ?>
</div>	
<?php
}else{
	?>
	<div class="alert alert-danger text-center">
	<?php echo "failed to send the message" ?>
</div>
<?php

}

?>

