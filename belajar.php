<?php 

// class mobil{
//     public $warna;
//     public $kendaraan;
//     public $merk;
//     public $harga;
//     public $kecepatan;

//     function __construct($warna,$kendaraan,$merk,$harga,$kecepatan)//yang paling penting adalah __construnct garis bawahnya harus dua karena itu adalah constructor
//     {
//         $this->warna=$warna;
//         $this->kendaraan=$kendaraan;
//         $this->merk=$merk;
//         $this->harga=$harga;
//         $this->kecepatan=$kecepatan;
//     }

//     function info(){
        // return "mobil ini berwarna {$this->warna}, kendaraan: {$this->kendaraan}, merk: {$this->merk}, harga: {$this->harga}, kecepatan: {$this->kecepatan} km/jam";
//     }
    

//     function tambahKecepatan($kecepatan){
//         $this->kecepatan += $kecepatan;
//         return "kecepatan mobil sekarang adalah{$this->kecepatan} km/jam";
//     }
    
// }

class motor{
    public $kendaraan;
    public $warna;
    public $merk;
    public $harga;
    public $kecepatan;

    function __construct($kendaraan,$warna,$merk,$harga,$kecepatan){
        $this->kendaraan=$kendaraan;
        $this->warna=$warna;
        $this->merk=$merk;
        $this->harga=$harga;
        $this->kecepatan=$kecepatan;
    }

    function nama(){
        return "nama kendaraan ini adalah {$this->kendaraan} <br>
        dan warnanya adalah {$this->warna} <br>
        , mereknya merupakan merk terkenal di seluruh indonesia yaitu {$this->merk} <br>
        , harganya adalah  Rp.{$this->harga} <br>
        , dan kecepatannya adalah {$this->kecepatan} km/jam, kecepatan ini sangat cepat dan instan bagi pemula karena mereka memiliki berapa silinder yang sangat bagus. ";
    }
}
$motorpertama= new motor("motor","merah","yamaha",15000,120);
$motorkedua= new motor("motor","biru","honda",20000,150);

echo $motorpertama->nama();

echo"nama";




// $mobil1 = new mobil("merah", "mobil", "honda", 12000, 0);
// $mobil2 = new mobil("biru", "motor", "yamaha", 15000, 0);
//echo $mobil1->info(); // ini yang menampilkan deskripsi mobil
////echo "<br>";
//echo $mobil1->tambahKecepatan(120);
//echo "<br>";
//ini untuk menamilkan motor 2 dan kecepatan motor 2
//echo $mobil2->info();
//echo "<br>";
//echo $mobil2->tambahKecepatan(100);



// untuk menampilkan perubahan baru di git kita bisa menggunakan yang pertama git add . 
// yang kedua git commit -m "pesan apa yang ingin kamu sampaikan"
// yang ketiga pake git push  dah selesai










?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <span>welcome to my website </span> <br> 
        belajar memperkenalkan mobil merek merek mobil di indonesia
    </h1>

    <p>perkenalkan merek mobil yang pertama yaitu: <?php echo $mobil1->info(); ?></p>
    

</body>
</html> -->