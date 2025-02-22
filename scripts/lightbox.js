// Wait for the DOM to fully load
document.addEventListener('DOMContentLoaded', function () {
    // Select all images with the 'gallery-item' class
    const galleryItems = document.querySelectorAll('.gallery-item');
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
  
    // Add a click event listener to each image
    galleryItems.forEach((item) => {
      item.addEventListener('click', () => {
        const imageSrc = item.src; // Get the clicked image's source
        lightboxImg.src = imageSrc; // Set the source of the lightbox image
        lightbox.style.display = 'flex'; // Show the lightbox
      });
    });
  
    // Close the lightbox when the close button is clicked
    document.querySelector('.close').addEventListener('click', () => {
      lightbox.style.display = 'none';
    });
  });
  