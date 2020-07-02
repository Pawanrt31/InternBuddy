<?php

//logout.php

session_start();

session_destroy();

header('location:interns_login.php');

?>