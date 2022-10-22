<?php
 
$host = "localhost";
$user= "root";
$password ="";
$conn = mysqli_connect($host, $user, $password);
if(!$conn)
{
    die(" database Connection failed :");
    
}
else
{
    echo "connected successfully";
}

?>
