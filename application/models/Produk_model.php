<?php
class Produk_model extends CI_Model{
    public $id;
    public $nama;
    public $stok;
    public $harga_beli;
    public $harga_jual;  

    public function nama($id,$nama,$stok,$harga_beli,$harga_jual){
    
        $this->nama= $nama;
        $this->stok = $stok;
        $this->harga_Beli = $harga_beli;
        $this->harga_Jual = $harga_jual;
   }

}