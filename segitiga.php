<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="bg2" style="margin-top:50px;padding-top: 12px;">
        <div class="container">
        <!-- <div>Luas Segitiga</div> -->
        <a href="segitiga.php" class="box1"><span style="margin-left: 30px;">Luas Segitiga</span></a>
        <!-- <div class="container3">Luas Persegi Panjang</div> -->
        <a href="persegipanjang.php" class="container3">Luas Persegi Panjang</a>
        </div>
        <div class=" bg3" style="margin-top:50px">
            <form method="post" action="segitiga.php">
            <div class="LPP">Hitung Luas Segitiga</div>
            <label class="label">Nilai Alas</label>
            <label class="label2" style="font-size: 20px;margin-left: 195px;">Nilai Tinggi</label><br>
            <input class="inp" type="text" name="alas">
            <input class="inp" type="text" name="tinggi"><br><br><br>
            <input type="submit" name="kirim" class="tombol" style="font-size:20px;color:white;height: 50px;width: 280px;margin-left: 30px;background-color: blue;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px;border: transparent;">
        </form><br>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST ['alas'])) {
            $alas = 0;
        } else{
            $alas = $_POST ['alas'];
        }

        if (empty($_POST ['tinggi'])) {
            $tinggi = 0;
        }else {
            $tinggi = $_POST ['tinggi'];
        }
        $hasil =($alas / 2) * $tinggi;
        echo "Luas segitiga adalah " . $hasil;
    }

    ?>
    </div>

</body>
</html>