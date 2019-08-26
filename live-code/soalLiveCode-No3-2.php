<?php


// no 3

function changeSpacesWith($teks,$to){
      $teks = trim($teks);
      strpos($teks, " ");
      $hasil= str_replace(" ",$to, $teks);
      
return $hasil;
}

echo changeSpacesWith("Sergei Dragunov" ,"+");



?>