<?php 
    include "Config/connection.php";
    session_start();
    $name=$_SESSION['name'];
    // $_SESSION["isLogedin"]=false;
    // echo $_SESSION['id'];
    $isLogedin=$_SESSION["isLogedin"];

    // if($isLogedin!=true){
    //     header("Location:login.php");
    // }
	// else{
    
    //     $type=$_SESSION['type'];
    // }

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href=".\css\style.css"> -->
    <!-- <link rel="stylesheet" href=".\bootstrap-5.1.3-dist\css\bootstrap.min.css"> -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href=".\style\style.css">
    <style>
        *{
            margin:0px;
            padding:0px;
        }
        /* thead{
            background-color: rgb(230, 230, 230);
        } */
        .record td{
            font-size: small;
            color:rgb(134, 134, 134);
        }
        .norrow-btn{
            padding:2px 10px;
            font-size:7pt;    
        }
        .followup-btn{
            padding:2px 10px;
            font-size:7pt;
            border-color:rgb(76, 247, 76);   
        }

       


    </style>
    
</head>
<body class="body">

    <div class="followup-box">

    </div>
    <div class="tranfer-box">
       
    </div>

    <div class="ig-dialogbox">
            
    </div>
    
   
        
    <div class="top">
        <h1>IGNOU</h1>
        
        <div class="logout">
            <div class="vertical-dot"><img src="ellipsis-v-solid.svg" alt=""></div>
            <div class="logout-box">
                <div class="profile"><?php echo $name ?></div>
                <div class="logout-btn "> <a href="./application/logout.php"> Logout</a></div>
            </div>
        </div>
    </div>
    <br>

    <div class="sub-head">
        <h4>Grievance Management Dashbaord <span>Grievance For Last 30 days</span></h4>
    </div>

    <div class="buttons">
        <div class="button active" data-status="All">Complaints <span class="g-sum"></span></div>
        <div class="button" data-status="New">New <span class="g-sum"></span></div>
        <div class="button" data-status="Pending">Pending <span class="g-sum"></span></div>
        <!-- <div class="button" data-status="In progess">In Progess <span class="g-sum"></span></div> -->
        <div class="button" data-status="Solved">Solved <span class="g-sum"></span></div>
        <div class="button" data-status="Rejected">Rejected <span class="g-sum"></span></div>
        <?php if($type=="Admin") echo '<div class="button " >Add Grievance Category  <span class="g-sum"></span></div>'?>
    </div>

    <div class="table-container">
        <table class="table">
        <thead>
                <tr>
                    <th scope="col" >Serial No</th>
                    <th scope="col" >Grievance No</th>
                    <th scope="col" >Complaint User</th>
                    <th scope="col" >User Email-id</th>
                    <th scope="col" >User Mobile no</th>
                    <th scope="col" >Grievance Title</th>
                    <th scope="col" >Grievance Discription</th>
                    <th scope="col" >Date Created</th>    
                    <th scope="col" >Tranfer To</th>
                    <th scope="col" >Add Note</th>


                </tr>
            </thead>
            <tbody></tbody>
       


        </table>
    </div>

   
    
   

<!-- JavaScript Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
<script src="dashboard1.js"></script>
</body>
</html>