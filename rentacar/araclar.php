<?php
require_once 'app/arabaislemleri.php';

$arabaIslemleri = new ArabaIslemleri();
$arabaListesi = $arabaIslemleri->hepsiniGetir();
?>
 <!-- bu sayfası aracroute sayfasında yapmak yerine sadece hepsini getir fonksiyonunu kullandığım için ve tablo üzerinden bilgilerde düzenleme yaptığım için burada yaptım -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sıla Rent A Car - Araçlar</title>
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
            <a class="nav-link active" aria-current="page" href="araclar.php">Araç Listesi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="aracekle.php">Araç Ekle</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container" style="margin-top: 20px;">
  <h3 class="mb-3">Araç Bilgileri</h3>
    <table class="table table-striped-columns">
      <thead>
      <?php if ($arabaListesi): ?>
        <tr>
          <th scope="col">Plaka</th>
          <th scope="col">Km</th>
          <th scope="col">Model</th>
          <th scope="col">Renk</th>
          <th scope="col">Fiyat</th>
          <th scope="col">Otomatik</th>
          <th scope="col">Depozito</th>
          <th scope="col">Yakıt Türü</th>
          <th scope="col">Motor Gücü</th>
          <th scope="col">Yaş</th>
          <th scope="col">Şase No</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($arabaListesi as $araba): ?>
        <tr>
          <td><?php echo $araba['plaka']; ?></td>
          <td><?php echo $araba['km']; ?></td>
          <td><?php echo $araba['model']; ?></td>
          <td><?php echo $araba['renk']; ?></td>
          <td><?php echo $araba['fiyat']; ?></td>
          <td><?php echo $araba['otomatik']; ?></td>
          <td><?php echo $araba['depozito']; ?></td>
          <td><?php echo $araba['yakitturu']; ?></td>
          <td><?php echo $araba['motorgucu']; ?></td>
          <td><?php echo $araba['yas']; ?></td>
          <td><?php echo $araba['saseno']; ?></td>
          <td><a href="aracGuncelle.php?plaka=<?php echo $araba['plaka']; ?>"><i class="fa-solid fa-pen-nib"></i></a></td>
          <td>
    <a href="aracsil.php?plaka=<?php echo urlencode($araba['plaka']); ?>&model=<?php echo urlencode($araba['model']); ?>&renk=<?php echo urlencode($araba['renk']); ?>&km=<?php echo urlencode($araba['km']); ?>&otomatik=<?php echo urlencode($araba['otomatik']); ?>&fiyat=<?php echo urlencode($araba['fiyat']); ?>&yakitturu=<?php echo urlencode($araba['yakitturu']); ?>&yas=<?php echo urlencode($araba['yas']); ?>&motorgucu=<?php echo urlencode($araba['motorgucu']); ?>&saseno=<?php echo urlencode($araba['saseno']); ?>">
        <i class="fa-solid fa-trash"></i>
    </a>
    <!-- arac guncelle butonuna basınca plakayı guncelle sayfasına araç sil butonuna basınca listedeki bütün bilgileri silme sayfasına gönderiyor -->
</td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <?php else: ?>
        <p>Veritabanında araba bulunamadı.</p>
    <?php endif; ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>