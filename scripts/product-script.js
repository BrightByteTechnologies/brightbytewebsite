fetch('includes/product-info.json')
  .then(response => response.json())
  .then(data => {
    document.getElementById('bevDesc').textContent = data.BevBot.description;
    document.getElementById('bevWhy').textContent = data.Why.description[0].detail;

    const benefitDiv = document.getElementById('benefit');
    for (let i = 0; i < data.Why.description[1].detail.length; i++) {
      const name = data.Why.description[1].detail[i].name;
      const description = data.Why.description[1].detail[i].description;

      const nameSpan = document.createElement("span");
      nameSpan.className = "des-name lb";
      nameSpan.textContent = name;

      const descSpan = document.createElement("span");
      descSpan.className = "des-detail";
      descSpan.textContent = description;
      benefitDiv.appendChild(nameSpan);
      benefitDiv.appendChild(descSpan);
    }


  })
  .catch(error => {
    // Verbindung fehlgeschlagen
    console.error('Verbindung fehlgeschlagen', error);
  });

//---- Slideshow for product Area ----//
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides((slideIndex += n));
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  const slides = document.querySelectorAll(".mySlides");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  slides.forEach((slide) => (slide.style.display = "none"));
  slides[slideIndex - 1].style.display = "block";
}

//---- Scroll to top button Area ----//
// Get the button:
const mybutton = document.getElementById("topBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    topBtn.style.display = "block";
  } else {
    topBtn.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  window.scrollTo({ top: 0, behavior: "smooth" }); // For Chrome, Firefox, IE and Opera
}

//---- Timeline Area ----//
const SLIDE_SIZE = 3;
const MOBILE_SLIDE_SIZE = 1;

let currentSlideIndex = 0;
const timelines = document.querySelectorAll(".sliding");
showCurrentSlide(currentSlideIndex);

function showCurrentSlide(index) {
  const shownCollection = document.querySelectorAll(".timeline");
  const maxIndex = shownCollection.length - getSlideSize();
  currentSlideIndex = ((index % shownCollection.length) + shownCollection.length) % shownCollection.length;

  shownCollection.forEach((item) => (item.style.display = "none"));

  if (isMobile()) {
    shownCollection[currentSlideIndex].style.display = "block";
  } else {
    for (let i = 0; i < getSlideSize(); i++) {
      var currentSlideIndexWithOffset = (currentSlideIndex + i) % shownCollection.length;
      var currentSlide = shownCollection[currentSlideIndexWithOffset];
      if (currentSlide) {
        currentSlide.style.display = "block";
      }
    }
  }
}

function isMobile() {
  return window.innerWidth < 800;
}

function getSlideSize() {
  return isMobile() ? MOBILE_SLIDE_SIZE : SLIDE_SIZE;
}

function nextSlide() {
  currentSlideIndex += getSlideSize();
  showCurrentSlide(currentSlideIndex);
  animateSlides('left');
}

function prevSlide() {
  currentSlideIndex -= getSlideSize();
  showCurrentSlide(currentSlideIndex);
  animateSlides('right');
}

function animateSlides(direction) {
  const shownCollection = document.querySelectorAll(".timeline");
  const fromIndex = direction === 'left' ? currentSlideIndex - getSlideSize() : currentSlideIndex + getSlideSize();
  const toIndex = currentSlideIndex;

  shownCollection.forEach((item, index) => {
    const animationClass = getAnimationClass(index, fromIndex, toIndex, direction);
    item.classList.remove('right', 'left');
    item.classList.add(animationClass);
  });
}

function getAnimationClass(index, fromIndex, toIndex, direction) {
  if (direction === 'left') {
    if (index >= fromIndex && index < toIndex) {
      return 'right';
    } else {
      return 'left';
    }
  } else {
    if (index <= fromIndex && index > toIndex) {
      return 'left';
    } else {
      return 'right';
    }
  }
}
