<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Pencatatan Barang</title>
    <link rel="stylesheet" href="style.css?v=<?= filemtime('style.css') ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <nav>
            <a href="home.php"><i class="fas fa-home"></i> Home</a>
            <a href="dataBarang.php"><i class="fas fa-box"></i> Data Barang</a>
            <a href="dataCustomer.php"><i class="fas fa-users"></i> Data Customer</a>
        </nav>


        <h1>Selamat Datang di Aplikasi Pencatatan Barang</h1>
        <p>
            Aplikasi ini dirancang untuk membantu Anda dalam mengelola data barang dan customer 
            secara mudah dan efisien. 
        </p>
        <p>
            Gunakan navigasi di atas untuk memulai:
            <ul>
                <li><b>Data Barang:</b> Kelola daftar barang, tambah data baru, dan hapus barang yang tidak diperlukan.</li>
                <li><b>Data Customer:</b> Kelola informasi pelanggan Anda.</li>
            </ul>
        </p>
        <img src="inventory.jpg" alt="Inventory Management" class="home-image">
        <p>Terima kasih telah menggunakan aplikasi kami!</p>
    </div>
</body>
</html>
