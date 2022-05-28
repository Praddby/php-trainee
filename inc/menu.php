<?php
    $menuList = $pdo->query("SELECT `value` FROM menu");

    foreach($menuList as $index => $row) {
        if ($index === 0) {
            echo "<li class=\"menu-item menu-item--active\">{$row['value']}</li>";
        } else {
            echo "<li class=\"menu-item\">{$row['value']}</li>";
        }
    }