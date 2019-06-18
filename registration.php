<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("vergil.u.washington.edu", "root", "mypassword", "persons", "1113");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$fname = mysqli_real_escape_string($link, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($link, $_REQUEST['lname']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$dob = mysqli_real_escape_string($link, $_REQUEST['dob']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$confirm = mysqli_real_escape_string($link, $_REQUEST['confirm']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$street = mysqli_real_escape_string($link, $_REQUEST['street']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$state = mysqli_real_escape_string($link, $_REQUEST['state']);
$postal = mysqli_real_escape_string($link, $_REQUEST['postal']);
$country = mysqli_real_escape_string($link, $_REQUEST['country']);
$emergname = mysqli_real_escape_string($link, $_REQUEST['emergname']);
$emergname = mysqli_real_escape_string($link, $_REQUEST['emergphone']);
$shirtsize = mysqli_real_escape_string($link, $_REQUEST['shirtsize']);
$runner_group = mysqli_real_escape_string($link, $_REQUEST['runner_group']);

 
// attempt insert query execution
$sql = "INSERT INTO persons (fname, lname, gender, dob, email, confirm, phone, street, city, state, postal, country, emergname, emergphone, shirtsize, runner_group) VALUES ('$fname', '$lname', '$gender', '$dob', '$email', '$confirm', '$phone', '$street', '$city', '$state', '$postal', '$country', '$emergname', '$emergphone', '$shirtsize', '$runner_group')";
if(mysqli_query($link, $sql)){
    header("Location:http://students.washington.edu/vgw/paypal.html");
} else{
    echo "Your registration could not be completed. Please try registering again. If this problem persists please email us about the issue and we will register you - rhochapterphilanthropy@outlook.com" ;
}
 
// close connection
mysqli_close($link);
?>
