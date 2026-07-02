<?php 
 
     require 'fungsi.php';
     $query = "SELECT * FROM mahasiswa";
     $mahasiswa = tampildata($query);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1 align="center">
            WEB TI UNIMUS 2026 OYEE
        </h1>
        <table border="1" align="center" cellspacing="0" cellpadding="10px">
           <nav class="navbar">
    <a href="index.php">Home</a>
    <a href="biodata.php">Biodata</a>
    <a href="kontak.php">Kontak</a>
    <a href="mahasiswa.php">Data Mahasiswa</a>
</nav>
        </table>
        <h2>
            Data Mahasiswa
        </h2>
      <div class="btn-container">
    <a href="tambahdata.php" class="btn">+ Tambah Data</a>
</div>
        <table border="1" cellpadding="5px">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>No_hp</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
                <?php
                $no = 1;
                foreach($mahasiswa as $mhs)
                    {
                
            ?>        
            
        <tr>
            <td align="center">1</td>
            <td><?php echo $mhs["nama"] ?></td>
            <td><?php echo $mhs["nim"] ?></td>
            <td align="center"><?php echo $mhs["jurusan"] ?></td>
            <td align="center"><?php echo $mhs["email"] ?></td>
            <td align="center"><?php echo $mhs["no_hp"] ?></td>
             <td><img src="assets/image/foto.1.jpg" width="70px"></td>     
        <td>
             <a href="editdata.php?id=<?= $mhs["id"] ?>"><button>Edit</button></a>
             <a href="deletedata.php?id=<?= $mhs["id"] ?>"  onclick="return confirm('Yaqqueeeenn???')"><button> Hapus </button></a>
        <td>
        <tr>
        <?php
            $no++;
                }
        ?>
        </table>
        <hr>
         <table border="1" cellpadding="5px">
          <tr>
                <td>1,1</td>
                <td>1,2</td>
                <td>1,3</td>
                <td>1,4</td>
            </tr>
            <tr>
                <td>2,1</td>
                <td colspan="2" rowspan="2"></td>
                <!-- <td>2,3</td> -->
                <td>2,4</td>
            </tr>
            <tr>
                <td>3,1</td>
                <!-- <td>3,2</td> -->
                <!-- <td>3,3</td> -->
                <td>3,4</td>
            </tr>
            <tr>
                <td>4,1</td>
                <td>4,2</td>
                <td>4,3</td>
                <td>4,4</td>
            </tr>
        </table>

        <link rel="stylesheet" href="assets/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    
</body>
</html>