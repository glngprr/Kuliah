# 🔢 Program Perkalian Matriks 5 x 5

Program ini adalah implementasi sederhana dalam Python untuk melakukan **perkalian dua buah matriks berukuran 5 x 5**. Cocok digunakan sebagai latihan dasar dalam memahami operasi matriks pada pemrograman serta konsep komunikasi data.

---

## 📌 Deskripsi Program

- Matriks A dan Matriks B didefinisikan secara langsung (hardcoded) dalam kode.
- Matriks A berisi angka acak buatan.
- Matriks B seluruh elemennya bernilai 1.
- Program menghitung hasil perkalian Matriks A × Matriks B dan menampilkannya dalam bentuk array 2 dimensi.

---

## 🧾 Source Code Singkat

```python
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

# Proses perkalian matriks
hasil = []
for i in range(5):
    baris_hasil = []
    for j in range(5):
        total = 0
        for k in range(5):
            total += matriksA[i][k] * matriksB[k][j]
        baris_hasil.append(total)
    hasil.append(baris_hasil)
