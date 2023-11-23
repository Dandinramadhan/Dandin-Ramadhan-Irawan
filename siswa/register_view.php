<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Register Form</title>
</head>
<body>
    <div class="container">
        <form action="controller/register.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p><br>
            <div class="input-group">
                <input type="text" placeholder="nama" name="nama" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <select name="role" class="role" required>
                    <option value="" disabled selected>Pilih Role dari User</option>
                    <option value="admin">Admin</option>
                </select>
                <div class="input-group">
                    <button name="submit" class="btn">Register</button>
                </div>
                <p class="login-register-text">Anda suah punya akun? <a href="index.php">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>