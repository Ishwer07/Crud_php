
<?php  
    require'config.php';
    
    $id=$_GET['id'];
    $sql = "DELETE FROM users WHERE id= $id";

        if($conn->query($sql) === TRUE)
        {
            echo "Record deleted successfully<br>
            <a href='view_data.php'>View Remaining Data</a>"

            ;

        } 
        else 
        {
            echo "Error deleting record: " . $conn->error;

        }
?>
    

   
