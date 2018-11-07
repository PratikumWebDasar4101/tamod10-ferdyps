<!-- <!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <center>
    <h2>Registrasi</h2>
    <hr>
    <form method="post" action="proses.php?register=registrasi">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="user" maxlength="20" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" minlength="6" required></td>
            </tr>
            <tr>
                <td>Konfirmasi Password</td>
                <td><input type="password" name="confirmpass" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
        </center>
    </form>
</body>
</html> -->
<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
    <link rel="stylesheet" href="css\bootstrap.min.css"/>
</head>
<body>
<div class="container">
    <div class="row w-50 m-auto">
        <div class="col pt-3">
            <h1 class="text-center">Login</h1>
            <hr>
            <form method="post" action="proses.php?register=registrasi">
                <div class="form-group">
                    <label for="InputUsername">Username</label>
                    <input type="text" class="form-control" id="InputUsername" name="user" maxlength="20" required>
                </div>
                <div class="form-group">
                    <label for="InputPassword">Password</label>
                    <input id="InputPassword" type="password" class="form-control" name="pass"  minlength="6" required>
                </div>
                <div class="form-group">
                    <label for="InputConfirmPassword">Konfirmasi Password</label>
                    <input id="InputConfirmPassword" type="password" class="form-control" name="confirmpass"  minlength="6" required>
                </div>
                <center><input type="submit" class="btn btn-primary" name="submit" value="Submit"></center>
            </form>
        </div>
    </div>
</div>
</body>
</html>