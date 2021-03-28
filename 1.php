<?php
function apakahPalindrome($input){
  $reverse = 0;
  $cadangan = $input;
  while($input > 0){
    $digit = $input % 10;
    $reverse = $reverse * 10 + $digit;
    $input = ($input - $digit) / 10;
}
  $hasil = $reverse == $cadangan;
  if ($hasil == 1){
    echo "true";
  }
  else{
    echo "false";
}
  return $hasil;
}
echo "Masukan Angka : ";
$input_bilangan = trim(fgets(STDIN));
apakahPalindrome($input_bilangan);
?>
