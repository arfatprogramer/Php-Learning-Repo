<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tut1</title>
</head>

<body>
    <h1>Hello </h1>
    <?php 
    // for single line comment
    /* Multi
     line
      comment
    */
    # single line comment

    echo "<h1> Hi  Mo Arfat Ansari</h1>";
    $Age =22;  //integer
    $Name="Arfat"; //String
    $per=61.20; // Folat
    $bol=true; //Boolean

    //Following is type to user variable
    echo " My name is : ".$Name;
    echo " <br> My Age is : $Age";
    echo " <br> My Peesnetage is : $per %";
    echo " <br> My Result  is : {$bol}";
    echo"<br><br>";

    //var_dump() it is used to check the datatype 
    var_dump($Name); //with strint it retuen number of char and value
    echo "<br>";
    var_dump($Age) ;
    echo "<br>";
    var_dump($per);
    echo "<br>";
    var_dump($bol);
    echo "<br>";
    $arr=["Apple","Banana","Mango",1,true,'a'];
    var_dump($arr);
    echo "<br>";
    echo "<br>";

    /* operators
    Arithmetic  + - * / % **(Power)
    increment/decriment  ++/--
    Operator preecedent 
           ()
           pow **
           * / %
           + -

    */
    $vari=10;
    echo $vari."<br>";
    $vari++;
    echo $vari."<br>";
    $vari--;
    echo $vari."<br>";
    echo $vari ."<br><br>";

    //Php  Function
    # Sting Function
    echo strlen($Name)."<br>";
    echo str_replace("A","B",$Name)."<br>";
    echo str_ireplace("a","b",$Name)."<br>";
    echo str_ireplace("b","a",$Name)."<br>";
    echo strtoupper($Name)."<br>";
    echo strtolower($Name)."<br>";
    echo  "<br>";
    echo  "<br>";

    #number function
    // is_int()
    // is_bool()
    // is_float()
    // is_string()

    #math function
    echo pi()."<br>";
    echo abs(-34)."<br>";
    echo sqrt(25)."<br>";
    echo round(3.4)."<br>";
    echo rand()."<br>";
    echo rand(1,100)."<br>";
    echo rand(1,6)."<br>";


    // If statments 
    $age=17;
    if($age >=18){
        echo"you can give vote";
    }
    else{
        Echo "You can not eligable for vote";
    }

    //for loop
    for($i=1;$i<10;$i++){
        echo "<br>Round no :$i";
    }

    ?>
</body>

</html>