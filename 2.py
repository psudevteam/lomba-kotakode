def cariPasangan(numbers, target, partial=[]):
    s = sum(partial)

    #Mengecek apakah Sum sudah Sesuai dengan Partial
    if s == target:
        print((partial))
    if s >= target:
        pass

    #Mengecek dan Menghitung angka yang sama dengan Sum
    for i in range(len(numbers)):
        n = numbers[i]
        remaining = numbers[i + 1:]
        cariPasangan(remaining, target, partial + [n])

cariPasangan([1,2,4,6,9], 15)

