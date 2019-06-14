<?php
$a=2;
$b=3;
if ($a < $b){
   echo $b-$a."<br>";
}else if($a > $b){
    echo $a-$b."<br>";
}else{
    echo 'zero';
}
for ($i=0;$i<$b;$i++){
    echo $b-$i."<br>";
}
switch ($a){
    case 1:
        echo $a-$b."<br>";
        break;
    case 2:
        echo $b-$a."<br>";
}

?>