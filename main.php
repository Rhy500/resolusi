<?php 

class materi {
    public $materi = "materi"

}


$produk1 = new produk()
$produk1->materi = propertyphp
var_dump($produk1):


class php{
    public $judul,
           $penulis,
           $penerbit,

    public function __ construct($judul = "judul", $penulis = "penulis", $penerbit= "penerbit"){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
    }

    public function getlabel() {
        return "$this->penulis, $this->penerbit";
    }

}

class cetakinfoproduk {
    public function cetak( produk $produk ) {
        $str ="{$produk->judul}| {$produk->getLebel()}(RP. {$produk->harga})";
        return $str
    }
}



$produk1 = new Produk("naruto", "Masashi Kisimoto", "Shonen Jump", 25000);


echo "Komik : " . $produk->getLabel();
echo "<br>";

$infoproduk1 = new Cetakinfoproduk();
$infoproduk1->cetak($produk1);