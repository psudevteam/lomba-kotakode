```
<?php

function terbesarTerkecil($inputArr){
   //Menggunakan Library MAX untuk Mencari Nilai Terbesar
   //Menggunakan Library MIN untuk Mencari Nilai Terkecil
   $terbesar = max($inputArr);
   $terkecil = min($inputArr);

   //Formating Output Agar Sesuai Dengan Ketentuan 
   $hasil = "[$terkecil, $terbesar]";
   return $hasil;
}

//Membuat Jumlah Array Dinamis
//Sesuai dengan jumlah Inputan User
echo "Masukan Jumlah Array : ";
$q = trim(fgets(STDIN));
for ($i = 0; $i < $q; $i++){
   $k = $i + 1;
   $g = readline("Masukan Angka ke $k : ");
   readline_add_history($g);
}

//Menampung Array
$ar = (readline_list_history());

//Menampilkan Hasil
echo(terbesarTerkecil($ar));
?>
```
