<?php
$a = 5;
echo ++$a . "<br>";
echo $a++ . "<br>";
echo --$a . "<br>";
echo $a-- . "<br>";
echo ($a += 1) . "<br>";
echo (999 == '999') . "<br>";
var_dump(999 <> '999');
echo "<br>";
if (!(999 == 1 xor '999' == 1)) {
    echo "xor<br>";
}

switch ($speed = $_GET['speed']) {
    case $speed < 20:
        echo "turtle" . "<br>";
        break;
    case $speed < 40:
        echo "grany" . "<br>";
        break;
    case $speed < 60:
        echo "norm" . "<br>";
        break;
    case $speed < 80:
        echo "fast" . "<br>";
        break;
    case $speed < 100:
        echo "ASTANAVITES" . "<br>";
        break;
    default:

        echo "Light speed" . "<br>";
}
if ($speed < 20) {
    echo "turtle" . "<br>";
} elseif ($speed < 40) {
    echo "grany" . "<br>";
} elseif ($speed < 60) {
    echo "norm" . "<br>";
} elseif ($speed < 80) {
    echo "fast" . "<br>";
} elseif ($speed < 80) {
    echo "fast" . "<br>";
} elseif ($speed < 100) {
    echo "ASTANAVITES" . "<br>";
} else {
    echo "Light speed" . "<br>";
}

$a=40;

$r=$a?"ok<br>":"no<br>";
echo $r;
$r=$a==40?:"no<br>";
var_dump($r);
$r=$a==40??"no<br>";
var_dump($r);