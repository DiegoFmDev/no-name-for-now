document.addEventListener("DOMContentLoaded", () => {
  // Initialize carousel with 5-second interval
  const heroCarousel = document.getElementById("heroCarousel")
  if (heroCarousel) {
    const carousel = new bootstrap.Carousel(heroCarousel, {
      interval: 5000,
      wrap: true,
    })
  }

  // Initialize tooltips
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map((tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl))

  // Hero carousel functionality
  const carouselButtons = document.querySelectorAll(".carousel-indicators-custom button")
  if (carouselButtons.length > 0) {
    carouselButtons.forEach((button, index) => {
      button.addEventListener("click", () => {
        // Remove active class from all buttons
        carouselButtons.forEach((btn) => btn.classList.remove("active"))
        // Add active class to clicked button
        button.classList.add("active")

        // Here you would normally trigger the carousel slide
        // Since we're not using a real carousel in this demo, we'll just update the active state
      })
    })
  }

  // Add to cart functionality
  const addToCartButtons = document.querySelectorAll(".add-to-cart")
  if (addToCartButtons.length > 0) {
    addToCartButtons.forEach((button) => {
      button.addEventListener("click", function (e) {
        // In a real application, this would be handled by the form submission
        // For demo purposes, we'll show an alert
        if (!this.closest("form")) {
          e.preventDefault()

          // Add animation class
          this.classList.add("animate__animated", "animate__pulse")

          // Show success message
          const toast = document.createElement("div")
          toast.className = "toast-notification"
          toast.innerHTML = '<i class="fas fa-check-circle"></i> Product added to cart!'
          document.body.appendChild(toast)

          // Remove animation class after animation ends
          setTimeout(() => {
            this.classList.remove("animate__animated", "animate__pulse")
          }, 1000)

          // Remove toast after 3 seconds
          setTimeout(() => {
            toast.classList.add("hide")
            setTimeout(() => {
              document.body.removeChild(toast)
            }, 500)
          }, 3000)
        }
      })
    })
  }

  // Sticky navbar
  const navbar = document.querySelector(".sticky-top")
  if (navbar) {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 50) {
        navbar.classList.add("scrolled")
      } else {
        navbar.classList.remove("scrolled")
      }
    })
  }

  // Scroll animations
  const scrollElements = document.querySelectorAll(".fade-in, .fade-in-left, .fade-in-right")

  const elementInView = (el, dividend = 1) => {
    const elementTop = el.getBoundingClientRect().top
    return elementTop <= (window.innerHeight || document.documentElement.clientHeight) / dividend
  }

  const displayScrollElement = (element) => {
    element.classList.add("active")
  }

  const hideScrollElement = (element) => {
    element.classList.remove("active")
  }

  const handleScrollAnimation = () => {
    scrollElements.forEach((el) => {
      if (elementInView(el, 1.25)) {
        displayScrollElement(el)
      } else {
        hideScrollElement(el)
      }
    })
  }

  // Add scroll event listener
  window.addEventListener("scroll", () => {
    handleScrollAnimation()
  })

  // Trigger once on load
  handleScrollAnimation()

  // Product image hover zoom effect
  const productImages = document.querySelectorAll(".product-image-container img")
  if (productImages.length > 0) {
    productImages.forEach((img) => {
      img.addEventListener("mousemove", function (e) {
        const { left, top, width, height } = this.getBoundingClientRect()
        const x = ((e.clientX - left) / width) * 100
        const y = ((e.clientY - top) / height) * 100
        this.style.transformOrigin = `${x}% ${y}%`
      })
    })
  }
})

// Countdown Timer
function updateCountdown() {
  const now = new Date().getTime()
  const endDate = new Date("2024-12-31").getTime() // Set your end date here
  const timeLeft = endDate - now

  const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24))
  const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))
  const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60))
  const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000)

  document.getElementById("days").innerText = String(days).padStart(2, "0")
  document.getElementById("hours").innerText = String(hours).padStart(2, "0")
  document.getElementById("minutes").innerText = String(minutes).padStart(2, "0")
  document.getElementById("seconds").innerText = String(seconds).padStart(2, "0")
}

// Update countdown every second
if (document.getElementById("days")) {
  updateCountdown()
  setInterval(updateCountdown, 1000)
}

// Add animation classes to elements
document.addEventListener("DOMContentLoaded", () => {
  // Add animation classes to section headings
  const sectionHeadings = document.querySelectorAll("h2.text-center, h3.text-center")
  sectionHeadings.forEach((heading) => {
    heading.classList.add("fade-in")
  })

  // Add animation classes to feature icons
  const featureIcons = document.querySelectorAll(".feature-icon")
  featureIcons.forEach((icon) => {
    icon.classList.add("fade-in")
  })

  // Add animation classes to product cards
  const productCards = document.querySelectorAll(".product-card")
  productCards.forEach((card, index) => {
    card.classList.add("fade-in")
    card.style.transitionDelay = `${index * 0.1}s`
  })

  // Add animation classes to category cards
  const categoryCards = document.querySelectorAll(".category-card")
  categoryCards.forEach((card, index) => {
    if (index % 2 === 0) {
      card.classList.add("fade-in-left")
    } else {
      card.classList.add("fade-in-right")
    }
  })

  // Add animation classes to testimonial cards
  const testimonialCards = document.querySelectorAll(".testimonial-card, .card.h-100.border-0.shadow-sm.p-4")
  testimonialCards.forEach((card, index) => {
    card.classList.add("fade-in")
    card.style.transitionDelay = `${index * 0.1}s`
  })
})

