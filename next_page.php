<?php
    session_start();
    echo "<html>";

    $sid = session_id();
    echo "Season ID returned by session_id(): ".$sid"\n ";
    $sid = SID;
    echo "Season ID returned by SID: ".$sid."\n";

    $myLogin = $_SESSION["myLogin"];
    echo "Value of myLogin hs been retrieve: ".$myLogin."\n ";

    $myColor = $_SESSION["myColor"];
    echo "Value of MyColor has been retrieved: ".$myColor."\n ";

    echo "</html>\n";
?>