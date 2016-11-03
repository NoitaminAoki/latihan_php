<?php
/*variabel berisi string*/
$a = 'Laravel\'M';

//echo $a;
// variabel berisi angka
// atau desimal
$d = 5.3;
$e = 3;

//echo $d;
//echo $e;
// menggabungkan 2 variabel

$x = "Hello ";
$w = "World";
$z = $x.$w;

//echo $z; //Hello World

$m = "test 1";
//echo $m."<br>";//test 1
$m .= "test 2";
//echo $m."<br>";//test 1test 2
$m .= "test 3";
//echo $m;//test 1test 2test 3

//operator
$q = 10;
$v = 3;
$ka = $q*$v;//Kali
$ba = $q/$v;//Bagi
$ta = $q+$v;//Tambah
$ku = $q-$v;//Kurang
$mod = $q%$v;//Hasil Bagi
// echo $ka."<br>";
// echo $ba."<br>";
// echo $ta."<br>";
// echo $ku."<br>";
// echo $mod."<br>";

//tipe data
$s = "Hello"; // <- teks
$i = 1;//integer/angka
$d = 1.2;//double/desimal
$b = true;//boolean
$arr = array();//array

var_dump($s);//string(5) "Hello"
var_dump($i);//int(4)
var_dump($d);//float(1.2)
var_dump($b);//bool(true)
var_dump($arr);//array(0){}













?>