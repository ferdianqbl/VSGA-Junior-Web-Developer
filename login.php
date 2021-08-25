<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <h1 class="text-center mt-5">Admin Perpustakaan</h1>
    <form method="POST" action="cek_login.php">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="mb-3">
                        <label for="user" class="form-label">Username</label>
                        <input type="text" class="form-control" id="user" name="user">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass">
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary" name="submit">Log in</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>