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
  <link rel="stylesheet" href="../styles/publicStyle.css">
  <link rel="stylesheet" href="../styles/profileStyle.css">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <div class="container-fluid" id="inner-container">
        <div class="row">
          <div class="col-2 position-relative top-0 start-0 sticky-top" id="functions">
            <aside class="sidebar">
                <div class="row" id="logo">
                    <img src="Images\Logo_FARP3.png" alt="Farp_Logo" id="img-logo" onclick="this.src='Images/colorful.PNG'">
                    <h5 class="white">Farpgram</h5>
                </div>
                <div class="row">
                  <a class="link" href="home.php"><h4 class="link">Home</h4></a>
                </div>
                <div class="row">
                <a class="link" data-bs-toggle="collapse" href="#barra-ricerca" role="button" aria-expanded="false" aria-controls="barra-ricerca">
                    <h4 class="link">Cerca</h4>
                </a>
                <div class="collapse" id="barra-ricerca">
                    <div class="card card-body text-bg-dark" id="card">
                    <input type="text" name="account" class="form-control rounded-pill text-bg-dark" id="txtSearch" placeholder="Cerca">
                    </div>
                </div>
                </div>
                <div class="row">
                <a class="link" href="notifications.php"><h4 class="link">Notifiche</h4></a>
                </div>
                <div class="row">
                <a class="link" href="#"><h4 class="link">Esplora</h4></a>
                </div>
                <div class="row">
                <a class="link" href="myprofile.php"><h4 class="link">Profilo</h4></a>
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
        <div class="col-9">
            <div class="row bottom-border m-1" id="descrizione">
                <div class="col-2 left-margin">
                    <img src="Images\colorful.PNG" class="rounded-circle profile-image">
                </div>
                <div class="col-5 mt-5 left-margin">
                    <p class="txt fs-3"><span id="username"></span></p>
                    <div class="row">
                        <div class="col">
                            <p class="txt fs-5">nome e cognome</p>
                        </div>
                        <div class="col" id="btnDiv">
                            <!-- <button type="button" class="btn btn-primary rounded-pill position-relative top-50 translate-middle-y">Segui</button> -->
                        </div>
                    </div>
                    
                    
                    <div class="row margin-stats">
                        <div class="col-2">
                            <p class="txt d-inline fs-5">Post: 333</p>
                        </div>
                        <div class="col-2">
                            <p class="txt d-inline fs-5">Follower: 333</p>
                        </div>
                        <div class="col-2 margin-int">
                            <p class="d-inline white fs-5">Seguiti: 333</p>
                        </div>
                    </div>
                    
                </div>

               
                <div class="col-3">

                </div>
            </div>
            <div class="left-margin">
                <div class="row" id="posts">
                    <ul>
                        <li class="d-inline"><a href="post.php"><img src="Images\Screenshot (5).png" class="post"></a></li>
                        <li class="d-inline"><a href="post.php"><img src="Images\Screenshot (5).png" class="post"></a></li>
                        <li class="d-inline"><a href="post.php"><img src="Images\Screenshot (5).png" class="post"></a></li>
                    </ul>               
                </div>
                <div class="row" id="posts">
                    <ul>
                        <li class="d-inline"><a href="post.php"><img src="Images\novb.jpg" class="post"></a></li>
                        <li class="d-inline"><a href="post.php"><img src="Images\novb.jpg" class="post"></a></li>
                        <li class="d-inline"><a href="post.php"><img src="Images\novb.jpg" class="post"></a></li>
                    </ul>               
                </div>
            </div>
        </div>
        <div class="col-1" id="profilo">
            <aside class="sidebar">
                <img src="Images\colorful.PNG" alt="" class="rounded-circle position-relative top-0 start-50 translate-middle-x myprofile-image">
                <p><?php echo $_SESSION['user'] ?></p>
            </aside>
        </div>
            
    </div>
    <script src="../scripts/searchUser.js"></script>
    <script src="../scripts/saveUsername.js"></script>
    <script src="../scripts/getUsername.js"></script>
    <script src="../scripts/follow.js"></script>
</body>
</html>