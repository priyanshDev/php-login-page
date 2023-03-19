<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
       <?php if (isset($_GET['error'])){ ?>
        <p class = "error"><?php echo $_GET['error']; ?></p>
        <?php } ?> 
        <label>User Name</label>
        <input type="text" name = "uname" placeholder="user name">
        <br>
        <label for="">Password</label>
        <input type="password" name="password" placeholder="user password">
        <br>
        <button type="submit"> Submit</button>
    </form>
</body>
</html>