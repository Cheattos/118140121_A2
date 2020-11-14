<?php
//Latihan Modul 2

//Soal Pertama
$bil1 = 20;
 $bil2 = 5;

 echo "Berikut merupakan hasil dari setiap operasi";
 echo "<br><br>";
 echo "PERJUMLAHAN";
 echo "<br>";
 echo "Operator : +";
 echo "<br>";
 $sum = $bil1 + $bil2 ;
 echo "Hasil : $sum ";
 echo "<br>";

 echo "<br>";
 echo "PENGURANGAN";
 echo "<br>";
 echo "Operator : -";
 echo "<br>";
 $sum = $bil1 - $bil2 ;
 echo "Hasil : $sum ";
 echo "<br>";

 echo "<br>";
 echo "PERKALIAN";
 echo "<br>";
 echo "Operator : *";
 echo "<br>";
 $sum = $bil1 * $bil2 ;
 echo "Hasil : $sum ";
 echo "<br>";

 echo "<br>";
 echo "PEMBAGIAN";
 echo "<br>";
 echo "Operator : /";
 echo "<br>";
 $sum = $bil1 / $bil2 ;
 echo "Hasil : $sum ";
 echo "<br>";

 echo "<br>";
 echo "MODULUS";
 echo "<br>";
 echo "Operator : %";
 echo "<br>";
 $sum = $bil1 % $bil2 ;
 echo "Hasil : $sum ";
 echo "<br><br>";

 //Soal Kedua

 $arr = array("lanirne", "aduh","qifuut", "toda","anevi","samid","kifuat");

 sort($arr);

 for ($i=0; $i < 6 ; $i++) { 
     echo "$arr[$i]"; 
     echo "<br><br>";
 }

 //Soal Ketiga

 for ($i=2; $i <=50 ; $i++) {
     if($i % 2 == 0 || $i % 3 ==0 || $i % 5 == 0 || $i % 7 == 0 ){
         echo"";
         if($i == 2 || $i == 3 || $i == 5 || $i == 7 ){
             echo "$i ";
         }
     } 
     else{
         echo "$i ";
     }
     # code...
 }
?>