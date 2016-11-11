
$(function(){

  //slide-out nav
    $('.display__mobile i').on('click', function() {
      console.log('hi');
        $('.display__mobile--menu').toggleClass('nav-open');
        $('.display__mobile i').toggleClass('fa-times').toggleClass('fa-bars');
    });

});