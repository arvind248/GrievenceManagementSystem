<?php
include "../Config/connection.php";
session_start();
$id=$_SESSION['id'];
$type=$_SESSION['type'];
// $id="sakshi@gmail.com";



if($type=="Admin")
    $sql="SELECT * from studentgrievance";     
else
    $sql="SELECT * from studentgrievance WHERE assignedto = '$id'"; 
    

if($result=mysqli_query($link,$sql))
{
    if($total=mysqli_num_rows($result) > 0){
        $records=$result -> fetch_all(MYSQLI_ASSOC);
        echo json_encode($records);  
        // updateNewGrievance($total);
        if($type!="Admin"){
            $sql="UPDATE studentgrievance SET status='Pending' WHERE status='New' ";
                if(mysqli_query($link,$sql)){
                    
                }
                else{
                    echo mysqli_error($link);
                }
        }
    }

}
else{
    echo mysqli_error($link);
}



// function updateNewGrievance($total){
//     for($i=0;$i<$total;$i++) {
//         // $status =$one['status'];
//         echo"hello";
        
     
//      }
     

// }



?>