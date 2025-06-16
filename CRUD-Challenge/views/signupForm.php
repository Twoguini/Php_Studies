<div>
  <?php
    if($_POST && key_exists("action", $_POST) && $_POST['action'] === "Create") {
      include_once "../controller/userController.php"; 
      createUser($_POST['name'], $_POST['email'], (key_exists('keepConnected', $_POST)? $_POST['keepConnected']:false), $_POST['pass']);
    }
  ?>
  <h1>Sing Up</h1>
  <form action="" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="CrateName" require>
    <label for="email">Email</label>
    <input type="email" name="email" id="CrateEmail" require>
    <label for="keepConnected">Keep Connected</label>
    <input type="checkbox" name="keepConnected" id="CrateKeepConnected">
    <label for="pass">Password</label>
    <input type="password" name="pass" id="CratePass" require>
    <input type="hidden" name="action" value="Create">
    <input type="submit" value="Submit">
  </form>
</div>