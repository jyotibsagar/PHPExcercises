<html>
<head>
<title>Login Form</title>
</head>
<body>
<h1>Welcome to Pixelcrazy</h1>
<p>
<?php
 
if(isset($_POST['username'])){
 $name = $_POST['username'];
echo "Hello " . $name . "<br>";
}
if($_POST['password']== "password");{
echo ("Login Successful!");
} 
?>
</p>
</body>
</html>