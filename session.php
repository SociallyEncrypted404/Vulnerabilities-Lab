<?php

session_start();

$_SESSION['role'] = "admin";

echo "session id: ";

echo session_id();

?>
