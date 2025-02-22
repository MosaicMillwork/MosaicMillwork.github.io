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
  <link rel="stylesheet" href="styles/our-work.css" />

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
      <section>
        <div class="gallery">

          <?php
          // Set the path to the directory containing the images
          $directory = 'assets/portfolio';

          // Scan the directory for image files (you can specify extensions like jpg, jpeg, png, gif)
          $images = glob($directory . '/*.{webp,jpg,jpeg,png,gif}', GLOB_BRACE);

          // Check if images are found
          if (!empty($images)) {
            // Start looping through the images
            foreach ($images as $image) {
              // Get the image file name (optional: remove the path)
              $imageName = basename($image);

              // Generate HTML output for each image inside a div
              echo '<div class="image-container">';
              echo '<img src="' . $image . '" alt="' . $imageName . '" class="gallery-item">';
              echo '</div>';
            }
          } else {
            echo 'No images found.';
          }
          ?>

        </div>
        <div id="lightbox" class="lightbox">
          <span class="close center-all">&times;</span>
          <img id="lightbox-img" class="lightbox-content">
        </div>

      </section>
    </main>
    <?php include_once 'components/footer.php' ?>
  </div>
  <script src="scripts/main.js" defer></script>
  <script src="scripts/lightbox.js" defer></script>
</body>

</html>