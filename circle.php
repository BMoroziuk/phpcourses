<?php
$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[$i] = $i + 1;
    echo $arr[$i] . "<br>";
}


do {
    echo 'Pusto<br>';
} while (1 == 2);

foreach ($arr as $key => $value) {
    echo "The $key element of array is $value.<br>";
}
$arr[]="PHP";
$arr[]="HTML";
$arr[]="CSS";
sort($arr);
print_r($arr);
echo "<br>";
echo current($arr)."<br>";
$str=implode(",",$arr);
echo $str."<br>";
print_r(explode(",",$str));
$a['one']='PHP';
$a['two']='HTML';
$a['three']='CSS';
extract($a);
echo $one."<br>";
echo $two."<br>";
echo $three."<br>";
$b=compact('one','two','three');
print_r($b);
$b[]="Assembler";
$b[]="Python";
print_r( array_merge(array_diff($a,$b),array_diff($b,$a)));
