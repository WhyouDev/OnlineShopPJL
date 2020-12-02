<?php

    $server     = "localhost";
    $user       = "root";
    $password   = "123";
    $database   = "online_shop" ;

    $connector = mysqli_connect($server,$user, $password, $database) OR DIE("Sorry, the connection to the database failure!");