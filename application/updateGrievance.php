<?php
include "../Config/connection.php";
// print_r($_POST);

if(isset($_POST['gid'])){
    $gid=$_POST['gid'];
    $followup=$_POST['followup'];
    $status=$_POST['status'];
    $sql="UPDATE studentgrievance SET addnote='$followup',status='$status' WHERE grievanceid='$gid'";
    if($result=mysqli_query($link,$sql)){
        echo "updated";
    }else{
    echo mysqli_error($link);
    }

}




?>