<?php
                        
$conn = mysqli_connect("localhost", "ishwer", "password", "login");
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
    
?>