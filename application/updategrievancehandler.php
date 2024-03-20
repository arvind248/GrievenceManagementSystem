<?php
include "../Config/connection.php";
// print_r($_POST);

if(isset($_POST['gid'])){
    $gid=$_POST['gid'];
    $handlerid=$_POST['handlerid'];
    $sql="UPDATE studentgrievance SET assignedto='$handlerid',status='New' WHERE grievanceid='$gid'";
    if($result=mysqli_query($link,$sql)){
        echo "updated";
    }else{
    echo mysqli_error($link);
    }

}




?>
