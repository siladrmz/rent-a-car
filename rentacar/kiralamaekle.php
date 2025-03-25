<?php
require_once 'app/kiraroute.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sıla Rent A Car - Kiralama Ekle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
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
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Anasayfa</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="kiralamalistesi.php">Kiralama Listesi</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="kiralamaekle.php">Kiralama Ekle</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-4" style="margin-bottom: 30px;">
    <h3 class="mb-3">Müşteri Bilgileri</h3>
    <div id="customerTable">
        <table class="table table-bordered" id="customerInfoTable">
            <thead>
                <tr>
                    <th scope="col">Seç</th>
                    <th scope="col">TC No</th>
                    <th scope="col">Ehliyet Bilgileri</th>
                    <th scope="col">Telefon</th>
                    <th scope="col">Ad</th>
                    <th scope="col">Soyad</th>
                    <th scope="col">Email</th>
                    
                </tr>
            </thead>
            <tbody>
    <?php foreach ($musteriListesi as $musteri): ?>
    <tr>
    <td><input type="radio" name="tcno" value="<?= $musteri['tcno']; ?>" <?= ($selectedTcno == $musteri['tcno']) ? 'checked' : ' '; ?>>
    </td>
    <!-- burada radio butonla seçilen musterinin tcno bilgisini kiralama ekle alanındaki tcno ya otomatik olarak gönderdim -->
        <td><?= $musteri['tcno']; ?></td>
        <td><?= $musteri['ehliyetbilgileri']; ?></td>
        <td><?= $musteri['tlf']; ?></td>
        <td><?= $musteri['adi']; ?></td>
        <td><?= $musteri['soyadi']; ?></td>
        <td><?= $musteri['email']; ?></td>
    </tr>
    <?php endforeach; ?>
</tbody>
        </table>
    </div>
</div>
<div class="container">
<form method="post"  action="musteriekle.php" target="hiddenFrame">
    <!-- burada musteriekle sayfasını dahil edip eğer yeni bir müşteri eklenecekse formu gönderdikten sonra musteriler database ine kaydedilmesini ve yularıdaki tabloda da sayfa yenilendiğinde yeni kaydedilen müşterinin gözükmesini sağladım -->
    <div class="mb-3">
        <label for="tcno" class="form-label">TC No:</label>
        <input type="text" class="form-control" name="tcno">
    </div>
    <div class="mb-3">
        <label for="ehliyetbilgileri" class="form-label">Ehliyet Bilgileri:</label>
        <input type="textarea" class="form-control" name="ehliyetbilgileri">
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
        <label for="tlf" class="form-label">Telefon:</label>
        <input type="text" class="form-control" name="tlf">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" name="email">
    </div>
    <button type="submit" class="btn btn-primary" name ="ekle">Kaydet</button>
</form>
 <iframe name="hiddenFrame" style="display:none;"></iframe> <!--burada musteriekle.php sayfasına gitmeyip ekleme işlemini arka planda yapması için kullandım -->
</div>

<hr>

<div class="container mt-4">
    <h3 class="mb-3">Araç Bilgileri</h3>
    <div id="resultsTable">
        <table class="table table-bordered" id="vehicleTable">
        <!-- radio butonla bir seçim yaptırdım bu seçimide plaka, saseno ve fiyat bilgisini kiralama ekledeki input alanına gönderdim -->
            <thead>
                <tr>
                    <th scope="col">Seç</th>
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
                </tr>
            </thead>
            <tbody>
                    <?php foreach ($arabaListesi as $araba): ?>
                    <tr>
                        <!-- burada selectedPlaka ile seçilen plakaya göre plaka, saseno ve fiyat bilgisini datatable ile script alanında kiralama ekle deki input alanlarına gönderdim -->
                    <td><input type="radio" name="plaka" value="<?= $araba['plaka']; ?>" <?= ($selectedPlaka == $araba['plaka']) ? 'checked' : ''; ?>></td>
                        <td><?= $araba['plaka']; ?></td>
                        <td><?= $araba['km']; ?></td>
                        <td><?= $araba['model']; ?></td>
                        <td><?= $araba['renk']; ?></td>
                        <td><?= $araba['fiyat']; ?></td>
                        <td><?= $araba['otomatik'] ? 'Evet' : 'Hayır'; ?></td>
                        <td><?= $araba['depozito']; ?></td>
                        <td><?= $araba['yakitturu']; ?></td>
                        <td><?= $araba['motorgucu']; ?> </td>
                        <td><?= $araba['yas']; ?></td>
                        <td><?= $araba['saseno']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
        </table>
    </div>
</div>
<hr>

<div class="container">
    <h3 class="mb-3">Kiralama Bilgileri</h3>
    <form method="post" id="rentalForm">
      <div class="mb-3">
        <!-- seçilen tcno,plaka ve saseno bilgisi bu formdaki alanlara readonly olarak gidiyor. Başlangic,bitis ve ucret ise kullanıcı tarafından değiştirilebiliyor  -->
            <label for="tcno" class="form-label">TC No:</label>
            <input type="text" class="form-control" id="tcnoKiralama" name="tcnoKiralama" value="<?= $selectedTcno ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="plaka" class="form-label">Plaka:</label>
            <input type="text" class="form-control" id="plakaKiralama" name="plakaKiralama" value="<?= $selectedPlaka; ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="saseno" class="form-label">Saseno:</label>
            <input type="number" class="form-control" id="saseno" name="saseno" value="<?= $saseno; ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="baslangicTarihi" class="form-label">Başlangıç Tarihi:</label>
            <input type="date" class="form-control" id="baslangicTarihi" name="baslangicTarihi">
        </div>
        <div class="mb-3">
            <label for="bitisTarihi" class="form-label">Bitiş Tarihi:</label>
            <input type="date" class="form-control" id="bitisTarihi" name="bitisTarihi">
        </div>
        <div class="mb-3">
            <label for="ucret" class="form-label">Ücret:</label>
            <input type="text" class="form-control" id="ucret" name="ucret" value="<?= $ucret; ?>">
        </div>

        <button type="submit" class="btn btn-primary"name="kirala">Kirala</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    // buradaki kodların tamamı data tableye ait search yaparken daha hızlı bir yöntem olduğundan dolayı data table kullandım

    // DataTable başlatılma
    $('#customerInfoTable').DataTable();
    $('#vehicleTable').DataTable();
    
    // TC No  seçiminin form alanlarına aktarılması
    $('input[name="tcno"]').on('change', function() {
    var selectedTcno = $(this).val();
    $('#tcnoKiralama').val(selectedTcno);  // TC No'yu Kiralama formuna aktar
    });

    $('input[name="plaka"]').on('change', function() {
    var selectedPlaka = $(this).val();
    $('#plakaKiralama').val(selectedPlaka); // Plakayı Kiralama formuna aktar

    var selectedArabaRow = $(this).closest('tr');
    var ucret = selectedArabaRow.find('td:nth-child(6)').text(); // Ücret kolonu(değiştirilebilir)
    var saseno = selectedArabaRow.find('td:nth-child(12)').text(); // Şase No kolonu

    $('#ucret').val(ucret); // Ücreti Kiralama formuna aktar
    $('#saseno').val(saseno); // Şase No'yu Kiralama formuna aktar
});
</script>
</body>
</html>
