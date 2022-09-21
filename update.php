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
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head> 
<body>
	<form class="container"  action="" method="post">
	                <div class="mb-3">
	                <label for="" class="form-label">Name</label>
	                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="name" value="<?php echo $alldata['name']; ?>">
	                <div id="" class="form-text">Put your name here</div>
	                </div>
	                
	                <div class="mb-3">
	                <label for="exampleInputEmail1" class="form-label">Email address</label>
	                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"  value="<?php echo $alldata['email']; ?>" placeholder="email-id" >
	                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
	                </div>
	    
	                <div class="mb-3 form-check">
	                <input type="checkbox" class="form-check-input" id="exampleCheck1">
	                <label class="form-check-label" for="exampleCheck1">Check me out</label>
	                </div>
	                <button type="submit" class="btn btn-primary"value= "update details" name="update">Submit</button>
	            </form>
	            <br>
	            <br>
		<!-- <form action="" method="post">
	Name: <input type="text" name="name" value="<?php echo $alldata['name']; ?>"><br>
	E-mail: <input type="text" name="email" value="<?php echo $alldata['email']; ?>" ><br>
	<input type="submit" value= "update details" name="update">
	</form> -->
	<div class="container">
	<a href="view_data.php" class="btn btn-primary"> show updated data</a>
	</div>
</body>

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



 