<?php

include_once('../db/db.php');

$name = json_decode(file_get_contents('php://input'));
$sql = 'INSERT INTO todo(name) VALUES(:name)';

$statement = $pdo->prepare($sql);

$statement->execute([
	':name' => $name
]);

?>