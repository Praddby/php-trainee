<?php
session_start();

include_once("db/db.php");

$title = "task 2";
$footer_logo = "Hawking School";

include("inc\\header.php");

echo "<main class=\"content\">\n";
include("inc\\content.php");
echo "</main>\n";

include("inc\\footer.php");