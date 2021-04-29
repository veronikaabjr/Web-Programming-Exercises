<?php
    $random = rand(1, 100);
    setcookie("angkaRandom", $random, time()+3*30*24*3600,"/");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Game Tebak Angka Bilangan Bulat</title>
</head>
<body>
    <h1>GAME TEBAK ANGKA</h1>
    <p>Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>
    <form method="POST" action="tebak.php">
        Bilangan tebakan anda :<input type="text" name="angka">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>