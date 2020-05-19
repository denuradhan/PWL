<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
    <style type="txt/css">
        #outtable{
            padding: 20px;
            border: 1px solid black;
            width: 600px;
            border-radius: 5px;
        }
        .short{
            width: 50px;
        }
        .normal{
            width: 75px;
        }
        table{
            border-collapse: collapse;
            font-family: Arial;
            color: black;
        }
        thead th{
            text-align: left;
            padding: 10px;
        }
        tbody td{
            border-top: 1px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div id="outtable">
        <table border="1px">
            <thead>
                <tr>
                    <th class="short">No</th>
                    <th class="normal">Nama</th>
                    <th class="normal">Gender</th>
                    <th class="normal">Alamat</th>
                    <th class="normal">Nomor HP</th>
                    <th class="normal">Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php $loop = 1;
                foreach ($data as $agt) : ?>
                    <tr>
                        <th><?= $loop++ ?></th>
                        <td><?= $agt['nama'] ?></td>
                        <td><?= $agt['gender'] ?></td>
                        <td><?= $agt['alamat'] ?></td>
                        <td><?= $agt['nohp'] ?></td>
                        <td>Rp. <?= number_format($agt['saldo']) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

</body>

</html>