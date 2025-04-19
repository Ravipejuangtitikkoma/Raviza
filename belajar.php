<?php 
class mobil{
    public $warna;
    public $kendaraan;
    public $merk;
    public $harga;
    public $kecepatan;

    function _construct($warna,$kendaraan,$merk,$harga,$kecepatan)
    {
        $this->warna=$warna;
        $this->kendaraan=$kendaraan;
        $this->merk=$merk;
        $this->harga=$harga;
        $this->kecepatan=$kecepatan;
    }

    function info(){
        return "mobil ini berwarna {$this->warna}<br>,kendaraan{$this->kendaraan}<br>,merk{$this->merk}<br>,harga{$this->harga}<br>,kecepetan{$this->kecepatan}<br>";
    }

    function tambahKecepatan($kecepatan){
        $this->kecepatan += $kecepatan;
        return "kecepatan mobil sekarang adalah{$this->kecepatan} km/jam";
    }
}

$mobil1=new mobil("merah","toyota","honda",12000,0);
echo $mobil1->info();
echo $mobil1->tambahKecepatan(120);













?>