<?php
require_once __DIR__ . '/../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data-Star with PHP</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <script type="module" src="./assets/js/datastar.js"></script>
</head>

<body>
    <div class="container" data-signals='{"count": 0}'>
        <h1>PHP and Data-Star Boilerplate</h1>
        <p>Current count: <span data-text="$count">0</span></p>
        <button data-on-click="@post('./api.php/increment')">Increment</button>
        <button data-on-click="@post('./api.php/decrement')">Decrement</button>

        <?php include __DIR__ . '/../src/templates/components/my_component.php'; ?>

    </div>
</body>

</html>