<?php

// membuat user dan pass default
$Username = "viyana";
$Password = "yoioi";

// pengecekkan apakah ada data yang dikirim menggunakan method post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $Username && $password === $Password) {
        header("Location: home.php");
        exit();
    } else {
        $errorMsg = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('img/kopi.png') no-repeat center top fixed;
            background-size: cover;
        }

        .card {
            background-color: #8B4513;
            color: white;
            border: none;
        }
    </style>
</head>

<body class="bg-secondary-subtle">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-5">
            </div>
        </div>
    </div>

    <div class="text-center">
        <div class="mb-3">
            <img src="img/logo.jpg" alt="Logo" class="rounded-circle" style="width: 100px; height: 100px;">
        </div>
        <h6 class="fw-bold">Registrasi User</h6>

        <div class="card p-4 shadow-sm mt-3" style="max-width: 300px; margin: auto;">
            <form method="POST" action="">
                <div class="mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="register.php" class="btn text-black px-3 py-1 fs-6" style="background-color:  white;">Register</a>
                    <button type="submit" class="btn text-black px-3 py-1 fs-6" style="background-color:  white;">Login</button>
                </div>
            </form>
        </div>

        <!-- Peringatan untuk user atau pass salah -->
        <?php if (isset($errorMsg)) : ?>
            <p class="text-danger mt-3"> <?= $errorMsg; ?> </p>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>