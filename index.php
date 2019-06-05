<?php
$arr = [1, 2, 4, 5, 6, 7, 8, 9];
$x = 2;
for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] == $x) {
        $arr[$i] = '';
        for ($j = $i; $j < count($arr) - 1; $j++) {
            $arr[$j] = $arr[$j + 1];
        }
    }
}
var_dump($arr);


?>
