# Praktikum 11 - Pemrograman Web (PHP Framework)
```
Nama : Scipio Rifky Yulianto
NIM  : 311910396
Kelas: TI.19.A.2
```
# Persiapan
Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan pengembangan Codeigniter 4. Berikut beberapa ekstensi yang perlu diaktifkan:

* php-json ekstension untuk bekerja dengan JSON;
* php-mysqlnd native driver untuk MySQL;
* php-xml ekstension untuk bekerja dengan XML;
* php-intl ekstensi untuk membuat aplikasi multibahasa;
* libcurl (opsional), jika ingin pakai Curl.

Untuk mengaktifkan ekstentsi tersebut melalui ```XAMPP Control Panel```, pada bagian Apache klik Config -> ```PHP.ini```
![1 11](https://user-images.githubusercontent.com/56240851/122042154-a3ace800-cd8e-11eb-9778-784332686d3a.png)
Hapus tanda ; (titik koma) pada bagian extension yang akan diaktifkan.
![2 11](https://user-images.githubusercontent.com/56240851/122042168-a7d90580-cd8e-11eb-80e2-09168a57c141.png)
Kemudian buat folder baru dengan nama ```lab11_php_ci``` pada doc root webserver ```(htdocs)```
![3 11](https://user-images.githubusercontent.com/56240851/122042187-ae677d00-cd8e-11eb-802b-f09211ce7e3b.png)
# Instalasi CodeIgniter 4

* Codeigniter dapat didownload dari website https://codeigniter.com/download
* Extrak file zip Codeigniter ke direktori htdocs/lab11_php_ci.
* Ubah nama direktory framework-4.x.xx menjadi ci4.
* Buka browser dengan alamat http://localhost/lab11_php_ci/ci4/public/
![4 11](https://user-images.githubusercontent.com/56240851/122042205-b3c4c780-cd8e-11eb-9a43-13bda9db7090.png)
## Menjalankan CLI (Command Line Interface)
Arahkan lokasi direktori sesuai dengan direktori kerja project yang sudah dibuat (xampp/htdocs/lab11_php_ci/ci4/)
![5 11](https://user-images.githubusercontent.com/56240851/122042216-b8897b80-cd8e-11eb-8989-fa5b75b14000.png)
Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah ```php spark```
![6 11](https://user-images.githubusercontent.com/56240851/122042298-d22ac300-cd8e-11eb-98c0-fef83fc3224a.png)
Codeigniter juga menyediakan mode debugging/development yang dapat menampilkan error/kesalahan dalam kode program. Cara mengaktifkannya dengan mengubah nama file ```env``` menjadi ```.env```B kemudian buka filenya dan ubah nilai CI_ENVIRONMENT menjadi development.

![71 11](https://user-images.githubusercontent.com/56240851/122042317-d951d100-cd8e-11eb-8ebe-14e2d4cec070.png)
* Maka pesan kesalahan akan ditampilkan.
![111 11](https://user-images.githubusercontent.com/56240851/122045870-14560380-cd93-11eb-8876-410e0c018825.png)
# Langkah1 - Membuat Route Baru
Tambahkan kode berikut di dalam ```app/config/Routes.php```
![8 11](https://user-images.githubusercontent.com/56240851/122042362-e66ec000-cd8e-11eb-8aed-aeb9acea5482.png)
Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan perintah berikut.
```php spark routes```
Ketik perintah berikut untuk menjalankan server CI 4 pada port 8080.
```php spark serve```
![9 11](https://user-images.githubusercontent.com/56240851/122042383-ef5f9180-cd8e-11eb-81a0-c51ebeeeeb0c.png)
Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url ```http://localhost:8080/about``` Ketika diakses akan muncul tampilan error 404 file not found, itu artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page.

# Langkah2 - Membuat Controller
* Membuat file ```page.php``` di dalam direktori Controller (/app/Controllers)
* Method ini dapat diakses dengan menggunakan alamat: http://localhost:8080/page/tos
![10 11](https://user-images.githubusercontent.com/56240851/122042396-f38baf00-cd8e-11eb-8875-549beed5e0e7.png)

* Berikut adalah hasilnya:

![11 11](https://user-images.githubusercontent.com/56240851/122042409-f7b7cc80-cd8e-11eb-9c82-c544b54d3b40.png)
# Langkah3 - Membuat View
* Buat file baru dengan nama about.php pada direktori view (app/view/about.php) kemudian masukan coding seperti berikut.
![12 11](https://user-images.githubusercontent.com/56240851/122042417-fab2bd00-cd8e-11eb-888a-5094b30181d7.png)
* Berikut adalah hasilnya:

![13 11](https://user-images.githubusercontent.com/56240851/122042433-fededa80-cd8e-11eb-9496-b035cdc4b6dd.png)
# Langkah4 - Membuat Layout Web dengan CSS
Pada dasarnya layout web dengan css dapat diimplamentasikan dengan mudah pada Codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset ```css``` dan ```javascript``` terletak pada direktori ```public```. Buat file css pada direktori public dengan nama ```style.css```

![14 11](https://user-images.githubusercontent.com/56240851/122042450-03a38e80-cd8f-11eb-8519-9eee634688ce.png)

Kemudian buat folder template pada direktori view kemudian buat file ```header.php``` dan ```footer.php```
![15 11](https://user-images.githubusercontent.com/56240851/122042467-0900d900-cd8f-11eb-9384-9f51f64d6832.png)
![16 11](https://user-images.githubusercontent.com/56240851/122051609-a4974700-cd99-11eb-905d-0b5d68a57ef2.png)
![17 11](https://user-images.githubusercontent.com/56240851/122051629-a9f49180-cd99-11eb-8a02-97847002fbd1.png)
* Kemudian ubah file app/view/about.php seperti berikut.
```
<?= $this->include('template/header'); ?>
   <h1><?= $title; ?></h1>
   <hr>
   <p><?= $content; ?></p>
<?= $this->include('template/footer'); ?>
```
* Kemudian refresh browser atau akses alamat http://localhost:8080/about
![18 11](https://user-images.githubusercontent.com/56240851/122051675-b7aa1700-cd99-11eb-9d7a-db181b73deb9.png)

# Pertanyaan dan Tugas
Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.

# Hasil tugas
* Tampilan page about
![19 11](https://user-images.githubusercontent.com/56240851/122084266-87bd3c80-cdb6-11eb-878b-7f172a139d02.png)
* Tampilan page artikel
![20 11](https://user-images.githubusercontent.com/56240851/122084279-8ab82d00-cdb6-11eb-840f-94be3a5a9c13.png)
* Tampilan page contact
![21 11](https://user-images.githubusercontent.com/56240851/122084296-8db31d80-cdb6-11eb-9a6c-b1bd315a28aa.png)
