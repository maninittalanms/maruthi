<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$message = htmlspecialchars(trim($_POST['message']));


// Basic validation
if (!empty($name) && !empty($email) && !empty($message)) {
$to = "yourmail@example.com"; // Replace with your email
$subject = "New Contact Form Submission";
$body = "Name: $name\nEmail: $email\nMessage: $message";
$headers = "From: $email";


if (mail($to, $subject, $body, $headers)) {
echo "<script>alert('Message sent successfully!'); window.location.href='index.php#contact';</script>";
} else {
echo "<script>alert('Failed to send message. Please try again later.'); window.location.href='index.php#contact';</script>";
}
} else {
echo "<script>alert('All fields are required.'); window.location.href='index.php#contact';</script>";
}
} else {
header("Location: index.php#contact");
exit();
}
?>