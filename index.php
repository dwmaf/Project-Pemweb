<?php
session_start();
?>



<!DOCTYPE html>
<html>

<head>
  <title>Latihan PemWeb</title>
  <!-- <link rel="stylesheet" type="text/css" href="/Pemweb/styles.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
  <?php
  // Cek apakah ada pesan sukses di session
  if (isset($_SESSION['success_message'])) {
    echo "<p style='color: green;'>" . $_SESSION['success_message'] . "</p>";
    // Hapus pesan setelah ditampilkan
    unset($_SESSION['success_message']);
  }
  ?>
  <table width="100%">
  <tr id="header" style="text-align: center" class="bg-secondary">
      <th colspan="3" style="padding: 50px 0; color: white">
        <h1>JUDUL WEBSITE</h1>
      </th>
    </tr>

    <tr style="text-align: center">
      <th colspan="3" style="padding: 10px 0;">
        <h3 style="display: inline-block; margin-right: 20px;"><a href="index.php">HOME</a> </h3>
        <h3 style="display: inline-block; margin-right: 20px"><a href="kontak.php">KONTAK</a></h3>
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

      <td width="50%" style="padding-left: 20px; padding-bottom: 20px">
        <p
          style="
              color: red;
              font-size: 34px;
              font-family: Arial, Helvetica, sans-serif;
            ">
          <strong>Ini bagian judul</strong>
        </p>
        <h2 style="color: blue">Judul 2</h2>
        <h3>Judul 3</h3>
        <p><b>bfns vj</b> df dfnckldsncjndsj</p>
        <p>nvhfdbvhf dhv fh</p>
        <p>ini paragraf. <i>paragraf peratama</i></p>
        <p>JFBKSDKBSDKNCKDJSNJ</p>
        <p>KSDNKJSDCSDNJV DFJK <u> DNSLJFNS</u></p>
        <img src="cake6.png" height="200px" />
        <br />
        <a
          href="https://edlink.id/panel"
          target="_blank">Klik Link dsiini</a>
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
      <td
        id="footer"
        colspan="3">
        FOOTER
      </td>
    </tr>
  </table>


</body>

</html>