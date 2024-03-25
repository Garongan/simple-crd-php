<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>

<body>
    <form action="" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama">

        <br>
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat">

        <br>
        <label for="umur">Umur:</label>
        <input type="number" name="umur">

        <br>
        <button type="submit">submit</button>
    </form>

    <?php
    if (isset($_POST)) {
        require_once 'database.php';
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $umur = $_POST['umur'];

        $db = new database();
        $simpan = $db->simpan($nama, $alamat, $umur);

        if ($simpan) {
            header('Location: tampil.php');
        }
    }
    ?>
</body>

</html>