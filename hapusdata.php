<?php
include"koneksi.php";
$id= $_GET['id'];
$data= mysqli_query($koneksi,"DELETE FROM 202055202043_ where nim='$id'");

if($data){
    header('location:index.php');
}else{
    echo "Maaf Proses Mengubah Tidak Berhasil";

}
?>