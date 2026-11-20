<?php

require('./kiki.php');

use Pbo\Marketplace\Produk;

$produk = new Produk();

$produk->setkode('P0001')
       ->setnama('Laptop')
       ->setharga('10000000')
       ->setstok(5);

echo "Produk: " . $produk->getNama()  . "<br>";
echo "Harga: " . $produk->getHarga() . "<br>";
echo "Stok: " . $produk-> getStok(). "<br>";
echo "Pajak: " . $produk->pajak() . "%" ."<br>";
echo "<br>";
echo "Total harga setelah pajak: Rp." . $produk->total();
?>
