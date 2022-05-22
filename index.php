<?php

$title = "task 1";
$content = "Content";
$menu_list = ['Home', 'About', 'Contacts'];
$footer_logo = "Hawking School";

include("inc\\header.php");

echo "<main class=\"content\">\n";
include("inc\\content.php");
echo "</main>\n";

include("inc\\footer.php");