inputString = str(input("Masukan Huruf : "))
def hurufBergantian(inputString):
    output = 0
    for i in range(len(inputString) - 1):
        if (inputString[i] == inputString[i + 1]):
            output += 1
    return output

if __name__ == "__main__":
    print(hurufBergantian(inputString))
