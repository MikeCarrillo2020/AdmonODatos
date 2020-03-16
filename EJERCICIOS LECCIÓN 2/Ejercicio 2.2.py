f = open("poem.txt", "r")
print("1:",f.read(4)) # lee los primeros 4 caracteres
print("2:",f.readline()) # leer hasta llegar al final de la línea
print("3:",f.readline()) # lee la segunda línea
print("4:",f.readline()) # lee la tercera línea
print("5:",f.readline()) # lee la cuarta línea
print("6:",f.readline()) # EOF alcanzado
f.close()