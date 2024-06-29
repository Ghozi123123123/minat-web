<?php
$host="localhost";
$user="root";   
$pass="";
$database="db_users";
$conn=mysqli_connect($host,$user,$pass,$database);

if(!$conn){
    echo "KONEKSI GAGAL !!";
}else{
     "KONEKSI BERHASIL";
}
?>