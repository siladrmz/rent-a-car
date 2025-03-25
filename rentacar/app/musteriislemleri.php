<?php
require_once("config.php");
require_once("dbconnect.php");

class MusteriIslemleri extends DBConnect{
    
    public  function tekMusteriGetir($tcno){
        $sql="SELECT * FROM musteriler WHERE tcno='$tcno'";
        $result=$this->fetchData($sql);
        return $result;
    }

    public  function hepsiniGetir(){
        $sql="SELECT * FROM musteriler";
        $result=$this->fetchAllData($sql);
        return $result;
    }

    public function musteriEkle($params) {
        extract($params); 
        $sql = "INSERT INTO musteriler (tcno, ehliyetbilgileri, tlf, adi, soyadi, email) 
                VALUES ('$tcno', '$ehliyetbilgileri', '$tlf', '$adi', '$soyadi', '$email')";
        return $this->sqlExec($sql);
    }

    public function musteriGuncelle($params) {
        extract($params); 
        $sql = "UPDATE musteriler SET ehliyetbilgileri='$ehliyetbilgileri', tlf='$tlf', adi='$adi', soyadi='$soyadi', email='$email' WHERE tcno = '$tcno'";
        return $this->sqlExec($sql);
    }

    public function musteriSilme($params) {
        extract($params);   
        $sql = "DELETE FROM musteriler WHERE tcno = '$tcno'";
        return $this->sqlExec($sql);
    }
}
?>
