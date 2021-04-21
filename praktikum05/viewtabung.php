<html>
    <head>
        <title>Praktikum 05</title>
    </head>
    <body>
        <p>DATA UKURAN TABUNG</p>
        <table border="1">
            <th>NAMA TABUNG</th>
            <th>DIAMETER</th>
            <th>TINGGI/th>
            <th>LUAS</th>

            <?php
                $myfile = fopen("datatabung.dat", "r") or die("File tidak dapat dibuka!");
                while(!feof($myfile)){
                    $data = fgets($myfile);
                    $pecah = explode(",", $data);
                    
                    echo "<tr><td height = '10'>".$pecah[0]."</td>
                    <td>".$pecah[1]."</td>
                    <td>".$pecah[2]."</td>
                    <td><a href = 'hitungluas.php?n=$pecah[0]&d=$pecah[1]&t=$pecah[2]'>view</a></td>
                    </tr>";
                }
                fclose($myfile);
            ?>
        </table>
    </body>
</html>