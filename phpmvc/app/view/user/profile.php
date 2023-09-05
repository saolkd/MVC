<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'];?></title>
</head>
<body>
    <div class="container text-center mt-4">
    <h1>Hi </h1>
    <p>Saya <?= $data['nama'];?>, saya seorang <?= $data['pekerjaan'];?></p>
    <img src="<?= BASE_URL; ?>/img/keqingsmol.png" alt="" width="200" class="rounded-circle shadow">
    <br>
    <p>Saya pembuat dari web ini, Bila ada kesalahan bisa menghubungi saya di :
        <br>
        Whatsapp : 000-000-000
        yuuijin4@gmail.com
    </p>
</div>
</body>
</html>