<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <div id="frm">
            <form action="process_login.php" method="POST">
                <p>
                    <label>Email :</label>
                    <input type="text" id="email" name="email" />
                </p>
                <p>
                    <label>Password :</label>
                    <input type="password" id="pass" name="pass" />
                </p>
                <p>
                    <input type="submit" id="btn" name="Login" />
                </p>
            </form>
        </div>
    </body>
</html>