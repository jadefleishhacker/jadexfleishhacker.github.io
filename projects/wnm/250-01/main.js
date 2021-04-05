//FOR SERVICE PAGE
$(document).ready(function () {
    function resizeSection() {
        let windowheight = $(window).height();
        $("#fun, #wedding, #polaroid").css("min-height", windowheight);
    }
    resizeSection();
    $(".mainnav").click(function () {
        event.preventDefault();
        let sectionscroll = $($(this).attr("href")).offset().top;
        $("html, body").animate({ scrollTop: sectionscroll }, 1000);
    });
    $(".returntotop").click(function () {
        event.preventDefault();
        $("html, body").animate({ scrollTop: "0px" }, 1000);
    });
    jQuery.event.add(window, "resize", resizeSection);
});

//SMOOTH SCROLL
$(document).ready(function () {
    $("a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 1000, function () {
                window.location.hash = hash;
            });
        }
    });
});


// Hero Image

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active-dot", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}


// Menu

function openNav() {
    document.getElementById("myNav").style.height = "50%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
