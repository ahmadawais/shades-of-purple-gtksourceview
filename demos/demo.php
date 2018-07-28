<?php namespace Lrs\Sop;

/**
 * Demo for the Shades Of Purple color scheme.
 *
 * This file demonstrates some of the custom PHP styling available.
 * @author Lee Spendlove <lee.spendlove@gmail.com>
 * @version 1.0
 * @package demo
 */

// test object
$items = [
    "0" => [
        "title" => "Item 1"
    ],
    "1" => [
        "title" => "Item 2"
    ],
    "2" => [
        "title" => "Item 3"
    ],
    "3" => [
        "title" => "Item 4"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shades Of Purple Demo</title>
</head>
<body>
    <section>
        <h1>Shades Of Purple Demo</h1>
        <p>Custom color scheme for GtkSourceView compatible apps, e.g. Xed, Gedit.</p>
        <ul>
            <?php foreach ($items as $item) : ?>
                <li><?php echo $item["title"]; ?></li>
            <?php endforeach; ?>
        </ul>
    </section>
</body>
</html>
