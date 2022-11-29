<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frapgram</title>
    <link rel="stylesheet" href="../styles/homeStyle.css">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <div class="container-fluid" id="inner-container">
        <div class="row">
          <div class="col-2  position-relative top-0 start-0 sticky-top" id="funzioni">
          <aside class="sidebar">
            <div class="row">
                <img src="Images\Logo_FARP3.png" alt="Farp_Logo" id="logo">
                <h5>Farpgram</h5>
            </div>
            <div class="row">
              <a class="link" href="home.php"><h4>Home</h4></a>
            </div>
            <div class="row">
              <a class="link" data-bs-toggle="collapse" href="#barra-ricerca" role="button" aria-expanded="false" aria-controls="barra-ricerca">
                <h4>Cerca</h4>
              </a>
              <div class="collapse" id="barra-ricerca">
                <div class="card card-body text-bg-dark">
                  <input type="text" name="account" class="form-control rounded-pill text-bg-dark" placeholder="Cerca">
                  <ul class="list-group list-group-flush" id="searchAccounts"></ul>
                    <li class="list-group-item text-bg-dark"><a href="#" class="link"><img src="Images\colorful.PNG" class="rounded-circle" style="max-width: 2rem"><span class="white">  username</span></a></li>
                    <li class="list-group-item text-bg-dark"><a href="#" class="link"><img src="Images\colorful.PNG" class="rounded-circle" style="max-width: 2rem"><span class="white">  username</span></a></li>
                    <li class="list-group-item text-bg-dark"><a href="#" class="link"><img src="Images\colorful.PNG" class="rounded-circle" style="max-width: 2rem"><span class="white">  username</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row">
              <a class="link" href="#"><h4>Notifiche</h4></a>
            </div>
            <div class="row">
              <a class="link" href="#"><h4>Esplora</h4></a>
            </div>
            <div class="row">
              <a class="link" href="#"><h4>Profilo</h4></a>
            </div>
            <div class="row">
                <div class="btn-group dropup position-relative bottom-0 start-50 translate-middle-x">
                    <button id="btn-altro" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Altro
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="#">Impostazioni</a></li>
                      <li><a class="dropdown-item" href="#">Mi Piace</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="logIn.html">Esci</a></li>
                    </ul>
                </div>
            </div>
            </aside>
          </div>
          <div class="col-9 " id="post">
            <div class="card text-bg-dark" style="width: 20rem">
              <div class="card-body">
                <h5 class="card-title">username</h5>
                <p class="card-text">luogo</p>
              </div>
              <img src="Images\novb.jpg" class="card-img-top" alt="caricamento in corso">
              <div class="card-body">
                <p class="card-text">isisbernocchi</p>
              </div>              
            </div>
            <div class="card text-bg-dark" style="width: 20rem">
              <div class="card-body">
                <h5 class="card-title">username</h5>
                <p class="card-text">luogo</p>
              </div>
              <img src="Images\Screenshot (5).png" class="card-img-top" alt="caricamento in corso">
              <div class="card-body">
                <p class="card-text">post bellissimo pazzissimo</p>
              </div>              
            </div>
            <div class="card text-bg-dark" style="width: 20rem">
              <div class="card-body">
                <h5 class="card-title">username</h5>
                <p class="card-text">luogo</p>
              </div>
              <img src="Images\Screenshot (5).png" class="card-img-top" alt="caricamento in corso">
              <div class="card-body">
                <p class="card-text">omg amazing</p>
              </div>              
            </div>            
          </div>
          <div class="col-1" id="profilo">
            <aside class="sidebar">
              <img src="Images\colorful.PNG" alt="" class="rounded-circle position-relative top-0 start-50 translate-middle-x" id="profile-image">
              <p><?php echo $_SESSION['user'] ?></p>
            </aside>
          </div>
        </div>
    </div>
</body>
</html>