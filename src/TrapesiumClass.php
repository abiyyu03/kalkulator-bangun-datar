<?php
namespace src;

require_once "helper/helper.php";
require_once 'BangunDatarInterface.php';

class TrapesiumClass implements BangunDatarInterface 
{
    private $atas, $bawah , $tinggi, $sisiMiringPertama, $sisiMiringKedua;

    public function __construct()
    {
        $this->atas = input("Masukan sisi Atas");
        $this->bawah = input("Masukan sisi Bawah");
        $this->tinggi = input("Masukan Tinggi");
        $this->sisiMiringPertama = input("Masukan Sisi Miring Pertama");
        $this->sisiMiringKedua = input("Masukan Sisi Miring Kedua");
    }

    public function luas()
    {
        $total = 1/2 * ($this->atas + $this->bawah) * $this->tinggi;
        return "Luas Trapesium = $total";
    }

    public function keliling()
    {
        $total = $this->atas + $this->sisiMiringPertama + $this->sisiMiringKedua + $this->bawah;
        return "Keliling Trapesium = $total";
    }

    public function result()
    {
        echo "------------" . PHP_EOL;
        echo $this->luas() . PHP_EOL;
        echo $this->keliling() . PHP_EOL;
        echo "------------" . PHP_EOL;
    }
}