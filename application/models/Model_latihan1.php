<?php
class Model_latihan1 extends CI_Model
{
    //membuat ariable untuk menampung nilai
    public $nila1, $nilai2, $hasil;

    //method penjumlahan
    public function jumlah($n1 = null, $n2 = null)
    {
        $this->nilai1 = $n1;
        $this->nilai2 = $n2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }

}
?>