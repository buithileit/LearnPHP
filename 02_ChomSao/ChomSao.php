<?php
    //echo $_POST["username"];
    //echo $_POST["pass"];
    $month = $_POST["month"];
    $day = $_POST["day"];
    $image = "";
    $name = "";
    $time = "";
    $errFlg = false;
    $result = "";
    if(is_numeric($month) && is_numeric($day)){
        
        switch ($month) {
            case 1:
                if($day <=19){ $image = "Capricorn";    $name = "Ma Kết";  $time = "23/12 - 19/01"; }
                if($day >=20){ $image = "Aquarius"; $name = "Bảo Bình"; $time = "20/01 - 19/02"; }
                if($day <= 0 || $day > 31){ $errFlg = true;}
                break;
            
            default:
                # code...
                break;
        }
        // $result =  '{"name":"' .$name. '", "image":"' .$image. '", "time":"' .$time. '"}';
        $result =  '{"name":"' .$name. '", "image":"' .$image. '", "time":"' .$time. '"}';
    }else{
        $errFlg = true;
    }
    if($errFlg){
        $result = "Dữ liệu không hợp lệ";
    }
    echo $result;
?>