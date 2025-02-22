<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Lexend:wght@100..900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="styles/reset.css" />
  <link rel="stylesheet" href="styles/style.css" />
  <link rel="stylesheet" href="styles/index.css" />
  <title>Mosaic Millwork</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-JobWAqYk5CSjWuVV3mxgS+MmccJqkrBaDhk8SKS1BW+71dJ9gzascwzW85UwGhxiSyR7Pxhu50k+Nl3+o5I49A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
</head>

<body>
  <div class="pg-wrapper">
    <?php include_once 'components/header.php'; ?>

    <main>
      <section class="float-in hero flex vert-pad-64">
        <div>
          <h1>MOSAIC MILLWORK</h1>
          <h3 class="almarai-light">
            Where we offer a unique approach to architectural woodworking.
          </h3>
        </div>
        <div class="hero-img">
          <img src="assets/company-pictures/Kamei-Photo-Lab-For-web-6.jpg" alt="man in woodworking shop" />
        </div>
      </section>
      <section class="float-in our-expertise flex flex-col center-all">
        <h2 class="title-line-break">Our expertise</h2>
        <div class="content center-all flex side-pad-64 vert-pad-64">
          <p class="desc">
            We manufacture commercial architectural millwork for contractors,
            architects, designers and home owners. We produce our clients&apos;
            architectural visions through consultation, experience and
            up-to-date technology.
          </p>
          <div class="flex flex-col">
            <ul class="list">
              <li class="container-outline vert-pad-16 side-pad-8">
                RESTORATION SERVICES
              </li>
              <li class="container-outline vert-pad-16 side-pad-8">
                FURNITURE
              </li>
              <li class="container-outline vert-pad-16 side-pad-8">
                CABINETS
              </li>
              <li class="container-outline vert-pad-16 side-pad-8">
                CATHOLIC ARCHITECTURE
              </li>
              <li class="">
                <a class="red-bg-white-text vert-pad-16 side-pad-8" href="our-services.php">EXPLORE MORE SERVICES</a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="float-in our-values">
        <div class="content flex-col center-all">
          <h2 class="title-line-break">Our Values</h2>
          <div class="value-cards pad-64">
            <div class="card flex-col center-all">
              <div class="card-img flex center-all">
                <img src="./assets/branding/Container.svg" alt="" />
              </div>
              <div class="text flex-col">
                <h5>PERSONALIZED SERVICES</h5>
                <p>
                  We tailor each project to your vision, offering a personal
                  touch in every interaction.
                </p>
              </div>
            </div>
            <div class="card flex-col center-all">
              <div class="card-img flex center-all">
                <img src="./assets/branding/Container-1.svg" alt="" />
              </div>
              <div class="text flex-col">
                <h5>SUSTAINABLE PRACTICES</h5>
                <p>
                  Committed to eco-friendly methods and materials, we build
                  with the future in mind.
                </p>
              </div>
            </div>
            <div class="card flex-col center-all">
              <div class="card-img flex center-all">
                <img src="./assets/branding/Container-3.svg" alt="" />
              </div>
              <div class="text flex-col">
                <h5>QUALITY CRAFTSMANSHIP</h5>
                <p>
                  We take pride in every cut, ensuring each piece meets the
                  highest standards.
                </p>
              </div>
            </div>
            <div class="card flex-col center-all">
              <div class="card-img flex center-all">
                <img src="./assets/branding/Container-2.svg" alt="" />
              </div>
              <div class="text flex-col">
                <h5>CHRISTIAN MORALS</h5>
                <p>
                  We strive to uphold Christian principles, moral judgement,
                  and to be honest, open, and fair.
                </p>
              </div>
            </div>
            <a href="about-us.php" class="cta-primary">Learn More about us</a>
          </div>
        </div>
      </section>
      <section class="float-in our-projects flex-col center-all vert-pad-64">
        <h2 class="title-line-break">Our Work</h2>
        <div class="projects flex">
          <div class="scrollbar">
          </div>
          <ul class="flex">
            <li class="project-card">
              <img class src="assets/portfolio/_STU6181_edit.webp" alt="" />
            </li>
            <li class="project-card">
              <img class src="assets/portfolio/D-05-02.webp" alt="" />
            </li>
            <li class="project-card">
              <img class src="assets/portfolio/UBC Site 2.jpg" alt="" />
            </li>
            <li class="project-card">
              <img class src="assets/portfolio/P1000069.webp" alt="" />
            </li>
            <li class="project-card">
              <img class src="assets/portfolio/mosaic_ARBOR_07.webp" alt="" />
            </li>
            <li class="project-card">
              <img class src="assets/portfolio/IMG_6746.webp" alt="" />
            </li>
          </ul>
        </div>
        <div class="top-pad-32">
        <a href="our-work.php" class="cta-primary">See Our Portfolio</a>
        </div>
      </section>
      <section class="float-in testimonials title-line-break">
        <h5>Reviews</h5>
        <div class="reviews-grid">
          <div class="review flex-col left-align">
            <p>“OMG they are so hooot”</p>
            <div class="profile flex">
              <img src="./assets/Image.png" alt="" />
              <div class="text flex-col center-col-vert">
                <h6>John Doe</h6>
                <p class="p-small">CEO, Doe Inc.</p>
              </div>
            </div>
          </div>
          <div class="review flex-col left-align">
            <p>“OMG they are so hooot”</p>
            <div class="profile flex">
              <img src="./assets/Image.png" alt="" />
              <div class="text flex-col center-col-vert">
                <h6>John Doe</h6>
                <p class="p-small">CEO, Doe Inc.</p>
              </div>
            </div>
          </div>
          <div class="review flex-col left-align">
            <p>“OMG they are so hooot”</p>
            <div class="profile flex">
              <img src="./assets/Image.png" alt="" />
              <div class="text flex-col center-col-vert">
                <h6>John Doe</h6>
                <p class="p-small">CEO, Doe Inc.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php include_once 'components/footer.php' ?>
  </div>
  <script src="scripts/main.js" defer></script>
</body>

</html>