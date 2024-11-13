<div class="mid-kontak" >
  <div class="daftar-menu">
    <a href="index.php">
      <i class="fa-solid fa-home"></i>
    </a>
    <a href="kontak.php">
      <i class="fa-solid fa-address-book"></i>
    </a>
    <a href="latihan.php">
      <i class="fa-solid fa-dumbbell"></i>
    </a>
  </div>
  
  <!-- form -->
  <div class="form-container">
    <form class="form-kontak" method="post" action="handler/tambah_data.php" enctype="multipart/form-data">
      <div id="NIM" class="input-container">
        <label class="label-kontak">NIM</label>
        <i class="fa-solid fa-id-card icon-fa"></i>
        <input class="input-kontak nama-nim" type="text" placeholder="Masukkan NIM" name="nim" required>
      </div>
      <div id="nama" class="input-container">
        <label class="label-kontak">Nama Lengkap</label>
        <i class="fas fa-user icon-fa" ></i>
        <input class="input-kontak nama-nim" type="text" placeholder="Masukkan nama" name="nama" required>
      </div>

      <div id="radio" class="input-container">
        <label class="label-kontak">Jenis Kelamin</label>
        <div class="options-kontak">
          <div class="option-kontak">
            <input required type="radio" id="laki-laki" name="kelamin" value="laki-laki">
            <label for="laki-laki">Laki-laki</label>
          </div>
          <div class="option-kontak">
            <input required type="radio" id="perempuan" name="kelamin" value="perempuan">
            <label for="perempuan">Perempuan</label>
          </div>
        </div>
      </div>

      <div class="input-container">
        <label class="label-kontak">Matakuliah</label>
        <div class="options-kontak">
          <div class="option-kontak">
            <input type="checkbox" id="web" name="makul[]" value="Pemrograman Web">
            <label for="web">Web</label>
          </div>
          <div class="option-kontak">
            <input type="checkbox" id="basis-data" name="makul[]" value="Perancangan Basis Data">
            <label for="basis-data">Basis Data</label>
          </div>
          <div class="option-kontak">
            <input type="checkbox" id="jaringan" name="makul[]" value="Jaringan">
            <label for="jaringan">Jaringan</label>
          </div>
        </div>
      </div>

      <div class="input-container">
        <label class="label-kontak">Domisili</label>
        <select name="domisili" class="input-kontak" required>
          <option value="Kubu Raya">Kubu Raya</option>
          <option value="Pontianak">Pontianak</option>
          <option value="Sungai Raya">Sungai Raya</option>
          <option value="Sungai Raya Dalam">Sungai Raya Dalam</option>
        </select>
      </div>

      <div class="input-container">
        <label class="label-kontak">Tgl. Lahir</label>
        <input name="tgllahir" type="date" class="input-kontak" required>
      </div>

      <div class="input-container">
        <label class="label-kontak">Foto</label>
        <input type="file" name="foto" accept="image/*" class="input-kontak" required>
      </div>

      <button type="submit" style="background-color: #3CC1CA; width:70px; border-radius:20px; padding-left:20px; padding-right:20px; padding-top:10px; padding-bottom:10px; border:none; font-family:'Inter'">Add</button>
    </form>
  </div>
</div>