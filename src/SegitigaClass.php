<?php
namespace src;

include 'BangunDatarInterface.php';

class SegitigaClass implements BangunDatarInterface 
{
    private $alas = 3;
    private $tinggi = 4;
    private $sisi = 4;

    public function luas()
    {
        return 1/2 * $this->alas * $this->tinggi;
    }

    public function keliling()
    {
        return $this->alas + ($this->sisi * 2);
    }
}