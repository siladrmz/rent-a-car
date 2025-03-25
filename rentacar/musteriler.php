<?php
require_once 'app/musteriislemleri.php';

$musteriIslemleri = new MusteriIslemleri();
$musteriListesi = $musteriIslemleri->hepsiniGetir();

?>
<!-- burada musteriroute yerine sadece hepsini geitr fonksiyonunu kullandığım için bu sayfada table üzerinde işlemleri yaptım  -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sıla Rent A Car - Müşteri Listesi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


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
      </ul>
    </div>
  </div>
</nav>
<div class="container" style="margin-top: 20px;">
<h3 class="mb-3">Müşteri Bilgileri</h3>
<table class="table table-striped-columns">
  <thead>
  <?php if ($musteriListesi): ?>
    <tr>
      <th scope="col">Tc No</th>
      <th scope="col">Ehliyet Bilgisi</th>
      <th scope="col">Telefon No</th>
      <th scope="col">Ad</th>
      <th scope="col">Soyad</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($musteriListesi as $musteri): ?>
                <tr>
                    <td><?php echo $musteri['tcno']; ?></td>
                    <td><?php echo $musteri['ehliyetbilgileri']; ?></td>
                    <td><?php echo $musteri['tlf']; ?></td>
                    <td><?php echo $musteri['adi']; ?></td>
                    <td><?php echo $musteri['soyadi']; ?></td>
                    <td><?php echo $musteri['email']; ?></td>
                    <td><a href="musteriguncelle.php?tcno=<?php echo $musteri['tcno']; ?>"><i class="fa-solid fa-pen-nib"></i></a></td>
                    <td><a href="musterisil.php?tcno=<?php echo $musteri['tcno']; ?>&tlf=<?php echo $musteri['tlf']; ?>&adi=<?php echo $musteri['adi']; ?>&soyadi=<?php echo $musteri['soyadi']; ?>&email=<?php echo $musteri['email']; ?>"><i class="fa-solid fa-trash"></i></a></td>
                </tr>
                <!-- güncelle butonuna basıldığında tcno bilgisini güncelle sayfasına, sil butonuna basıldığında büyün bilgileri sil sayfasına aktarıyor -->
        <?php endforeach; ?>
      </tbody>
    </table>
    <?php else: ?>
        <p>Veritabanında müşteri bulunamadı.</p>
    <?php endif; ?>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>