<?php
    
    include 'server/connection.php';

    session_start();

    $id = isset($_GET['user_id']) ? $_GET['user_id'] : '';

    $_SESSION['user_id'] = "$id";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <link rel="stylesheet" href="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <div class="box">
        <div class="container">
            <div class="top">
                <span>UPDATE</span>
                <h5>ID Akun: <?php echo $_SESSION['user_id']; ?></h5>
            </div>

            <form method="POST" action="actionUpdate.php">
                <div class="input">
                    <input type="text" name="user_name" class="form-control" placeholder="Username">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input">
                    <input type="email" name="user_email" class="form-control" placeholder="Email">
                    <i class="bx bx-envelope"></i>
                </div>
                <div class="input">
                    <input type="password" name="user_password" class="form-control" placeholder="Password">
                    <i class="bx bx-key"></i>
                </div>
                <div class="input">
                    <input type="text" name="user_phone" class="form-control" placeholder="Phone">
                    <i class="bx bx-phone"></i>
                </div>
                <div class="input">
                    <input type="text" name="user_address" class="form-control" placeholder="Address">
                    <i class="bx bx-house"></i>
                </div>
                <div class="input">
                    <input type="text" name="user_city" class="form-control" placeholder="City">
                    <i class="bx bx-building"></i>
                </div>
                <button href="actionUpdate.php?user_id=<?php echo $_SESSION['user_id']; ?>"
                 type="submit" class="btn btn-primary">Update</button>
                <a class="btn btn-primary mt-3" href="welcome.php" role="button">Back</a>
            </form>
        </div>
    </div>
</body>
</html>