<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
  
  // cek apakah data berhasil di tambahkan atau tidak
  if( tambah($_POST) > 0 ) {
    echo "
      <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'halaman_pegawai.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
      </script>
    ";
  }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Pendaftaran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <head>
  <style>
    body {
      font-family: Segoe UI, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    h2 {
      text-align: center;
    }

    form {
      max-width: 600px;
      margin: 20px auto;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input,
    select {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
      margin-top: 5px;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    button a {
      color: #fff;
      text-decoration: none;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
  <br>
  <h2>FORMULIR PENDAFTARAN PEGAWAI</h2>

  <form action="" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="kodepegawai" class="form-label">Kode pegawai : </label>
        <input type="text" name="kodepegawai" class="form-control" id="kodepegawai" required>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama : </label>
        <input type="text" name="nama" class="form-control" id="nama">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat :</label>
        <textarea class="form-control" name="alamat" rows="3" required></textarea>
      </div>
      <div class="mb-3">
      <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
          <input type="date" id="tanggallahir" name="tanggallahir" class="form-control" required="" />
      </div>
        <label for="jeniskelamin">Jenis Kelamin</label>
        <select id="jeniskelamin" name="jeniskelamin" required>
          <option selected>Pilih Jenis Kelamin</option>          
          <option value="pria">Pria</option>
          <option value="wanita">wanita</option>
        </select>
        <br>
        <br>
      <div class="mb-3">
        <label for="nohp" class="form-label">No. Telepon :</label>
        <input type="text" name="nohp" class="form-control" id="nohp" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">email :</label>
        <input type="text" name="email" class="form-control" id="email" required>
      </div>
      <div>
      <label for="posisi" class="form-label">Posisi</label>
      <select class="form-select" id="posisi" name="posisi" required>
        <option value="kasir">Kasir</option>
        <option value="ob">OB</option>
        <option value="teknisi">Teknisi</option>
      </select>
      </div>
      <br>
      <div class="mb-3">
        <label for="gambar" class="form-label">Gambar :</label>
        <input class="form-control" type="file" name="gambar" id="gambar" required>
      </div>
        <button type="submit" name="submit">Tambah Data!</button>
        <button type="button" name="submit"><a href="index.php">Kembali</a></button>
  </form>




</body>
</html>

  