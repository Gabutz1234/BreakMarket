<?php
require_once "../config/database.php";

$id = $_GET['id'];
$query = "SELECT * FROM account WHERE id = '$id'";

$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $row['name'] ?></title>
    <link rel="stylesheet" href="detail.css">
</head>
<body>
    <header>
        <button onclick="window.location.href='person.php'">
            kembali
        </button>
        <button>
            Edit Head
        </button>
    </header>
    <section>
        <div class="profile"></div>
        <article>
            <h1><?= $row['name'] ?></h1>
            <div class="role">
                <div class="highlight"></div>
                <h2><?= $row['role'] ?></h2>
            </div>
            <p><?= $row['email'] ?></p>
            <p>Age: <?= $row['age'] ?></p>
            <h2>Description</h2>
            <p><?= $row['description'] ?></p>
        </article>
    </section>
</body>
</html>