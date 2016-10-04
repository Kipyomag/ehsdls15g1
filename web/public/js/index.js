
$(function() {
    $(document).scroll(function(){
        var scrollTop = $(document).scrollTop();
        if(scrollTop > 150){
            $("#topNavbar").addClass("little");
            $("#topNavbar").removeClass("default");
        }
        else {
            $("#topNavbar").addClass("default");
            $("#topNavbar").removeClass("little");
        }

    });

});