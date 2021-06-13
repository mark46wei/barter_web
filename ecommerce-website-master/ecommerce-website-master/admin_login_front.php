<!DOCTYPE html>
<html>
<head>
<title>admin</title>
</head>
<body>

<form action = "admin_login.php" method = "post">
  <label for = "account">Account</label>
  <input type = "text" id = "account" name = "maccount"><br>
  <label for = "password">Password</label>
  <input type = "password" id = "password" name = "mpassword"><br>
  <button type = "submit">Login</button>
</form>

<style>
  * {
    margin: 5px;
  }
  body {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }
</style>
</body>
</html>
