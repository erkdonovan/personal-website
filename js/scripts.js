(function ($, root, undefined) {

//slide-out nav
    $('.display__mobile i').on('click', function() {
        $('.display__mobile--menu').toggleClass('nav-open');
        $('header i').toggleClass('fa-times').toggleClass('fa-bars');
    });

})(jQuery, this);
