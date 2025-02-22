document.addEventListener("DOMContentLoaded", function () {
  const mobileMenuToggle = document.querySelector(".mobile-menu-toggle");
  const mobileNav = document.querySelector(".mobile-nav");
  const burger = document.querySelectorAll(".line");
  const contactUs = document.getElementById("contact-us");

  if (mobileMenuToggle && mobileNav) {
    mobileMenuToggle.addEventListener("click", function () {
      // Toggle the 'active' class on both toggle button and mobile nav
      mobileMenuToggle.classList.toggle('active');
      mobileNav.classList.toggle('active');
      
      if (mobileNav.classList.contains('active')) {
        // Animate opening the mobile nav
        mobileNav.style.right = '0vw';
        burger[0].style.rotate = '45deg';
        burger[0].style.top = '25%';
        burger[1].style.opacity = '0';
        burger[2].style.rotate = '-45deg';
        burger[2].style.bottom = '25%';
        document.body.style.overflow = "hidden";
        contactUs.addEventListener("click", function () {
          console.log("We got this far...");
          mobileMenuToggle.classList.toggle('active');
          mobileNav.classList.toggle('active');
          mobileNav.style.right = '-100vw';
          burger[0].style.rotate = '0deg';
          burger[0].style.top = '0';
          burger[1].style.opacity = '1';
          burger[2].style.rotate = '0deg';
          burger[2].style.bottom = '0';
          document.body.style.overflow = "auto";
        });
      } else {
        // Animate closing the mobile nav
        mobileNav.style.right = '-100vw';
        burger[0].style.rotate = '0deg';
        burger[0].style.top = '0';
        burger[1].style.opacity = '1';
        burger[2].style.rotate = '0deg';
        burger[2].style.bottom = '0';
        document.body.style.overflow = "auto";
      }
    });
  }
});

$(document).ready(function () {

  function highlightFooter() {
    const $footerSection = $('#contact-info');
    const $email = $('#email');
    const $number = $('#number');

    if ($footerSection.length) {
      // Smooth scroll to the footer
      $('html, body').animate(
        { scrollTop: $footerSection.offset().top },
        800, 'easeOutCubic', // Duration of scroll animation
        () => {
          setTimeout(() => {
            // Highlight the footer after scrolling
            $footerSection.css({
              backgroundColor: 'var(--colour-primary-accent)',
              transition: 'all 0.33s',
            });
            $email.css('color', 'var(--colour-primary)');
            $number.css('color', 'var(--colour-primary)');
          }, 800)

          // Revert the highlight after 1 second
          setTimeout(() => {
            $footerSection.css('backgroundColor', 'var(--colour-primary)');
            $email.css('color', 'var(--colour-primary-accent)');
            $number.css('color', 'var(--colour-primary-accent)');
          }, 1800);
        }
      );
    }
  }

  // Example usage: Bind it to a button click
  $('#highlight-footer-btn').click(highlightFooter);

    const elements = document.querySelectorAll(".float-in");
  
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("visible"); // Add the visible class
            observer.unobserve(entry.target); // Stop observing once visible
          }
        });
      },
      { threshold: 0.1 } // Trigger when 10% of the element is in view
    );
  
    elements.forEach((element) => observer.observe(element));

});


