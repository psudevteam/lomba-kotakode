function hilangkanDuplikat(a) {
    //Menampung Array
    var out = [];

    //Menggunakan Metoda MAP untuk Kalkulasi
    a.map((list) => {
        //Menimpah Nilai Duplikat Menjadi 0
        out.includes(list) ? out.push(0) : out.push(list)
    })
    return out;
}

var a = [1,2,3,4,5,5,5,6,7,8];
var b = hilangkanDuplikat(a);
console.log(b);
