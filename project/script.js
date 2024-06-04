/*-----User Page-----*/
let subMenu = document.getElementById("sub-menu");

function toggleMenu(){
    subMenu.classList.toggle("open-menu");
}

/*-----Announcement Slider-----*/
var slides  = document.querySelectorAll('.slide');
var btns = document.querySelectorAll('.btns');
let currentSlide = 1;

var manualNav = function(manual){
    slides.forEach((slide) => {
        slide.classList.remove('active');

        btns.forEach((btns) => {
            btns.classList.remove('active');
        });
    });

    slides[manual].classList.add('active');
    btns[manual].classList.add('active');
}

btns.forEach((btns, i) => {
    btns.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
    });
});

/*-----Announcement Autoplay-----*/
var repeat = function(activeClass){
    let active = document.getElementsByClassName('active');
    let i = 1;

    var repeater = () => {
        setTimeout(function(){
            [...active].forEach((activeSlide) => {
                activeSlide.classList.remove('active');
            });


            slides[i].classList.add('active');
            btns[i].classList.add('active');
            i++;

            if(slides.length == i)
            {
                i = 0;
            }
            if(i >= slides.length)
            {
                return;
            }
            repeater();
        }, 6000);
    }
    repeater();
}
repeat();