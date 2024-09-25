<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "mkappointmentdb";

$con = mysqli_connect($server , $username ,$password , $dbname);

if(!$con){
    echo "not connected";
}
//start 

$department =$_POST['department'];
$name =$_POST['name'];
$email =$_POST['email'];
$date =$_POST['date'];
$time =$_POST['time'];
$phone =$_POST['phone'];

$sql = "INSERT INTO `mkappointuser`(`department`, `name`, `email`, `date`, `time`, `phone`) VALUES ('$department','$name' ,'$email','$date','$time','$phone')";

$result = mysqli_query($con, $sql);

if($result){
    echo "Appointment Booked";
}
else {
    echo "failed!!";
}

?>