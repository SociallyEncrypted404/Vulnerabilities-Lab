<?php

include "config.php";

$id = $_GET['id'];

$q = "SELECT * FROM users WHERE id=$id";

$r = $conn->query($q);

$row = $r->fetch_assoc();

echo "username: " . $row['username'] . "<br>";

echo "password: " . $row['password'];

?>
