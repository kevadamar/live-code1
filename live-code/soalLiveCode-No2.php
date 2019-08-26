// no 2

$name = "rinnina";

 $huruf = substr($name,0,1);

 if($huruf == "a" || $huruf == "b" || $huruf == "c"|| $huruf == "d"){
   echo "masuk group pertama";
 } else if ($huruf == "e" || $huruf == "f" || $huruf == "g"|| $huruf == "h"){
   echo "masuk group kedua";
 }  else {
   echo "masuk group terakhir";
 }