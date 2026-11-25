<?php

declare(strict_types=1);

require_once __DIR__ . '/classes/shape.php';

$shape = new Shape();
$shape->setColor('red');
$shape->setX(50);
$shape->setY(50);

$size = 100;
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shape</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
        }

        .shape {
            position: absolute;
            top: 50%;
            left: 50%;
            width: <?= $size ?>px;
            height: <?= $size ?>px;
            background-color: <?= htmlspecialchars($shape->getColor(), ENT_QUOTES, 'UTF-8') ?>;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <div class="shape" aria-label="Rood vierkant"></div>
</body>
</html>