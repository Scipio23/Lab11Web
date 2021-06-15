<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <section id="introduce">
        <div class="row">
            <img src="VV.jpg" title="Rofi Ismail" alt="Rofi Ismail" class="image-circle" width="230"
            style="float: left; border: 2px solid black;">
            <h1>Hello!</h1>
            <p> Nama saya Scipio Rifky Yulianto dan sering dipanggil Pio. Saya lahir di <i>Bekasi</i> pada tanggal 23 juli 2001 
          sebagai anak ketiga dari tiga bersaudara. Saat ini, saya tinggal bersama orang tua dan keluarga di <i>Bekasi</i>.</p>
        </div>
    </section>
    <?= $this->include('template/footer'); ?>
</body>
</html>
