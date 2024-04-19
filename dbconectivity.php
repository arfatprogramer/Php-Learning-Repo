<?php
// include("sqli/phpcon.php");
// include_once();
// require_once()
require("sqli/phpcon.php");
// $daate=date(" y-m-d h:m:s");
// $smd ="insert into demo (Name,Age)values('Arfat',32)";
// //$del="delete  demo";
// //$con->query($del);
//  $cmd="insert into demo(Name,Age)values('Muskan','19')";
//  $con->query($cmd);
//  $con->query($smd);

// $cmd="delete from demo";
// // $con->query($cmd);

// $upd="update demo set name='muskan' where name='Arfat'";
// $con->query($upd);

$select="select * from demo";
$res=$con->query($select);
echo"<pre>";
print_r($res);
$row = $res->fetch_assoc();
echo"<pre>";
         print_r($row );
while($row = $res->fetch_assoc()) {
        echo"<pre>";
        // print_r($row );
        echo"Roll Number : ".$row["ID"];
        echo" Name : ".$row["Name"];
        echo" Age : ".$row["Age"];

}

?>