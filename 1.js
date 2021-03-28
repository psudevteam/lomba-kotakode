function membuatAnagram(str1, str2) {
  let luar = [], dalam = [], indexDalam = 0, indexLuar = 0;

  if (str1.length > str2.length) {
    luar = str1.split('');
    dalam = str2.split('');
  } else {
    luar = str1.split('');
    dalam = str2.split('');
  }

  // Mengeset index ke bagian akhir pada array
  indexLuar = luar.length - 1;
  while (dalam.length > 0 && luar.length > 0 && indexLuar >= 0) {
    // Selama Masih ada sisa array Di kiri
    indexDalam = dalam.indexOf(luar[indexLuar]);

    if (indexDalam !== -1) {
      // Kesamaan di temukan, jadi Menghapusnya dari Kedua Array
      luar.splice(indexLuar, 1);
      dalam.splice(indexDalam, 1);
    }

    // Pindah ke kiri dan Ke Index Berikutnya
    --indexLuar;
  }

  var output = luar.length + dalam.length;
  console.log(output)
  return output
}
output = membuatAnagram('dce', 'efc')
