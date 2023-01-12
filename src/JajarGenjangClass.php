<?php
namespace src;

include 'BangunDatarInterface.php';

class JajarGenjangClass implements BangunDatarInterface 
{
    public function luas($alas, $tinggi)
    {
        return $alas * $tinggi;
    }

    public function keliling($a, $b)
    {
        return 2 * ($a + $b);
    }
}