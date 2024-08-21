<?php

$siswa = array(
    "Cintya" => 80,
    "Alya" => 65,
    "Nadia" => 85,
    "Angel" => 60,
    "Dea" => 75
);

foreach ($siswa as $nama => $nilai) {

    if ($nilai > 75) {
        $keterangan = "Lulus";
    } else {
        $keterangan = "Tidak Lulus";
    }


    echo "Nama: $nama, Nilai: $nilai, Keterangan: $keterangan" . "<br>";
}
