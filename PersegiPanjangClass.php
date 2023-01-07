<?php
require_once 'BangunDatarInterface';

class PersegiPanjangClass implements BangunDatarInterface 
{
    private $panjang = 7;
    private $lebar = 3;

    public function luas()
    {
        return $this->panjang * $this->lebar;
    }

    public function keliling()
    {
        return 2 * ($this->panjang + $this->lebar);
    }
}