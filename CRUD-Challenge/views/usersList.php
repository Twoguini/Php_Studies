<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php 
    include_once "../controller/userController.php";
    $usersList = readUser();
  ?>
</head>
<body>
  <?php 
    foreach($usersList as $i) {
      echo "<a>". $i['password'] ."</a><br>";
    }
  ?>
</body>
</html>