<?php
    $host = "localhost";
    $user = "root";
    $password = "1234";
    $dbName = "test";

    $con = new mysqli($host, $user, $password, $dbName);

    if (mysqli_error($con)) {
        echo "MYSQL 접속 실패!", "<br>";
        echo "오류 원인 : ", mysqli_error();
        exit();
    }

    else {
        echo "MYSQL 접속 성공!";
    }

    mysqli_close($con);




?>