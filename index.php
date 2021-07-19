<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username =='Abishek' and $password =='aaaaa')
    {
        include 'test.html';
    }
    else
    {
        echo 'you are not the admin';
    }
?>