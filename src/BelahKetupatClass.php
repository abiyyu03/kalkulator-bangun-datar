<?php
namespace src;

require_once "helper/helper.php";
require_once 'BangunDatarInterface.php';

class BelahKetupatClass implements BangunDatarInterface
{
    private int|float $atas;
    private int|float $bawah;
    private int|float $tinggi;
    private int|float $sisiSamping;
    public function __construct()
    {
        $input = input("masukan atas ");
        $atas = str_replace(",", ".", $input);
        $this->atas = $atas;

        $input = input("masukan bawah ");
        $bawah = str_replace(",", ".", $input);
        $this->bawah = $bawah;

        $input = input("masukan tinggi ");
        $tinggi = str_replace(",", ".", $input);
        $this->tinggi = $tinggi;

        $input = input("masukan samping ");
        $sisiSamping = str_replace(",", ".", $input);
        $this->sisiSamping = $sisiSamping;

    }

    public function luas(): string
    {
        $total = 1 / 2 * ((float) $this->atas + (float) $this->bawah) * (float) $this->tinggi;
        return "Luas = $total";
    }

    public function keliling(): string
    {
        $total = (float) $this->atas + ((float) $this->sisiSamping * 2) + (float) $this->bawah;
        return "Keliling = $total";

    }
    /**
     * @return mixed
     */
    public function result(): void
    {
        echo "------------" . PHP_EOL;
        echo $this->luas() . PHP_EOL;
        echo $this->keliling() . PHP_EOL;
        echo "------------" . PHP_EOL;
    }
}