<?php
session_start();
session_destroy(); // Удаление всех данных сессии
header('Location: login.php');
exit();
?>
