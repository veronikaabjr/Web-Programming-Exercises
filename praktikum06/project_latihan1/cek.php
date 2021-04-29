<?php
    if (!isset($_COOKIE['namauser'])){
        echo "<p>Halaman yang anda tuju tidak dapat diakses!</p>";
        echo "<p>Silahkan <a href='login.html'>Login</a>!</p>";
        exit();
    }
?>
