<?php

include("./sqli/phpcon.php");  

if(isset($_GET["submit"])){
    extract($_GET);
    
    // echo$username;
    // echo$password;
    $ins="INSERT INTO demo(Name,Age)VALUES('$username','$password')";
    $rees=$con->query($ins);
    if($rees)
        echo"data inserted";
    else
        echo"problem Occurse";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <style>
        .form {

            padding: 20px;
            width: 300px;
            margin: 0px auto;
            border: 2px solid #b3a1a1;
            background-color: #f5efef;
            border-radius: 20px;

        }

        .form1 {
            display: flex;
            flex-direction: column;
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="form">
            <form action="index.php" method="get">
                <h1>Login form</h1>
                <div class="form1">
                    <label for="username">User Name</label>

                    <input type="text" name="username" id="username ">
                </div>
                <div class="form1">
                    <label for="password">Password
                    </label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="form1">
                    <input type="submit" name="submit" value="submit">
                    <a href="user.php">See Users</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>