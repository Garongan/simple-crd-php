<?php
require_once 'database.php';
$db = new database();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampil</title>
</head>

<body>
    <a href="input.php">Input Data</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Usia</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $db_mahasiswa = $db->tampil();
            $no = 1;

            foreach ($db_mahasiswa as $data) {
            ?>
                <tr>
                    <td><?php echo ($no++) ?></td>
                    <td><?php echo ($data['nama']) ?></td>
                    <td><?php echo ($data['alamat']) ?></td>
                    <td><?php echo ($data['umur']) ?></td>
                    <td><a href="?id=<?= $data['id'] ?>">hapus</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $hapus = $db->hapus($id);
        if ($hapus) {
            header('Location: tampil.php');
        }
    }
    ?>
</body>

</html>