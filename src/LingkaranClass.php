<?php
namespace src;
require_once "../src/helper/helper.php";
include 'BangunDatarInterface.php';

class LingkaranClass implements BangunDatarInterface 
{
    private $phi = 3.14;
    private $jariJari = input("masukan jari-jari");

  

    public function luas()
    {
        return $this->phi * $this->jariJari * $this->jariJari;
    }

    public function keliling()
    {
        return 2 * $this->phi * $this->jariJari;
    }
}