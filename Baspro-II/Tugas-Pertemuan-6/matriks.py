# Matriks 5 x 5

matriksA = [
    [1, 2, 3, 4, 5],
    [0, 9, 8, 7, 6],
    [5, 6, 7, 8, 9],
    [6, 7, 8, 9, 0],
    [5, 4, 3, 2, 1]
]

matriksB = [
    [1, 1, 1, 1, 1],
    [1, 1, 1, 1, 1],
    [1, 1, 1, 1, 1],
    [1, 1, 1, 1, 1],
    [1, 1, 1, 1, 1]
]
        
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
