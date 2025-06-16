<div>
  <link rel="stylesheet" href="../style/usersList.css">
  <script src="../script/usersList.js"></script>
  <?php
    include_once "../views/editPopUp.php"; 
    include_once "../controller/userController.php";
    $usersList = readUser();
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
          <button onclick="updateUser(<?= $i['id'] . ',\'' . $i['name'] . '\'' . ',\'' . $i['email'] . '\'' . ',\'' . $i['password'] . '\''?>)">Edit</button>
          <button onclick="deleteUser(<?= $i['id'] ?>)">Delete</button>
        </div>
      </div>
    <?php endforeach?>
  </div>
</div>