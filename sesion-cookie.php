<?php
    session_start();

    $_SESSION["uye"]=[
        "kulanici_adi"=>"ayberk",
        "password"=>123
    ];

    //print_r($_SESSION);

    setcookie("uye[id]", 1 , time() + 60*5);
    setcookie("uye[kulanıcı_adı]", "ayberk", time() + 60*5);
    setcookie("uye[password]", 123, time() + 60*5);

    print_r($_COOKIE);
?>
