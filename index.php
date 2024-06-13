<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel UTS</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f7f6;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background: white;
            border: 1px solid #dddddd;
        }
        th, td {
            padding: 10px 15px;
            text-align: left;
            border: 1px solid #dddddd;
        }
        th {
            background-color: #009879;
            color: #ffffff;
            text-transform: uppercase;
            font-weight: bold;
        }   
    </style>

</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID Apoteker</th>
                <th>Nama Apoteker</th>
                <th>Spesialisasi</th>
                <th>Nomor Telepon</th>
            </tr>
</thead>
<?php
    include 'koneksi.php' ;
    $sql = 'SELECT * FROM apoteker';
    $query = mysqli_query($koneksi, $sql);
    while ($row = mysqli_fetch_array($query))
    {
        ?>
        <tbody>
            <tr>
                <td><?php echo $row['ID_Apoteker'] ?></td>
                <td><?php echo $row['Nama'] ?></td>
                <td><?php echo $row['Spesialisasi'] ?></td>
                <td><?php echo $row['Nomor_Telepon'] ?></td>
            </tr>
    </tbody>
<?php
    }
    ?>
    </table>
    
    <table>
        <thead>
            <tr>
                <th>ID Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>Alamat Pelanggan</th>
                <th>Tanggal Lahir</th>
                <th>Nomor Telepon</th>
                <th>Nama Asuransi</th>
                <th>Nomor Polis</th>
            </tr>
</thead>
<?php
    include 'koneksi.php' ;
    $sql = 'SELECT * FROM pelanggan';
    $query = mysqli_query($koneksi, $sql);
    while ($row = mysqli_fetch_array($query))
    {
        ?>
        <tbody>
            <tr>
                <td><?php echo $row['ID_Pelanggan'] ?></td>
                <td><?php echo $row['Nama'] ?></td>
                <td><?php echo $row['Alamat'] ?></td>
                <td><?php echo $row['Tanggal_Lahir'] ?></td>
                <td><?php echo $row['Nomor_Telepon'] ?></td>
                <td><?php echo $row['Nama_Asuransi'] ?></td>
                <td><?php echo $row['Nomor_Polis'] ?></td>
    </tr>
    </tbody>
    <?php
    }
    ?>
    </table>

    <table>
        <thead>
            <tr>
                <th>ID Obat</th>
                <th>Nama Obat</th>
                <th>Harga Obat</th>
</tr>
</thead>
<?php
        include 'koneksi.php' ;
        $sql = 'SELECT * FROM obat';
        $query = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
            <tbody>
                <tr>
                    <td><?php echo $row['ID_Obat'] ?></td>
                    <td><?php echo $row['Nama_Obat'] ?></td>
                    <td><?php echo $row['Harga'] ?></td>
        </tr>
        </tbody>
        <?php
        }
        ?>

</table>

<table>
    <thead>
        <tr>
            <th>ID Transaksi</th>
            <th>ID Obat</th>
            <th>Jumlah</th>
</tr>
</thead>
<?php
    include 'koneksi.php' ;
    $sql = 'SELECT * FROM detail_transaksi';
    $query = mysqli_query($koneksi, $sql);
    while ($row = mysqli_fetch_array($query))
    {
        ?>
        <tbody>
            <tr>
                <td><?php echo $row['ID_Transaksi'] ?></td>
                <td><?php echo $row['ID_Obat'] ?></td>
                <td><?php echo $row['Jumlah'] ?></td>
    </tr>
    </tbody>
    <?php
    }
    ?>

<table>
    <thead>
        <tr>
            <th>ID Transaksi</th>
            <th>ID Pelanggan</th>
            <th>ID Apoteker</th>
            <th>Tanggal Transaksi</th>
            <th>Total Biaya</th>
</tr>
</thead>
<?php
    include 'koneksi.php' ;
    $sql = 'SELECT * FROM transaksi';
    $query = mysqli_query($koneksi, $sql);
    while ($row = mysqli_fetch_array($query))
    {
        ?>
        <tbody>
            <tr>
                <td><?php echo $row['ID_Transaksi'] ?></td>
                <td><?php echo $row['ID_Pelanggan'] ?></td>
                <td><?php echo $row['ID_Apoteker'] ?></td>
                <td><?php echo $row['Tanggal_Transaksi'] ?></td>
                <td><?php echo $row['Total_Biaya'] ?></td>
    </tr>
    </tbody>
    <?php
    }
    ?>

            
    </body>
</html>