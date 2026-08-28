<?php
require_once "../config/database.php";
$result = mysqli_query($conn, "SELECT * FROM account");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People - Break Market</title>
    <link rel="stylesheet" href="person.css">
</head>
<body>
    <header>
        <a class="h1" href="../index.html">Break Market</a>
        <nav class="header">
            <a href="../market/market.html">Market</a>
            <a href="person.php" class="active">Person</a>
            <a>Price</a>
            <a>Subscribe</a>
        </nav>
    </header>

    <aside>
        <h1>Ads<br>Here</h1>
    </aside>

    <div class="space"></div>

    <div class="list-card">
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="card" onclick="window.location.href='detail.php?id=<?= $row['id'] ?>'">
                <div class="head-content random-color">
                    <div class="profile"></div>
                    <div class="flash-content">
                        <h3><?= htmlspecialchars($row["name"])?></h3>
                        <p><?= htmlspecialchars($row["role"])?></h3>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>

    <script>
        const elements = document.querySelectorAll(".random-color");

        elements.forEach(element => {
            const randomColor = "#" + Math.floor(Math.random() * 16777215)
                .toString(16)
                .padStart(6, "0");

            element.style.backgroundColor = randomColor;
        });
    </script>
</body>
</html>