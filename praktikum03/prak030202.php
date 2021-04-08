<html>
<body>
    <?php
        function hitungDenda ($tglHarusKembali, $tglKembali){
            $dmy1 = explode("-", $tglHarusKembali);
            $dateHK = $dmy1[2];
            $monthHK = $dmy1[1];
            $yearHK = $dmy1[0];

            $dmy2 = explode ("-", $tglKembali);
            $dateK = $dmy2[2];
            $monthK = $dmy2[1];
            $yearK = $dmy2[0];

            $jd1 = GregorianToJD($monthHK, $dateHK, $yearHK);
            $jd2 = GregorianToJD($monthK, $dateK, $yearK);

            $selisih = $jd2 - $jd1;

            $totalDenda = $selisih * 3000;
            return $totalDenda;
        }
        echo "Besarnya denda adalah : Rp ".hitungDenda("2021-01-30", "2021-11-27");
    ?>
</body>
</html>