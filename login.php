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
                    <a href="index.php" class="navbar-brand">Known</a>
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
      <div class="row">
      <div class="col-100">  
          <h1>Prihlásenie</h1>
          <form action="inc/login/login.php" method="post">
            <input type="email" name="user_email" placeholder="Váš email"><br>
            <input type="password" name="user_password" placeholder="Vaše heslo"><br>
            <input type="submit" value="Prihlásiť sa" name="log_user">
          </form>
          <br>
          <p>Nemáte účet? <a href="register.php">Registrujte sa</a></p>
        </div>
      </div>
    </section>
  </main>
  <?php
    include('partials/footer.php');
  ?>