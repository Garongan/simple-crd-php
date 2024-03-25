<?php
class database
{
    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "db_akademik";

    var $conn;

    function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
    }

    function tampil()
    {
        $query = "SELECT * FROM mahasiswa";
        $data_mahasiswa = [];
        $resultQuery = mysqli_query($this->conn, $query);
        while ($d = mysqli_fetch_array($resultQuery)) {
            $data_mahasiswa[] = $d;
        }

        return $data_mahasiswa;
    }

    function simpan($nama, $alamat, $umur)
    {
        $query = "INSERT INTO mahasiswa (nama, alamat, umur) VALUES ('$nama', '$alamat', '$umur')";
        return mysqli_query($this->conn, $query);
    }

    function hapus($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = '$id'";
        return mysqli_query($this->conn, $query);
    }
}

$db = new database();
