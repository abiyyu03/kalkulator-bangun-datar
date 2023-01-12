<?php
namespace src;

require_once "helper/helper.php";
require_once 'BangunDatarInterface.php';

class SegitigaClass implements BangunDatarInterface 
{
    private $alas, $tinggi, $sisi;

    public function __construct()
    {
        $this->alas = input("Masukan alas");
        $this->tinggi = input("Masukan tinggi");
        $this->sisi = input("Masukan sisi");
    }

    public function luas()
    {
        $total = 1/2 * $this->alas * $this->tinggi;
        return "Luas segitiga = $total";
    }

    public function keliling()
    {
        $total = $this->alas + ($this->sisi * 2);
        return "Keliling segitiga = $total";
    }

    public function result()
    {
        echo "------------" . PHP_EOL;
        echo $this->luas() . PHP_EOL;
        echo $this->keliling() . PHP_EOL;
    }
}