<div style="  background-image: url('assets/tengah-with-image.png');
    background-size: 100% 100%; background-repeat: no-repeat; height: 886px; display: flex; flex-direction: column; justify-content: space-between; min-width:50%">

      <div style="display: flex; justify-content: space-between;">
        <div style="display: flex; justify-content: space-between;align-items: center;padding:20px; margin-top:40px; margin-left:30px; background-color: rgb(0,0,0,0.5);backdrop-filter: blur(10px); border-radius:50px;">
          <a href="index.php">
            <i class="fa-solid fa-home" style="margin-right: 50px; font-size: 20px; color:white"></i>
          </a>
          <a href="kontak.php">
            <i class="fa-solid fa-address-book" style="margin-right: 50px; font-size: 20px;color:white"></i>
          </a>
          <a href="latihan.php">
            <i class="fa-solid fa-dumbbell" style=" font-size: 20px;color:white"></i>
          </a>
        </div>
        <div name="judul halaman" style="font-family: 'Bento'; font-size:40px; background-color: rgb(0,0,0,0.5);backdrop-filter: blur(10px); border-radius:50px; color:white; margin-top:40px; padding:20px; height:70px; display:flex; align-items:center; justify-content:center">Kontak</div>
        <div class="btn" style="width: 90px; height: 90px; background-color:#414144; border-radius:100%; display: flex;justify-content: center;align-items: center; margin-top:20px;"><i class="fa-solid fa-sliders" style="color:white; font-size:35px;"></i></div>
      </div>
      <!-- form -->
      <div style="background-color:rgb(0,0,0,0.5); width:90%; height: 65%; margin-bottom:30px; margin-left:30px; border-radius:55px;  backdrop-filter:blur(7px)">
        <form style="display: flex; flex-direction:column; margin:30px" method="post" action="tambah_data.php" enctype="multipart/form-data">
          <div id="NIM" style="position: relative;margin-bottom: 20px;display: inline-block;">
            <label style="position: absolute;top: -10px;left: 10px;background-color: #414144;color: white;padding: 0 5px;font-size: 12px; border-radius:15px">NIM</label>
            <i class="fa-solid fa-id-card" style="position: absolute;top: 50%;left: 10px;transform: translateY(-50%);color: white;"></i>
            <input type="text" style="width: 300px;padding: 10px;padding-left: 35px;border: 1px solid white;background: transparent;color: white;outline: none;border-radius: 15px;" placeholder="Masukkan NIM" name="nim" required>
          </div>
          <div id="nama" style="position: relative;margin-bottom: 20px;display: inline-block;">
            <label style="position: absolute;top: -10px;left: 10px;background-color: #414144;color: white;padding: 0 5px;font-size: 12px; border-radius:15px">Nama Lengkap</label>
            <i class="fas fa-user" style="position: absolute;top: 50%;left: 10px;transform: translateY(-50%);color: white;"></i>
            <input type="text" style="width: 300px;padding: 10px;padding-left: 35px;border: 1px solid white;background: transparent;color: white;outline: none;border-radius: 15px;" placeholder="Masukkan nama" name="nama" required>
          </div>

          <div id="radio" style="position: relative; margin-bottom: 20px; padding: 10px; border: 1px solid white; border-radius: 15px; display: inline-block; color: white; width: 300px;">
            <label style="position: absolute; top: -10px; left: 10px; background: #414144; color: white; padding: 0 5px; font-size: 12px;border-radius:15px">Jenis Kelamin</label>
            <div style="display: flex; justify-content: space-between; ">
              <div style="display: flex; align-items: center;" class="">
                <input required type="radio" id="laki-laki" name="kelamin" value="laki-laki" style=" width: 16px; height: 16px; border: 1px solid white; border-radius: 50%; background-color: transparent; margin-right: 10px; position: relative;">
                <label for="laki-laki" style="color: white;">Laki-laki</label>
              </div>
              <div style="display: flex; align-items: center;" class="radio-option">
                <input required type="radio" id="perempuan" name="kelamin" value="perempuan" style="width: 16px; height: 16px; border: 1px solid white; border-radius: 50%; background-color: transparent; margin-right: 10px; position: relative;">
                <label for="perempuan" style="color: white;">Perempuan</label>
              </div>
            </div>
          </div>

          <div class="checkbox-container">
            <label class="checkbox-label">Matakuliah</label>
            <div class="checkbox-options">
              <div class="checkbox-option">
                <input type="checkbox" id="web" name="makul[]" value="Pemrograman Web" >
                <label for="web">Web</label>
              </div>
              <div class="checkbox-option">
                <input type="checkbox" id="basis-data" name="makul[]" value="Perancangan Basis Data" >
                <label for="basis-data">Basis Data</label>
              </div>
              <div class="checkbox-option">
                <input type="checkbox" id="jaringan" name="makul[]" value="Jaringan" >
                <label for="jaringan">Jaringan</label>
              </div>
            </div>
          </div>

          <div class="select-container">
            <label class="select-label">Domisili</label>
            <select name="domisili" class="custom-select" required>
              <option value="Kubu Raya">Kubu Raya</option>
              <option value="Pontianak">Pontianak</option>
              <option value="Sungai Raya">Sungai Raya</option>
              <option value="Sungai Raya Dalam">Sungai Raya Dalam</option>
            </select>
          </div>

          <div class="date-container">
            <label class="date-label">Tgl. Lahir</label>
            <input name="tgllahir" type="date" class="custom-date" required>
          </div>

          <div class="file-container">
            <label class="file-label">Foto</label>
            <input type="file" name="foto" accept="image/*" class="custom-file" required>
          </div>

          <button type="submit" style="background-color: #3CC1CA; width:70px; border-radius:20px; padding-left:20px; padding-right:20px; padding-top:10px; padding-bottom:10px; border:none; font-family:'Inter'">Add</button>
        </form>
      </div>
    </div>