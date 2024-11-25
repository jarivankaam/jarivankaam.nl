<html lang="en">
<?php require_once 'requires/head.php'; ?>
<?php require_once 'requires/header.php'; ?>

<body>

  <section class="section-hero-image">
    <div class="container">
      <div class="row g-5">
        <div class="col-12 col-sm-12 col-md-6 col-lg-5 flex flex-column align-items-center">
          <div class="image-wrapper">
            <img class="big" src="/public/images/d891ab00-e1a8-4a6f-8f98-de113c4945b2.jpg" alt="Jari van kaam">
            <img class="small mobile-hide" src="/public/images/IMG_2127.jpg" alt="Jari van kaam">
          </div>
          <div class="image-wrapper desktop-hide">
          <img class="small" src="/public/images/IMG_2127.jpg" alt="Jari van kaam">
          </div>
          <div class="addendum">
            <h2>Informatica <strong>student</strong> <br><strong>front-end</strong> developer</h2>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-7">
          <div class="content-wrapper flex flex-column justify-content-center full-height">
            <h2>Fast results, Deep research</h2>
            <p>I'am Jari van kaam a informatica student and a front-end developer with 1 year of experience in the field.</p>
            <p>I create designs, backend-solutions and beatifull front-end creations based on the needs of the customer..</p>
            <p>Having worked as a full-stack developer i got enough knowledge to work on developer level even while still being a student.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-projects">
    <div class="container">
      <div class="row">
        
        <div class="modal-project">
          <div class="title">
          <h2>Projects</h2>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4">
            <div class="card-wrapper flex flex-column">
              <div class="title-wrapper">
                <h2>Jari van kaam.nl</h2>
                <p>Wordpress</p>
              </div>
              <img src="https://i.imgur.com/e2cJ78y.png" alt="Jari van kaam.nl Wordpress">
              <div class="button-wrapper flex align-items-center justify-content-center"><button>Read more</button></div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4">
            <div class="card-wrapper flex flex-column">
            <div class="title-wrapper">
                <h2>Jari van kaam.nl</h2>
                <p>Wordpress</p>
              </div>
              <img src="https://i.imgur.com/e2cJ78y.png" alt="Jari van kaam.nl Wordpress">
              <div class="button-wrapper flex align-items-center justify-content-center"><button>Read more</button></div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-4">
            <div class="card-wrapper flex flex-column">
            <div class="title-wrapper">
                <h2>Jari van kaam.nl</h2>
                <p>Wordpress</p>
              </div>
              <img src="https://i.imgur.com/e2cJ78y.png" alt="Jari van kaam.nl Wordpress">
              <div class="button-wrapper flex align-items-center justify-content-center"><button>Read more</button></div>
            </div>
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
