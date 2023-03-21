<?php 

    // penulisan array yang lama
    $namaSiswa = array("Elia", "Grace", "Melpen");

    // Penulisan array yang baru
    $nama = ["Elia", "Grace", "Melpen", "Jackson", "Delvi", "Oby"];

    // var_dump($namaSiswa[0]);

    echo "<br>". $nama[0];
    echo "<br>". $nama[1];
    echo "<br>". $nama[2];

    // membuat garis horizontal menggunakan tag HTML
    echo "<hr>";

    foreach($nama as $siswa)
    {
        echo "<br>" .$siswa;
    }

    // membuat garis horisontal menggunakan tag HTML
    echo "<hr>";


    $namaSacode =[
        [
            "namadepan" => "Jackson",
            "namabelakang" => "Tabuni",
            "usia" => "30",
            "alamat" => "Doyo, Kab. Sentani"
        ],
        [
            "namadepan" => "Sam",
            "namabelakang" => "Tabuni",
            "usia" => "30",
            "alamat" => "Doyo, Kab. Sentani"
        ],
        [
            "namadepan" => "Acho",
            "namabelakang" => "Tabuni",
            "usia" => "30",
            "alamat" => "Doyo, Kab. Sentani"
        ]
        
    ];

    // tampilkan data
    $i = 0;
    foreach($namaSacode as $nama)
    {
        echo "<br> <br> <br>Siswa No ". ++$i ." <br>";

        echo "<br> Nama : ". $nama["namadepan"]." ".$nama["namabelakang"];
        echo "<br> Alamat : ". $nama["alamat"];
        echo "<br> Usia : ". $nama["usia"];
    }

















?>