<html>
    <head>
        <title>
            Praktikum 4 Pmograman Web
        </title>
    </head>
    <body>
        <p>DATA MAHASISWA</p>
        <table border="2">
            <th>NIM</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Usia</th>
            <?php
                $file_setting =  fopen("datamhs.dat", "r");

                function hitungUsia($tglLahir, $tglSekarang){
                    $dmy1 = explode("-", $tglLahir);
                    $dateL = $dmy1[2];
                    $monthL = $dmy1[1];
                    $yearL = $dmy1[0];

                    $dmy2 = explode("-", $tglSekarang);
                    $dateS = $dmy2[2];
                    $monthS = $dmy2[1];
                    $yearS = $dmy2[0];

                    $jd1 = GregorianToJD($monthL, $dateL, $yearL);
                    $jd2 = GregorianToJD($monthS, $dateS, $yearS);

                    $usia = ceil(($jd2 - $jd1)/365);            
                    return $usia;
                    }
                    $i = 0;

                    while(!feof($file_setting)){
                        $line_of_text = fgets($file_setting);
                        $parts = explode('|', $line_of_text);
                        echo "<tr>
                                <td height = '100'>$parts[0]</td>
                                <td>$parts[1]</td>
                                <td>$parts[2]</td>
                                <td>$parts[3]</td>
                                <td>".hitungUsia($parts[2], date("Y-m-d"));"/td>
                            </tr>";
                            $i++;
                        }
                        fclose($file_setting);
                    ?>
        </table>
        <?php
            echo "<br>";
            echo "Jumlah Data :".$i;
        ?>
    </body>
</html>