<?php
$koneksi = new mysqli ("localhost","root","","cobajwp2");
if($koneksi){
    echo "berhasil";
}else{
    echo "gagal";
}
?>