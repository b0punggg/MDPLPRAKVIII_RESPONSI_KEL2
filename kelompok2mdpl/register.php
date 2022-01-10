<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="assets/css/register.css">
    </head>

    <body>
        <div class="container">
          <h1>Register</h1>
            <form action="proses_register.php" method="POST" name="form1">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">Alamat Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Masukkan email">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukkan username">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" value="Daftar" name="daftar">Register</button>
                    <div class="form-footer mt-2">
                        <p> Sudah punya account? <a href="login.php">Login</a></p>
                    </div>
                </form>
        </div>
    </body>
</html>
