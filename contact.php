<?php
$conn = new mysqli("localhost","root","","travel");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}

if(isset($_POST['contact'])){

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$sql= "INSERT INTO `contact`( `name`, `email`, `contact`, `subject`, `message`) VALUES ('$name','$email','$contact','$subject','$message')";

if ($conn->multi_query($sql) === TRUE) {
  echo "<script>alert('New records created successfully')</script>";
  header('Location: http://localhost:80/travel/contact.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
