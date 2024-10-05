<!DOCTYPE html>
<html>

<head>
  <title>Latihan PemWeb</title>
  <!-- <link rel="stylesheet" type="text/css" href="/Pemweb/styles.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
  <table width="100%">
    <tr id="header" style="text-align: center" class="bg-secondary">
      <th colspan="3" style="padding: 50px 0; color: white">
        <h1>JUDUL WEBSITE</h1>
      </th>
    </tr>
    <tr style="text-align: center">
      <th colspan="3" style="padding: 10px 0">
        <h3 style="display: inline-block; margin-right: 20px">
          <a href="index.php">HOME</a>
        </h3>
        <h3 style="display: inline-block; margin-right: 20px">
          <a href="kontak.php">KONTAK</a>
        </h3>
        <h3 style="display: inline-block; margin-right: 20px;"><a href="webc.php">LATIHAN</a> </h3>
      </th>
    </tr>
    <tr>
      <td bgcolor="#92d1c0" style="vertical-align: top; padding-left: 20px">
        <p style="font-weight: bold">Menu Kiri</p>
        <ul>
          <li>Coffee</li>
          <li>Tea</li>
          <li>Milk</li>
        </ul>
      </td>

      <td width="50%" style="padding-left: 20px; padding-bottom: 20px; padding-top: 20px;">
        <form action="tambah_data.php" method="post" enctype="multipart/form-data">
          <table  style="border: none; ">
            <tr >
              <td style="border: none; padding-bottom: 20px;"><label for="fname">NIM:</label></td>
              <td style="border: none; padding-bottom: 20px;">
                <input placeholder="Masukkan nim..." type="text" id="fname" name="nim" />
              </td>
              
            </tr>
            
            
            <tr>
              <td style="border: none; padding-bottom: 20px;"><label for="fname">Nama:</label></td>
              <td style="border: none; padding-bottom: 20px;">
                <input size="50" type="text" id="fname" name="nama" />
              </td>
            </tr>
            <tr>
              <td style="border: none; padding-bottom: 20px;">Jenis Kelamin
                
              </td>
              <td style="border: none; display: flex;">
                <input type="radio" id="css" name="kelamin" value="Laki-laki" />
                <label for="css">Laki-laki</label><br />
                <input type="radio" id="css" name="kelamin" value="Perempuan" />
                <label for="css">Perempuan</label><br />
              </td>
            </tr>
            <tr>
              <td style="border: none; padding-bottom: 20px;">
                <label for="favcolor">Mata Kuliah:</label>
              </td>
              <td style="border: none; display: flex;">
                <input type="checkbox" id="vehicle1" name="makul[]" value="Pemrograman Web">
                <label for="vehicle1"> Pemrograman Web</label><br>
                <input type="checkbox" id="vehicle2" name="makul[]" value="Jaringan">
                <label for="vehicle2"> Jaringan</label><br>
                <input type="checkbox" id="vehicle3" name="makul[]" value="Basis Data">
                <label for="vehicle3"> Basis Data</label><br>
              </td>
            </tr>
            <tr>
              <td style="border:none; padding-bottom: 20px;">
                <label for="email">Domisili:</label>
              </td>
              <td style="border: none; padding-bottom: 20px;">
                <select name="domisili" id="cars">
                  <option value="Pontianak">Pontianak</option>
                  <option value="Kubu Raya">Kubu Raya</option>
                  <option value="Sungai Raya">Sungai Raya</option>
                  <option value="Sungai Raya Dalam">Sungai Raya Dalam</option>
                </select>
              </td>
            </tr>
            <tr>
              <td style="border: none; padding-bottom: 20px;"><label for="fname">Tgl. Lahir</label></td>
              <td style="border: none; padding-bottom: 20px;">
                <input type="date" id="birthday" name="tgllahir">
              </td>
            </tr>
            <tr>
              <td style="border: none; padding-bottom: 20px;"><label for="fname">Foto</label></td>
              <td style="border: none; padding-bottom: 20px;">
                <input type="file" id="myfile" name="foto" accept="image/*">
              </td>
            </tr>
            <tr>
              <td style="border: none">
                <label for="w3review">Alamat</label>
              </td>
              <td style="border: none">
                <textarea id="w3review" name="alamat"> </textarea>
              </td>
            </tr>
            <tr>
              <td style="border:none">

                <button type="submit" class="btn btn-primary">Tambah data</button>
              </td>
            </tr>
          </table>
        </form>
      </td>

      <td bgcolor="#9bcaf6" style="vertical-align: top">
        <p style="font-weight: bold; padding-left: 20px">Menu Kanan</p>
        <ol style="padding-left: 60px">
          <li>Coffee</li>
          <li>Tea</li>
          <li>Milk</li>
        </ol>
      </td>
    </tr>
    <tr>
      <td id="footer" colspan="3">
        FOOTER
      </td>
    </tr>
  </table>
</body>

</html>