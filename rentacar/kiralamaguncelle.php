<?php
require_once 'app/kiraroute.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sıla Rent A Car - Kiralama Güncelle</title>
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
              <a class="nav-link active" aria-current="page" href="kiralamalistesi.php">Kiralama Listesi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="kiralamaekle.php">Kiralama Ekle</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="kiralamaguncelle.php">Kiralama Güncelle</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container" style="margin-top: 20px;">
    <div class="col-md-6"> 
      <h3 class="mb-3">Kiralama Bilgilerini Güncelle</h3>
      <!-- burada  listedeki tcno yu otomatik olarak güncelledeki form alanına gönderiyor  -->
      <form method ="post">
      <div class="mb-3">
          <label for="tcno" class="form-label">Tc No:</label>
          <input type="text" class="form-control" name="tcno" value="<?php echo htmlspecialchars($tcno); ?>" readonly>
        </div>
        <div class="mb-3">
          <label for="plaka" class="form-label">Plaka:</label>
          <input type="text" class="form-control" name="plaka">
        </div>
        <div class="mb-3">
          <label for="saseno" class="form-label">Şase No:</label>
          <input type="number" class="form-control" name="saseno">
        </div>
        <div class="mb-3">
          <label for="baslangic" class="form-label">Kiralama Başlangıcı:</label>
          <input type="date" class="form-control" name="baslangic">
        </div>
        
        <div class="mb-3">
          <label for="bitis" class="form-label">Kiralama Bitişi:</label>
          <input type="date" class="form-control" name="bitis" >
        </div>

        <div class="mb-3">
          <label for="ucret" class="form-label">Ücret:</label>
          <input type="number" class="form-control" name="ucret" >
        </div>
        
        <div class="mb-3">
          <label for="depozito" class="form-label">Depozito:</label>
          <input type="number" class="form-control" name="depozito" >
        </div>

        <button type="submit" class="btn btn-primary" name="guncelle">Güncelle</button>
      </form>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
