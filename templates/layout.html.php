<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <script src="https://kit.fontawesome.com/27d8ccfd65.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="btn btn-dark bg-light navbar-brand" href="/bar/index.php">집</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link btn btn-info" href="createCocktail.php">
          <i class="fas fa-plus-circle"></i> cocktail</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="icecreams.php">
          <i style="font-size:25px" class="fas fa-ice-cream"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-info" href="createIcecream.php">
          <i class="fas fa-plus-circle"></i></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="infos.php">
          <i style="font-size:25px"  class="far fa-newspaper"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-info" href="createInfo.php">
          <i class="fas fa-plus-circle"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sandwiches.php">
          <i style="font-size:25px" class="fas fa-hotdog"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link btn btn-info" href="createSandwich.php">
          <i class="fas fa-plus-circle"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
  </div>
</nav>
</header>

<main>
    <?= $pageContent ?>
</main>


<footer>
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <!-- <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div> -->
    <!-- Left -->

    <!-- Right -->
    <!-- <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div> -->
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Isabelle's stash
          </h6>
          <p>
            저는 배고빠 아니요 !!
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            가장
          </h6>
          <p>
            <a href="#!" class="text-reset">트와이스</a>
          </p>
          <p>
            <a href="#!" class="text-reset">소녀시대</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">I</a>
          </p>
          <p>
            <a href="#!" class="text-reset">AM</a>
          </p>
          <p>
            <a href="#!" class="text-reset">NOT</a>
          </p>
          <p>
            <a href="#!" class="text-reset">HUNGRY</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> Bron, Auvergne Rhône-Alpes, France</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            isabelle@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 07 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 07 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
