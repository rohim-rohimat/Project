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
            <form method="post" action="persegipanjang.php">
            <div class="LPP">Hitung Luas Persegi Panjang</div>
            <label class="label">Nilai Panjang</label>
            <label class="label2" style="font-size: 20px;margin-left: 165px;">Nilai Lebar</label><br>
            <input class="inp" type="text" name="panjang">
            <input class="inp" type="text" name="lebar"><br><br><br>
            <input type="submit" name="kirim" style="font-size:20px;color:white;height: 50px;width: 280px;margin-left: 30px;background-color: blue;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px;border: transparent">
        </form><br>
        <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST ['panjang'])) {
        $panjang = 0;
    } else{
        $panjang = $_POST ['panjang'];
    }
    
    if (empty($_POST ['lebar'])) {
        $lebar = 0;
    }else {
        $lebar = $_POST ['lebar'];
    }
    $hasil = $panjang * $lebar;
    echo "Luas persegi panjang adalah " . $hasil;
}

?>
    </div>
        </div>

</body>
</html>