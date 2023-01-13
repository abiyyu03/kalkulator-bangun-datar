<?php
namespace src;
require_once "helper/helper.php";
require_once 'BangunDatarInterface.php';

class PersegiPanjangClass implements BangunDatarInterface 
{
    private $panjang, $lebar;

    public function __construct()
    {
        $this->panjang = input("Masukan Panjang");
        $this->lebar = input("Masukan Lebar"); 
    }

    public function luas():string
    {
        $total = $this->panjang * $this->lebar;
        return "Luas Persegi Panjang = $total";
    }

    public function keliling():string
    {
        $total = 2 * ($this->panjang + $this->lebar);
        return "Keliling Persegi Panjang = $total";
    }

    public function result(): void
    {
        echo "------------" . PHP_EOL;
        echo $this->luas() . PHP_EOL;
        echo $this->keliling() . PHP_EOL;
        echo "------------" . PHP_EOL;
    }
}