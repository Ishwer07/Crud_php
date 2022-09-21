<?php require 'config.php'; ?>
<!DOCTYPE html>


<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.101.0">
        <title></title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
        
        <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
        <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#712cf9">


</style>
    </head>

        <body>
            <header>
                <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                <a class="navbar-brand" href="form.php">Register Here</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="view_data.php">Your Data</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
                </li>
                </ul>
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
                </div>
                </nav>
            </header>
        <body>
    
    <h1></h1>
         <div class="container">
        <?php
     
   
                
                $sql = "SELECT id, name, email FROM users";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) 
                {
                    ?>
                <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Username</th>
                            <th scope="col">email address</th>
                            <th scope="col">operation1</th>
                            <th scope="col">Operatin2</th>

                        </tr>
                    </thead>
               

                <?php
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['name']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= "<a href='delete_data.php?id=$row[id]' class='btn btn-danger'>Delete</a>" ?></td>
                        <td><?= "<a href='update.php?id=$row[id]' class='btn btn-primary'>Update</a>"  ?></td>
                    </tr>
                <?php
                   }   
                }
                
                else
                {
                    echo "no input";
                }
                      
        ?> 
                </table>
        </div>
    <!-- //        "id: " . $row["id"]. 
                //        " - Name: " . $row["name"]. 
                //        " - email:" . $row["email"]. 
                //        "<a href='delete_data.php?id=$row[id]'> Delete</a> ".
                //        "<a href='update.php?id=$row[id]&name=$row[name]&email=$row[email]'>' update</a> ".
                //        "<a href='insert.php?'> 'insert new data</a><br><br> ";
                // } -->

</body>
</html>
                        



