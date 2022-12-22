<?php
    $i = 0;
    $cou = 0;
    while ($cou < 40){
    $num = rand(1, 6);
    $i++;
    printf("%d回目 = %d <br>", $i, $num);
    $cou += $num;
    } 
    printf("合計%d回でゴールしました。<br>", $i);
?>