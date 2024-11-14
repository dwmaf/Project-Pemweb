<div class="form-credential">
  <div class="header-login">
    <span></span>
    <div class="title-login">
      <div class="uas-pemweb">
        <h2 class="uas">uas</h2>
        <h2 class="pemweb">Pemweb</h2>
      </div>
      <h6 class="pesan-kecil">LET'S MAKE SOME MONEY BRO</h6>
    </div>
    <a href="./index.php" style=" color:black;">
      <i class="fa-solid fa-xmark fa" style="cursor: pointer; "></i>
    </a>
  </div>
  <form class="form-kontak" method="post" action="handler/register_handler.php">
    <div class="input-container">
      <label class="label-login">Gmail</label>
      <input class="input-login" id="email-input" type="email" placeholder="Masukkan Email anda" name="email" required>
    </div>
    <h6 id="error-empty" class="error-message-gmail">Gmail tidak boleh kosong</h6>
    <div class="input-container" style="margin-top: 20px; margin-bottom:20px">
      <label class="label-login">Password</label>
      <input id="password-login" class="input-login " type="password" placeholder="Buat password" name="password" required>
    </div>
    <ul id="password-error" class="password-error-message">
      <li id="duabelas">12-16 karakter</li>
      <li id="huruf-besar">Mengandung huruf besar</li>
      <li id="huruf-kecil">Mengandung huruf kecil</li>
      <li id="mengandung-angka">Mengandung angka</li>
      <li id="mengandung-simbol">Mengandung simbol</li>
    </ul>
    <div class="regis-forgot-pass">
      <a href="./login.php">Login</a>
      <a href="./index.php">Home</a>
    </div>
    <button type="submit">Register</button>
  </form>
</div>