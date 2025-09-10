<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume Kubus - Haikal</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>SELAMAT DATANG DI WEB HAIKAL</header>

    <nav>
        <h3>Hitung Kubus</h3>
    </nav>

    <div class="op">
        <div class="pp">
            <div class="pl">
                <img src="ikal.jpg" alt="Haikal">
                <h4>Haikal Hanan Adela</h4>
            </div>

            <div class="kk">
                <a href="index.html">Home</a>
                <a href="profile.html">Profile</a>
                <a href="mediasosial.html">Media Sosial</a>
                <a href="hitungkubus.php">Hitung Kubus</a>
            </div>
        </div>

        <div class="opl">
            <h2>Hitung Volume Kubus</h2>
            <form method="post">
                <label>Masukkan sisi kubus (cm):</label>
                <input type="number" name="sisi" min="1" required>
                <button type="submit" name="hitung">Hitung</button>
            </form>

            <?php
            if (isset($_POST['hitung'])) {
                $sisi = $_POST['sisi'];
                $volume = pow($sisi, 3);
                echo "<div class='opk'>Volume kubus dengan sisi <b>$sisi cm</b> adalah <strong>$volume cm<sup>3</sup></strong>.</div>";
            }
            ?>
        </div>
    </div>

</body>
</html>
