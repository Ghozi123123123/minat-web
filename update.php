<?php
include "koneksi.php";

// Cek apakah ada data yang dikirim melalui metode POST
if(isset($_POST['submit'])){
    // Tangkap data yang dikirim melalui metode POST
    $id = $_POST['id']; // Tangkap id user yang akan diupdate
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Query untuk melakukan update data user berdasarkan id
    $query = "UPDATE tb_user SET username='$username', password='$password' WHERE password='$password'";

    $result = mysqli_query($conn, $query);

    // Cek apakah query berhasil dijalankan
    if($result){
        // Redirect ke halaman manage_user.php jika update berhasil
        header('Location: manage_user.php');
        exit; // Hentikan proses script
    } else {
        // Tampilkan pesan error jika query gagal dijalankan
        echo "Gagal melakukan update data: " . mysqli_error($conn);
    }
}

// Ambil data user berdasarkan id yang dikirim melalui parameter GET
$password = $_GET['password'];
$query = "SELECT * FROM tb_user WHERE password='$password'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result); // Ambil data dalam bentuk array asosiatif
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
            
    </style>
    <title>Update User</title>
</head>
<body>
    <h1>Update User</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $data['password']; ?>"> <!-- Input hidden untuk menyimpan id user -->
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" value="<?php echo $data['username']; ?>"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" value="<?php echo $data['password']; ?>"><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>
