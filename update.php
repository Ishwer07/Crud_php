<?php
	require 'config.php'; 
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM users where id= $id ";
    $result = $conn->query($sql);
    $total=mysqli_num_rows($result);
    $alldata=mysqli_fetch_assoc($result)

	    
?>
<!DOCTYPE HTML>
<html>  
<body>

<form action="" method="post">
Name: <input type="text" name="name" value="<?php echo $alldata['name']; ?>"><br>
E-mail: <input type="text" name="email" value="<?php echo $alldata['email']; ?>" ><br>
<input type="submit" value= "update details" name="update">
</form>

<a href="select.php"> show updated data</a>


</html>
<?php
             
           
           $id = $_GET['id'];
           
           
			if(isset($_POST['update'])){ 
			$name =  $_POST['name'];
			$email = $_POST['email'];
			$sql = "UPDATE users SET name ='$name',email='$email' WHERE id=$id";
			$result = $conn->query($sql);
			}



            

           

            $conn->close();

    ?>   



 