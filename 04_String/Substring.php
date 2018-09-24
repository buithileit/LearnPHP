<?php
    $url = "https://mp3.zing.vn/bai-hat/Nhac-Tre/01_DuyenMinhLo_HuongTram.mp3";
    $dataUrl = parse_url($url);
    $path = $dataUrl["path"];

    $arrPath = explode("/", $path);
    $nameFile = $arrPath[count($arrPath)-1];

    $arrPath = explode("_", $nameFile);


    $id = $arrPath[0];
    $nameSong = $arrPath[1];
    $name = $arrPath[2];

    $arrPath = explode(".", $name);
    $nameSinger = $arrPath[0];
    $extension = $arrPath[1];

    // echo $id . "<br />";
    // echo $nameSong . "<br />";
    // echo $nameSinger . "<br />";
    // echo $extension . "<br />";
    $nameSinger = formatNameWithSpace($nameSinger);
    echo $nameSinger . "<br />";

    function formatNameWithSpace($str){
        $result = $str[0];
        for($i =1; $i < strlen($str); $i++){
            if(ctype_upper( $str[$i])){
                $result .= " " . $str[$i];
            } else {
                $result .= $str[$i];
            }
        }
        return $result;
    }
    // echo $id . "<br />"
    // echo "<pre>";
    // print_r($id . " ");
    // echo "</pre>";

?>