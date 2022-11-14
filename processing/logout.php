<?php
session_start();
session_destroy();
header('Location: http://localhost/task-website/login.php ');

?>