<?php
class Kendaraan {
    public $warna;
    public $tahunProduksi;
    
    // Construct
    public function __construct($warna, $tahunProduksi) {
        $this -> warna = $warna;
        $this -> tahunProduksi = $tahunProduksi;
    }
    
    // Method
    public function deskripsi() {
        return "Kendaraan ini berwarna {$this -> warna} dan diproduksi pada tahun {$this -> tahunProduksi}.";
    }
}

class Mobil extends Kendaraan {
    public $tipeMesin;
    
    // Construct
    public function __construct($warna, $tahunProduksi, $tipeMesin) {
        parent::__construct($warna, $tahunProduksi);
        $this -> tipeMesin = $tipeMesin;
    }
    
    // Method
    public function deskripsiLengkap() {
        return "Mobil ini berwarna {$this -> warna}, diproduksi pada tahun {$this -> tahunProduksi}, dan memiliki tipe mesin {$this->tipeMesin}.";
    }
}

// Membuat object berdasarkan class Mobil
$mobilBaru = new Mobil("Merah", 2020, "V8");

// Menampilkan informasi
echo $mobilBaru->deskripsiLengkap();
?>
