<?php
session_start();
unset($_SESSION["valid_id"]);
unset($_SESSION["valid_user"]); 
header("Location: index.html");
?>