<html lang="en">
<?php require_once 'requires/head.php'; ?>
<?php require_once 'requires/header.php'; ?>

<body>

  <section class="section-hero-image">
    <div class="container">
      <div class="row g-5">
        <div class="col-12 col-sm-12 col-md-6 col-lg-5 flex flex-column align-items-center">
          <div class="image-wrapper">
            <img class="big" src="/public/images/case-link.png" alt="Jari van kaam">
            <img class="small mobile-hide" src="/public/images/IMG_2127.jpg" alt="Jari van kaam">
          </div>
          <div class="image-wrapper desktop-hide">
          <img class="small" src="/public/images/IMG_2127.jpg" alt="Jari van kaam">
          </div>
          <div class="addendum">
            <h2>linktree <strong>project</strong> <br><strong>basic</strong> project</h2>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-7">
          <div class="content-wrapper flex flex-column justify-content-center full-height">
            <h2>What to build, What to build?</h2>
            <p>When i still attended a mbo school i was wondering what i should build to hone my front-end skills</p>
            <p>A nice way of both training my frontend skills and to create something usefull for me was a linktree</p>
            <p>As i was building this project i thought by myself i want a special little something, this became a special animation</p>
            <strong><a href="http://azertoria.nl">View the linktree here</a></strong>
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
                    ['name' => 'CSS'],
                    ['name' => 'JavaScript'],
                    ['name' => 'Hosting'],
                    ['name' => 'design'],
                    ['name' => 'linktree'],
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
