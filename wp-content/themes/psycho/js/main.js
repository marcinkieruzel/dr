jQuery(function($) {
    $(document).ready(function() {
        var head = $("#mainHeader").innerHeight();
        console.log(head);
        //$('#home').css("max-height", "calc(100vh - " + head + "px)");
        $('#kontakt').css("min-height", "calc(100vh - " + head + "px)");

        var nav = document.getElementById('fixNavs');
        var logoNav = document.getElementById('logoNav');

        $('#toggleMenu').click(function(e) {
            e.preventDefault();
            $('.menu').slideToggle();
        });



        $(window).on("scroll", function() {
            var getNav = nav.getBoundingClientRect();
            var getLogo = logoNav.getBoundingClientRect();
            if(getNav.top < 0) {
                $("#fixme").height($("#fixNavs").height());
                nav.classList.add("stack");

            }
            if(getLogo.bottom > -2) {
                $("#fixme").height(0);
                nav.classList.remove("stack");

            }
        });




    });
});
