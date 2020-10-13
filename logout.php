<?php

    require './includes/common.php';

    session_unset();
    session_destroy();

    header('location: index.php');

?>