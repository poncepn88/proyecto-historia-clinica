<?php
session_start();
session_destroy(); // Destruye todas las sesiones activas
header("Location: login.php"); // Redirige al login
exit();
?>