<?php
function getBox($widh,$height,$lenght){
    $area = $widh * $height * $lenght;
    print "長方形の面積＝" . $area;
}

echo getBox(10,5,8);
?>