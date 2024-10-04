<?php

    $account = $_GET['account'];
    $password = $_GET['password'];
    $check_cord = $_GET['code'];

    echo '帳號:' . $account . ', 密碼:' . $password . ', 驗證碼:' . $check_cord;
?>