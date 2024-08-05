$(document).ready(function () {

  var navItemsA = window.location.pathname;

  // alert(navItemsA);

  if (navItemsA == '/wildlife1/') {
    $('.nav-items-1').addClass("active");
  }else if (navItemsA == '/wildlife1/about.php') {
    $('.nav-items-2').addClass("active");
  } else if (navItemsA == '/wildlife1/product.php') {
    $('.nav-items-3').addClass("active");
  } else if (navItemsA == '/wildlife1/contact.php') {
    $('.nav-items-4').addClass("active");
  }

});

function addNewArticle(){

  // const content = quill.root.innerHTML;
      // alert(content);

      // const articleTitle = quill.root.innerHTML;
      // document.getElementById('')

      var quill = new Quill('#editor', {
        theme: 'snow' // or 'bubble' for a bubble theme
      });
      const articleTitle = document.getElementById('articleTitle').value;
      const articleText = quill.root.innerHTML;
      // alert(articleText);
      $(articleText).appendTo($('#article-text-div'));

}

// $(function(){
//   $("li").click(function(){
//   $("li").removeClass("active");
//   $(this).addClass("active");
//   });
// });

const initSlider = () => {
  const imageList = document.querySelector(".slider-wrapper .imge-list");
  const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
  const sliderScrollbar = document.querySelector(".container-slider .slider-scrollbar");
  const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
  const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

  //handle scrollbar thumb drag
  scrollbarThumb.addEventListener("mousedown", (e) => {
    const startX = e.clientX;
    const thumbPosition = scrollbarThumb.offsetLeft;

    //Update thumb position on mouse move
    const handleMouseMove = (e) => {
      const deltaX = e.clientX - startX;
      const newThumbPosition = thumbPosition + deltaX;
      const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;

      const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
      const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;

      scrollbarThumb.style.left = `${boundedPosition}px`;
      imageList.scrollLeft = scrollPosition;
    }

    //Remove event listeners on mouse up
    const handleMouseUp = () => {
      document.removeEventListenerEventListener("mousemove", handleMouseMove);
      document.removeEventListenerEventListener("mouseup", handleMouseUp);
    }

    //Add event linsteners for drsg interaction
    document.addEventListener("mousemove", handleMouseMove);
    document.addEventListener("mouseup", handleMouseUp);
  });

  //slide images according to the slide button clicks
  slideButtons.forEach(button => {
    button.addEventListener("click", () => {
      const direction = button.id == "prev-slide" ? -1 : 1;
      const scrollAmount = imageList.clientWidth * direction;
      imageList.scrollBy({
        left: scrollAmount,
        behavior: "smooth"
      });
    });
  });

  const handleSlideButtons = () => {
    slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "block";
    slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "block";
  }

  //Update scrollbar Thumb Position Based On Image Scroll
  const updateScrollThumbPosition = () => {
    const scrollPosition = imageList.scrollLeft;
    const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
    scrollbarThumb.style.left = `${thumbPosition}px`;
  }

  imageList.addEventListener("scroll", () => {
    handleSlideButtons();
    updateScrollThumbPosition();
  });

}

window.addEventListener("load", initSlider);

// Reviwe slide
let slides = document.querySelectorAll('.slide-container');
let index = 0;

function next() {
  slides[index].classList.remove('active');
  index = (index + 1) % slides.length;
  slides[index].classList.add('active');
}

function prev() {
  slides[index].classList.remove('active');
  index = (index - 1 + slides.length) % slides.length;
  slides[index].classList.add('active');
}