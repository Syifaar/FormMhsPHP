<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h2>Formulir Data Mahasiswa</h2>
    <form action="simpan.php" method="POST">
        <label for="nim">NIM</label><br>
        <input type="text" id="nim" name="nim" required><br><br>
        
        <label for="nama">Nama</label><br>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <label for="jenis_kelamin">Jenis Kelamin</label><br>
        <select id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br><br>
        
        <label for="alamat">Alamat</label><br>
        <input type="text" id="alamat" name="alamat" required><br><br>
        
        <label for="no_hp">No HP</label><br>
        <input type="text" id="no_hp" name="no_hp" required><br><br>
        
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <button type="submit">Submit</button>
    </form>

    <br>
    <a href="data.csv" download>Download Data</a>
</body>
</html>
