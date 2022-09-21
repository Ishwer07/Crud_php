<?php require 'config.php'; ?>
<!DOCTYPE html>
<html>
 
   
     
    <body>
        <?php
             
            // servername => localhost
            // username => root
            // password => empty
            // database name => staff
            
             
            // Check connection
           
            $name =  $_POST['name'];
            $email = $_POST['email'];
            $sql = "INSERT INTO users(name,email)  VALUES ('$name','$email')";
            
            
            if ($conn->query($sql) === TRUE) 
                {
                    echo "New record created successfully<a href=form.php>click here to add moreadd more</a>";
                } 
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

            
        ?>
    </body>
 
</html>
