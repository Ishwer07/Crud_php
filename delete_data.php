<?php  
     require 'config.php';
    $id=$_GET['id'];

     $conn = mysqli_connect("localhost", "ishwer", "password", "login");

     $sql = "DELETE FROM users WHERE id=$id";

    if (mysqli_query($conn, $sql)) 
    {
        echo "Record deleted successfully";
        echo "<a href=select.php>show remaining data</a>";
    } 
    else 
    {
        echo "Error deleting record: " . mysqli_error($conn);
    }
?>