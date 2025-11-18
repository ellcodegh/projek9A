<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <title>Test Penyisipan PHP Pada HTML</title>
<body>
    Kapal Asing, Silakan identifikasikan diri Anda! <br>
    <?php
    // Berikut ini adalah inisiasi beberapa variabel
    $namad  = "Bejo";
    $namat  = "Noto";
    $namab  = "Negoro";
    ?>
    <b>Ini adalah kapal Federasi Planet USS Enterprise.<br>
    <?php
            print("Saya $namad,$namat,$namab,kapten kapal.</b>");
            echo "<br>";
            print "$namad,$namat,$namab";
        echo "<br>";
        echo "saya : ", $namad,$namat,$namab;
        ?>

        <h1>A12.2024.07153 / Muhammad Rafael Rasya N</h1>

    </body>
</html>

 Program ini error karena kurangnya tanda (") pada baris no 22, sehingga
 menyebabkan syntax error, dan program tidak jalan semestinya.