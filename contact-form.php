<?php
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

mail(
	"koodeau@gmail.com",
	"Feedback Form Results",
	$message, "From: $email");

header(
	"Location: thankyou.html"
);