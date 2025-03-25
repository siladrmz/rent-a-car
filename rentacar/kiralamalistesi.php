<?php
require_once 'app/kiralamaislemleri.php';

$kiralamaIslemleri = new KiralamaIslemleri();
$kiralamaListesi = $kiralamaIslemleri->hepsiniGetir();
?>
<!-- burada işlemleri kiraroute yerine sadece hepsini getir fonksiyonunu kullandığım için bu sayfada yaptım işlemleri de php kodlarıyla table üzerinde yaptım  -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sıla Rent A Car - Kiralama Listesi</title>
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
              <a class="nav-link active" aria-current="page" href="kiralamalistesi.php">Kiralama Listesi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="kiralamaekle.php">Kiralama Ekle</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="container" style="margin-top: 20px;">
      <h3 class="mb-3">Kiralama Bilgileri</h3>
      <table class="table table-striped-columns">
        <thead>
        <?php if ($kiralamaListesi): ?>
          <tr>
            <th scope="col">Tc No</th>
            <th scope="col">Plaka</th>
            <th scope="col">Şase No</th>
            <th scope="col">Kiralama Başlangıcı</th>
            <th scope="col">Kiralama Bitişi</th>
            <th scope="col">Ücret</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($kiralamaListesi as $kiralama): ?>
          <tr>
            <td><?php echo $kiralama['tcno']; ?></td>
            <td><?php echo $kiralama['plaka']; ?></td>
            <td><?php echo $kiralama['saseno']; ?></td>
            <td><?php echo $kiralama['baslangic']; ?></td>
            <td><?php echo $kiralama['bitis']; ?></td>
            <td><?php echo $kiralama['ucret']; ?></td>
            <td><a href="kiralamaguncelle.php?tcno=<?php echo $kiralama['tcno']; ?>"><i class="fa-solid fa-pen-nib"></i></a></td>
            <td><a href="kiralamasil.php?tcno=<?php echo $kiralama['tcno']; ?>&plaka=<?php echo $kiralama['plaka']; ?>&saseno=<?php echo $kiralama['saseno']; ?>&baslangic=<?php echo $kiralama['baslangic']; ?>&bitis=<?php echo $kiralama['bitis']; ?>&ucret=<?php echo $kiralama['ucret']; ?>"><i class="fa-solid fa-trash"></i></a></td>
          </tr>
          <!-- güncelle butonuna basıldığında tcno bilgisini güncelle sayfasına, sil butonuna basıldığında bütün bilgileri sil sayfasına otomatik atıyor  -->
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
