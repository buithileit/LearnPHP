<?php
function 
    $dataQuestions = file("Question1.txt");
    // echo "<pre>";
    // print_r($dataQuestions);
    // print_r($dataAnswers);
    // print_r($dataConclude);
    // echo "</pre>";
    $newArrayQuestions = array();
    foreach( $dataQuestions as $key=> $value){
        $question = explode("|", $value);
        $newArray[$question[0]] = $question[1];
    }
?>