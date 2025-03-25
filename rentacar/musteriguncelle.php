<?php
require_once 'app/musteriroute.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sıla Rent A Car - Müşteri Güncelle</title>
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
            <a class="nav-link active" aria-current="page" href="musteriler.php">Müşteri Listesi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="musteriekle.php">Müşteri Ekle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="musteriguncelle.php">Müşteri Güncelle</a>
          </li>
        </ul>
    </div>
  </div>
</nav>
<div class="container" style="margin-top: 20px;">
<div class="col-md-6"> 
<form method="post">
  <div class="mb-3">
    <label for="tcno" class="form-label">TC No:</label>
    <!-- musteri listesinden aldığı tcno bilgisini buraya aktarıyor -->
    <input type="text" class="form-control" name="tcno" value="<?php echo htmlspecialchars($tcno); ?>" readonly>
  </div>
  <div class="mb-3">
    <label for="ehliyetbilgileri" class="form-label">Ehliyet Bilgileri:</label>
    <input type="textarea" class="form-control" name="ehliyetbilgileri">
  </div>

  <div class="mb-3">
    <label for="tlf" class="form-label">Telefon:</label>
    <input type="text" class="form-control" name="tlf">
  </div>

  <div class="mb-3">
    <label for="adi" class="form-label">Ad:</label>
    <input type="text" class="form-control" name="adi">
  </div>
  <div class="mb-3">
    <label for="soyadi" class="form-label">Soyad:</label>
    <input type="text" class="form-control" name="soyadi">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" name="email">
  </div>

  <button type="submit" class="btn btn-primary" name="guncelle">Güncelle</button>
</form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>