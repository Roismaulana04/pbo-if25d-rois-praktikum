<?php

namespace Pbo\Marketplace;

require_once('./PropertyConstant.php')

use Pbo\Marketplace\Produk;

class jasa {

    use produk;

    public function payment($tipe){

        return match($tipe){
            "virtual" => "virtual account",,
            "qris" => "QRIS",
            default => "pembayaran hanya bisa va dan qris"
        }
    }

}