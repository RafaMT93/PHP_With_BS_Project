<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

    <title>Dev Project</title>

  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark ">

      <div class="container">

        <a class="navbar-brand" href="#">PHP Project</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" role="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about" role="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact" role="nav-link">Contact</a>
            </li>

          </ul>

        </div>

      </div>

    </nav>

    <main>

      <section class="box">
        <section class="banner">

          <div class="overlay"></div>

          <div class="container call-banner">
            <div class="row">

              <div class="col-md-12 text-center">

                <h2><?php echo htmlentities('<') ?>My Project<?php echo htmlentities('>') ?></h2>
                <p>My first project utilizing bootstrap with PHP</p>
                <button type="button" class="btn btn-md  btn-info">Click Here for more projects</button>

              </div>

            </div>
          </div>

        </section>
      </section>

    </main>

    <script src="./js/bootstrap.bundle.min.js"></script>

  </body>

</html>