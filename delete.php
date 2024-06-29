<?php
include "koneksi.php";

if(isset($_GET['password'])){ // Ubah pengecekan parameter dari 'kode' menjadi 'password'
    $password = $_GET['password']; // Ubah variabel yang diambil dari 'kode' menjadi 'password'
    $query_delete = "DELETE FROM tb_user WHERE password='$password'"; // Sesuaikan kondisi hapus dengan password
    
    $hasil = mysqli_query($conn, $query_delete);
    
    if($hasil){
        header('location: manage_user.php');
    } else {
        echo "Gagal Hapus Data";
    }
} else {
    echo "Parameter 'password' tidak tersedia";
}
?>
