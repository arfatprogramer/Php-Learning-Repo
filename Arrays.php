<?php 

//multi-dimintionall arrays
$multiArr=array(
    array("name"=>"muskan","age"=>19),
    array("name"=>"arfat","age"=>23),
    array("name"=>"israr","age"=>25)
);
echo"<pre>";
print_r($multiArr);

foreach($multiArr as $v){
    foreach($v as $key=>$value){
        echo ucwords($key)." ".ucwords($value)." ";
    }
    echo"<br>";
}



exit; //it will stop after that sataments
//Normal Array

$ar=array("apple","Banana","mango","pineapple");

// print_r($ar)."<br>";
foreach($ar as $v){
    echo ucwords( $v)."<br>";
}

// Assacivativee Array
$arr2=array("Arfat"=>"CEO","muskan"=>"Manager","nisha"=>"Employee");
print_r($arr2);
echo "<br><br>";
foreach($arr2 as $k=> $ar){
    echo ucwords($k)." => ".ucwords($ar)."<br>";
}
//functions
$key =array_keys($arr2);
$val =array_values($arr2);
$arrayFlip=array_flip($arr2);


print_r ($key);
echo "<br><br>";
print_r ($val);



?>