<?php
//condition
//akan menjalankan aksi jika kondisi bernilai true

//struktur	:
// if(kondisi) {
//	aksi
// }

//contoh

// $i = 5;
// //I kondisi
// if($i==5) {//jika bernilai true
// 	echo "nilai i adalah 5"; //tampil
// }

//stuktur
// if(kondisi 1) {
//	aksi 1
// } else{
// aksi 2
// }
// echo "<br>";
// //2 kondisi
// if($i==4) {//jika bernilai false
// 	echo "nilai i adalah 4";
// }else{
// 	echo "nilai i bukan 4";
// }

// struktur
// if (kondisi 1) {
// 	aksi 1
// }else if(kondisi 2) {
// 	aksi 2
// }else{
// 	aksi 3
// }

// echo "<br>";
// //3 kondisi/lebih
// if($i==3) {//jika bernilai false
// 	echo "nilai i adalah 3";
// }else if($i==5) {
// 	echo "nilai i adalah 5";
// }else{
// 	echo "nilai i bukan 3 atau 5";
// }
// 

//$i = 5;
// condition switch case break

// struktur
// switch(variabel) {
// 	case kondisi 1:
// 		aksi 1
// 	break;
// 	case kondisi 2:
// 		aksi 2
// 	break;
// 	case kondisi 3:
// 		aksi 3
// 	break;
// 	default:
// 		aksi jika kondisi
// 		tidak terpenuhi
// 	break;
// }
$i = 5;

switch($i) {
	case 1:
		echo "nilai i adalah ".$i;
	break;
	case 3:
		echo "nilai i adalah ".$i;
	break;
	case 5:
		echo "nilai i adalah ".$i;
	break;
	default:
	   echo "nilai i bukan 1,3,5";
	break;
}


$lalin = 'hijau';

switch($lalin) {
	case 'hijau':
		echo "jalan";
	break;
	case 'merah':
		echo "berhenti";
	break;
	case 'kuning':
		echo "hati-hati";
	break;

	default:
	   echo "(?)";
	break;
}