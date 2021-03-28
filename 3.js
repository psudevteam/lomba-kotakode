function hitungPerangko(arr1) {
    let hitung = 0, langkah = 0, bawa = 0
    for (let i = 0; i < arr1.length; i++)
        hitung += arr1[i]
    let rerata = hitung / arr1.length
    for (let i = 0; i < arr1.length - 1; i++) {
        bawa = arr1[i] + bawa - rerata
        langkah += bawa > 0 ? bawa : -bawa
    }
    return langkah
}
a = [2, 4, 2, 6, 1, 7, 8, 9, 2, 1]
h = hitungPerangko(a)
console.log(h)
