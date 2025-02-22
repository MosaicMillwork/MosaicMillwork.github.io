<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Lexend:wght@100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="styles/reset.css" />
  <link rel="stylesheet" href="styles/style.css" />
  <link rel="stylesheet" href="styles/our-services.css">
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
      <section class="float-in">
        <h2 class="title-line-break title">SERVICES</h2>
        <div class="flex-col vert-pad-64">
          <div class="grid">
            <h5 class="pad-32 container-outline center-all flex">WE OFFER A WIDE RANGE OF SERVICES</h5>
            <div class="service-card flex-col container-outline pad-24">
              <div class="img-container">
                <img src="assets/portfolio/D-01-01.webp" alt="">
              </div>
              <div class="text flex-col">
                <h5>CABINETS</h5>
                <p>Custom-built cabinetry solutions tailored to meet specific client needs, enhancing functionality and
                  aesthetics in residential and commercial spaces.</p>
              </div>
            </div>
            <div class="service-card flex-col container-outline pad-24">
              <div class="img-container">
                <img src="assets/portfolio/Forest_01.webp" alt="">
              </div>
              <div class="text flex-col">
                <h5>ARCHITECTURAL MILLWORK</h5>
                <p>
                  From grand entryways to intricate wall paneling, our architectural millwork brings craftsmanship and
                  character to any space.
                </p>
              </div>
            </div>
            <div class="service-card flex-col container-outline pad-24">
              <div class="img-container">
                <img src="assets/portfolio/P1000027.webp" alt="">
              </div>
              <div class="text flex-col">
                <h5>FURNITURE MAKING</h5>
                <p>Handcrafted furniture pieces designed to blend functionality with artistic craftsmanship, ranging
                  from contemporary designs to traditional styles.</p>
              </div>
            </div>
            <div class="service-card flex-col container-outline pad-24">
              <div class="img-container">
                <img src="assets/portfolio/_STU6181_edit.webp" alt="">
              </div>
              <div class="text flex-col">
                <h5>WOOD PANELING</h5>
                <p>Installation of wood paneling for interior spaces, creating warm and inviting environments with
                  customized patterns and finishes.</p>
              </div>
            </div>
            <div class="service-card flex-col container-outline pad-24">
              <div class="img-container">
                <img src="assets/portfolio/church-2.jpg" alt="">
              </div>
              <div class="text flex-col">
                <h5>CATHOLIC ARCHITECTURE</h5>
                <p>Specialized expertise in designing and crafting architectural elements for Catholic churches and
                  religious spaces, ensuring reverence and aesthetic harmony.</p>
              </div>
            </div>
            <div class="service-card flex-col container-outline pad-24">
              <div class="img-container">
                <img src="assets/portfolio/mosaic_ARBOR_07.webp" alt="">
              </div>
              <div class="text flex-col">
                <h5>RESTORATION SERVICES</h5>
                <p>Preservation and restoration of historical or antique woodwork, maintaining authenticity while
                  enhancing durability and aesthetic appeal.</p>
              </div>
            </div>
            <h5 class="center-all flex"><a id="highlight-footer-btn" class="pad-24 cta-primary"
                href="#contact-info">ready to get started?</a></h5>
          </div>
        </div>
      </section>
    </main>
    <?php include_once 'components/footer.php' ?>
  </div>
  <script src="scripts/main.js" defer></script>
</body>

</html>