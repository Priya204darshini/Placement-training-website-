<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "userdata1";  
    
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
       die("Failed to connect with MySQL: ".mysqli_connect_error());  
    }  

 

if($con)
{
    //echo " connecton ok";

}
else{
   // echo "connection failed".mysqli_connect_error();
}


?>
