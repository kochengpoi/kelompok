<?php 
session_start();
if (!isset($_SESSION['user'])) {
  header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>KntL</title>
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css">
</head>
<?php 

$menu = [
  [
    'act'  => 'active',
    'url'  => '',
    'icon' => 'home',
    'li'   => 'Home',
  ],
  [
    'act'  => '',
    'url'  => '',
    'icon' => 'phone',
    'li'   => 'Contact',
  ],
  [
    'act'  => '',
    'url'  => 'About.php',
    'icon' => 'atlas',
    'li'   => 'About',
  ],
]
?>
<body>

  <div class="sidebar">

    <?php foreach ($menu as $he): ?>
      <a class=<?= $he['act'] ;?> href=/<?= $he['url'] ;?> >
        <i class="fas fa-<?= $he['icon'] ;?>" ></i> <?= $he['li'] ;?>
      </a>
    <?php endforeach ?>

    <div class="logout">
      <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>
  </div>

  <div class="content">
    <div class="card mt-3">
      <div class="card-header">
        Formulir Pemilu Capres-Cawapres 2021
      </div>
      <div class="card-body">
        <form action="" method="post">

          <div class="form-group was-validated">
            <input type="text" class="form-control" id="uname" placeholder="Enter Name" name="uname" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>

          <select class="form-control form-control">
            <option>Kota</option>
            <option>Bandung</option>
            <option>Semarang</option>
            <option>Yogyakarta</option>
          </select>

          <div class="btn-group mt-3" data-toggle="buttons" >
            <label class="btn btn-outline-primary m5">
              <input type="radio" class="none" name="options" id="option1"> Calon 1
            </label>
            <label class="btn btn-outline-primary m5">
              <input type="radio" class="none" name="options" id="option2"> Calon 2
            </label>
          </div>

          <div class="form-check mt-3">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
              Saya tidak menyetujui peraturan yang telah ditetapkan..
            </label>
          </div>


          <button class="btn btn-primary mt-3 float-right"><i class="fas fa-paper-plane"></i> Kirim</button>
        </form>
      </div>
    </div>











  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
