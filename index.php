<!Doctype html>
    <body>
        <div class="center">
            <form action="index.php" method="POST">
                <b>Username:</b><input type="text" name="username"><br>
                <b>Password:</b><input type="password" name="password"><br>
                <input type="submit">
            </form>
        </div>
    </body>
</html>
<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username =='Abishek' and $password =='aaaaa')
    {
        echo '<br/>';
        echo 'Welcome '.$username;
    }
    else
    {
        echo 'you are not the admin';
    }
?>