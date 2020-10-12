<!DOCTYPE html>
<html>
<head>
  <title>Tambah Data Barang</title>
</head>
<body>
  <h1>Data Barang</h1>
  <a href="form_simpan.php">Tambah Data</a><br><br>
  <div style="border:0; padding:10px; width:760px; height:auto;">
<form method="post" action="proses_simpan.php">
    <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
                <td width="10%"> </td>
                <td width="25%"> </td>
                <td width="65%"><font color="orange" size="2">Form Input Data Barang</font></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>No</td>
            <td><input type="text" name="no" size="35" maxlength="6" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Nama Merek</td>
            <td><input type="text" name="nama_merek" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Warna</td>
            <td><input type="text" name="warna" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Jumlah</td>
            <td><input type="text" name="jumlah" size="20" maxlength="12" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td> </td>
            <td><input type="submit" name="Submit" value="Simpan">
                <input type="reset" name="reset" value="Ulangi">
								<input type="reset" name="reset" value="Kembali"></td>
        </tr>
</form>
</div>

  </table>
</body>
</html>
