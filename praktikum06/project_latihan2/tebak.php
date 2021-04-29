<?php
$x = $_POST['angka'];
$y = $_COOKIE['angkaRandom'];


if ($x < $y){
    echo "<h2>Waaah… masih salah ya, bilangan tebakan Anda terlalu rendah.</h2>";
    echo "<br>";
    echo "<form method='POST' action='tebak.php'>
            Bilangan tebakan anda : <input type='text' name='angka'>
            <input type='submit' name='submit' value='Submit'>
        </form>";
} elseif ($x > $y){
    echo "<h2>Waaah… masih salah ya, bilangan tebakan Anda terlalu tinggi.</h2>";
    echo "<br>";
    echo "<form method='POST' action='tebak.php'>
            Bilangan tebakan Anda : <input type='text' name='angka'>
            <input type='submit' name='submit' value='Submit'>
        </form>";
} else {
    echo "Selamat ya… Anda benar, saya telah memilih bilangan " .$y;
    setcookie("angkaRandom", "", time()-3*30*24*3600,"/");
    echo "<br>";
    echo "<a href='tebakangka.php'>ulangi lagi</a>";
}
?>