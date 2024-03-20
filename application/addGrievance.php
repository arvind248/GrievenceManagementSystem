<?php

include "../Config/connection.php";

$studentname=$_POST['studentname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$mobileno=$_POST['mobileno'];
$enrollmentno=$_POST['enrollmentno'];
$regionalcenter=$_POST['regionalcenter'];
$programme=$_POST['programme'];
$address=$_POST['address'];
$state=$_POST['state'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$grievancecategory=$_POST['grievancecategory'];
$grievancename=$_POST['grievancename'];
$grievancediscription=$_POST['grievancediscription'];
$solution=$_POST['solution'];
$declaration=$_POST['declaration'];


// print_r($_POST);

$sql= "SELECT * FROM studentgrievance ORDER BY grievanceid DESC LIMIT 1";
if($result=mysqli_query($link,$sql))
{
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        // echo json_encode($row);
        $grievanceid=$row['grievanceid'];
        // echo $enrollment.", ";
        echo $grievanceid;
    }
}
else{
    echo mysqli_error($link);
}




$grievanceid++;
$assignedto="";
$Createdon=date('Y-m-d');
$status="New";
$addnote="";

$sql= "SELECT * FROM grievancetype  WHERE name = '$grievancename'";
if($result=mysqli_query($link,$sql))
{
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        // echo json_encode($row);
        $assignedto=$row['handleremailid'];             //assigning Handler 
        // echo $enrollment.", ";
        
    }
}
else{
    echo mysqli_error($link);
}



echo $assignedto;




$sql = "INSERT INTO studentgrievance VALUES ('$grievanceid','$studentname','$email','$gender','$mobileno','$enrollmentno','$regionalcenter','$programme','$address','$state','$city','$pincode','$grievancecategory','$grievancename','$grievancediscription','$solution','$assignedto','$status','$Createdon','$addnote')";
           
   if(mysqli_query($link, $sql)){
        echo "Records update successfully.";
    } else{
        echo mysqli_error($link);
    }
    
    // Close connection
    mysqli_close($link);













?>

