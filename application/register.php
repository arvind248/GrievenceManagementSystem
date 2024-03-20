<?php
// echo"hello";
include "../Config/connection.php";
// print_r($_POST);

if(isset($_POST['submit'])){
    $firstName=$_POST['firstName']; 
    $lastName=$_POST['lastName']; 
    $degination=$_POST['degination']; 
    $gender=$_POST['gender']; 
    $email=$_POST['email']; 
    $mobile=$_POST['mobile']; 
    $password=$_POST['password']; 
    $userType=$_POST['userType']; 
    $submit=$_POST['submit'];
    $fullName=$firstName." ".$lastName;

    $sql="INSERT INTO users Values('$email','$password','$fullName','$degination','$mobile','$userType')";
    if(mysqli_query($link, $sql)){
        // echo "Records update successfully.";
        header("Location:../login.php");
    } else{
        echo mysqli_error($link);
    }

}


?>