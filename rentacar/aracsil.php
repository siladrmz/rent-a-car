<?php
require_once 'app/aracroute.php';
?>

<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sıla Rent A Car - Araç Sil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://silaotokiralama.com/wp/wp-content/uploads/2018/10/Logo-2-1.png" alt="RentACar Logo" style="width: 70px; height: 40px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Anasayfa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="araclar.php">Araç Listesi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="aracekle.php">Araç Ekle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="aracsil.php">Araç Sil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container" style="text-align: center; margin-top: 10px;">
      <!-- Uyarı Mesajı -->
      <p style="color: red; font-weight: bold; font-size: 20px;">
        Dikkat! Araç silme sayfasındasınız. Devam etmek istediğinize emin misiniz?
      </p>
  </div>

  <div class="container" style="margin-top: 20px;">
  <div class="col-md-6"> 
    <form method="post" >
      <!-- burada sil butonuna tıklandığında bütün bilgiler otomatik olarak input alanına gidiyor ve readonly olduğu için kullanıcının değişiklik yapmasına izin vermiyor -->
      <div class="mb-3">
      <label for="plaka" class="form-label">Plaka:</label>
        <input type="text" class="form-control" name="plaka" value="<?php echo htmlspecialchars($plaka); ?>" readonly><br>
      </div>
      <div class="mb-3">
        <label for="model" class="form-label">Model:</label>
        <input type="text" class="form-control" name="model" value="<?php echo htmlspecialchars($model); ?>" readonly>
      </div>
      <div class="mb-3">
        <label for="renk" class="form-label">Renk:</label>
        <input type="text" class="form-control" name="renk" value="<?php echo htmlspecialchars($renk); ?>" readonly>
      </div>
      <div class="mb-3">
        <label for="km" class="form-label">Km:</label>
        <input type="text" class="form-control" name="km" value="<?php echo htmlspecialchars($km); ?>" readonly>
      </div>
      <div class="mb-3">
        <label for="otomatik" class="form-label">Otomatik:</label>
        <input type="text" class="form-control" name="otomatik" value="<?php echo htmlspecialchars($otomatik); ?>" readonly>
      </div>
      <div class="mb-3">
        <label for="fiyat" class="form-label">Fiyat:</label>
        <input type="text" class="form-control" name="fiyat" value="<?php echo htmlspecialchars($fiyat); ?>" readonly>
      </div>
      <div class="mb-3">
        <label for="yakitturu" class="form-label">Yakıt Türü:</label>
        <input type="text" class="form-control" name="yakitturu" value="<?php echo htmlspecialchars($yakitturu); ?>" readonly>
      </div>
      <div class="mb-3">
        <label for="yas" class="form-label">Yaş:</label>
        <input type="text" class="form-control" name="yas" value="<?php echo htmlspecialchars($yas); ?>" readonly>
      </div>
      <div class="mb-3">
        <label for="motorgucu" class="form-label">Motor Gücü:</label>
        <input type="text" class="form-control" name="motorgucu" value="<?php echo htmlspecialchars($motorgucu); ?>" readonly>
      </div>
      <div class="mb-3">
        <label for="saseno" class="form-label">Şase No:</label>
        <input type="text" class="form-control" name="saseno" value="<?php echo htmlspecialchars($saseno); ?>" readonly>
      </div>

      <button type="submit" class="btn btn-danger" name="sil">Araç Silme</button>
    </form>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
