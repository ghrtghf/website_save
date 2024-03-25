<?php 
    require_once  '../php/healpers.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
</head>
<body>
    <form action="../php/sign.up.php" method="post" enctype="multipart/form-data">
        <input name="login" placeholder="login" type="text">
        <input name="password" placeholder="password" type="text">
        <input name="accept_password" placeholder="accept password" type="text">
        <input name="email" placeholder="email" type="text">
        <input name="avatar" placeholder="avatar" type="file" accept="image/png, image/jpeg">
        <input type="submit">
    </form>
    <?php 
    print_r($_SESSION['validation'])
    ?>
</body>
</html>