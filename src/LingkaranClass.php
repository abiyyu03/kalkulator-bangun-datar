<?php
namespace src;

include 'BangunDatarInterface.php';

class LingkaranClass implements BangunDatarInterface 
{
    private $phi = 3.14;
    private $jariJari;

    public function __construct($jariJari)
    {
        $this->jariJari = $jariJari;
    }

    public function luas()
    {
        return $this->phi * $this->jariJari * $this->jariJari;
    }

    public function keliling()
    {
        return 2 * $this->PHI * $this->jariJari;
    }
}