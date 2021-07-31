<?php
$connection = mysqli_connect('localhost', 'root');

if ($connection) {
    echo "Connection is Establish!";
}
else {
    echo "ERROR Connection Failed!";
}

mysqli_select_db($connection, 'campus');

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$birth = $_POST['birth_date'];
$semister = $_POST['semister'];
$cgpa = $_POST['cgpa'];

$data = "INSERT INTO `data` (`dt`, `name`, `age`, `gender`, `email`, `phone`, `birth`, `sem`, `cgpa`) VALUES ( current_timestamp(), '$name', '$age', '$gender', '$email', '$phone', '$birth', '$semister', '$cgpa')";

mysqli_query ($connection, $data);
header('location:signupsuccessful.php');

?>