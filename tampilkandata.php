<?php

    $namaSiswa = ['Elia','Obed',"Aldhy",'Delvi'];

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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilkan data dari Array</title>
    <style>
        body{
            background-color: #245953;
            color: yellow;
        }
        table, tr, td, th{
            border : 1px solid black;
            padding: 10px;
            color: white;
        }
        table{
            width : 100%;
        }
        th{
            color: yellow;
        }
    </style>
</head>
<body>
    <h3>Data Siswa</h3>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
        </tr>
        <?php $i=0; foreach($namaSiswa as $siswa) : ?>
        <tr>
            <td><?php echo ++$i ?></td>
            <td><?php echo $siswa?></td>
        </tr>
        <?php endforeach ?>
    </table>
    <br><br><br>





    <table>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>Usia</th>
        </tr>

        <?php $i = 0; foreach($namaSacode as $siswa) : ?>

            <tr>
                <td><?= ++$i; ?></td>
                <td><?= $siswa['namadepan'] ?> <?= $siswa['namabelakang'] ?></td>
                <td><?= $siswa['alamat'] ?></td>
                <td><?= $siswa['usia'] ?></td>
            </tr>

        <?php endforeach; ?>
        
    </table>

</body>
</html>