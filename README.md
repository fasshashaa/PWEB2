# PEMORGRAMAN WEB 2 - Prinsip Dasar OOP
Nama    : Fassha Fanny Purwanto  
Kelas   : TI - 2B  
NPM     : 230202035  

## Prinsip Dasar OOP
_Object-Oriented Programming_ atau Pemrograman berbasis Objek merupakan konsep pemrograman yang menitik beratkan pada konsep objek. Dalam OOP, objek digunakan untuk menggambarkan masalah kedalam bentuk kode. OOP memiliki beberapa konsep utama atau konsep mendasar, diantara lain :  
1. _object_ atau objek, adalah instansiasi dari kelas. Umumnya objek memiliki elemen pelengkap berupa atribut dan metode.
2. _Class_ atau Kelas, adalah blueprint dasar dari pembuatan objek. Atribut dan metode yang ada pada objek akan didefinisikan oleh kelas.
3. _Encapsulation_ atau enkapsulasi, adalah konsep yang memiliki fungsi untuk membungkus data dan metode. Enkapsulasi juga bertujuan untuk menyembunyikan detail implementasi.
4. _Abstraction_ atau abstraksi adalah konsep yang memiliki fungsi untuk menyederhanakan kode dengan cara menyembunyikan detail yang tidak perlu.
5. _Inheritance_ atau pewarisan, adalah konsep dimana implementasinya adalah dengan adanya kelas baru yang dibuat dengan mewarisi atribut dan metode dari kelas _parent_ nya.
6. _Polymorphism_ atau Polimorfisme, adalah konsep kelas yang bertujuan untuk mempermudah implementasi program dengan cara menggunakan objek dari kelas yang berbeda tetapi menggunakan metode yang sama namun hasil implementasi nya berbeda.

## Modul 1 
### Jobsheet 1 : Implementasi Prinsip OOP dalam PHP
1. Membuat Class dan Object  
    _Class_ atau Kelas, adalah blueprint dasar dari pembuatan objek. Atribut dan metode yang ada pada objek akan didefinisikan oleh kelas. Sedangkan  _object_ atau objek, adalah instansiasi dari kelas. Umumnya objek memiliki elemen pelengkap berupa atribut dan metode.
   
   > Membuat class Mahasiswa dengan atribut nama, nim, dan jurusan  
   ``` PHP
   Class Mahasiswa {  
   public $nama;
   public $nim;
   public $jurusan;
   ```
   Membuat function construct untuk mengembalikan nilai
   ```PHP
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
   ```
   > Membuat metode tampilkanData()
   
   Metode ini digunakan untuk memanggil atribut dan menampilkannya.
   
   ```PHP
   function tampilkanData(){
        return "Nama : $this->nama <br> NIM : $this->nim <br> Jurusan : $this->jurusan";
    }
   }
   ```

> Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.

Instansiasi adalah cara untuk menghasilkan sebuah entitas konkrit berdasarkan blueprint (kelas) yang sudah ada.  

```PHP
$mhs1 = new Mahasiswa ("Fassha Fanny Purwanto", "230202035", "Komputer dan Bisnis");
echo $mhs1->tampilkanData();
```
> Output

![Ouput 1.1](images/jb1.1.png)


   
   
   
