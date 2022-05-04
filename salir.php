<?php

    session_start();

    session_unset();

    $_SESSION['rol'] = 0;

    header('Location: index.php')

?>