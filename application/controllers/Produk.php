<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function index(){
        $this->load->model("Produk","prdk1");
        $this->prdk1->id=1;
        $this->prdk1->nama="Kemeja Vega";
        $this->prdk1->stok=4;
        $this->prdk1->harga_beli= 165.000;
        $this->prdk1->harga_jual= 330.000;

        $this->load->model("Produk","prdk2");
        $this->prdk2->id=2;
        $this->prdk2->nama="Shirani Dress";
        $this->prdk2->stok=3;
        $this->prdk2->harga_beli= 268.000;
        $this->prdk2->harga_jual= 536.000;

        $this->load->model("Produk","prdk3");
        $this->prdk3->id=3;
        $this->prdk3->nama="Sema Dress";
        $this->prdk3->stok=3;
        $this->prdk3->harga_beli= 250.000;
        $this->prdk3->harga_jual= 500.000;

        $this->load->model("Produk","prdk4");
        $this->prdk4->id=4;
        $this->prdk4->nama="Agnesia Maxy Dress";
        $this->prdk4->stok=5;
        $this->prdk4->harga_beli= 225.000;
        $this->prdk4->harga_jual= 450.000;

        $this->load->model("Produk","prdk5");
        $this->prdk5->id=5;
        $this->prdk5->nama="Arohi Dress";
        $this->prdk5->stok=3;
        $this->prdk5->harga_beli= 215.000;
        $this->prdk5->harga_jual= 430.000;

        $list_prdk = [$this->prdk1,$this->prdk2,$this->prdk3,$this->prdk4,$this->prdk5];

        $data['produk1']=$this->prdk1;
        $data['list_produk']=$list_prdk;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('produk/index',$data);
        $this->load->view('layout/footer');

    }


}

