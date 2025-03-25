<?php
require_once 'arabaislemleri.php';

$arabaIslemleri = new ArabaIslemleri();
$plaka = isset($_GET['plaka']) ? $_GET['plaka'] : '';

// Bütün kodlarım sorunsuz çalışmaktadır :) 

//Burada aracekle.php,aracguncelle.php ve aracsil.php sayfalarında kullanacağım kodları yazdım. 
//Bu sayfayı ise az önce belirttiğim sayfalarda requrie_once ile çağırdım. 
//Bunun dışında görsel kısmını yaptığım sayfalarda da php kodlarım bulunuyor o yzüden incelemenizi öneririm hocam. 
//Önemli:araclar.php sayfasında, php kodlarımı direkt o sayfa üzerinden yaptım burada o sayfaya ait kod yok o sayfaya gidip incelerseniz çok sevinirim.


// aracguncelle.php sayfası ---------------------------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['guncelle'])) {
    $params = [
        'plaka' => $_POST['plaka'],
        'km' => $_POST['km'],
        'model' => $_POST['model'],
        'renk' => $_POST['renk'],
        'fiyat' => $_POST['fiyat'],
        'otomatik' => $_POST['otomatik'],
        'depozito' => $_POST['depozito'],
        'yakitturu' => $_POST['yakitturu'],
        'motorgucu' => $_POST['motorgucu'],
        'yas' => $_POST['yas'],
        'saseno' => $_POST['saseno']
    ];

    if ($params['otomatik'] == 'Evet') {
        $params['otomatik'] = 'E';
    } elseif ($params['otomatik'] == 'Hayır') {
        $params['otomatik'] = 'H';
    }

    if ($arabaIslemleri->arabaGuncelle($params)) {
        echo "Kayıt başarıyla güncellendi!";
    } else {
        echo "Kayıt güncellenirken bir hata oluştu.";
    }
}
    
// aracekle.php sayfası -------------------------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ekle'])) {
    $params = [
        'plaka' => $_POST['plaka'],
        'km' => $_POST['km'],
        'model' => $_POST['model'],
        'renk' => $_POST['renk'],
        'fiyat' => $_POST['fiyat'],
        'otomatik' => $_POST['otomatik'],
        'depozito' => $_POST['depozito'],
        'yakitturu' => $_POST['yakitturu'],
        'motorgucu' => $_POST['motorgucu'],
        'yas' => $_POST['yas'],
        'saseno' => $_POST['saseno']
    ];

    if ($params['otomatik'] == 'Evet') {
        $params['otomatik'] = 'E';
    } elseif ($params['otomatik'] == 'Hayır') {
        $params['otomatik'] = 'H';
    }

    if ($arabaIslemleri->arabaEkle($params)) {
        echo "Kayıt başarıyla eklendi!";
    } else {
        echo "Kayıt eklenirken bir hata oluştu.";
    }
}

// aracsil.php sayfası ------------------------------------------
if (isset($_GET['plaka'])) {
    // Plakayı alıyoruz ve sadece plakaya göre silme işlemi yapıyoruz
    $plaka = $_GET['plaka'];
    
    // Diğer verileri URL'den alabiliriz (gerekirse kullanabiliriz)
    $model = isset($_GET['model']) ? $_GET['model'] : '';
    $renk = isset($_GET['renk']) ? $_GET['renk'] : '';
    $km = isset($_GET['km']) ? $_GET['km'] : '';
    $otomatik = isset($_GET['otomatik']) ? $_GET['otomatik'] : '';
    $fiyat = isset($_GET['fiyat']) ? $_GET['fiyat'] : '';
    $yakitturu = isset($_GET['yakitturu']) ? $_GET['yakitturu'] : '';
    $yas = isset($_GET['yas']) ? $_GET['yas'] : '';
    $motorgucu = isset($_GET['motorgucu']) ? $_GET['motorgucu'] : '';
    $saseno = isset($_GET['saseno']) ? $_GET['saseno'] : '';
}
    // Silme işlemini sadece plakaya göre yapıyoruz
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sil'])) {
    $params = ['plaka' => $plaka];

    // Silme fonksiyonunu çağırıyoruz
    if ($arabaIslemleri->arabaSilme($params)) {
        echo "Kayıt başarıyla silindi: " . htmlspecialchars($plaka);
    } else {
        echo "Kayıt silinirken bir hata oluştu.";
    }
}
?>