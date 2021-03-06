<?php
  session_start();
  unset($_SESSION['username']);
  unset($_SESSION['studentname']);
  unset($_SESSION['teachername']);
  //echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>LogOut</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark px-5">
      <a class="navbar-brand text-color" href="#">Tutor</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-color"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link text-color" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-color" href="afterlogin.php">Dashboard <span class="sr-only">(current)</span></a>
          </li>
        </ul>

        <a href="logout_db.php" type="button" class="btn btn-outline-light mt-2 m-sm-3 btn-lg">logout</a>
      </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
      <div class="container text-center push-down">
        <div class="title">
          <h1 class="heading">Tutor</h1>
        </div>
        <h5><kbd>team eight</kbd></h5>
        <!-- <p class="lead my-5">台大學生設計的家教媒合網站</p> -->

        <div class="content my-5 py-3 p-sm-4">

          <div class="row justify-content-center my-3">
            <!-- <p class="lead">Success to logout</p> -->
            <div class='alert alert-primary'>Success to logout</div>
          </div>

          <div class="row justify-content-center">
            <a href="index.php" type="button" class="btn btn-outline-light m-3">Go Back</a>
          </div>

        </div>
      </div>
    </div>
        
  <div class="img-thumbnail">
      <div class="text-center">
        <h1>
          DBTutor<h5><kbd>team seven</kbd></h5>
        </h1>
      </div>
    </div>

    <div class="text-center">
        <div class="text-white">
          <h1>Succeed to log out!!!</h1>
        </div>

        <a href="index.php"><img src="out.jpg" width="300" height="400"></a>
        <a href="index.php"><img src="out.jpg" width="300" height="400"></a>
        <a href="index.php"><img src="out.jpg" width="300" height="400"></a>
        <a href="index.php"><img src="out.jpg" width="300" height="400"></a>
        <a href="index.php"><img src="out.jpg" width="300" height="400"></a>
        <a href="index.php"><img src="out.jpg" width="300" height="400"></a>
        <a href="index.php"><img src="out.jpg" width="300" height="400"></a>
        <a href="index.php"><img src="out.jpg" width="300" height="400"></a>
        <a href="index.php"><img src="out.jpg" width="300" height="400"></a>
        <a href="index.php"><img src="out.jpg" width="300" height="400"></a>
        <a href="index.php"><img src="out.jpg" width="300" height="400"></a>
        <a href="index.php"><img src="out.jpg" width="300" height="400"></a>
        <a href="index.php"><img src="out.jpg" width="300" height="400"></a>
        <a href="index.php"><img src="out.jpg" width="300" height="400"></a>
        <a href="index.php"><img src="out.jpg" width="300" height="400"></a>
        <a href="index.php"><img src="out.jpg" width="300" height="400"></a>
        <a href="index.php"><img src="out.jpg" width="300" height="400"></a>
        <a href="index.php"><img src="out.jpg" width="300" height="400"></a>
        <a href="index.php"><img src="out.jpg" width="300" height="400"></a>
        <a href="index.php"><img src="out.jpg" width="300" height="400"></a>
      </div>


    


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>