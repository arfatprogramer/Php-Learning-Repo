<?php
$float=3.15; 
$inte=22;
$str="arfat";
$bol=true;

echo "<br> Float Value : ".$float;
echo "<br> Integer Value : $inte";
echo "<br> String Value : ".ucwords($str);
echo "<br> Boolean Value :  $bol";

echo "<br>";
echo "<br>";
var_dump($float);
echo "<br>";
var_dump($inte);
echo "<br>";
var_dump($str);
echo "<br>";
var_dump($bol);
echo "<br>";

echo is_int($inte);
echo "<br>";
echo is_string($str);
echo "<br>";

$s="";
if(empty($s)){
    echo "This is True Statment";
}
else{
    echo "This is false Statment";

}
$i=1;
do{
    echo"<br> $i ";
    $i++;
}while($i>10);

echo"<br><br>";
// Integer arra
$simple=array(1,9,2,3,4,5,6,7,8);

foreach($simple as $s){
    echo $s."<br>";
}
// Assosiative array
$ar2=["Arfat"=>"Softwer Engener","Rahul"=>"web desiner","Anjali"=>"Programmer"];
foreach($ar2 as $a=>$v ){
    echo $a." ".$v."<br>";

}

// multi-dimintional array
// $arr=array(
//     array('a','b','c','d'),
//     array('e','f','g','h'),

// );

$arr=[
    ['a','d'],
    ['e','f','g']
];

foreach($arr as $ra){
    foreach($ra as $v){
        echo $v."<br>";
    }
}



?>
<?php

echo "<pre>";print_r($_GET);
// if(isset($_GET["submit"])){

//     if(empty($_GET["username"])){
//         echo"<br>Enter Username";
//     }
//     if(empty($_GET["Password"])){
//         echo"<br>Enter password";
//     }
//     else{
//         echo"<BR>Your Enter username : ".$_GET["username"];
//         echo"<BR>Your Enter Password : ".$_GET["Password"];
//     }

// }

if(isset($_GET["submit"])){
    
   if(isset($_GET["course"]) &&$_GET["course"] =="BCA"){
    echo "You Selected : ", $_GET["course"];
    echo"<br> This is tech ralated field";
}
if(isset($_GET["course"]) && $_GET["course"]=="BBA"){
    echo "You Selected : ", $_GET["course"];
    echo"<br> This is manamgemt ralated field";
   }

   if(isset($_GET["hobbies"])){
    foreach($_GET["hobbies"] as $val)
    
    echo "<br>You your Hobbies : ", $val;
    // echo "<br>You Selected : ", $_GET?["hobbies"][1];
    // echo "<br>You Selected : ", $_GET["hobbies"][2];
    // echo "<br>You Selected : ", $_GET["hobbies"][3];
    echo"<br> This is manamgemt ralated field";
   }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginform</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="course">Select Course : </label></BR>
        <input type="radio" name="course" id="course" value="BCA">BCA <BR>
        <input type="radio" name="course" id="course" value="BBA">BBA <BR>
        <input type="radio" name="course" id="course" value="Bcom">Bcom <BR><br>
       
        <label for="Hobbies">Select Hobbies</label><br>
        <input type="checkbox" name="hobbies[]" id="music" value="Music">Music <br>
        <input type="checkbox" name="hobbies[]" id="reading" value="Reading">Reading <br>
        <input type="checkbox" name="hobbies[]" id="dance" value="Dancing">dance <br>
        <input type="checkbox" name="hobbies[]" id="games" value="Gaming">Games <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <a href="./index.php">reseet</a>
</body>
</html>