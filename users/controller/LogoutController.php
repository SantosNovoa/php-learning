<?php

// start the session
session_start();


// flush the previous session variables
session_unset();
session_destroy();

header("Location: ../../index.php?logout=success");
exit();
