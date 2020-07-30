<?php

function cari_mean($arr){
//kode di sini
   
    if (count($arr)==5){
        $jumlah=$arr[0] + $arr[1]+ $arr[2]+ $arr[3]+$arr[4];
        $mean = $jumlah/5;
        $mean_format=round($mean);
    }
    else if (count($arr)==3){
        $jumlah=$arr[0] + $arr[1]+ $arr[2];
        $mean = $jumlah/3;
        $mean_format=round($mean);
    }
    return $mean_format;
}


echo cari_mean([1, 2, 3, 4, 5]); // 3
echo "<br>".cari_mean([3, 5, 7, 5, 3]); // 5
echo "<br>".cari_mean([6, 5, 4, 7, 3]); // 5
echo "<br>".cari_mean([1, 3, 3]); // 2
echo "<br>".cari_mean([7, 7, 7, 7, 7]); // 7

?>