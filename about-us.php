<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Lexend:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/reset.css" />
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/about-us.css">
    <title>Mosaic Millwork</title>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-JobWAqYk5CSjWuVV3mxgS+MmccJqkrBaDhk8SKS1BW+71dJ9gzascwzW85UwGhxiSyR7Pxhu50k+Nl3+o5I49A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  </head>
  <body>
    <div class="pg-wrapper">
    <?php include_once 'components/header.php';?>

    <main>
          <section class="float-in banner vert-pad-64 flex-col">
            <div class="center-all">
              <h1>WHO WE ARE</h1>
             <h3 class="almarai-light">We are more than just carpenters.</h3>
            </div>
            <div class="image-container">
              <img src="../assets/company-pictures/Kamei-Photo-Lab-For-Web-4.jpg" alt="">
            </div>
          </section>
          <section class="float-in family-owned">
            <h2 class="title-line-break">FAMILY OWNED</h2>
            <div class="content flex hero vert-pad-64">
              <div class="container-outline pad-32 text">
                <p>At Mosaic Millwork, we&apos;re more than just a business; we&apos;re a family. Founded 43 years ago by Manuel, our company has grown into a thriving enterprise with his son, Dominic, now working by his side. What started as a small workshop has evolved into a respected name in the industry, known for our dedication to quality and craftsmanship.</p>
                <p>Our family values extend beyond our work. We treat our clients like part of the family, taking the time to understand your vision and needs. </p>
              </div>
              <div class="hero-img">
                <img src="../assets/company-pictures/Kamei-Photo-Lab-For-Web-17.jpg" alt="man in woodworking shop">
              </div>
            </div>
          </section>
          <section class="float-in faith">
            <h2 class="title-line-break">DEDICATED TO OUR FAITH</h2>
            <div class="content flex hero vert-pad-64">
              <div class="container-outline pad-32 text">
                <p>At Mosaic Millwork, our Catholic faith is at the heart of everything we do. Guided by our values of integrity, respect, and dedication, we integrate every project with a sense of purpose and reverence.</p>
                <p>Over the years, we&apos;ve had the honour of working on numerous faith-related projects. Each piece is crafted with love and devotion, reflecting our deep commitment to our faith and community.</p>
              </div>
              <div class="hero-img">
                <img src="../assets/portfolio/church.jpg" alt="man in woodworking shop">
              </div>
            </div>
          </section>
    </main>
    <?php include_once 'components/footer.php' ?>
</div>
      <script src="scripts/main.js" defer></script>
  </body>
</html>
