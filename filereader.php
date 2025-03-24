<?php
    $fileData = file_get_contents("sample.json");
    $queArr = json_decode($fileData,true);

    $newQue = array(
        "fruit" => "banana",
        "size" => "medium",
        "color" => "yellow"
    );

    $queArr[] =  $newQue;

    $encodedQues = json_encode($queArr, JSON_PRETTY_PRINT);

    if(file_put_contents("sample.json",$encodedQues)){
        echo "file writted!"; 
    }
?>