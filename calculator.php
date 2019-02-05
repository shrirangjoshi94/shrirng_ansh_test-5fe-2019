<?php

//echo nl2br("\n");
//print_r($argv[2]);
//exit;

$sum = 0;
$count = count($argv);
if($count > 1)
{
if($argv[1] == "sum")
{
if($count > 2)
{
if(isset($argv[2]) && is_numeric($argv[2]))
{
    echo $argv[2];
}else{
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
    echo "in else";
}
}else{
    echo "Please enter the a math operation naeme";
    //return;
}
echo nl2br("\n");
?>