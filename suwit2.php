<?php
    $bot = rand(1,3);
    switch($bot){
        case 1:
            $bot = "gunting";
        break;
        case 2:
            $bot = "batu";
        break;
        case 3:
            $bot = "kertas";
        break;
    }

    $pilih = readline("masukan pilihan gunting/batu/kertas\n");
    if($pilih == $bot){
        echo "SERI!! kamu memilih $pilih dan bot memilih $bot";
    }elseif(
        ($pilih == "gunting" && $bot == "batu") ||
        ($pilih == "batu" && $bot == "kertas") ||
        ($pilih == "kertas" && $bot == "gunting")
    ){
        echo "KALAH!! kamu memilih $pilih dan bot memilih $bot";
    }else{
        echo "MENANG!! Kamu memilih $pilih dan bot memilih $bot";
    }
?>