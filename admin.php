<!DOCTYPE html>
<html lang="en">
<?php
// Memanggil file koneksi ke database
include "koneksi.php";

// Query untuk mengambil jumlah pengguna terdaftar
$query = "SELECT COUNT(*) AS total_users FROM tb_user";
$result = mysqli_query($conn, $query);

// Mengambil hasil query
$row = mysqli_fetch_assoc($result);
$total_users = $row['total_users'];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #1d5713;
            padding: -5px;
            color: white;
            position: sticky;
            top: 0;
        }

        .navbar img {
            margin-left: 20px;
        }

        .navbar h2 {
            margin-right: 1100px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        .navbar a:hover {
            color: #9e9e9e;
        }

        .content-container {
            display: flex;
            flex: 1;
            /* Membuat content-container mengambil sisa ruang yang tersedia */
        }

        .sidebar {
            width: 200px;
            background-color: #2d831d;
            padding-top: 20px;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 10px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #50b83c;
        }

        .content {
            flex: 1;
            /* Membuat content mengambil sisa ruang yang tersedia */
            padding: 20px;
        }
        .card {
      width: 300px; /* Lebar kartu */
      border: 1px solid #ccc; /* Border kartu */
      border-radius: 8px; /* Border radius */
      box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Efek bayangan */
      margin: 20px; /* Jarak antara kartu */
    }

    /* Style untuk gambar dalam kartu */
    .card-img-top {
      width: 100%; /* Lebar gambar */
      border-top-left-radius: 8px; /* Border radius sudut kiri atas */
      border-top-right-radius: 8px; /* Border radius sudut kanan atas */
    }

    /* Style untuk konten dalam kartu */
    .card-body {
      padding: 20px; /* Padding konten dalam kartu */
    }

    /* Style untuk judul dalam kartu */
    .card-title {
      font-size: 24px; /* Ukuran font judul */
      margin-bottom: 10px; /* Jarak antara judul dan teks */
    }

    /* Style untuk teks dalam kartu */
    .card-text {
      font-size: 16px; /* Ukuran font teks */
    }
    a {
        color: black;
        text-decoration: none;
    }
    </style>
    <link rel="icon" type="image/x-icon" href="logo.png" />
    <title>Halo admin</title>
</head>

<body>

    <div class="container">

        <div class="navbar">
            <img src="logo.png" alt="" width="60" height="60">
            <h2>GZ Pedia</h2>
            <a href="#">Logout</a>
        </div>

        <div class="content-container">
            <div class="sidebar">
                <a href="manage_user.php">Manage User</a>
                <a href="manage kategori.html">Manage Kategori</a>
                <a href="#">Manage Artikel</a>
                <a href="#">Manage Komentar</a>
                <a href="#">Manage Chat</a>
            </div>
            <div class="content">
                <h2>Selamat Datang Kembali Admin !</h2>
                <a href="manage_user.php">
                <div class="card">
    <div class="card-body">
        <h5 class="card-title">Jumlah Pengguna Terdaftar</h5>
        <p class="card-text"><b><?php echo $total_users; ?> Pengguna</b></p>
    </div>
</div>
</a>

                  </div>                  
            </div>
        </div>
    </div>

</body>

</html>
