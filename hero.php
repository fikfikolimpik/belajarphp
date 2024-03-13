<?php


$namaHeroML = "Zilong";
$level = 2;


$skill = $level <= 4 ? $namaHeroML. " belum Memiliki Ulti ": $namaHeroML. " sudah Memiliki Ulti ";
echo $skill;


// switch ($level) {
//     case 2:
//         echo $namaHeroML. " belum Memiliki Ulti, hanya level 1 ";
//         break;

//     case 3:
//         echo $namaHeroML. " belum Memiliki Ulti ";
//         break;

//     case 4:
//     echo $namaHeroML. " Sudah Memiliki Ulti ";
//     break;
    
//     default:
//     echo $namaHeroML." Tidak ada damam game ";
//     break;
// }



// if($level < 4) {
//     echo $namaHeroML ." belum memiliki ulti ";
// } else if($level >= 4) {
//     echo $namaHeroML. " Sudah Memiliki Ulti ";
// } else {
//     echo $namaHeroML." Tidak ada damam game ";
// }