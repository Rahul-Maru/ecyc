<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $item = $_POST['item'];
  $quantity = $_POST['quantity'];
  $address = $_POST['address'];

  // Set the recipient email address
  $to = 'ecyc42@gmail.com';

  // Set the email subject
  $subject = "New Order from $name";

  // Build the email message
  $message = "Item: $item\n";
  $message .= "Quantity: $quantity\n";
  $message .= "Address: $address\n";

  // Set the headers
  $headers = "X-Mailer: PHP/" . phpversion();

  // Send the email
  mail($to, $subject, $message, $headers);

  // Redirect the user to a success page or display a success message
  header('Location: success.html');
  exit();
}
?>