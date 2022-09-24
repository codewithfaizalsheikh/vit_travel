<?php
$conn = new mysqli("localhost","root","","travel");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}

else if(isset($_POST['booking'])){

$start_point = $_POST['start_point'];
$end_point = $_POST['end_point'];
$number_of_guest = $_POST['number_of_guest'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$contact = $_POST['contact'];

$sql = "INSERT INTO `booking`(`start_point`, `end_point`, `number_of_guest`, `start_date`, `end_date`, `contact`) VALUES ('$start_point','$end_point','$number_of_guest','$start_date','$end_date','$contact')";
if ($conn->multi_query($sql) === TRUE) {
  echo "<script>alert('New records created successfully');</script>";
  header('Location: http://localhost:80/travel/booking.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
