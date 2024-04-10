<?php 
// $get=$_GET();
// echo"<pre>";

// if(isset($_GET["confirm"])){

if(isset($_GET["confirm"])){
    // echo"Hello";
    if(empty($_GET["Username"])){

        // echo $_GET["Username"]."<br>";
        echo "<br> Enter Username";
    
    }
    else if(empty($_GET["Password"])){
    
        // echo $_GET["Password"]."<br>";
        echo "<br> enter pass";
    }
    else
    echo"Good";

}

// echo $_GET["Username"]."<br>";
// echo $_GET["Password"]."<br>";

// if(empty(!$_GET["username"])){
    // print_r($_GET);
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get method of PHP</title>
</head>
<body>
    <form action="./index.php" method="get">

    <div>
        <label for="Username ">Username</label>
        <input type="text" name="Username" id="uname" placeholder="Enter Username">
    </div>
    <div>
        <label for="password">Password </label>
        <input type="password" name="Password" id="pas" placeholder="Enter Password">
    </div>
    <div>
        <button type="submit" name="confirm" value="confirm">Submit</button>
    </div>
    </form>
    <a href="./index.php">back</a>
    
</body>
</html>