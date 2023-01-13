<?php
namespace src;

require_once "helper/helper.php";
require_once 'BangunDatarInterface.php';

class JajarGenjangClass implements BangunDatarInterface 
{
    private $sisiMiring, $alas, $tinggi;

    public function __construct()
    {
        $this->sisiMiring = input("masukan sisi miring");
        $this->alas = input("masukan alas");
        $this->tinggi = input("masukan tinggi");
    }

    public function luas():string
    {
        $total = $this->alas * $this->tinggi;
        return "Luas jajar genjang = $total";
    }

    public function keliling():string
    {
        $total = 2 * ($this->alas + $this->sisiMiring);
        return "Keliling jajar genjang = $total";
    }

    public function result():void
    {
        echo "------------" . PHP_EOL;
        echo $this->luas() . PHP_EOL;
        echo $this->keliling() . PHP_EOL;
        echo "------------" . PHP_EOL;
    }
}