<?php 

class mobil{
    public $warna;
    public $kendaraan;
    public $merk;
    public $harga;
    public $kecepatan;

    function __construct($warna,$kendaraan,$merk,$harga,$kecepatan)//yang paling penting adalah __construnct garis bawahnya harus dua karena itu adalah constructor
    {
        $this->warna=$warna;
        $this->kendaraan=$kendaraan;
        $this->merk=$merk;
        $this->harga=$harga;
        $this->kecepatan=$kecepatan;
    }

    function info(){
        return "mobil ini berwarna {$this->warna}, kendaraan: {$this->kendaraan}, merk: {$this->merk}, harga: {$this->harga}, kecepatan: {$this->kecepatan} km/jam";
    }
    

    function tambahKecepatan($kecepatan){
        $this->kecepatan += $kecepatan;
        return "kecepatan mobil sekarang adalah{$this->kecepatan} km/jam";
    }
    
}

$mobil1 = new mobil("merah", "mobil", "honda", 12000, 0);
$mobil2 = new mobil("biru", "motor", "yamaha", 15000, 0);
echo $mobil1->info(); // ini yang menampilkan deskripsi mobil
echo "<br>";
echo $mobil1->tambahKecepatan(120);
echo "<br>";
//ini untuk menamilkan motor 2 dan kecepatan motor 2
echo $mobil2->info();
echo "<br>";
echo $mobil2->tambahKecepatan(100);

echo "ravi pejuang";















?>