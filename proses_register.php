<?php
include "koneksi.php";

if(isset($_POST['kirim'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $pengacak = "p3ng4c4k";
    $password_acak = md5($pengacak . md5($password) . $pengacak);
    $level = "user"; // Anda harus menentukan level user yang sesuai

    if(!empty($username) && !empty($password) && !empty($nama)) {
        $query = "INSERT INTO tb_user (username, password, nama, level) VALUES ('$username', '$password_acak', '$nama', '$level')";
        $hasil = mysqli_query($conn, $query);

        if($hasil) {
            echo "Registrasi User Berhasil<br>";
            echo "<a href='login.html'>Login User</a>"; 
        } else {
            echo "Registrasi User Gagal: " . mysqli_error($conn);
        }
    } else {
        echo "Registrasi User Gagal: Harap isi semua field.";
    }
} else {
    echo "Registrasi User Gagal: Form tidak dikirim.";
}
?>
