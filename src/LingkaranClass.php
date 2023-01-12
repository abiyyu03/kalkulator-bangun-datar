<?php
namespace src;

require_once "helper/helper.php";
require_once 'BangunDatarInterface.php';

class LingkaranClass implements BangunDatarInterface
{
    private float $phi = 3.14;
    private float $jariJari;

    public function __construct()
    {
        $input = input("masukan jari-jari ");
        $replace = str_replace(",", ".", $input);
        $this->jariJari = $replace;
    }

    public function luas()
    {
        $total = $this->phi * (float) $this->jariJari * (float) $this->jariJari;
        return "Luas Lingkaran dengan jari-jari $this->jariJari cm = $total cm";
    }

    public function keliling()
    {
        $total = 2 * (float) $this->phi * (float) $this->jariJari;
        return "Keliling lingkaran dengan jari-jari $this->jariJari cm = $total cm";
    }

    public function result()
    {
        echo "------------" . PHP_EOL;
        echo $this->luas() . PHP_EOL;
        echo $this->keliling() . PHP_EOL;
        echo "------------" . PHP_EOL;
    }
}