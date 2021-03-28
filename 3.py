def subsetTerbesar(arr):
    termasuk = 0
    tidak_termasuk = 0
    #Mengecek Kondisi Array
    for i in arr:
        baru_termasuk = tidak_termasuk if tidak_termasuk>termasuk else termasuk
        termasuk = tidak_termasuk + i
        tidak_termasuk = baru_termasuk
    output = (tidak_termasuk if tidak_termasuk>termasuk else termasuk)
    return output

# Mengeksekusi Function
arr = [2, 1, 5, 8, 4]
hasil =  subsetTerbesar(arr)
print (hasil)
