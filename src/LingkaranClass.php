<?php
namespace src;
require_once "helper/helper.php";
require_once 'BangunDatarInterface.php';

class LingkaranClass implements BangunDatarInterface 
{
    private float $phi = 3.14;
    private int $jariJari = 0;

    public function __construct()
    {
        $this->jariJari = (int)input("masukan jari-jari ");
    }

    public function luas()
    {
        $total=  $this->phi * $this->jariJari * $this->jariJari;
        return "Luas Lingkaran dengan jari-jari $this->jariJari = $total";
    }

    public function keliling()
    {
        $total = 2 * $this->phi * $this->jariJari;
        return "Keliling lingkaran dengan jari-jari $this->jariJari = $total";
    }

    public function result()
    {
        echo "------------" . PHP_EOL;
        echo $this->luas() . PHP_EOL;
        echo $this->keliling() . PHP_EOL;
    }
}