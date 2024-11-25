<html lang="en">
<?php require_once 'requires/head.php'; ?>
<?php require_once 'requires/header.php'; ?>

<body>
  <div class="heading"><div class="container">
    
      <h2>My cases</h2>
  </div>
  </div>
  <section class="section-projects">
    <div class="container">
      <div class="row">
        <div class="modal-project">
          <div class="title">
          <h2>Projects</h2>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4">
            <a href="/cases/linktree" class="card-wrapper flex flex-column">
              <div class="title-wrapper">
                <h2>Linktree</h2>
                <p>Html, css and js</p>
              </div>
              <img src="/public/images/case-link.png" alt="Jari van kaam.nl Wordpress">
              <div class="button-wrapper flex align-items-center justify-content-center"><button>Read more</button></div>
            </a>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4">
            <a href="/cases/jarivankaam" class="card-wrapper flex flex-column">
            <div class="title-wrapper">
                <h2>Jari van kaam.nl</h2>
                <p>Wordpress</p>
              </div>
              <img src="/public/images/case jvk.png" alt="Jari van kaam.nl Wordpress">
              <div class="button-wrapper flex align-items-center justify-content-center"><button>Read more</button></div>
            </a>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4">
            <a href="/cases/witns" class="card-wrapper flex flex-column">
            <div class="title-wrapper">
                <h2>next session project</h2>
                <p>PHP, TypeScript</p>
              </div>
              <img src="/public/images/case-session.png" alt="Jari van kaam.nl Wordpress">
              <div class="button-wrapper flex align-items-center justify-content-center"><button>Read more</button></div>
            </a>
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
                    ['name' => 'Twig'],
                    ['name' => 'JavaScript'],
                    ['name' => 'jQuery'],
                    ['name' => 'NextJS'],
                    ['name' => 'React'],
                    ['name' => 'TypeScript'],
                    ['name' => 'Python'],
                    ['name' => 'C#'],
                    ['name' => 'Java'],
                    ['name' => 'SQL'],
                    ['name' => 'WordPress'],
                    ['name' => 'Bootstrap'],
                    ['name' => 'Tailwind']
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
