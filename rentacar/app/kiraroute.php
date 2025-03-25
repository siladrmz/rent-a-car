<?php
require_once 'kiralamaislemleri.php';
require_once 'musteriislemleri.php';
require_once 'arabaislemleri.php';

// Bütün kodlarım sorunsuz çalışmaktadır :) 

//Burada kiralamaekle.php,kiralamaguncelle.php ve kiralamasil.php sayfalarında kullanacağım kodları yazdım. 
//Bu sayfayı ise az önce belirttiğim sayfalarda requrie_once ile çağırdım. 
//Bunun dışında görsel kısmını yaptığım sayfalarda da php kodlarım bulunuyor o yzüden incelemenizi öneririm hocam. 
//Önemli:kiralamalistesi.php sayfasında, php kodlarımı direkt o sayfa üzreinden yaptım burada o sayfaya ait kod yok o sayfaya gidip incelerseniz çok sevinirim.

//Kiralamaekle.php sayfasında müşteri ekleme kısmı ve arac kısmı da olduğu içinn önceden yaptığım musteriislemleri.php ve arabaislemleri.php sayfalarını da bu sayfada dahil ettim.
//Bu şekilde müşteri eklediğimde, eklediğim yeni müşteri müşteriler database'ine de kaydoluyor.
//Ve mevcut araclara ve musterilere de tablo üzerinden ulaşabiliyorum.

$kiralamaIslemleri = new KiralamaIslemleri();

$musteriIslemleri = new MusteriIslemleri();
$musteriListesi = $musteriIslemleri->hepsiniGetir();
$arabaIslemleri =new ArabaIslemleri();
$arabaListesi = $arabaIslemleri->hepsiniGetir();

$selectedTcno = isset($_POST['tcno']) ? $_POST['tcno'] : '';

// Eğer TC No gönderilmişse, bu TC No ile müşteri bilgilerini alalım
if ($selectedTcno) {
    $musteri = $musteriIslemleri->tekMusteriGetir($selectedTcno);  // Bu metod, TC No'ya göre müşteri bilgilerini almalı
}

// Eğer form gönderildiyse, seçilen araç bilgilerini alalım
$selectedPlaka = isset($_POST['plakaKiralama']) ? $_POST['plakaKiralama'] : '';
$saseno = isset($_POST['saseno']) ? $_POST['saseno'] : '';
$ucret = isset($_POST['ucret']) ? $_POST['ucret'] : '';


// kiralama ekle kısmı -----------------------------------
if (isset($_POST['kirala'])) {
    // Formdan gelen verileri alıyoruz
    $tcnoKiralama = $_POST['tcnoKiralama'] ?? null;
    $plakaKiralama = $_POST['plakaKiralama'] ?? null;
    $saseno = $_POST['saseno'] ?? null;
    $baslangic = $_POST['baslangicTarihi'] ?? null;
    $bitis = $_POST['bitisTarihi'] ?? null;
    $ucret = $_POST['ucret'] ?? null;

    // Eğer eksik veri varsa, kullanıcıyı uyar
    if (!$tcnoKiralama || !$plakaKiralama || !$saseno || !$baslangic || !$bitis || !$ucret) {
        echo "Lütfen tüm alanları doldurduğunuzdan emin olun.";
    } else {
        // Parametreleri bir dizi olarak hazırlıyoruz
        $params = [
            'tcno' => $tcnoKiralama,
            'plaka' => $plakaKiralama,
            'saseno' => $saseno,
            'baslangic' => $baslangic,
            'bitis' => $bitis,
            'ucret' => $ucret
        ];

        if ($kiralamaIslemleri->kiralamaEkle($params)) {
            echo "Kayıt başarıyla eklendi!";
        } else {
            echo "Kayıt eklenirken bir hata oluştu.";
        }
    }
}
//  kiralama güncelle kısmı ------------------------------------------------------------
$tcno = isset($_GET['tcno']) ? $_GET['tcno'] : '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['guncelle'])) {
    $params = [
        'tcno' => $_POST['tcno'],
        'plaka' => $_POST['plaka'],
        'saseno' => $_POST['saseno'],
        'baslangic' => $_POST['baslangic'],
        'bitis' => $_POST['bitis'],
        'ucret' => $_POST['ucret']
    ];

    if ($kiralamaIslemleri->kiralamaGuncelle($params)) {
        echo "Kayıt başarıyla güncellendi!";
    } else {
        echo "Kayıt güncellenirken bir hata oluştu.";
    }
}


//kiralamasil.php sayfası ----------------------------------------------
if (isset($_GET['tcno'])) {
    
    $tcno = $_GET['tcno']; 

    $plaka = isset($_GET['plaka']) ? $_GET['plaka'] : '';
    $saseno = isset($_GET['saseno']) ? $_GET['saseno'] : '';
    $baslangic = isset($_GET['baslangic']) ? $_GET['baslangic'] : '';
    $bitis = isset($_GET['bitis']) ? $_GET['bitis'] : '';
    $ucret = isset($_GET['ucret']) ? $_GET['ucret'] : '';
    
 }

// Silme işlemi POST ile yapılacak
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sil'])) {
    // TC No parametresi silme işlemi için kullanılıyor
    $params = ['tcno' => $tcno];

    // Silme fonksiyonunu çağırıyoruz
    if ($kiralamaIslemleri->kiralamaSilme($params)) {
        echo "Kayıt başarıyla silindi: " . htmlspecialchars($tcno); // tcno'yu doğru yazıyoruz
    } else {
        echo "Kayıt silinirken bir hata oluştu.";
    }
}


?>