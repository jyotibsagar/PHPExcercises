<html>
<head>
<title>Contact Us Form</title>
</head>
<body>
<h1>Welcome to Pixelcrazy</h1>
<p>
<?php
 
if(isset($_POST['name'])){
 $name = $_POST['name'];
echo "Hello " . $name . "<br>";
}else{
echo "Please enter your name";}

if(isset($_POST['email'])){
	$email = $_POST['email'];
echo " Your email is " . $email . "<br>";
}

if(isset($_POST['address'])){
	$address = $_POST['address'];
	echo "Your address is: " . $address . "<br>";
}

if(isset($_POST['city'])){
	$city = $_POST['city'];
	echo "Your city is: " . $city . "<br>";
}

if(isset($_POST['post-code'])){
	$postcode = $_POST['post-code'];
	echo "Your post-code is: " . $postcode;
}
 
?>
</p>
</body>
</html>