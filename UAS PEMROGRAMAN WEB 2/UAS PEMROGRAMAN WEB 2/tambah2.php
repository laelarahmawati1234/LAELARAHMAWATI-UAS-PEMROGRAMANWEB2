<?php
require 'functions2.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
  
  // cek apakah data berhasil di tambahkan atau tidak
  if( tambah($_POST) > 0 ) {
    echo "
      <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'komputer2.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'komputer2.php';
      </script>
    ";
  }


}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tambah data Komputer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
  <head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    h1 {
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

    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      margin-bottom: 15px;
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
  <h1>Tambah data Komputer</h1>

  <form action="" method="post" enctype="multipart/form-data">
    <ul>
      <li>
        <label for="kodekomputer">Kode Komputer : </label>
        <input type="text" name="kodekomputer" id="kodekomputer" required>
      </li>
      <li>
        <label for="jeniskomputer">Jenis Komputer</label>
    <select id="jeniskomputer" name="jeniskomputer" required="" />
      <option value="Reguler">Reguler</option>
      <option value="VIP">VIP</option>
    </select>
      </li>
      <li>
        <label for="harga">Harga :</label>
        <input type="text" name="harga" id="harga">
      </li>
      <li>
        <label for="lokasi">Lokasi</label>
    <select id="lokasi" name="lokasi" required="" />
      <option value="Lantai1">Lantai1</option>
      <option value="Lantai2">Lantai2</option>
    </select>
      </li>
      <li>
        <button type="submit" name="submit">Tambah Data!</button>
        <button type="button" name="submit"><a href="komputer2.php">Kembali</a></button>
      </li>
    </ul>

  </form>




</body>
</html>

  