<?php include "../Config/connection.php";?>
<?php
             
            if(isset($_GET['category']))
            {

                    $cat=$_GET['category'];
                    // echo $cat;
                    $sql= "SELECT name FROM grievancetype where category='$cat'";
                             if($result=mysqli_query($link,$sql))
                             {
                                 if(mysqli_num_rows($result) > 0){
                         
                                    while($row = mysqli_fetch_array($result)) {
                                        echo '<option value="'.$row[0].'">'.$row[0].'</option>';
                                       
                                     }

                                     
                                 }
                             }
                             else{
                                 echo mysqli_error($link);
                             }
                             
            }
            
            ?>