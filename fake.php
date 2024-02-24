<?php
    echo "TOOLS HACKING DDOS & TROJAN REAL NO FAKE\n";
    echo "TOOLS BY FERDIGAYMINK\n\n";
    echo "1. TOOLS DDOS (AUTO MOKAD)\n";
    echo "2. TOOLS SEND TROJAN VIA NO WA (AUTO KEJANG KEJANG NJIR)\n\n";
    $pilih = readline("Masukan Pilhan: "); 

    if($pilih == 1){
        $pilih1 = readline("Masukan web target (www.example.com): ");
        $pilih2 = readline("Target anda $pilih1 lanjutkan serangan? y/n: ");
        if($pilih2 == "y"){
            for($i = 0; $i < 1;){
                echo "Sedang mengirim ribuan traffic ke $pilih1
                ...";
            }
        }else{
            echo "error";
        }
    }if($pilih == 2){
        $pilih1 = readline("Masukan nomor target (6281234567): ");
        $pilih2 = readline("Target anda $pilih1 lanjutkan serangan? y/n: ");
        if($pilih2 == "y"){
            for($i = 0; $i < 1;){
                echo "Sedang mengirim trojan ke nomor $pilih1
                ...";
            }
        }else{
            echo "error";
        }
    }else{
        echo "Masukan Pilihan Yang Benar!";
    }
?>