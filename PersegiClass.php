<?php
require_once 'BangunDatarInterface';

class PersegiClass implements BangunDatarInterface 
{
    private $sisi = 10;

    public function luas()
    {
        return $this->sisi * $this->sisi;
    }

    public function keliling()
    {
        return $this->sisi * 4;
    }
}