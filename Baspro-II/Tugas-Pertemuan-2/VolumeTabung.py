# Menghitung Volume Tabung
# V = πr²t
# r = Jari-jari
# t = Tinggi tabung

r = float(input("\nMasukkan Jari-jari: "))
t = float(input("Masukkan Tinggi: "))
pi = 3.14

v = pi * r**2 * t

print("Volume Tabung:", v)