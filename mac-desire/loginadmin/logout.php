<?php
session_name("SessionID");
session_start();
session_destroy();
// Redirect to the login page:
header('Location: ../loginadmin/');
?>
