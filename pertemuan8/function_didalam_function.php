<?php
    //Membuat fungsi hitung umur
    function hitungUmur($tgl_lahir){
        $umur = date('Y') - $tgl_lahir;
        return $umur;
    }

    function perkenalan($channel, $salam="Assalamualaikum"){
        echo $salam." <br>";
        echo "Selamat datang di channel ".$channel."<br>";
        //Memanggil fungsi lain
        echo "sekarang youtuber berusia ".hitungUmur(2001)." tahun<br>";
        echo "Nice to meet you :)";
    }
    //Memanggil fungsi perkenalan
    perkenalan("Dhiyaa Fathiina")
?>