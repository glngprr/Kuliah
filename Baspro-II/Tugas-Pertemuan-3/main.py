print("\n------- Menghitung Gaji -------\n")

nama = str(input("Masukkan Nama: "))
nik = str(input("Masukkan NIK: "))
status = str(input("Masukkan Status Pegawai (Tetap/Honor): ")).strip().capitalize()
golongan = str(input("Masukkan Golongan (A/B/C): ")).strip().upper()

if status == "Tetap":
    gaji = 1000000
    if golongan == "A":
        bonus = 200000
    elif golongan == "B":
        bonus = 400000
    elif golongan == "C":
        bonus = 550000
    else:
        print("Golongan tidak valid!")
        exit()
elif status == "Honor":
    gaji = 750000
    if golongan == "A":
        bonus = 150000
    elif golongan == "B":
        bonus = 275000
    elif golongan == "C":
        bonus = 480000
    else:
        print("Golongan tidak valid!")
        exit()
else:
    print("Status tidak valid!")
    exit()

gajiTotal = gaji + bonus

print("-------------------------------")
print("Nama       :", nama)
print("NIK        :", nik)
print("Status     : Pegawai", status)
print("Golongan   :", golongan)
print("Gaji       : Rp.", gaji)
print("Bonus      : Rp.", bonus)
print("Gaji Total : Rp.", gajiTotal)
print("-------------------------------")
