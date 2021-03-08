// MENU
function openNav() {
    document.getElementById("myNav").style.height = "50%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}

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
