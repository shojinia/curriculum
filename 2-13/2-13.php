<?php

    $i = 12.4;
    $str = "testword";
    $word= "テストです。";
    $name = "小路";
    $limit_number = 9;

    echo ceil($i);
    echo "<br/>";
    echo floor($i);
    echo "<br/>";
    echo round($i);
    echo "<br/>";
    echo pi();
    echo "<br/>";
    echo mt_rand(10, 50);
    echo "<br/>";
    echo strlen($str);
    echo "<br/>";
    echo strpos($str , "o");
    echo "<br/>";
    echo substr($str , -8 , 4);
    echo "<br/>";
    echo str_replace("word", "Word", $str);
    echo "<br/>";
    echo mb_strlen($word);
    echo "<br/>";
    printf("%sのPHP終了までのタイムリミットは残り%d日です", $name , $limit_number);
    echo "<br/>";
    $limit = sprintf("%sのタイムリミットは%d日です" , $name , $limit_number);
    echo $limit;


    function circleArea($i){
        $circle_area = $i * $i * pi();
        echo $circle_area; 
    }
    
    ?>