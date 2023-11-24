<?php
session_start();

// Delete session and reset sign in status
session_unset();
session_destroy();

header('Location: login.php');
exit();
?>
