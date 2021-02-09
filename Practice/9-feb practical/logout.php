<?php

require 'core1.php';
session_destroy();
header('Location:'.$http_referer);
?>
 