<?php
    echo "Program Kalkulator Sederhana By Ferdi\n";
    echo "Masukan pilihan 1) md5 2) base64 3) bcrypt\n";
    
    $pilih = readline();
    switch($pilih){
        case 1:
            $md5 = readline("Masukan kata yang ingin di ecnrypt dengan md5: ");
            echo "md5 dari $md5 adalah " . md5($md5);
        break;
        case 2:
            $base64 = readline("Masukan kata yang ingin di ecnrypt dengan base64: ");
            echo "base64 dari $base64 adalah " . base64_encode($base64);
        break;
        case 3:
            $bcr = readline("Masukan kata yang ingin di ecnrypt dengan bcrypt: ");
            echo "bcrypt dari $bcr adalah " . password_hash($bcr,PASSWORD_BCRYPT);
        break;
    }
?>