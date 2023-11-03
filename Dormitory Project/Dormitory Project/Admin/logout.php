<?php

include('../config/constraints.php');

session_destroy();

header('location:'.SITEURL.'Adim/login.php');

?>