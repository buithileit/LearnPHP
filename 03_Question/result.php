
<?php
    $dataConclude = file("Conclude.txt");
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $sumPoint = array_sum($_POST);

    //echo $sumPoint
    foreach( $dataConclude as $key=> $value){
        $concludes = explode("|", $value);

        $min = $concludes[0];
        $max = $concludes[1];

        if($min <= $sumPoint && $sumPoint <= $max){
            echo "Tổng điểm của bạn là: " . $sumPoint. "<br />";
            echo $concludes[2];
        }
    }
 
?>