<div class="popUpBD hidden" id="popup">
  <?php
    if($_POST && key_exists("action", $_POST) && $_POST['action'] === "Update") {
      include_once "../controller/userController.php"; 
      updateUser($_POST['id'], $_POST['name'], $_POST['email'], (key_exists('keepConnected', $_POST)? $_POST['keepConnected']:false), $_POST['pass']);
    }
  ?>
  <link rel="stylesheet" href="../style/editPopUp.css">
  <div class="editInfoBox">
    <button class="closeBTN" onclick="closeUpdateWindow()">X</button>
    <h1>Edit Info</h1>
    <form action="" method="post">
      <label for="name">Name</label>
      <input type="text" name="name" id="EditName" require>
      <label for="email">Email</label>
      <input type="email" name="email" id="EditEmail" require>
      <label for="keepConnected">Keep Connected</label>
      <input type="checkbox" name="keepConnected" id="EditKeepConnected">
      <label for="pass">Password</label>
      <input type="password" name="pass" id="EditPass" require>
      <input type="hidden" name="id" id="EditUserId">
      <input type="hidden" name="action" value="Update">
      <input type="submit" value="Submit">
    </form>
  </div>
</div>