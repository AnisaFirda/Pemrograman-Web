function fungsi1()
{
    var a = 5
    return a
}

function tukar(x,y)
{
    var z
    z = x
    x = y
    y = z
    document.write("<br>Nilai variabel a: "+x)
    document.write("Nilai variabel a: "+y+"<br>")
}

function nilai(nilai)
{
    var hasil

    if(nilai >= 60)
    {
        hasil = "Lulus"
    }
    else
    {
        hasil = "Tidak Lulus"
    }

    return hasil
}

function konversiNilai(nilai)
{
    var huruf
    if(nilai >= 85)
    {
        huruf = "A"
    }
    else if(nilai >= 80)
    {
        huruf = "AB"
    }
    else if(nilai >= 75)
    {
        huruf = "B"
    }
    else if(nilai >= 70)
    {
        huruf = "BC"
    }
    else if(nilai >= 60)
    {
        huruf = "C"
    }
    else if(nilai >= 50)
    {
        huruf = "D"
    }
    else 
    {
        huruf = "E"
    }

    return huruf
}

function progdi(progdi)
{
    var namaProgdi
    switch (progdi) {
        case "A12":
                document.write("Program Studi Sistem Informasi - S1")
                break
        case "A11":
                document.write("Program Studi Teknik Informatika - S1")
            break
        default:
                document.write("Belum Memilih Program Studi")
            break
    }
}