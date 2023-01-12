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

    public function luas()
    {
        $total = $alas * $tinggi;
        return "Luas jajar genjang = $total";
    }

    public function keliling()
    {
        $total = 2 * ($alas + $sisiMiring);
        return "Keliling jajar genjang = $total";
    }

    public function result() 
    {
        echo "------------" . PHP_EOL;
        echo $this->luas() . PHP_EOL;
        echo $this->keliling() . PHP_EOL;
    }
}