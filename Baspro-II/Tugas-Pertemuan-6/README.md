# Perkalian Matriks 5 x 5

Repositori ini dibuat untuk memenuhi tugas kuliah Bahasa Pemrograman II terkait implementasi sederhana dalam Python untuk melakukan **perkalian dua buah matriks berukuran 5 x 5**.

---

## Deskripsi 

Matriks `A` dan Matriks `B` didefinisikan secara langsung dalam kode, dan bisa juga mengisi elemen matriks satu per satu dengan `input()`. Perkalian dilakukan dengan tiga perulangan yaitu `for-loop`, Perhitungan dilakukan dengan menjumlahkan hasil kali antara elemen baris Matriks A dan kolom Matriks B. Hasil perkalian disimpan dalam matriks baru yaitu matriks `hasil` dan ditampilkan bersama A dan B.

---

## Source Code 
- Elemen matriks A 
```python
matriksA = [
    [1, 2, 3, 4, 5],
    [0, 9, 8, 7, 6],
    [5, 6, 7, 8, 9],
    [6, 7, 8, 9, 0],
    [5, 4, 3, 2, 1]
]
```
- Elemen matriks B 
```python
matriksB = [
    [1, 1, 1, 1, 1],
    [1, 1, 1, 1, 1],
    [1, 1, 1, 1, 1],
    [1, 1, 1, 1, 1],
    [1, 1, 1, 1, 1]
]
```
- Proses perkalian matriks `hasil`
```python
hasil = []
for i in range(5):
    baris_hasil = []
    for j in range(5):
        total = 0
        for k in range(5):
            total += matriksA[i][k] * matriksB[k][j]
        baris_hasil.append(total)
    hasil.append(baris_hasil)
```
- Menampilkan matriks
```python
print("\nMatriks A:")
for baris in matriksA:
    print(baris)

print("\nMatriks B:")
for baris in matriksB:
    print(baris)

print("\nHasil Matriks A x B:")
for baris in hasil:
    print(baris)
```

### Perkalian Matriks Dengan Input User

User juga bisa mengisi Elemen matriks A dan B satu per satu dengan menggunakan `input()`.
```python
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
```
