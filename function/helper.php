<?php 
    define("BASE_URL", "http://localhost/Development/OnlineShopPJL/");

    function rupiah($nilai = 0){
        $string = "Rp." .number_format($nilai);
        return $string;
    }