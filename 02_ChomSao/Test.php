<?php
    // $array = array("a", "b", "c");
    // $sum = array_sum($array);
    // echo $sum;
    
    // $array = array("a", "b", "c");
    // $key = array(1, 2,3 );
    // $newArr = array_combine($key, $array);
    // echo "<pre>";
    // print_r($newArr);
    // echo "</pre>";

    $array = array("a", "b", "c");
    function printArray($key, $value){
        echo $key . " : " . $value . "<br />";
    }
    array_walk($array, "printArray"); 
    /* 0 : a 
    1 : b
    2 : c
     */
    
    
?>