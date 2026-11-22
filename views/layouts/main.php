<?php
/**
 * views/layouts/main.php
 * Kerangka HTML untuk semua halaman di views/pages/.
 *
 * Cara pakai di halaman (contoh views/pages/landing.php):
 *     $pageTitle  = "VOLTARA - Beranda";
 *     $pageCss    = "landing.css";
 *     $activePage = "beranda";
 *     ob_start();
 *     ... isi halaman (HTML) ...
 *     $content = ob_get_clean();
 *     require __DIR__ . '/../layouts/main.php';
 *
 * Variabel opsional: $showHeader (default true), $showFooter (default true)
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$base       = '/voltara-app';                 // nama folder proyek di htdocs
$pageTitle  = $pageTitle  ?? 'VOLTARA';
$pageCss    = $pageCss    ?? 'landing.css';
$activePage = $activePage ?? '';
$content    = $content    ?? '';
$showHeader = $showHeader ?? true;
$showFooter = $showFooter ?? true;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $base ?>/public/css/layout.css">
<link rel="stylesheet" href="<?= $base ?>/public/css/<?= htmlspecialchars($pageCss) ?>">
</head>
<body>

<?php if ($showHeader) require __DIR__ . '/../components/header.php'; ?>

<main>
    <?= $content ?>
</main>

<?php if ($showFooter) require __DIR__ . '/../components/footer.php'; ?>

</body>
</html>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');
    const navbar = document.querySelector('.navbar');

    if (!menuToggle || !navMenu || !navbar) return;

    // Toggle hamburger
    menuToggle.addEventListener('click', function (event) {
        event.stopPropagation();

        const isOpen = navMenu.classList.toggle('active');

        menuToggle.setAttribute(
            'aria-expanded',
            isOpen ? 'true' : 'false'
        );
    });

    // Mencegah klik di dalam menu dianggap klik di luar
    navMenu.addEventListener('click', function (event) {
        event.stopPropagation();
    });

    // Klik di luar navbar untuk menutup menu
    document.addEventListener('click', function (event) {

        if (!navbar.contains(event.target)) {
            navMenu.classList.remove('active');
            menuToggle.setAttribute('aria-expanded', 'false');
        }

    });

    // Menutup setelah link dipilih
    navMenu.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            navMenu.classList.remove('active');
            menuToggle.setAttribute('aria-expanded', 'false');
        });
    });

});
</script>
