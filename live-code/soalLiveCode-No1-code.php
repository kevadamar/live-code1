<?php


 $nilai = 65;

 if ($nilai>= 80 && $nilai<=100){

   echo "nilai anda 'A'";
 } else if ($nilai>= 65 && $nilai<80){

   echo "nilai anda 'B'";
 } else if ($nilai>= 50 && $nilai<65){

   echo "nilai anda 'C'";
 } else if ($nilai>= 35 && $nilai< 50){

   echo "nilai anda 'D'";
 } else if ($nilai>= 0 && $nilai<35){

   echo "nilai anda 'E'";
 } else {
   echo "nilai invalid";
 }

?>