<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V14</title>
	<meta charset="UTF-8">
</head>
<body>

<form class="login100-form validate-form flex-sb flex-w" action = "result.php" method="POST" >
<span class="login100-form-title p-b-32">
    Trắc nghiệm tính cách
</span>
<?php
    $dataQuestions = file("Question1.txt");
    $dataAnswers = file("Answers1.txt");

    // echo "<pre>";
    // print_r($dataQuestions);
    // print_r($dataAnswers);
    // print_r($dataConclude);
    // echo "</pre>";
    $newArrayQuestions = array();
    foreach( $dataQuestions as $key=> $value){
        $question = explode("|", $value);
        $newArray["question"] = $question[1];
        $arrayAnswer = array();
        // echo $question[0];
        foreach( $dataAnswers as $key=> $value){
            $answer = explode("|", $value);
            
            // echo "<pre>";
            // print_r($answer);
            // echo "</pre>";
            // echo "<br/>|" . $answer[0] . ":" .$question[0] . "|";
            // echo "<br/>" . implode($answer, "-") . ":" .$question[0] . "";
            //  echo "<br/>|" . $answer[0] . ":" .$question[0] . "|";
            // echo $answer[0] == $question[0];
            if ($answer[0] == $question[0]){
                // echo "<br/>" . implode($answer, "-") . ":" .$question[0] . "";
                $arrayOption = array();
                $arrayOption["option"] = $answer[2];
                $arrayOption["point"] = $answer[3];
                $arrayAnswer[$answer[1]] = $arrayOption;
                //unset($key);
            }else{
               // break;
            }
        }
        $newArray["sentences"] = $arrayAnswer;
        $newArrayQuestions[$question[0]] = $newArray;
    }

    foreach ($newArrayQuestions as $key1=> $value1){
        echo '<div class="question" ><p><span > Câu hỏi ' . $key1. ': </span> </p>' .$value1["question"];
        foreach ($value1["sentences"] as $key2=> $value2){
            echo '<ul><li><label><input type="radio" name="' .$key1 . '" value="' . $value2["point"] . '" /> ' .  $value2["option"] . '</label></li></ul></div>';
        }
    }
 
?>
<!-- <div class="question" >
    <p>
        <span > Câu hỏi 1: </span> ???
    </p>
    <ul>
        <li><label><input type="radio" name="11" value="2" />/////</label></li>
    </ul>
</div> -->
<div >
    <button type="submit">
        Kiểm tra
    </button>
</div>

</form>
    

</body>
</html>