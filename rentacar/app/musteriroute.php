<?php

require_once 'musteriIslemleri.php'; 

$musteriIslemleri = new MusteriIslemleri(); 
$tcno = isset($_GET['tcno']) ? $_GET['tcno'] : '';

// Bütün kodlarım sorunsuz çalışmaktadır :) 

//Burada musteriekle.php,musteriguncelle.php ve musterisil.php sayfalarında kullanacağım kodları yazdım. 
//Bu sayfayı ise az önce belirttiğim sayfalarda requrie_once ile çağırdım. 
//Bunun dışında görsel kısmını yaptığım sayfalarda da php kodlarım bulunuyor o yzüden incelemenizi öneririm hocam. 
//Önemli:musteriler.php sayfasında, php kodlarımı direkt o sayfa üzreinden yaptım burada o sayfaya ait kod yok o sayfaya gidip incelerseniz çok sevinirim.


// musteriekle.php sayfası ---------------------------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ekle'])) {
    $params = [
        'tcno' => $_POST['tcno'],
        'ehliyetbilgileri' => json_encode(['Sinif: ' => $_POST['ehliyetbilgileri']]), // JSON formatına çevir
        'tlf' => $_POST['tlf'],
        'adi' => $_POST['adi'],
        'soyadi' => $_POST['soyadi'],
        'email' => $_POST['email']
    ];
    
    
    if ($musteriIslemleri->musteriEkle($params)) {
        echo "Müşteri başarıyla eklendi!";
    } else {
        echo "Müşteri eklenirken bir hata oluştu.";
    }
}
// musteriguncelle.php sayfası ------------------------------------------

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['guncelle'])) {
    $params = [
        'tcno' => $_POST['tcno'],
        'ehliyetbilgileri' => json_encode(['Sinif: ' => $_POST['ehliyetbilgileri']]),
        'tlf' => $_POST['tlf'],
        'adi' => $_POST['adi'],
        'soyadi' => $_POST['soyadi'],
        'email' => $_POST['email']
    ];

    if ($musteriIslemleri->musteriGuncelle($params)) {
        echo "Kayıt başarıyla güncellendi!";
    } else {
        echo "Kayıt güncellenirken bir hata oluştu.";
    }
}

//musterisil.php sayfası ----------------------------------------------
if (isset($_GET['tcno'])) {
    
    $tcno = $_GET['tcno']; 

    $ehliyetbilgileri = isset($_GET['ehliyetbilgileri']) ? $_GET['ehliyetbilgileri'] : '';
    $tlf = isset($_GET['tlf']) ? $_GET['tlf'] : '';
    $adi = isset($_GET['adi']) ? $_GET['adi'] : '';
    $soyadi = isset($_GET['soyadi']) ? $_GET['soyadi'] : '';
    $email = isset($_GET['email']) ? $_GET['email'] : '';
    
 }

// Silme işlemi POST ile yapılacak
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sil'])) {
    // TC No parametresi silme işlemi için kullanılıyor
    $params = ['tcno' => $tcno];

    // Silme fonksiyonunu çağırıyoruz
    if ($musteriIslemleri->musteriSilme($params)) {
        echo "Kayıt başarıyla silindi: " . htmlspecialchars($tcno); // tcno'yu doğru yazıyoruz
    } else {
        echo "Kayıt silinirken bir hata oluştu.";
    }
}

?>