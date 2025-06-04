<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chalenge $_Get - $_Post</title>
</head>
<body>
  <section>
    <h1>$_GET:</h1>
    <?php
      if($_GET) {
        include "./get.php";
        echo "Name: " . $getName . "/\n";
        echo "Pass: " . $getPass . "/\n";
        echo "Keep Connected: " . $getKeepConnected;
      }
    ?>
    <form action="" method="GET">
      <input type="text" name="name">
      <input type="password" name="pass">
      <label for="keepConnected">Keep Connected</label>
      <input type="checkbox" name="keepConnected">
      <input type="submit" value="Send">
    </form>
  </section>
  <section>
    <h1>$_POST:</h1>
    <?php
      if($_POST) {
        include "./post.php";
        echo "Name: " . $postName . "/\n";
        echo "Pass: " . $postPass . "/\n";
        echo "Keep Connected: " . $postKeepConnected;
      } 
    ?>
    <form action="" method="POST">
      <input type="text" name="name">
      <input type="password" name="pass">
      <label for="keepConnected">Keep Connected</label>
      <input type="checkbox" name="keepConnected">
      <input type="submit" value="Send">
    </form>
  </section>
</body>
</html>