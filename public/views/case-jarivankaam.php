<html lang="en">
<?php require_once 'requires/head.php'; ?>
<?php require_once 'requires/header.php'; ?>

<body>

  <section class="section-hero-image">
    <div class="container">
      <div class="row g-5">
        <div class="col-12 col-sm-12 col-md-6 col-lg-5 flex flex-column align-items-center">
          <div class="image-wrapper">
            <img class="big" src="/public/images/case jvk.png" alt="Jari van kaam">
            <img class="small mobile-hide" src="/public/images/IMG_2127.jpg" alt="Jari van kaam">
          </div>
          <div class="image-wrapper desktop-hide">
          <img class="small" src="/public/images/IMG_2127.jpg" alt="Jari van kaam">
          </div>
          <div class="addendum">
            <h2>Jarivankaam <strong>studios</strong> <br><strong>wordpress</strong> site</h2>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-7">
          <div class="content-wrapper flex flex-column justify-content-center full-height">
            <h2>Jarivankaam-studios...</h2>
            <p>This a project in wich i gave myself a challange, build a website as close to production as possible.</p>
            <p>This site is build using scss, html, css, javascript, jquery and php and took quite a lot of work</p>
            <p>Having first made a good design for this site helped with the initial web building.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-skills">
    <div class="container">
        <div class="row">
          <h2>My skills</h2>
            <?php 
                // Define the skills array
                $skills = [
                    ['name' => 'HTML'],
                    ['name' => 'SCSS'],
                    ['name' => 'PHP'],
                    ['name' => 'JavaScript'],
                    ['name' => 'jQuery'],
                    ['name' => 'SQL'],
                    ['name' => 'WordPress'],
                    ['name' => 'Bootstrap'],
                    ['name' => 'Hosting'],
                    ['name' => 'design'],
                ];

                // Loop through each skill and create a skill wrapper for it
                foreach ($skills as $skill) {
                    echo '<div class="skill-wrapper">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-code"></i>
                            </div>
                            <p>'.$skill['name'].'</p>
                          </div>';
                }
            ?>
        </div>
    </div>
</section>


  <section class="section-contact">
    <div class="container">
    <div>
          <div>
             <h2>Contact</h2>
          <p>Email: jari@jarivankaam.nl</p>
          <p>Phone: +31 6 40229528</p>
          <a href="/contact">Neem contact op</a>
        </div>
    </div>
  </section>
 
  <?php require_once 'requires/footer.php'; ?>
</body>
<script>
  AOS.init();
</script>
</html>
