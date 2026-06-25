<?php
require 'fungsi.php';

if (isset($_POST['kirim'])) {

    $nama    = $_POST['nama'];
    $nim     = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $email   = $_POST['email'];
    $no_hp   = $_POST['no_hp'];
    $foto    = $_POST['foto'];

    $query = "INSERT INTO mahasiswa
              (nama, nim, jurusan, email, no_hp, foto)
              VALUES
              ('$nama', '$nim', '$jurusan', '$email', '$no_hp', '$foto')";

    $hasil = mysqli_query($koneksi, $query);

    if ($hasil) {
        echo "
        <script>
            alert('Data berhasil ditambahkan!');
            window.location='mahasiswa.php';
        </script>
        ";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>

<h2>Tambah Data Mahasiswa</h2>

<form action="" method="post">

    <label>Nama</label><br>
    <input type="text" name="nama" required><br><br>

    <label>NIM</label><br>
    <input type="text" name="nim" required><br><br>

    <label>Jurusan</label><br>
    <input type="text" name="jurusan" required><br><br>

    <label>Email</label><br>
    <input type="email" name="email" required><br><br>

    <label>No HP</label><br>
    <input type="text" name="no_hp" required><br><br>

    <label>Foto</label><br>
    <input type="text" name="foto"><br><br>

    <button type="submit" name="kirim">Tambah Data</button>

</form>

</body>
</html>