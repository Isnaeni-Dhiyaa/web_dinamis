<?php
    //Membuat fungsi/function dengan parameter
    function perkenalan($salam, $nama){
        echo $salam." <br>";
        echo "Selamat datang di channel ".$nama."<br>";
        echo "Jangan lupa like, komen, dan subscribe ya<br>";
        echo "<hr>";
    }

    //Memanggil fungsi
    perkenalan("Assalamualaikum", "Dhiyaa Fathiina");

    $salam = "Selamat Pagi";
    $nama = "Polines Official";
    perkenalan($salam, $nama);
?>