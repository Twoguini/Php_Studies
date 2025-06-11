<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sing Up</title>
  <?php
    if($_POST) {
      include_once "../controller/userController.php"; 
      createUser();
    }
  ?>
</head>
<body>
  <h1>Sing Up</h1>
  <form action="" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" require>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" require>
    <label for="keepConnected">Keep Connected</label>
    <input type="checkbox" name="keepConnected" id="keepConnected">
    <label for="pass">Password</label>
    <input type="password" name="pass" id="pass" require>
    <input type="submit" value="Submit">
  </form>
</body>
</html>