<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJDIGITAL</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.min.css">

    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
    />
</head>
<body>
    <!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= URL ?>accueil">AJDIGITAL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="<?= URL ?>accueil">accueil
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
   
        <li class="nav-item">
          <a class="nav-link" href="<?= URL ?>prix">prix</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL ?>posts">projets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL ?>contacter">contacter nous? </a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">recherche</button>
      </form>
    </div>
  </div>
</nav>
<div id="banner" style="background:center/cover url('public/images/banner.png'); background-attachment: fixed  ;" >
        <div >
            <h1>&lt;AJDigital/&gt;</h1>     
            <h3>Learn coding from scratch</h3>
        </div>
</div>
<!-- section start -->

<div >
    <h1 class="display1"><?php echo $title ?></h1> <br>
    <?php echo $content ?>
</div>


<!-- footer -->
<footer class="mt-4">
                <div id="left-footer ">
                    <h3 class="text-light">Quick Links</h3>
                    <p>
                        <ul>
                            <li>
                                <a href="<?= URL ?>accueil">Home</a>
                            </li>
                            <li>
                                <a href="<?= URL ?>about.html">About</a>
                            </li>
                            <li>
                                <a href="<?= URL ?>connexion">are you admin?</a>
                            </li>
                            <li>
                                <a href="<?= URL ?>blogslist.html">Blogs</a>
                            </li>
                            <li>
                                <a href="<?= URL ?>projects">Projects</a>
                            </li>
                            <li>
                                <a href="<?= URL ?>contact">Contact</a>
                            </li>
                        </ul>
                    </p>
                </div>

                <div id="right-footer">
                    <h3 class="text-light">Follow us on</h3>
                    <div id="social-media-footer">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <p>This website is developed by AJCoding</p>
                </div>
        </footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>