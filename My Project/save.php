<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con)
{
    echo "not connected";
}
else{
    echo "connected";
}

$Passengername = $_POST['name'];
$Age = $_POST['age'];
$Gender = $_POST['gender'];
$TrainNo = $_POST['trainno'];
$Journey = $_POST['trainname'];
$Pickup = $_POST['pickup'];
$Destination = $_POST['destination'];
$Date = $_POST['date'];
$Class = $_POST['class'];

$sql = "INSERT INTO `registration`(`name`, `age`, `gender`, `trainno`, `trainname`, `pickup`, `destination`, `date`, `class`) VALUES ('$Passengername','$Age','$Gender','$TrainNo','$Journey','$Pickup','$Destination','$Date','$Class')";

$result = mysqli_query($con , $sql );

if($result)
{
    echo "data submitted";
}
else
  echo "query failed"
  
?>
