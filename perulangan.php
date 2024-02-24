<?php
    //PROGRAM KALKULATOR SEDERHANA BY FERDI
    echo "Program Kalkulator Sederhana By Ferdi \n";
    $pilih = readline("Masukan PIlihan 1, pertambahan 2, perngurangan 3, perkalian 4, pembagian \n");

    echo $pilih;

    if($pilih == 1){
        $angkapertama = readline("Masukan angka pertama: ");
        $angkakedua = readline("Masukan angka kedua ");
        $total = $angkapertama + $angkakedua;
        echo $angkapertama . " + " . $angkakedua . " = " . $total; 
    }if($pilih == 2){
        $angkapertama = readline("Masukan angka pertama: ");
        $angkakedua = readline("Masukan angka kedua: ");
        $total = $angkapertama - $angkakedua;
        echo "$angkapertama - $angkakedua $total";
    }if($pilih == 3){
        $angkapertama = readline("Masukan angka pertama: ");
        $angkakedua = readline("Masukan angka kedua: ");
        $total = $angkapertama * $angkakedua;
        echo "$angkapertama X $angkakedua $total";
    }if($pilih == 4){
        $angkapertama = readline("Masukan angka pertama: ");
        $angkakedua = readline("Masukan angka kedua: ");
        $total = $angkapertama / $angkakedua;
        echo "$angkapertama / $angkakedua $total";
    }else{
        echo "Masukan angka yang benar!";
    }

?>
