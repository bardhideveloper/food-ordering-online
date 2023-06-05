<?php

//destroy the session and logout
session_start();
session_destroy();
header("Location: ../../index.php");

?>