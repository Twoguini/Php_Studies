<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/usersList.css">
  <link rel="stylesheet" href="../style/editPopUp.css">
  <script src="../script/usersList.js"></script>
  <title>Document</title>
  <?php 
    include_once "../controller/userController.php";
    $usersList = readUser();
  ?>
</head>
<body>
  <?php 
    include_once "../views/editPopUp.php";
  ?>
  <h1>Usuários</h1>
  <div class="userCardList">
    <?php foreach($usersList as $i): ?>
      <div class="userCard">
        <div class="userInfo">
          <a><?= $i['name'] ?></a> <br>
          <a><?="Email: ". $i['email'] ." - Senha: ". $i['password'] ." - KeepConnected: ". (boolval($i['keepConnected'])? 'true' : 'false')?></a>
        </div>
        <div class="actionButtons">
          <button>Edit</button>
          <button onclick="deleteUser(<?= $i['id'] ?>)">Delete</button>
        </div>
      </div>
    <?php endforeach?>

  </div>
</body>
</html>