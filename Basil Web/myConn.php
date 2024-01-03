<?php


$conn= mysqli_connect("localhost","root","","EXAM");
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

echo "The POST assoc array values are --<br>";
print_r($_POST);

if (isset($_POST['submit']))
{

  $patient_id = $_POST['patient_id'];
  $ name= $_POST['name'];
  $address = $_POST['address'];
  $dob = $_POST['dob'];
  $doctor_name = $_POST['doctor_name'];
  $booking_time = $_POST['booking_time'];
  
}

$sql="insert into marks values('$patient_id', '$name', $address, $dob, $doctor_name,$booking_name)";
if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
} else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);

?>