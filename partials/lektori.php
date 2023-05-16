<?php
require_once('partials/header.php');
require_once('partials/nav.php');
require_once('inc/Teachers.php');
?>
<!-- TEAM -->
<section id="team">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <h2>Lektori <small>Naši profesionálny lektori</small></h2>
                </div>
            </div>

            <?php
            require_once('partials/banner.php');
            $teachers = $Teachers->get_teachers();
            foreach ($teachers as $id => $content) {
                $cesta = "/m/" . $content->image;
            ?>
            <div class="col-md-3 col-sm-6">
                <div class="team-thumb">
                    <div class="team-image">
                        <img src="<?php echo $cesta; ?>" class="img-responsive" alt="<?php echo $cesta; ?>">
                    </div>
                    <div class="team-info">
                        <h3><?php echo $content->name; ?></h3>
                    </div>
                    <ul class="social-icon">
                        <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                    </ul>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</section>