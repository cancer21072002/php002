<?php
require_once "../global.php";
session_destroy();
header("location:" . $SITE_URL);
die;