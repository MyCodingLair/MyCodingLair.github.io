<?php
session_start();

$_SESSION['sessionUserName'] = NULL;
session_destroy();

header("Location: index.html");


?>
