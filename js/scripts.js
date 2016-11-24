
$(function(){

  $(window).load(function() {
     $('.preloader').fadeOut('slow');
  });

//slide-out nav
    $('.display__mobile i').on('click', function() {
        $('.display__mobile--menu').toggleClass('nav-open');
        $('.display__mobile i').toggleClass('fa-times').toggleClass('fa-bars');
    });

    $('.display__mobile ul li').on('click', function() {
        $('.display__mobile--menu').toggleClass('nav-open');
        $('.display__mobile i').toggleClass('fa-times').toggleClass('fa-bars');
    });

    //modal
    $('.modal-show a').on('click', function(e) {
      e.preventDefault();
      $('.modal').show();
      $('.overlayform').show();
    });

    //when someone clicks on the overlay
    $('.overlayform').on('click', function() {
      //hide the form
      $('.modal').hide();
      //hide the overlay
      $('.overlayform').hide();
    });

//featured work 
  var projects = {};
  
  projects.loading = function() {
    //hide featured work section until user scrolls to that section
    $('#front .projects__flex div:nth-child(1)').css({
      'opacity': '0',
      'transition': 'ease opacity 0.4s'
    });

    $('#front .projects__flex div:nth-child(2)').css({
      'opacity': '0',
      'transition': 'ease opacity 0.8s'
    });

    $('#front .projects__flex div:nth-child(3)').css({
      'opacity': '0',
      'transition': 'ease opacity 1.2s'
    });

    $(document).scroll(function() {
      var heroImage = $('.header').height();
      if ($(this).scrollTop() > (heroImage - 400)) {
        //have featured work section fade in
        $('#front .projects__flex div:nth-child(1)').css({
          'opacity': '1'
        });

        $('#front .projects__flex div:nth-child(2)').css({
          'opacity': '1'
        });

        $('#front .projects__flex div:nth-child(3)').css({
          'opacity': '1'
        });
      } 
    });
  }

  projects.init = function() {
    projects.loading();
  }

//blog posts
  var blog = {};

  blog.loading = function() {
    //hide the blog pages until user reaches that point
    $('#front .owl-wrapper div:nth-child(1)').css({
      'opacity': '0',
      'transition': 'ease opacity 0.4s'
    });
    $('#front .owl-wrapper div:nth-child(2)').css({
      'opacity': '0',
      'transition': 'ease opacity 0.8s'
    });
    $('#front .owl-wrapper div:nth-child(3)').css({
      'opacity': '0',
      'transition': 'ease opacity 1.2s'
    });

    $(document).scroll(function() {
      var blogHeight = $('#front .blog').offset().top
      if ($(this).scrollTop() > blogHeight - 400) {
        $('#front .owl-wrapper div:nth-child(1)').css({
          'opacity': '1'
        });
        $('#front .owl-wrapper div:nth-child(2)').css({
          'opacity': '1'
        });
        $('#front .owl-wrapper div:nth-child(3)').css({
          'opacity': '1'
        });
      }
    });
  }

  blog.init = function() {
    blog.loading();
  }


  $('#front .skills__flex i').mouseenter(function() {
    $(this).css({
      'color': '#E1BB79'
    });
    $(this).siblings('p').css({
      'opacity': '1'
    })
  });
    $('#front .skills__flex i').mouseleave(function() {
    $(this).css({
      'color': '#000'
    });
    $(this).siblings('p').css({
      'opacity': '0'
    })
  });

  // $('#logosig').fadeIn(2000);


  projects.init();
  blog.init();

});