<?php

include("./sqli/phpcon.php"); 

 if(isset($_GET["id"])){
    $id=$_GET["id"];
    // echo$password;
    $ins="SELECT * FROM demo WHERE ID = $id ";
    $rees=$con->query($ins);
    $result=mysqli_fetch_assoc($rees);
    extract($result);
 }
if(isset($_POST["submit"])){
    print_r($_POST) ;
    extract($_POST) ; 
    $upd=" UPDATE demo SET Name='$username', Age=$password where ID={$_GET["id"]}";
    $upds=$con->query($upd);

    if($upds) 
    echo"updated";
else
echo"invalid";
  
   
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit user</title>
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
            <form action="edit.php?id=<?php echo $_GET["id"];?>" method="POST">
                <h1>Edit user</h1>
                <div class="form1">
                    <label for="username">User Name</label>

                    <input type="text" name="username" id="username " value="<?php echo $Name ?>">
                </div>
                <div class="form1">
                    <label for="password">Password
                    </label>
                    <input type="password" name="password" id="password"value="<?php echo $Age ?>">
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