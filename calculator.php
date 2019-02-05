<?php

try{
    $sum = 0;
    $count = count($argv);
    if($count > 1)
    {
    if($argv[1] == "sum" || $argv[1] == "add")
    {
    if($count > 2)
    {
        $input = $argv[2];
        $temp = explode(",",$input);
        $negativeNumbers = [];
        for($i = 0; $i < count($temp);$i++) //task 5 added filer to throw error if -ve numbers are present
        {
if(is_numeric($temp[$i]))
{
if($temp[$i] < 0)
{
    array_push($negativeNumbers,$temp[$i]);
}
}
        }
        if(count($negativeNumbers) > 0)
        {
            $negativeNumbers = implode(",",$negativeNumbers); 
            echo "Negative numbers (".$negativeNumbers.")not allowed"; //task 6
            exit; 
        }

    if(isset($input) && is_numeric($input))
    {
        echo $input;
        exit;
    }else{

//print_r($input);exit;

/*
if($argv[1] == "add") //task 3
{
    for($i = 0;$i < $count;$i++)
    {
        if(!is_numeric($input[$i])){
 $temp = explode("n",$arg[2][$i]);
 $input[$i] = $temp[0];
 $input[$i] = $temp[1];
$i++;
        }
    }
}
*/
    $temp = explode(",",$input);
    for($i = 0;$i < count($temp);$i++)
    {
        if($temp[$i] <= 1000)   //task 7 added filter only to add numbers below 1000
        {
            $sum = $sum + $temp[$i];
        }
    }
    echo $sum;
    exit;
    }
    }else{
        echo 0;
        exit;
    }
    }else{
        echo "math operation name does not match";
        exit;
    }
    }else{
        echo "Please enter the a math operation name";
        exit;
    }
    echo nl2br("\n");
}catch(Exception $e){
    echo 'Message: ' .$e->getMessage();
    exit;
}

?>