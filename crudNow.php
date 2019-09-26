<?php
spl_autoload_register(function ($class_name) {
    include './classes/'. $class_name . '.php';
});

if (isset($_POST['charCreate']))
{
$role = $_POST['role'];
$name = $_POST['name'];

  if ($role == 1) {
    $life = random_int(8900, 12000);
    $atk = random_int(1700, 2100);
    $player = new Player($role, $life, $name, $atk, 100);
  }
  if ($role == 2) {
    $life = random_int(5000, 6100);
    $atk = random_int(3400, 3800);
    $player = new Player($role, $life, $name, $atk, 100);
  }
  if ($role == 3) {
    $life = random_int(6000, 8000);
    $atk = random_int(2500, 3100);
    $player = new Player($role, $life, $name, $atk, 100);
  }
}elseif (isset($_POST['deleteChar']))
{
$id = $_POST['idVal'];
Player::deleteOneChar($id);
}elseif (isset($_POST['changeNow'])) {
  $name = $_POST['newName'];
  $id = $_POST['theID'];
  Player::updateChar($name, $id);
}else {
  $cheatBuster = new CheatBuster;
  echo $cheatBuster->prefixValue('Hey cheater!') ."\n";
  $cheatBuster->printOut();
  return;
}







header('Location: index.php');
