<?php

    $string1 = "amanhã de manhã vai chover";
    $string2 = "manhã";

    echo "String contain word ($string2) : " . (strpos($string1, $string2) !== false ? "Yes" : "Not");

    $array = [1.23, 3.21, 4.7];

    $total =  array_sum(array_map(function($item) { 
        return (int) $item; 
    }, $array));

    echo "<br/> Total Sum is : " . $total;


    $finalResult = array_map(function($item) { 
        return $item + 3; 
    }, $array);

    echo "<br/>";
    print_r($finalResult); 


    $totalSum =  array_sum(array_map(function($item) { 
        return $item; 
    }, $array));

    $result = $totalSum - 10;

    echo "<br/> Result: " . (($result < 0) ? "0" : $result);
?>
