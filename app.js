  var autoText= new Array(
        "Hello there! I am Kelvin Boateng"
        );
        var textSpeed = 120; 
        var startPos = 0; 
        var arrLength = autoText[0].length; 
        var textScroll = 20; 

        var initTextPos = 0; 
        var sContents = " "; 
        var iRow; 
        
        function typewriter(){
            sContents = " ";
            iRow = Math.max(0, startPos - textScroll);
            var destination = document.getElementById("textme");
            while (iRow < startPos){
                sContents += autoText[iRow++] + "<br />";
            }
            destination.innerHTML = sContents + autoText[startPos].substring(0, initTextPos) + "_";
            if (initTextPos++ == arrLength){
                initTextPos= 0;
                startPos++;

                if(startPos != autoText.length){
                    arrLength = autoText[startPos].length;
                    setTimeout("typewriter()",120);
                }
            }
            else{
                setTimeout("typewriter()",textSpeed);

            }
        }
            typewriter();


            
//scrolling behaviour
         document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

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
  let slides = document.getElementsByClassName("myslides");
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


