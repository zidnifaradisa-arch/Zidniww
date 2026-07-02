<?php
    $koneksi = mysqli_connect("localhost", "root", "", "weeklyzdn");

    function tampildata($query)
    {
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;   
    }

    function tambahdata($data)
    {
        global $koneksi;
        $nama = htmlspecialchars($data["nama"]);
        $nim = htmlspecialchars($data["nim"]);
        $prodi = htmlspecialchars($data["prodi"]);
        $email = htmlspecialchars($data["email"]);
        $no_hp = htmlspecialchars($data["no_hp"]);
        $foto = $data ["foto"];

        $query = "INSERT INTO mahasiswa (nama, nim, prodi, email, no_hp, foto)
        VALUES ('$nama', '$nim', '$prodi', '$email', '$no_hp', '$foto')";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }
    
    function deletedata($id)
    {
        global $koneksi;
        $query = "DELETE FROM mahasiswa WHERE id = $id";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    function editdata($data, $id)
    {
        global $koneksi;
        $nama = htmlspecialchars($data["nama"]);
        $nim = htmlspecialchars($data["nim"]);
        $prodi = htmlspecialchars($data["prodi"]);
        $email = htmlspecialchars($data["email"]);
        $no_hp = htmlspecialchars($data["no_hp"]);
        $foto = $data ["foto"];

        $query = "UPDATE mahasiswa SET
        nama = '$nama',
        nim = '$nim',
        prodi = '$prodi',
        email = '$email',
        no_hp = '$no_hp',
        foto = '$foto'
        WHERE id = $id";

        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
    }
?>