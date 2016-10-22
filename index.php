<?php require_once 'tampilan/header.php' ?>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Embah DAP si dukun 2.0</h3>
  <img src="gambar/DUKUN.png" class="img-responsive img-circle margin" style="display:inline" alt="Dukun" width="350" height="350">
  <h3>Saya Akan Meramal Cintamu dengan Pasangan, Gebetan kamu. Dan Juga Mantan</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Siapa Embah DAP?</h3>
  <p>Embah ini bukan manusia, tapi mbah merupakan Dukun 2.0 apa itu?
    Mbah merupakan sekumpulan program yang dibentuk untuk memenuhi kebutuhan manusia abad 21 ini,
     Mbah adalah sebuah Program yang diciptakan oleh programmer mbah yang namanya ada di bagian bawah website ini,
    Mbah bisa meramal jalinan cintamu cucuku dengan orang yang kamu cintai, apakah kamu sedang menjalani cintai, atau sedang pdkt dengan seseorang
    jangan khawatir Mbah DAP akan meramal nya dengan penggabungan hitungan jawa kuno, kalender bali, sio, zodiak, dan astronomi bahkan dengan perhitungan
    bulan mugen sukoyomi.
    Kamu akan mendapat nasihat nya disini</p>
    <form action="tampilan/embah.php" method="get" onsubmit="return validasi_input(this)">
  <div class="container">
      <div class="row">
        <div class="col-sm-6 form-group">
        <label>Kamu Itu :</label>
          <input class="form-control" name="nama_kamu" placeholder="Nama Kamu" type="text" required>
          <input type="radio" name="gender" value="Perempuan">Cewek
          <input type="radio" name="gender" value="Cowok">Cowok
        </div>
        <div class="col-sm-6 form-group">
          <label>Dia? :</label>
          <input class="form-control" name="nama_nya" placeholder="Nama Doi" type="text" required>
          <input type="radio" name="kelamin" value="Perempuan">Cewek
          <input type="radio" name="kelamin" value="Cowok">Cowok
        </div>
      </div>
      <label>Jenis Status Kamu Dengan Dia :</label>
      <select style="font: 20px Montserrat, sans-serif; color: #000000;" name="hubungan" id="hubungan">Silahkan Dipilih
        <option>Klik disini Untuk Memilih</option>
      <option value="pdkt">Pedekate</option>
      <option value="pacaran">Sedang berpacaran</option>
      <option value="mantan">Mantan Yang Masih Sayang</option>
     </select><br>
      <div class="row">
        <div class="col-md-12 form-group">
          <input class="btn btn-lg btn-primary btn-block" type="submit" name="Kirim" value="Klik Untuk Mulai Diramal">
        </div>
      </div>
</div>
</form>

<!-- Footer -->
<?php require_once 'tampilan/footer.php' ?>
