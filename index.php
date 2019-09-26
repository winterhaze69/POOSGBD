<?php
spl_autoload_register(function ($class_name) {
    include './classes/'. $class_name . '.php';
});

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CharMenu</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  </head>
  <body>
    <div class="container-fluid">
    <div class="row">
      <div class="col-md-4" style="color:white;font-weight:900;">Character List</div>
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>
        <div class="col-md-2.5" style="overflow:scroll; height:90vh;">
          <?php $charList = Player::getAllUsers();?>
          <?php foreach ($charList as $key => $char): ?>
            <div class="card" style="width: 18rem; margin-top:15px; text-align:center">
                <div class="card-body">
                  <span style="display:flex; flex-direction:row">name: <?=$char['name']?>
                  <?php $charName = $char['name'];
                  $charId = $char['id']; ?>
                  <form class="" action="characterUpdate.php" method="post">
                  <input type="hidden" name="updateNameId" value="<?= $charId ?>">
                  <input type="hidden" name="updateName" value="<?= $charName ?>">
                  <input type="submit" name="update" class="btn btn-info" value="Edit Name" style="margin-bottom:10px; margin-left:10px;">
                  </form>
                </span>
                  <p class="card-header">health: <?=$char['health']?></p>
                  <p class="card-header">power: <?=$char['power']?></p>
                  <p class="card-header">ki: <?=$char['ki']?></p>
                  <?php $id = $char['role_id'];
                  $role = Player::getRoles($id); ?>
                  <p class="card-text">role: <?=$role['name']?></p>
                  <form class="" action="crudNow.php" method="post">
                    <input type="hidden" name="idVal" value="<?= $charId ?>">
                    <input type="submit" name="deleteChar" class="btn btn-danger" value="Delete Character">
                  </form>
                </div>
            </div>
  <?php endforeach; ?>

        </div>
        <div class="col-md-3"></div>
        <div class="col-md-4" style="color:white;font-weight:900;font-size: xx-large;">Character Creation Menu</div>
        <div class="col-md-4"><a href="characterCreate.php"><input type="submit" class="btn btn-success" name="" value="Create Character"></a></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>
</div>

  </body>
</html>
<?php
