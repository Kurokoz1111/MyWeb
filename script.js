// Welcome Overlay Functionality
document.addEventListener("DOMContentLoaded", function () {
  const welcomeOverlay = document.getElementById("welcomeOverlay");
  if (!welcomeOverlay) return;

  // Play sound on load
  const sound = document.getElementById("welcomeSound");
  sound.volume = 0.3;
  sound.play().catch((e) => console.log("Audio blocked:", e));

  // Close button
  document.querySelector(".close-btn").addEventListener("click", () => {
    welcomeOverlay.style.animation = "fadeIn 0.4s reverse forwards";
    setTimeout(() => {
      welcomeOverlay.remove();
      // Optional: Send AJAX request to mark as seen
      markWelcomeAsSeen();
    }, 400);
  });

  // Create floating particles
  function createParticles() {
    const particlesContainer = document.querySelector(".particles");
    const colors = ["#ff0", "#f0f", "#0ff", "#f00", "#0f0"];

    for (let i = 0; i < 30; i++) {
      const particle = document.createElement("div");
      particle.className = "particle";
      particle.style.left = Math.random() * 100 + "%";
      particle.style.top = Math.random() * 100 + "%";
      particle.style.background = `linear-gradient(45deg, ${
        colors[Math.floor(Math.random() * colors.length)]
      }, ${colors[Math.floor(Math.random() * colors.length)]})`;
      particle.style.animationDelay = Math.random() * 3 + "s";
      particle.style.width = Math.random() * 8 + 4 + "px";
      particle.style.height = particle.style.width;
      particlesContainer.appendChild(particle);
    }
  }

  // Emoji explosion (trigger on open)
  function emojiExplosion() {
    const emojis = ["🎉", "✨", "🌟", "🔥", "💎", "🚀"];
    const box = document.querySelector(".welcome-box");

    for (let i = 0; i < 20; i++) {
      const emoji = document.createElement("div");
      emoji.className = "emoji-explosion";
      emoji.textContent = emojis[Math.floor(Math.random() * emojis.length)];
      emoji.style.left = "50%";
      emoji.style.top = "50%";
      emoji.style.setProperty("--tx", `${Math.random() * 200 - 100}px`);
      emoji.style.setProperty("--ty", `${Math.random() * 200 - 100}px`);
      emoji.style.opacity = "0";
      emoji.style.animationDelay = i * 0.05 + "s";
      box.appendChild(emoji);
    }
  }

  // Init effects
  createParticles();
  emojiExplosion();
});

const toTop = document.querySelector(".scrolltop");
window.addEventListener("scroll", () => {
  if (window.scrollY >= 100) {
    toTop.classList.add("scroll");
  } else {
    toTop.classList.remove("scroll");
  }
});
document.addEventListener("DOMContentLoaded", function () {
  const slideshow = document.querySelector(".slideshow-3d");
  const slides = document.querySelectorAll(".slide");
  const prevButton = document.querySelector(".prev-button");
  const nextButton = document.querySelector(".next-button");
  let currentIndex = 0;
  const totalSlides = slides.length;
  let touchStartX = 0;
  let touchEndX = 0;
  const swipeThreshold = 50;

  // Initialize slides
  function updateSlides() {
    slides.forEach((slide, index) => {
      slide.classList.remove("active", "prev", "next", "far-prev", "far-next");

      if (index === currentIndex) {
        slide.classList.add("active");
      } else if (index === (currentIndex - 1 + totalSlides) % totalSlides) {
        slide.classList.add("prev");
      } else if (index === (currentIndex + 1) % totalSlides) {
        slide.classList.add("next");
      } else if (index === (currentIndex - 2 + totalSlides) % totalSlides) {
        slide.classList.add("far-prev");
      } else if (index === (currentIndex + 2) % totalSlides) {
        slide.classList.add("far-next");
      }
    });
  }

  // Next slide
  function goToNext() {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateSlides();
  }

  // Previous slide
  function goToPrev() {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateSlides();
  }

  // Touch event handlers
  function handleTouchStart(e) {
    touchStartX = e.changedTouches[0].screenX;
  }

  function handleTouchEnd(e) {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
  }

  function handleSwipe() {
    const difference = touchStartX - touchEndX;

    if (difference > swipeThreshold) {
      // Swipe left - next slide
      goToNext();
    } else if (difference < -swipeThreshold) {
      // Swipe right - previous slide
      goToPrev();
    }
  }

  // Button event listeners
  nextButton.addEventListener("click", goToNext);
  prevButton.addEventListener("click", goToPrev);

  // Touch events for mobile
  slideshow.addEventListener("touchstart", handleTouchStart, { passive: true });
  slideshow.addEventListener("touchend", handleTouchEnd, { passive: true });

  // Keyboard navigation
  document.addEventListener("keydown", function (e) {
    if (e.key === "ArrowRight") {
      goToNext();
    } else if (e.key === "ArrowLeft") {
      goToPrev();
    }
  });

  // Initialize
  updateSlides();

  // Auto-rotation only for larger screens
  if (window.innerWidth > 480) {
    let autoRotate = setInterval(goToNext, 5000);
    slideshow.addEventListener("mouseenter", () => clearInterval(autoRotate));
    slideshow.addEventListener("mouseleave", () => {
      autoRotate = setInterval(goToNext, 3000);
    });
  }
});

// Optional: Click outside to close dropdown
document.addEventListener("click", function (event) {
  const dropdown = document.getElementById("userDropdown");
  const icon = document.querySelector(".user-initial");
  if (
    dropdown &&
    icon &&
    !dropdown.contains(event.target) &&
    !icon.contains(event.target)
  ) {
    dropdown.style.display = "none";
  }
});

// Add this at the end of your script.js file

// Scroll animation functionality with direction detection
document.addEventListener("DOMContentLoaded", function () {
  let lastScrollPosition = window.scrollY;
  let ticking = false;
  let lastDirection = null;

  const animateOnScroll = function () {
    const currentScrollPosition = window.scrollY;
    const direction =
      currentScrollPosition > lastScrollPosition ? "down" : "up";

    // Only proceed if direction changed to down
    if (direction === "down" && direction !== lastDirection) {
      resetAllAnimations();
    }

    if (direction === "down") {
      const windowHeight = window.innerHeight;
      const windowTopPosition = window.scrollY;
      const windowBottomPosition = windowTopPosition + windowHeight;

      document.querySelectorAll("[data-animate]").forEach((element) => {
        const elementHeight = element.offsetHeight;
        const elementTopPosition = element.offsetTop;
        const elementBottomPosition = elementTopPosition + elementHeight;

        if (
          elementBottomPosition >= windowTopPosition &&
          elementTopPosition <= windowBottomPosition
        ) {
          element.classList.add("animated");
        }
      });
    }

    lastDirection = direction;
    lastScrollPosition = currentScrollPosition;
    ticking = false;
  };

  function resetAllAnimations() {
    document.querySelectorAll("[data-animate]").forEach((el) => {
      el.classList.remove("animated");
    });
  }

  window.addEventListener("scroll", function () {
    if (!ticking) {
      window.requestAnimationFrame(function () {
        animateOnScroll();
      });
      ticking = true;
    }
  });

  // Initialize
  animateOnScroll();
});
