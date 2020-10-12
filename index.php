<html>
<head>
  <title>Data Barang</title>
</head>
<body>
  <h1>Data Barang</h1>
  <a href="form_simpan.php">Tambah Data Barang</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>No</th>
    <th>Nama Merek</th>
    <th>Warna</th>
    <th>Jumlah</th>
  </tr>
  <?php
  include "koneksi.php";
  $sql = $pdo->prepare("SELECT * FROM printer");
  $sql->execute();
  while($data = $sql->fetch()){
    echo "<tr>";
    echo "<td>".$data['no']."</td>";
    echo "<td>".$data['nama_merek']."</td>";
    echo "<td>".$data['warna']."</td>";
    echo "<td>".$data['jumlah']."</td>";
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>
