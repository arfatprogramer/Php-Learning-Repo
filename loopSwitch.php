<?php
$check = "";

switch ($check) {
    case "A":
        echo "<br> Match with case A";
        break;
    case "B":
        echo "<br> Match with case B";
        break;
    case "C":
        echo "<br> Match with case C";
        break;
    default:
        echo "<br> Default statment";
        break;
}

for($i=2;$i<=10;$i+=2){
    echo"<br> Even nmbers : ".$i;
}
echo "<br>";
for($i=1;$i<=10;$i=$i+2){
    echo"<br> odd nmbers : ".$i;
}
$j=1;
while($j<10){
    echo " <br>2 X $j = ". 2*$j;
    $j++;
}




?>