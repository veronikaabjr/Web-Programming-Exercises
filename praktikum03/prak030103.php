<html>
<body>
    <?php
        function buatBintangLagi($n){
            echo "<pre>";
            for ($i = 0; $i <= $n; $i++){
                for ($j = $n - $i; $j > 0; $j--){
                    echo "*";
                }
                echo "\n";
            }
            echo "</pre>";
        }
        buatBintangLagi(4);
        buatBintangLagi(5);
    ?>
</body>
</html>