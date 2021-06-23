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

# Praktikum 12 - Lanjutan Codeigniter - Pemrograman Web
```
Nama  :Scipio Rifky Yulianto
NIM   :311910396
Kelas :TI.19.A.2
Universitas Pelita Bangsa
```

## Laporan Praktikum
### Persiapan
* Pastikan MySQL server sudah berjalan dan buat sebuah database sebagai berikut:
![1 12](https://user-images.githubusercontent.com/56240851/123016571-ca1ae680-d37f-11eb-9a77-84adcea0f019.png)
# Langkah1 - Konfigurasi koneksi database
* Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server. Kemudian melakukan konfigurasi dengan cara mengubah beberapa kode pada file ```htdocs\lab11_php_ci\ci4\.env.``` Lalu cari pada line DATABASE dan hilangkan tanda pagar (#) didepan seperti berikut ini.
![2 12](https://user-images.githubusercontent.com/56240851/123016575-d010c780-d37f-11eb-8a75-8c16d82ff4f0.png)
# Langkah2 - Membuat Model
* Buat file baru pada direktori /app/Models dengan nama ArtikelModel.php
![3 12](https://user-images.githubusercontent.com/56240851/123016588-d43ce500-d37f-11eb-9809-3ec278ff622e.png)
# Langkah3 - Membuat Controller
* Buat Controller baru dengan nama Artikel.php pada direktori /app/Controllers.
![4 12](https://user-images.githubusercontent.com/56240851/123016593-d8690280-d37f-11eb-8664-9d11b0559751.png)
# Langkah 4 - Membuat View
* Buat direktori baru dengan nama artikel pada direktori /app/Views, kemudian buat file baru dengan nama **index.php**.
![5 12](https://user-images.githubusercontent.com/56240851/123016608-def77a00-d37f-11eb-9499-a4d874365b38.png)
* Lalu buka alamat http://localhost:8080/artikel untuk melihat hasilnya.
* Tidak ada data yang ditampilkan karena database masih kosong.
![6 12](https://user-images.githubusercontent.com/56240851/123016619-e4ed5b00-d37f-11eb-80e6-2d85829623ee.png)
* Tambahkan data pada database untuk ditampilkan datanya.
![7 12](https://user-images.githubusercontent.com/56240851/123016647-ef0f5980-d37f-11eb-9053-bf66cbd2ed5e.png)
* Refresh kembali browser, sehingga akan ditampilkan hasilnya.
![8 12](https://user-images.githubusercontent.com/56240851/123016663-f6cefe00-d37f-11eb-9551-e2833fbd2eaf.png)
# Langkah5 - Membuat Tampilan Detail Artikel
* Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan sebuah fungsi baru pada **Controller Artikel** (/app/Controllers/Artikel.php) dengan nama **view().**
![9 12](https://user-images.githubusercontent.com/56240851/123016668-fc2c4880-d37f-11eb-8281-382c80bdc667.png)
# Langkah6 - Membuat View Detail
* Buat file baru dalam folder artikel (**/app/Views/artikel/**) dengan nama **detail.php** untuk menampilkan halaman detail.
![10 12](https://user-images.githubusercontent.com/56240851/123016678-064e4700-d380-11eb-9e92-8b6366d133ab.png)
# Langkah7 - Membuat Routing untuk artikel detail
* Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail.
```$routes->get('/artikel/(:any)', 'Artikel::view/$1');```
![12 12](https://user-images.githubusercontent.com/56240851/123018942-5deeb180-d384-11eb-8d42-b557a63c9556.png)
* Maka akan tampil halaman dari artikel yang diklik.
![13 12](https://user-images.githubusercontent.com/56240851/123018947-621acf00-d384-11eb-9fbc-0601b64557f7.png)
# Langkah8 - Membuat Menu Admin
* Menu admin adalah untuk proses CRUD data artikel.
* Buat method atau fungsi baru pada **Controller Artikel** dengan nama **admin_index()**.
![14 12](https://user-images.githubusercontent.com/56240851/123018955-65ae5600-d384-11eb-9599-266af0c4787e.png)
* Kemudian buat file **admin_index.php** dalam folder **(/app/Views/artikel/)** untuk tampilan halaman admin.
![15 12](https://user-images.githubusercontent.com/56240851/123018981-78c12600-d384-11eb-82c7-bdd428dbe7b5.png)
![16 12](https://user-images.githubusercontent.com/56240851/123018991-7c54ad00-d384-11eb-83ba-8e2c318a0597.png)
* Lalu tambahkan routing untuk menu admin sebagai berikut:
![17 12](https://user-images.githubusercontent.com/56240851/123019011-82e32480-d384-11eb-892e-cfb47b5ac025.png)
# Langkah 9 - Menambah Data Artikel
* Menu admin dapat diakses dengan alamat http://localhost:8080/admin/artikel
![18 12](https://user-images.githubusercontent.com/56240851/123019023-88d90580-d384-11eb-8619-26827d6bcbcb.png)
* Tambahkan fungsi/method baru pada **Controller Artikel** dengan nama **add()**.
![19 12](https://user-images.githubusercontent.com/56240851/123019039-9098aa00-d384-11eb-9b1b-6505f99556ee.png)
* Kemudian buat view untuk form tambah dengan nama **form_add.php** dalam folder **(/app/Views/artikel/)**.
![20 12](https://user-images.githubusercontent.com/56240851/123019047-942c3100-d384-11eb-9b80-5d7f9f58529c.png)
* Tampilannya kurang lebih akan seperti ini.
![21 12](https://user-images.githubusercontent.com/56240851/123019057-98f0e500-d384-11eb-9c85-bb600b3e3e9d.png)
# Langkah 10 - Mengubah Data
* Tambahkan fungsi/method baru pada **Controller Artikel** dengan nama **edit()**.
![22 12](https://user-images.githubusercontent.com/56240851/123019069-9d1d0280-d384-11eb-92db-b9d306b3220f.png)
* Kemudian buat view untuk form tambah dengan nama**form_edit.php** dalam folder **(/app/Views/artikel/)**. 
![23 12](https://user-images.githubusercontent.com/56240851/123019090-a3ab7a00-d384-11eb-9574-6e4fd519e13b.png)
* Kurang lebih tampilannya akan seperti ini ketika ingin mengubah data atau isi artikel.
![24 12](https://user-images.githubusercontent.com/56240851/123019097-a73f0100-d384-11eb-98b0-6f9f0de8293d.png)
# Langkah 11 - Menghapus Data
* Tambahkan fungsi/method baru pada Controller Artikel dengan nama delete().
![25 12](https://user-images.githubusercontent.com/56240851/123019103-aa39f180-d384-11eb-8d4b-49c1698eb267.png)



