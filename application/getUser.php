<?php
include "../Config/connection.php";
session_start();
// $id=$_SESSION['id'];
// $id="abhinav@gmail.com";
$sql="SELECT name,mailid from users"; 

if($result=mysqli_query($link,$sql))
{
    if(mysqli_num_rows($result) > 0){
        $records=$result -> fetch_all(MYSQLI_ASSOC);
        echo json_encode($records);  
    }
}
else{
    echo mysqli_error($link);
}



?>