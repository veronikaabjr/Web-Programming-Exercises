<?php
    $namafile = "datamhs.dat";
    $myfile = fopen($namafile, "a") or die("File tidak dapat dibuka!");
    fwrite($myfile, "\n");
    fwrite($myfile, $_POST['nim']);
    fwrite($myfile, "|");
    fwrite($myfile, $_POST['nama']);
    fwrite($myfile, "|");
    fwrite($myfile, $_POST['tgllhr']);
    fwrite($myfile, "|");
    fwrite($myfile, $_POST['tmptlhr']);

    fclose($myfile);
?>
<?php
    $namafile = "datamhs.dat";
    $myfile = fopen($namafile, "r") or die ("File tidak dapat dibuka!");
    echo fread ($myfile, filesize($namafile));
    fclose($myfile);
?>