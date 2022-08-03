<?php

 $arr1 = [8,2];
 $arr2 = [7,2,1];
 $arr3 = [6,4,1];

echo 'Rezultatai';
echo '<pre>';
echo " ".implode(",",$arr1). ' = '.array_sum($arr1)."<br>";
echo '<pre>';
echo " ".implode(",",$arr2). ' = '.array_sum($arr2)."<br>";
echo '<pre>';
echo " ".implode(",",$arr3). ' = '.array_sum($arr3)."<br>";
