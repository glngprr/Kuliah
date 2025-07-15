# Matriks 5 x 5 (Input user)

matriksA = []
matriksB = []

print("\nMasukkan elemen Matriks A:")
for i in range(5):
    baris = []
    for j in range(5):
        elemen = int(input(f"Matriks 1 [{i+1}][{j+1}] = "))
        baris.append(elemen)
    matriksA.append(baris)

print("\nMasukkan elemen Matriks B:")
for i in range(5):
    baris = []
    for j in range(5):
        elemen = int(input(f"Matriks 2 [{i+1}][{j+1}] = "))
        baris.append(elemen)
    matriksB.append(baris)           

hasil = []
for i in range(5):
    baris_hasil = []
    for j in range(5):
        total = 0
        for k in range(5):
            total += matriksA[i][k] * matriksB[k][j]
        baris_hasil.append(total)
    hasil.append(baris_hasil)

print("\nMatriks A:")
for baris in matriksA:
    print(baris)

print("\nMatriks B:")
for baris in matriksB:
    print(baris)

print("\nHasil Matriks A x B:")
for baris in hasil:
    print(baris)
