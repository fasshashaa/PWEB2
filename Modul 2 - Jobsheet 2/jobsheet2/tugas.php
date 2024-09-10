<?php
//membuat class dosen
class Dosen {
    //atribut dosen
    public $nama;
    public $nip;
    public $mataKuliah;

    //function construct
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
    
    //method tampilkanDosen
    public function tampilkanDosen(){
        return "Nama    : " .$this->nama. "<br>NIP   : " .$this->nip. "<br>Mata Kuliah    : ".$this->mataKuliah;
    }
        
    }
    
    $dsn1 = new Dosen ("Ami Riyanti", "23478387463", "Kalkulus");
    echo $dsn1->tampilkanDosen();
    ?>