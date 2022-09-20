<?php
             
           $conn = mysqli_connect("localhost", "ishwer", "password", "login"); 
           $id = $_GET['id'];
           
           
            
            $name =  $_POST['name'];
            $email = $_POST['email'];
            $sql = "UPDATE users SET name ='$name',email='$email' WHERE id=$id";
            $result = $conn->query($sql);
           
            
            

            if ($conn->query($sql) === TRUE) 
                {
                    echo "New record updated successfully<a href=insert.php>click here to add moreadd more</a>";
                } 
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

            
        ?>   