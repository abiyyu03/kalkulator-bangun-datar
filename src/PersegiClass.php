<?php
namespace src;

require_once "helper/helper.php";
require_once 'BangunDatarInterface.php';

class PersegiClass implements BangunDatarInterface 
{
    private $sisi;

    public function __construct()
    {
        $this->sisi = input("Masukan sisi");
    }

    public function luas()
    {
        $total = $this->sisi * $this->sisi;
        return "Luas Persegi = $total";
    }

    public function keliling()
    {
        $total = $this->sisi * 4;
        return "Keliling Persegi = $total";
    }
    
    public function result() 
    {
        echo "------------" . PHP_EOL;
        echo $this->luas() . PHP_EOL;
        echo $this->keliling() . PHP_EOL;
    }
}