let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
  }
  
  // Update the image size for the slides
  showSlides(slideIndex); // Call this function to set the initial slide
  
  // Adjust the size of the images for slide 1 and slide 2
  slides[0].querySelector("img").style.width = "50%"; // Adjust the width as needed
  slides[0].querySelector("img").style.height = "auto"; // Maintain aspect ratio
  
  slides[1].querySelector("img").style.width = "50%"; // Adjust the width as needed
  slides[1].querySelector("img").style.height = "auto"; // Maintain aspect ratio