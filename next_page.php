<?php
    session_start();
    echo "<html>";

    $myLogin = $_SESSION["myLogin"];
    echo "Value of myLogin hs been retrieve: ".$myLogin."\n ";

    $myColor = $_SESSION["myColor"];
    echo "Value of MyColor has been retrieved: ".$myColor."\n ";

    echo "</html>\n";
?>