<!DOCTYPE html>
<html>
    <head>
        <title>Pemrograman PHP dengan Array</title>
    </head>
    <body>
        <?php
            $nama[1]="Raihan";
            $nama[2]="Muhammad";
            $nama[3]="Muyassar";
            echo $nama[1] . $nama[2] . $nama[3];
            echo"<br>";
            $jum_array = count($nama);
        echo "jumlah elemen array = ". $jum_array;

        ?>
    </body>
</html>