<?php

//echo nl2br("\n");
//print_r($argv[2]);
//exit;

try{
    $sum = 0;
    $count = count($argv);
    if($count > 1)
    {
    if($argv[1] == "sum" || $argv[1] == "add")
    {
    if($count > 2)
    {
    if(isset($argv[2]) && is_numeric($argv[2]))
    {
        echo $argv[2];
    }else{

//print_r($argv[2]);exit;

/*
if($argv[1] == "add") //task 3
{
    for($i = 0;$i < $count;$i++)
    {
        if(!is_numeric($argv[2][$i])){
 $temp = explode("n",$arg[2][$i]);
 $argv[2][$i] = $temp[0];
 $argv[2][$i] = $temp[1];
$i++;
        }
    }
}
*/
    $temp = explode(",",$argv[2]);
    for($i = 0;$i < count($temp);$i++)
    {
    $sum = $sum + $temp[$i];
    }
    echo $sum;
    }
    }else{
        echo 0;
    }
    }else{
        echo "math operation name does not match";
    }
    }else{
        echo "Please enter the a math operation name";
        //return;
    }
    echo nl2br("\n");
}catch(Exception $e){
    echo 'Message: ' .$e->getMessage();
}

?>