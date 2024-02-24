<?php
    $bot = rand(1, 10);
    if ($bot < 3) {
        $bot = "gunting✂";
    } else if ($bot < 6) {
        $bot = "batu🥌";
    } else {
        $bot = "kertas📄";
    }

    $pilih = readline("Masukan pilihan gunting/kertas/batu\n");
    if($pilih == "gunting" && $bot == "gunting✂"){
        echo "SERI!! Kamu memilih $pilih dan bot memilih $bot";
    }if($pilih == "gunting" && $bot == "kertas📄"){
        echo "Kamu Menang! Kamu memilih $pilih dan bot memilih $bot";
    }if($pilih == "gunting" && $bot == "batu🥌"){
        echo "Kamu Kalah! Kamu memilih $pilih dan bot memilih $bot";
    }else if($pilih == "batu" && $bot == "gunting✂"){
        echo "Kamu Menang! Kamu memilih $pilih dan bot memilih $bot";
    }if($pilih == "batu" && $bot == "kertas📄"){
        echo "Kamu Kalah! Kamu memilih $pilih dan bot memilih $bot";
    }if($pilih == "batu" && $bot == "batu🥌"){
        echo "SERI!! Kamu memilih $pilih dan bot memilih $bot";
    }else if($pilih == "kertas" && $bot == "gunting✂"){
        echo "Kamu Kalah! Kamu memilih $pilih dan bot memilih $bot";
    }if($pilih == "kertas" && $bot == "kertas📄"){
        echo "SERI!! Kamu memilih $pilih dan bot memilih $bot";
    }if($pilih == "kertas" && $bot == "batu🥌"){
        echo "Kamu Menang! Kamu memilih $pilih dan bot memilih $bot";
    }
?>