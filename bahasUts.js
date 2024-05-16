function simpandaftar()
{
    var nomor = document.getElementById("nopendaf").value;
    var nama = document.getElementById("nama").value;
    var alamat = document.getElementById("alamat").value;
    var tglahir = document.getElementById("tglahir").value;
    var progdi = document.getElementById("ps").value;

    var spp = 30000000;
    var poli = 30000000;
    var uang_gedung = uangGedung(progdi);
    var tagihan = spp + poli + uang_gedung;

    var html = "Nomor Pendaftaran: "+nomor+"<br>"+
    "Nama: "+nama+"<br>"+
    "Alamat: "+alamat+"<br>"+
    "Tanggal Lahir: "+tglahir+"<br>"+
    "Program Studi: "+progdi+"<br>"+
    "Tagihan: "+tagihan;

    document.getElementById("hasilinput").innerHTML=html;

}

function uangGedung(progdi)
{
    var ug =0;
    if(progdi == "A12")
    {
        ug=30000000
    }
    else if(progdi == "A12")
    {
        ug = 30000000;
    }
    else if(progdi == "A14")
    {
        ug = 28000000;
    }
    else if(progdi == "A15")
    {
        ug = 27000000;
    }
    else
    {
        ug = 25000000;
    }

    return ug;
}
