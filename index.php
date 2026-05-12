<?php
$page = $_GET['page'] ?? 'home';
?>

<!DOCTYPE html>
<html lang="uk">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TravelWorld - Турагенство</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<header>
<h1>TravelWorld</h1>

<nav>
<a href="index.php">Головна</a>
<a href="index.php?page=tours">Тури</a>
<a href="index.php?page=contact">Контакти</a>
<a href="index.php?page=cart">Кошик</a>
</nav>
</header>

<section>

<?php
if ($page == "tours") {
    include "pages/tours.php";
} elseif ($page == "contact") {
    include "pages/contact.php";
} elseif ($page == "cart") {
    include "pages/cart.php";
} else {
?>

<h1>TravelWorld</h1>
<h2>Ласкаво просимо!</h2>
<p>Наше турагенство допоможе вам знайти найкращі подорожі.</p>
<button onclick="showMessage()">Дізнатись більше</button>

<?php
}
?>

</section>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="script.js"></script>
<script src="cart.js"></script>

</body>
</html>