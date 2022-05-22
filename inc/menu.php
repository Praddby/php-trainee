<?php

    foreach($menu_list as $index => $item) {
        if ($index === 0) {
            echo "<li class=\"menu-item menu-item--active\">$item</li>";
        } else {
            echo "<li class=\"menu-item\">$item</li>";
        }
    }