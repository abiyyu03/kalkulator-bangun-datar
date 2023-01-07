<?php
namespace src;

include 'BangunDatarInterface.php';

class BelahKetupatClass implements BangunDatarInterface 
{
    private $atas = 3;
    private $bawah = 4;
    private $tinggi = 4;
    private $sisiSamping = 4;

    public function luas()
    {
        return 1/2 * ($this->atas + $this->bawah) * $this->tinggi;
    }

    public function keliling()
    {
        return $this->atas + ($this->sisiSamping * 2) + $this->bawah;
    }
}