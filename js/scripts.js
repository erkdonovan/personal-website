
$(function(){

  //slide-out nav
    $('.display__mobile i').on('click', function() {
        $('.display__mobile--menu').toggleClass('nav-open');
        $('.display__mobile i').toggleClass('fa-times').toggleClass('fa-bars');
    });

    $('.display__mobile ul li').on('click', function() {
        $('.display__mobile--menu').toggleClass('nav-open');
        $('.display__mobile i').toggleClass('fa-times').toggleClass('fa-bars');
    });


});