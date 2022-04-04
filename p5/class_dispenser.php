<?php
class Dispenser{
    protected static $penghasilan = 0;
    protected static $galon1 = 2000;
    protected static $galon2 = 2000;
    protected static $galon3 = 2000;
    protected static $hargaSegelas = 2000;
    private static $volumeGelas = 250;
    public $noMinuman;
    public $nama;
    public $jumlahBeli;

    public function __construct($nama,$noMinuman,$jumlahBeli){
        $this->nama = $nama;
        $this->noMinuman = $noMinuman;
        $this->jumlahBeli = $jumlahBeli;
    }

    public function nama_Minuman(){
        if($this->noMinuman == 1){
            return 'Air Putih';
        }
        else if($this->noMinuman == 2){
            return 'Teh';
        }
        else if($this->noMinuman == 3){
            return 'Sirup';
        }
    }

    public function isi_awal(){
        return self :: $galon1;
    }

    public function volume_gelas(){
        return self :: $volumeGelas;
    }

    public function harga_gelas(){
        return self :: $hargaSegelas;
    }

    public function berkurang(){
        if($this->noMinuman == 1){
            if($this->$galon1 != 0){
                $total = $this->jumlahBeli * self :: $volumeGelas;
                $galon1 = self :: $galon1 -= $total;
                return $galon1;
            }else if($this->$galon1 == 0){
                self :: $galon1 = 2000;
                $total = $this->jumlahBeli * self :: $volumeGelas;
                $galon1 = self :: $galon1 -= $total;
                return $galon1;
            }
        }
        else if($this->noMinuman == 2){
            if($this->$galon2 != 0){
                $total = $this->jumlahBeli * self :: $volumeGelas;
                $galon2 = self :: $galon2 -= $total;
                return $galon2;
            }else if($this->$galon2 == 0){
                self :: $galon2 = 2000;
                $total = $this->jumlahBeli * self :: $volumeGelas;
                $galon2 = self :: $galon2 -= $total;
                return $galon2;
            }
        }
        else if($this->noMinuman == 3){
            if($this->$galon3 != 0){
                $total = $this->jumlahBeli * self :: $volumeGelas;
                $galon3 = self :: $galon3 -= $total;
                return $galon3;
            }else if($this->$galon3 == 0){
                self :: $galon3 = 2000;
                $total = $this->jumlahBeli * self :: $volumeGelas;
                $galon3 = self :: $galon3 -= $total;
                return $galon3;
            }
        }
    }

    public function Bayar(){
        return $this->jumlahBeli * self :: $hargaSegelas;
    }
    
    public function penghasilan(){
        $total = $this->jumlahBeli * self :: $hargaSegelas;
        $simpanan = self :: $penghasilan += $total;
        return $simpanan;
    }

    public function format_uang($uang){
        $hasil = 'Rp. '.number_format($uang,0,',','.');
        return $hasil;
    }

}


?>