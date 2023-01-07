<?php
require_once 'BangunDatarInterface';

class LingkaranClass implements BangunDatarInterface 
{
    private const PHI = 3.14;
    private $jariJari = 7;

    public function luas()
    {
        return $this->PHI * $this->jariJari * $this->jariJari;
    }

    public function keliling()
    {
        return 2 * $this->PHI * $this->jariJari;
    }
}