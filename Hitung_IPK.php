<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hitung IPK</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #ccc;
        }
        input[type="number"] {
            width: 80px;
            padding: 5px;
        }
        .hasil {
            margin-top: 20px;
            padding: 15px;
            background-color: #e0ffe0;
            border-radius: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Hitung IPK</h2>
        <form method="post">
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <p>Mata Kuliah <?= $i ?>:
                    Nilai: <input type="number" name="nilai[]" min="0" max="100" required>
                    SKS: <input type="number" name="sks[]" min="1" max="6" required>
                </p>
            <?php endfor; ?>
            <button type="submit">Hitung IPK</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nilai = $_POST['nilai'];
            $sks = $_POST['sks'];
            $total_bobot = 0;
            $total_sks = 0;

            function konversiNilai($n) {
                if ($n >= 85) return 4.0;
                elseif ($n >= 75) return 3.5;
                elseif ($n >= 65) return 3.0;
                elseif ($n >= 55) return 2.5;
                elseif ($n >= 45) return 2.0;
                else return 0.0;
            }

            for ($i = 0; $i < count($nilai); $i++) {
                $bobot = konversiNilai($nilai[$i]);
                $total_bobot += $bobot * $sks[$i];
                $total_sks += $sks[$i];
            }

            $ipk = $total_bobot / $total_sks;
            echo "<div class='hasil'>IPK Anda: " . number_format($ipk, 2) . "</div>";
        }
        ?>
    </div>
</body>
</html>
