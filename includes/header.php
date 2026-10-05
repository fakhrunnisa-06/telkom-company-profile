<?php
if (!isset($pageTitle)) {
    $pageTitle = 'Telkom University';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header class="site-header">
    <div class="container nav-wrap">
        <a class="brand" href="index.php">Telkom University</a>

        <nav class="nav">
            <a href="index.php">Beranda</a>
            <a href="profile.php">Profil</a>
            <a href="programs.php">Program Studi</a>
            <a href="news.php">Berita</a>
            <a href="contact.php">Kontak</a>
        </nav>
    </div>
</header>

<main>