<?php
    session_start();
        if(!isset($_POST['angka'])){
            $_POST['random']=rand(0,100);
        }else if($_POST['angka']<$_POST['random']){
            echo "Waaah… masih salah ya, bilangan tebakan Anda terlalu rendah.";
        }else if($_POST['angka']>$_POST['random']){
            echo "Waaah… masih salah ya, bilangan tebakan Anda terlalu tinggi.";
        }else if($_POST['angka']==$_POST['random']){
            echo "Selamat ya… Anda benar, saya telah memilih bilangan ".$_POST['angka'];
            echo "<br>";
            echo "<a href='tebakangka.php'>Ulangi lagi</a>";
        }
    session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Game Tebak Angka Bilangan Bulat</title>
</head>
<body>
    <p>Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>
    <form method="POST" action="">
        <input type="text" name="angka">
        <input type="hidden" name="random" value="<?php echo $_POST['random'];?>">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>