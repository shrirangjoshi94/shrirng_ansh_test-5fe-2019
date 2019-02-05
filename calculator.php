<?php

$count = count($argv); //terminal input count

if($count > 1) //if math function is present
    {
        $mathFunctionName = $argv[1];


        if($mathFunctionName == "sum" || $mathFunctionName == "add" || $mathFunctionName == "multiply")
    {

        if($count > 2)
        {
            $input = $argv[2];

           
            if(isset($input) && is_numeric($input))
            {
                echo $input;
                exit;
            }else{

                if($mathFunctionName== "add" || $mathFunctionName == "multiply") //task 3 (input with delimetters removed)
                {

                    $input = checkForDifferentDelimeters($input); //task 3 and task 4
                }

                checkForNegativeNumbers($input);    //function to detect the neagtive numbers

                printFinalComputedOutput($input,$mathFunctionName);      //function to print the final computed output
            }

        }
        else{
            echo 0;    //no number present in input then print this
            exit;
        }

    }else{
        echo "math operation name does not match";
        exit;
    }

}else{
    echo "Please enter the a math operation name";  //when math function is not present
    exit;
}


function printFinalComputedOutput($input,$mathFunctionName)
{

    $output = 0;
    if($mathFunctionName == "multiply") //for task 8
    {
        $output =1;
    }

    $temp = explode(",",$input);

    for($i = 0;$i < count($temp);$i++)
    {
        if($temp[$i] <= 1000)   //task 7 added filter only to add numbers below 1000
        {
            if($mathFunctionName == "sum" || $mathFunctionName == "add")
            {
                $output = $output + ((isset($temp[$i]) && !empty($temp[$i])) ? $temp[$i] : 0);

            }else if($mathFunctionName == "multiply")
            {
$output = $output*((isset($temp[$i]) && !empty($temp[$i])) ? $temp[$i] : 1);
            }
        }
    }
    echo $output;
    exit;

}

function checkForDifferentDelimeters($input){

    $temp = "";
    for($i=0; $i < strlen($input); $i++)  
    {
        if($input[$i] != "n" && $input[$i] != '\\') //task 4
        {
            $temp .= $input[$i];
        }else{
            $temp .=',';
        }
    }
    $input = $temp;

    return $input;
}

function checkForNegativeNumbers($input)
{

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

}

?>