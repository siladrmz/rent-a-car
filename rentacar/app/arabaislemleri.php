<?php
require_once("config.php");
require_once("dbconnect.php");

class ArabaIslemleri extends DBConnect{
    
    public  function tekArabaGetir($plaka){
  
        $sql="SELECT * FROM arabalar WHERE plaka='$plaka'";
        $result=$this->fetchData($sql);
        return $result;
    }

    public  function hepsiniGetir(){
 
        $sql="SELECT * FROM arabalar ";
        $result=$this->fetchAllData($sql);
        return $result;
    }    

    public function arabaEkle($params) {
        extract($params); 
        $sql = "INSERT INTO arabalar (plaka, km, model, renk, fiyat, otomatik, depozito, yakitturu, motorgucu, yas, saseno) 
        VALUES ('$plaka', '$km', '$model', '$renk', '$fiyat', '$otomatik', '$depozito', '$yakitturu', '$motorgucu', '$yas', '$saseno')";
        return $this->sqlExec($sql);
    }

   
    public function arabaGuncelle($params) {
        extract($params); 
        $sql = "UPDATE arabalar SET km='$km', model='$model', renk='$renk', fiyat='$fiyat', otomatik='$otomatik', depozito='$depozito', yakitturu='$yakitturu', motorgucu='$motorgucu', yas='$yas' WHERE plaka = '$plaka'";
        return $this->sqlExec($sql);
}

    public function arabaSilme($params) {
        extract($params);   
        $sql = "DELETE FROM arabalar WHERE plaka = '$plaka'";
        return $this->sqlExec($sql);
    }
}


 