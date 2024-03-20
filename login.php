<?php include "Config/connection.php";
session_start();


// echo $_SESSION['id'];
if(isset($_SESSION['isLogedin']) && $_SESSION["isLogedin"]==true)
{
    header("Location:./dashboard.php"); 
}else{
  $_SESSION["id"] = "";
  $_SESSION["name"] = "";
  $_SESSION["isLogedin"]=false;
  $_SESSION["type"]="";
  $isLogedin=$_SESSION["isLogedin"];
  $errmsg="";

}

// if(isset('submit'))
if(isset($_POST['username']) AND $_POST['password'])
{
    $username=$_POST['username'];
    $password=$_POST['password'];  
    if($isLogedin==false){
        $sql="SELECT * FROM users WHERE mailid='$username' AND password='$password'";
        if($result=mysqli_query($link,$sql)){
            if($total=mysqli_num_rows($result)==1){
                $row=mysqli_fetch_array($result);
                $_SESSION["id"] = $row['mailid'];
                $_SESSION["name"] = $row['name'];
                $_SESSION["isLogedin"]=true;
                $_SESSION["type"]=$row['usertype'];
                // echo "Logedin";
                header("Location:dashboard.php");

            }else{
           
              $errmsg="Wrong Username or Pasword";
            }  

        }else{
         echo mysqli_error($link);
        }
    }else{
      header("Location:login.php");
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=".\bootstrap-5.1.3-dist\css\bootstrap.min.css">
    <!-- <link rel="stylesheet" href=".\style\style.css"> -->
    <style>
        .login-form{
            
            display: flex;
            align-content: center;
            justify-content: center;
            align-items:center ;
            height: 100vh;
            /* background: #000; */

        }
        .buttons{
            display:flex;
            justify-content:space-between;
            width:inherit;
            
        }
        .alertmsg{    
          height: 30px;
          background-color: rgb(53, 230, 53);
          letter-spacing: 2px;
          line-height: 20px;
          display: block;
          position: fixed;
          left: 0px;
          right: 0px;
          font-size: larger;

          text-transform: capitalize;
          padding: 5px 115px;
          
          
          
          color:rgb(255, 255, 255);

          visibility:visible ;
      }

    </style>
</head>
<body>
<?php
  if($errmsg!=""){
    echo "<div  class='alertmsg'>$errmsg</div>";
  }

?>


<div class="login-form bg-white">
<form action="#" method="POST" class="border border-light p-5 bg-light rounded"> 
  <div class="form-group" style="width: 350px;">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="username"required >

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password"required>
  </div>
  <div class="mt-3 buttons">

      <a href="./registration.php"><button type="button" class="btn btn-success" name="newRegistration">New Registration</button></a>
      <button type="submit" class="btn btn-primary">login</button>
  </div>
</form>


</div>



<script src=".\bootstrap-5.1.3-dist\js\bootstrap.min.js"></script>
</body>
</html>

