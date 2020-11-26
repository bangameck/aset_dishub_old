<?php
session_start();
//$db->query("UPDATE users SET online='N' WHERE username='$_SESSION[username]'");
session_destroy();
javascript('lgn','redirect');
?>