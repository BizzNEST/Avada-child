//You can start using the library's methods here out the gate.
//No need to import.

//Check out the documations here: https://animejs.com/documentation/
//See which methods you need!

//Example code is below. Use it as reference only.
document.addEventListener("DOMContentLoaded", function () {
  console.log("Hello this means that it loaded!");
});

/* ========== MOBILE CAROUSEL JAVASCRIPT START ========== */
// Mobile carousel functionality
document.querySelectorAll(".mobile-carousel").forEach((carouselContainer) => {
  const track = carouselContainer.querySelector(".carousel-track");
  const slides = carouselContainer.querySelectorAll(".carousel-slide");
  const pagination = carouselContainer.querySelector(".carousel-pagination");

  if (!track || slides.length === 0 || !pagination) return;

  // Create pagination dots dynamically
  slides.forEach((_, index) => {
    const dot = document.createElement("button");
    dot.classList.add("pagination-dot");
    if (index === 0) dot.classList.add("active");

    dot.addEventListener("click", () => {
      slides[index].scrollIntoView({
        behavior: "smooth",
        block: "nearest",
        inline: "center",
      });
    });

    pagination.appendChild(dot);
  });

  const dots = pagination.querySelectorAll(".pagination-dot");

  // Scroll listener for active indicator
  carouselContainer.addEventListener("scroll", () => {
    const containerCenter =
      carouselContainer.scrollLeft + carouselContainer.offsetWidth / 2;

    let closestIndex = 0;
    let closestDistance = Infinity;

    slides.forEach((slide, index) => {
      const slideCenter = slide.offsetLeft + slide.offsetWidth / 2;
      const distance = Math.abs(containerCenter - slideCenter);

      if (distance < closestDistance) {
        closestDistance = distance;
        closestIndex = index;
      }
    });

    dots.forEach((dot, i) => {
      dot.classList.toggle("active", i === closestIndex);
    });
  });
});
/* ========== MOBILE CAROUSEL JAVASCRIPT END ========== */
