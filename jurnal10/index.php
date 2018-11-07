<?php
    session_start();
    if (isset($_SESSION['login'])) {
        header("location: user/dashboard.php");
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css\bootstrap.min.css"/>
</head>
<body>
<div class="container">
    <div class="row w-50 m-auto">
        <div class="col pt-3">
            <h1 class="text-center">Login</h1>
            <hr>
            <form method="post" action="proses.php?login=asu">
                <div class="form-group">
                    <label for="InputUsername">Username</label>
                    <input type="text" class="form-control" id="InputUsername" name="user" maxlength="20" required>
                </div>
                <div class="form-group">
                    <label for="InputPassword">Password</label>
                    <input id="InputPassword" type="password" class="form-control" name="pass"  minlength="6" required>
                </div>
                <center><input type="submit" class="btn btn-primary" name="submit" value="Submit"> <a href="register.php" class="btn btn-primary">Create User</a></center>
            </form>
        </div>
    </div>
</div>
</body>
</html>