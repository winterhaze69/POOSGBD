<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>W/E</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem; margin-top:50px">
            <form class="" action="crudNow.php" method="post">
          <div class="card-body">
            <span style="color:red">Random stats will be applied to your character</span>
            <h5 class="card-title">Hero Name</h5>
            <input type="text" name="name" value="">
            <br><br>
            <h5 class="card-title">Hero role</h5>
            <input type="radio" name="role" value="1"> tank<br>
            <input type="radio" name="role" value="2"> dps<br>
            <input type="radio" name="role" value="3"> heal<br>
            <input class="btn btn-success" name="charCreate" type="submit" value="Create">
          </form>
          </div>
          </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

  </body>
</html>
