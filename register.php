<?php
    include('partials/header.php');
  ?>
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">Known</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="index.php#top" class="smoothScroll">Home</a></li>
                         <li><a href="index.php#about" class="smoothScroll">About</a></li>
                         <li><a href="index.php#team" class="smoothScroll">Our Teachers</a></li>
                         <li><a href="index.php#courses" class="smoothScroll">Courses</a></li>
                         <li><a href="index.php#testimonial" class="smoothScroll">Reviews</a></li>
                         <li><a href="index.php#contact" class="smoothScroll">Contact</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#"><i class="fa fa-phone"></i> +65 2244 1100</a></li>
                    </ul>
               </div>

          </div>
     </section>
  <main>
    <section class="container">
      <h1>Registrácia</h1>
      <div class="row">
        <div class="col-100">
        <form action="inc/register/insert.php" method="post">
        <input type="text" name="full name" class="form-control" placeholder="Full name" required="">

        <input type="email" name="email" class="form-control" placeholder="Your email address" required="">

        <input type="password" name="password" class="form-control" placeholder="Your password" required="">

        <button class="submit-btn form-control" id="form-submit">Get started</button>
        </form> <br>
        <p>Už máte účet? <a href="login.php">Prihláste sa</a></p>
        </div>
      </div>
    </section>
  </main>
  <?php
    include('partials/footer.php');
  ?>