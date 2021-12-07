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
                <button type="button" class="btn btn-md">Click Here for more projects</button>

              </div>
            </div>
          </div>

        </section>

        <section class="register">
          <div class="row text-center">
            <div class="col-md-6">

              <h2>                
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="#fff" class="bi bi-star-fill" viewBox="0 1 16 18">
                  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>
                Contact us
              </h2>

            </div>
            <div class="col-md-6">

                <form method="post">
                  <input type="text" name="name" placeholder="Digit your name!" class="form-control"/><input type="submit" value="Send" />
                </form>

            </div>
          </div>
        </section>

        <section class="testimony">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">

                <h2>Testimonyals</h2>
                <blockquote>
                  <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet leo dolor. Praesent feugiat, lectus at rhoncus ornare, magna augue tincidunt nulla, sed cursus mauris justo nec quam. Sed pretium metus ut vehicula consectetur. Donec eu urna vitae velit interdum egestas. Phasellus tempor ac massa ac eleifend. Donec rhoncus sagittis nibh, eget viverra augue cursus vel. Etiam sit amet massa mi. Suspendisse non nibh vel est consectetur iaculis ut quis arcu. Duis quis viverra justo, ac pretium justo. Sed aliquam tortor sed elit finibus, quis efficitur ex porttitor. Donec interdum rhoncus velit vel consectetur. Praesent vulputate vulputate magna, eu sagittis neque interdum sed. Vestibulum sit amet dapibus ligula. Morbi porttitor vel enim imperdiet tincidunt."</p>
                </blockquote>

              </div>
            </div>
          </div>
        </section>

        <section class="differentials text-center">

          <h2>Know our company!</h2>

          <div class="container differentials-container">
            <div class="row">

              <div class="col-md-4">

                <h3>

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trophy-fill" viewBox="0 0 16 16">
                    
                    <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z"/>

                  </svg>                

                </h3>
                <h2>Differential #01</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet leo dolor. Praesent feugiat, lectus at rhoncus ornare, magna augue tincidunt nulla, sed cursus mauris justo nec quam. Sed pretium metus ut vehicula consectetur. Donec eu urna vitae velit interdum egestas. Phasellus tempor ac massa ac eleifend. Donec rhoncus sagittis nibh, eget viverra augue cursus vel. Etiam sit amet massa mi. Suspendisse non nibh vel est consectetur iaculis ut quis arcu. Duis quis viverra justo, ac pretium justo. Sed aliquam tortor sed elit finibus, quis efficitur ex porttitor. Donec interdum rhoncus velit vel consectetur. Praesent vulputate vulputate magna, eu sagittis neque interdum sed. Vestibulum sit amet dapibus ligula. Morbi porttitor vel enim imperdiet tincidunt.</p>

              </div>
              <div class="col-md-4">

                <h3>

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg>

                </h3>
                <h2>Differential #02</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet leo dolor. Praesent feugiat, lectus at rhoncus ornare, magna augue tincidunt nulla, sed cursus mauris justo nec quam. Sed pretium metus ut vehicula consectetur. Donec eu urna vitae velit interdum egestas. Phasellus tempor ac massa ac eleifend. Donec rhoncus sagittis nibh, eget viverra augue cursus vel. Etiam sit amet massa mi. Suspendisse non nibh vel est consectetur iaculis ut quis arcu. Duis quis viverra justo, ac pretium justo. Sed aliquam tortor sed elit finibus, quis efficitur ex porttitor. Donec interdum rhoncus velit vel consectetur. Praesent vulputate vulputate magna, eu sagittis neque interdum sed. Vestibulum sit amet dapibus ligula. Morbi porttitor vel enim imperdiet tincidunt.</p>

              </div>
              <div class="col-md-4">

                <h3>

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
          
                    <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>

                  </svg>

                </h3>
                <h2>Differential #03</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet leo dolor. Praesent feugiat, lectus at rhoncus ornare, magna augue tincidunt nulla, sed cursus mauris justo nec quam. Sed pretium metus ut vehicula consectetur. Donec eu urna vitae velit interdum egestas. Phasellus tempor ac massa ac eleifend. Donec rhoncus sagittis nibh, eget viverra augue cursus vel. Etiam sit amet massa mi. Suspendisse non nibh vel est consectetur iaculis ut quis arcu. Duis quis viverra justo, ac pretium justo. Sed aliquam tortor sed elit finibus, quis efficitur ex porttitor. Donec interdum rhoncus velit vel consectetur. Praesent vulputate vulputate magna, eu sagittis neque interdum sed. Vestibulum sit amet dapibus ligula. Morbi porttitor vel enim imperdiet tincidunt.</p>              
              
              </div>

            </div>
          </div>
        </section>

        <section class="team">
          <h2>Team</h2>
          <div class="container team-container">
            <div class="row">
              <div class="col-md-6">

                <div class="team-single">

                  <div class="row">

                    <div class="col-md-2">
                      <div class="user-picture"></div>
                    </div>
                    <div class="col-md-10">
                      <h3>Rafael</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet leo dolor. Praesent feugiat, lectus at rhoncus ornare, magna augue tincidunt nulla, sed cursus mauris justo nec quam. Sed pretium metus ut vehicula consectetur. Donec eu urna vitae velit interdum egestas.</p>
                    </div>

                  </div>

                </div>

              </div>
              <div class="col-md-6">

              <div class="team-single">

                <div class="row">

                  <div class="col-md-2">
                    <div class="user-picture"></div>
                  </div>
                  <div class="col-md-10">
                    <h3>Leafar</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet leo dolor. Praesent feugiat, lectus at rhoncus ornare, magna augue tincidunt nulla, sed cursus mauris justo nec quam. Sed pretium metus ut vehicula consectetur. Donec eu urna vitae velit interdum egestas.</p>
                  </div>

                </div>

              </div>

              </div>
            </div>

            <div class="row">
              <div class="col-md-6">

                <div class="team-single">

                  <div class="row">

                    <div class="col-md-2">
                      <div class="user-picture"></div>
                    </div>
                    <div class="col-md-10">
                      <h3>Ralefa</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet leo dolor. Praesent feugiat, lectus at rhoncus ornare, magna augue tincidunt nulla, sed cursus mauris justo nec quam. Sed pretium metus ut vehicula consectetur. Donec eu urna vitae velit interdum egestas.</p>
                    </div>

                  </div>

                </div>

              </div>
              <div class="col-md-6">

              <div class="team-single">

                <div class="row">

                  <div class="col-md-2">
                    <div class="user-picture"></div>
                  </div>
                  <div class="col-md-10">
                    <h3>Farael</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet leo dolor. Praesent feugiat, lectus at rhoncus ornare, magna augue tincidunt nulla, sed cursus mauris justo nec quam. Sed pretium metus ut vehicula consectetur. Donec eu urna vitae velit interdum egestas.</p>
                  </div>

                </div>

              </div>

              </div>
            </div>
          </div>
        </section>

      </section>

    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>

  </body>

</html>