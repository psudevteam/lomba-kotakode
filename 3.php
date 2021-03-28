<?php
function jumlahMaksimum($arr1,$arr2){
	$array = $array1 = $array2 = 0;
	$bilangan1 = count($arr1);
	$bilangan2 = count($arr2);

	//Variable I dan J untuk Menunjukan Index dari Arr1 dan Arr2
	$i = $j = 0;
	
  //Looping Array1 dan Array2 sampai Habis
  while ($i < $bilangan1 and $j < $bilangan2){
 
    //Menghandle Duplicate di Array1
	  while ($i < $bilangan1-1 and $arr1[$i] == $arr1[$i+1]){
		    $array1 += $arr1[$i++];
    }

    //Menghandle Duplicate di Array2
    while ($j < $bilangan2-1 and $arr2[$j] == $arr2[$j+1]){
        $array2 += $arr2[$j++];
    }

    //Jika Array1 kurang dari Array2
    if ($arr2[$j] < $arr1[$i]){
        $array2 += $arr2[$j];
        $j++;
    }

    //Jika Array2 kurang dari Array1
    else if ($arr1[$i] < $arr2[$j]){
        $array1 += $arr1[$i];
        $i++;
    }

    else{
        $array += max($array1, $array2) + $arr1[$i];
        
        //Pindah 1 Sisi
        $i = $j + 1;
        $j = $j + 1;

        //Reset kedua Array
        $array1 = 0;
        $array2 = 0;
    }
  }
  //Memproses Sisa dari Array1 jika masih ada
  while ($i < $bilangan1){
    $array1 += $arr1[$i];
    $i = $i + 1;
  }

  //Memproses Sisa dari Array2 jika masih ada
  while ($j < $bilangan2){
    $array2 += $arr2[$j];
    $j = $j + 1;
  }
    $array += max($array1, $array2);
    return $array;
}
$ar1 = [2, 3, 7, 10, 12, 15, 30, 34];
$ar2 = [1, 5, 7, 8, 10, 15, 16, 19];

echo(jumlahMaksimum($ar2,$ar1));

?>
