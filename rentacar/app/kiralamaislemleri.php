<?php
require_once("config.php");
require_once("dbconnect.php");

class KiralamaIslemleri extends DBConnect {

    public function tekKiralamaGetir($tcno) {
        $sql = "SELECT * FROM kiralama WHERE tcno = '$tcno'";
        $result = $this->fetchData($sql);
        return $result;
    }

    public function hepsiniGetir() {
        $sql = "SELECT * FROM kiralama";
        $result = $this->fetchAllData($sql);
        return $result;
    }

    public function kiralamaEkle($params) {
        extract($params);
        $sql = "INSERT INTO kiralama (tcno, plaka, saseno, baslangic, bitis, ucret) 
                VALUES ('$tcno', '$plaka','$saseno', '$baslangic', '$bitis', '$ucret')";
        return $this->sqlExec($sql);
    }

    public function kiralamaGuncelle($params) {
        extract($params);
        $sql = "UPDATE kiralama 
                SET plaka = '$plaka', saseno = '$saseno', baslangic = '$baslangic', bitis = '$bitis', ucret = '$ucret' 
                WHERE tcno = '$tcno'";
        return $this->sqlExec($sql);
    }

    public function kiralamaSilme($params) {
        extract($params);
        $sql =  "DELETE FROM kiralama WHERE tcno = '$tcno'";
        return $this->sqlExec($sql);
    }
}
?>
