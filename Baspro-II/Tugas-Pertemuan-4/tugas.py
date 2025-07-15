print("\n------ Menghitung Gaji ------\n")
    
nama = input("Masukkan Nama: ")
nik = input("Masukkan NIK: ")
status = input("Masukkan Status Pegawai (Tetap/Honor): ")
golongan = input("Masukkan Golongan (A/B/C): ")

gaji = 0
bonus = 0

for s in ["Tetap", "Honor"]:
    if status == s:
        if s == "Tetap":
            gaji = 1000000
            for g in ["A", "B", "C"]:
                if golongan == g:
                    if g == "A":
                        bonus = 200000
                    elif g == "B":
                        bonus = 400000
                    elif g == "C":
                        bonus = 550000
        elif s == "Honor":
            gaji = 750000
            for g in ["A", "B", "C"]:
                if golongan == g:
                    if g == "A":
                        bonus = 150000
                    elif g == "B":
                        bonus = 275000
                    elif g == "C":
                        bonus = 480000

gaji_total = gaji + bonus

print("--------------------------------")
print("Nama       :", nama)
print("NIK        :", nik)
print("Status     : Pegawai", status)
print("Golongan   :", golongan)
print("Gaji       : Rp.", gaji)
print("Bonus      : Rp.", bonus)
print("Gaji Total : Rp.", gaji_total)
print("--------------------------------")
