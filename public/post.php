<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farpgram-Home</title>

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="../styles/homeStyle.css">
  <script src="https://kit.fontawesome.com/e4f4aab979.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="row">
    <div class="col-2">
      <aside class="no-overflow position-absolute top-0 start-0 sticky-bottom px-4" id="side-nav">
        <div class="header-sidebar">
        <h1 class="fs-4 text-center mb-4"><span><img src="Images\Logo_FARP3.png" alt="Farp_Logo" id="img-logo" onclick="this.src='Images/Logo_FARP3_dead.png'"></span><span class="text-white">Farpgram</span></h1>        </div>
        <ul id="functions">
          <li class="function my-4 ms-5"> <span> <i class="fa-solid fa-house text-white"></i> </span><a class="text-white text-decoration-none" href="home.php"> <span class="link">HOME</span> </a> </li>
          <li class="function my-4 ms-5"> <span> <i class="fa-solid fa-magnifying-glass text-white"> </i> </span><a class="text-white text-decoration-none" data-bs-toggle="offcanvas" href="#offcanvas-cerca" role="button" aria-controls="offcanvas-cerca"> <span class="link">CERCA</span> </a> </li>
          <li class="function my-4 ms-5"> <span> <i class="fa-solid fa-bell text-white"></i> </span><a class="text-white text-decoration-none" href="notifications.php"> <span class="link">NOTIFICHE</span> </a> </li>
          <li class="function my-4 ms-5"> <span> <i class="fa-solid fa-square-plus text-white"></i> </span><a class="text-white text-decoration-none" data-bs-toggle="offcanvas" href="#offcanvas-pubblica" role="button" aria-controls="offcanvas-pubblica"> <span class="link">PUBBLICA</span> </a> </li>
          <li class="function my-4 ms-5"> <span> <i class="fa-solid fa-user text-white"></i> </span><a class="text-white text-decoration-none" href="myprofile.php"> <span class="link">PROFILO</span> </a> </li>
          <li class="function my-4 ms-4">
            <div class="btn dropup">
              <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Altro
              </button>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="#">Impostazioni</a></li>
                <li><a class="dropdown-item" href="#">Mi Piace</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="logIn.html">Esci</a></li>
              </ul>
            </div>
          </li>
        </ul>
    </aside>
    </div>
    <div class="col-10">
      <div class="main-container">

        <!-- NAVBAR -->
        <aside class="no-overflow">     
          <nav class="navbar">
            <div class="container-fluid">
              <div class="d-flex justify-content-end">
                </div>
                <a class="navbar-brand" href="myprofile.php">
                  <img src="Images\Icons\Defalut_pfp.png" alt="Logo" width="50" class="d-inline-block">
                  <span class="text-white"><?php echo $_SESSION['user'] ?></span> 
                </a>   
            </div>
          </nav>
        </aside>
            <div class="text-center">
              <div class="text-start card text-bg-dark mb-3 d-inline-flex" style="width: 25rem">
                <div class="card-body">
                  <img src="Images\colorful.PNG" class="d-inline rounded-circle profile-image">
                  <h5 class="card-title d-inline"> <a href="profile.php" class="accountToSearch text-decoration-none link" id="user"> </a></h5>
                  <p class="card-text" id="location"> </p>
                </div>
                <img src="Images\Screenshot (5).png" class="card-img-top" id="img" alt="caricamento in corso">
                <div class="card-body">
                  <a href="#"><i class="fa-regular fa-heart text-white"></i></a> <!-- <i class="fa-solid fa-heart"></i> -->
                  <a href="post.php"><i class="fa-regular fa-comment text-white"></i></a>
                  <p class="card-text" id="descrizione"> </p>
                  <p class="grey" id="ts"> </p>
                </div>              
              </div>
              <div class="text-start card text-bg-dark mb-3 d-inline-flex" style="width: 25rem">
              <div class="card-body">
                  <h3 class="text-center">COMMENTI</h3>
                  <hr class="border-black">
                </div>
                <input type="text" name="comment" class="form-control rounded-pill text-bg-dark mb-3" id="comment" placeholder="inserisci il tuo commento...">
                <div class="overflow-auto comments" style="max-height: 180px">
                  <ul style="list-style: none">
                    <li> <img src="Images\colorful.PNG" class="d-inline rounded-circle profile-image"> <a href="profile.php" class="accountToSearch text-decoration-none link">Marco</a> : <span class="comment-text text-break" > il mio commento </span> </li>
                    <li> <img src="Images\colorful.PNG" class="d-inline rounded-circle profile-image"> <a href="profile.php" class="accountToSearch text-decoration-none link">Mattehxx</a> : <span class="comment-text text-break" > il mio commento </span> </li>
                    <li> <img src="Images\colorful.PNG" class="d-inline rounded-circle profile-image"> <a href="profile.php" class="accountToSearch text-decoration-none link">Mattia</a> : <span class="comment-text text-break" > il mio commento </span> </li>
                    <li> <img src="Images\colorful.PNG" class="d-inline rounded-circle profile-image"> <a href="profile.php" class="accountToSearch text-decoration-none link">Mattia</a> : <span class="comment-text text-break" > il mio commento </span> </li>
                    <li> <img src="Images\colorful.PNG" class="d-inline rounded-circle profile-image"> <a href="profile.php" class="accountToSearch text-decoration-none link">Mattia</a> : <span class="comment-text text-break" > il mio commento </span> </li>
                  </ul>
                </div>
            </div>
        </aside>
    </div>
  </div>

  <!-- OFFCANVAS-PUBBLICA -->
  <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvas-pubblica" aria-labelledby="offcanvas-pubblica-Label">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title mt-5" id="offcanvas-pubblica-Label">Crea un nuovo post</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <form action="myfile.php">
        <input type="file" class="form-control text-bg-dark my-4" name="img" accept="image/*" required>
        <label for="description">Inserisci descrizione del post</label>
        <textarea name="description" id="description" class="bg-dark text-white rounded mb-4" cols="45" rows="10"></textarea>
        <label for="text-field">Inserisci luogo</label>
        <input type="text" name="text-field" id="text-field" class="form-control bg-dark text-white mb-4">
        <div id="locations">
          <!-- quí vengono inseriti i luoghi -->
        </div>
        <input type="submit" name="submit" class="btn btn-primary text-center">
      </form>
    </div>
  </div>

  <!-- OFFCANVAS-CERCA -->
  <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvas-cerca" aria-labelledby="offcanvas-cerca-Label">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title my-5" id="offcanvas-cerca-Label">Cerca un utente</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" id="oc-body">
      <input type="text" name="account" class="form-control rounded-pill text-bg-dark" id="txtSearch" placeholder="Cerca">
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="../scripts/searchUser.js"></script>
  <script src="../scripts/saveUsername.js"></script>
  <script src="../scripts/location.js"></script>
</body>
</html>