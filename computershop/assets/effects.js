$(document).ready(function () {
    $(".hoverli").hover(
        function () {
            $('ul.mainmenu').stop(true,true).slideDown('medium');
        },
        function () {
            $('ul.mainmenu').stop(true,true).slideUp('medium');
        }
    });
});
