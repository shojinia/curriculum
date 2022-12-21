<?php
echo date('今H時台です')."<br/>\n";
if(date("H") >= 6 and date("H") <= 11){
    echo "おはようございます";
}elseif(date("H") >= 12 and date("H") <=16){
    echo "こんにちは";
}else{
    echo "こんばんは";
}
?>