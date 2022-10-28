<?php 
    include "header.php";
?>
<br>
<h2 align = "center">Selamat datang <?=$_SESSION['nama_siswa']?> di website Perpus Online.</h2>
<?php
    include "footer.php";
?>
<!-- session start digunakan untuk mengeksekusi session pada server kemudian menyimpannya pada browser -->
<!-- fetch array mengambil baris hasil sebagai array asosiatif(tulisan biasa) dan numeric (angka)
squery menjalankan instruksi atau argumen ke mysql
 method post mengirimkan data atau nilai langsung ke action untuk fi tampung tanpa menampilkan pada url
 sedangkan get menampilkan data nilai pada url kemudian ditampung oleh action
 num rows = menghitung bari -->