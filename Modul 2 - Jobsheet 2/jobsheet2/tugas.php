<?php
//membuat class dosen
class Dosen {
    //atribut dosen
    public $nama;
    public $nip;
    public $mataKuliah;

    //method tampilkanDosen
    public function tampilkanDosen(){
        return "Nama    : " .$this->nama. "<br>NIP   : " .$this->nip. "<br>Mata Kuliah    : ".$this->mataKuliah;
    }
        
    }
   
    //Instansiasi Objek
    $dsn1 = new Dosen ("Ami Riyanti", "23478387463", "Kalkulus");
    $dsn1->nama = "Ami Riyanti";    
    $dsn1->nip = "23029309";    
    $dsn1->mataKuliah = "Kriptografi";    

    echo $dsn1->tampilkanDosen();
    ?>