<?php if(isset($_POST["submit"])){

$name = $_POST['exampleInputName1'];

$email = $_POST['exampleInputEmail1'];

$message = $_POST['msg'];

$headers = 'From:'. $email . "\r\n"; // Sender's Email

// Message lines should not exceed 70 characters (PHP rule), so wrap it

$message = wordwrap($message, 70);

// Send Mail By PHP Mail Function
mail("freelancerahmad@gmail.com", $name, $message, $email);

echo "Your mail has been sent successfuly ! Thank you for your feedback";

}
?>