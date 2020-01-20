$('document').ready(function() {
  var screenHeight = $(window).height();
  var screenWidth = $(window).width();
  var navHeight = $('#main-nav').height();
  var contentHeight = screenHeight - navHeight;

  var delay = 300;
  $('.nav-item').each(function() {
    $(this).css('transition-delay', delay + 'ms');
    delay = delay + 100;
  });

  $('#mobile-nav').height(screenHeight);
  $('#content').css({
    'margin-top': navHeight
  });

  $('.nav-item').each(function() {
    if (
      $(this)
        .next()
        .is('.sub-nav')
    ) {
      $(this).addClass('arrowed');
    } else {
    }
  });
  $('#bun').click(function() {
    closeOut();
  });
  $('#bun1').click(function() {
    closeOut();
  });
  $('#content').click(function() {
    if ($('#container').hasClass('body-slide')) {
      closeOut();
    } else {
    }
  });
  $('.arrowed').click(function() {
    $(this).toggleClass('selected');
    $(this)
      .siblings()
      .removeClass('selected');
    $('.sub-nav').each(function() {
      $(this).slideUp('slow');
    });
    if (
      $(this)
        .next('.sub-nav')
        .is(':visible')
    ) {
      $(this)
        .next('.sub-nav')
        .slideUp('slow');
    } else {
      $(this)
        .next('.sub-nav')
        .slideDown('slow');
    }
  });
});

function closeOut() {
  $('body').toggleClass('scroll-jam');
  $('#sidebar').toggleClass('nav-slide');
  $('#container').toggleClass('body-slide');
  $('.nav-item').toggleClass('item-slide');
  $('.nav-item').removeClass('selected');
  $('.sub-nav').each(function() {
    $(this).hide();
  });
  triangleRezise();
}

function triangleRezise() {
  if ($('#container').hasClass('body-slide')) {
    $('.triangle').css('transition', '300ms ease');
    var screenHeight = $(window).height();
    var screenWidth = $(window).width();
    var navHeight = $('#main-nav').height();
    var triangleHeight = screenHeight - navHeight;
    var triangleWidth = screenWidth - 300;
    var triangleWidth = triangleWidth / 3;
    var triangleWidth = triangleWidth * 2;
    var triangleHeight = triangleHeight * 2;
    var triangleHeight = '' + triangleHeight + 'px ';
    var triangleWidth = '' + triangleWidth + 'px ';
    var triangle = triangleHeight + triangleWidth + '0px 0px';
    $('.triangle').css('border-width', triangle);
  } else {
    var screenHeight = $(window).height();
    var screenWidth = $(window).width();
    var navHeight = $('#main-nav').height();
    var triangleHeight = screenHeight - navHeight;
    var triangleWidth = screenWidth / 3;
    var triangleWidth = triangleWidth * 2;
    var triangleHeight = triangleHeight * 2;
    var triangleHeight = '' + triangleHeight + 'px ';
    var triangleWidth = '' + triangleWidth + 'px ';
    var triangle = triangleHeight + triangleWidth + '0px 0px';
    $('.triangle').css('border-width', triangle);
    setTimeout(function() {
      $('.triangle').css('transition', 'none');
    }, 300);
  }
}
triangleRezise();
$(window).resize(function() {
  triangleRezise();
});
// login form
$(document).ready(function() {
  $('.login-trigger').click(function() {
    $(this)
      .next('.login-content')
      .slideToggle();
    $(this).toggleClass('active');

    // if ($(this).hasClass('active'))
    //   $(this)
    //     .find('span')
    //     .html('&#x25B2;');
    // else
    //   $(this)
    //     .find('span')
    //     .html('&#x25BC;');
  });
  $('.login-name a').click(function() {
    $('#login-trigger').removeClass('active');
    $(this)
      .parent()
      .parent()
      .slideToggle();
  });
});
// candidate detalis
$(document).ready(function() {
  $('.candidat-toggle').click(function() {
    $(this)
      .parent()
      .prev('.toggle-content-client')
      .slideToggle();
    $(this).toggleClass('active');

    if ($('.candidat-toggle--name').hasClass('active'))
      $(this)
        .find('span')
        .html('Show Less');
    else
      $(this)
        .find('span')
        .html('Show More');
  });
});
// forget password
function forgetPassord() {
  document.getElementById('title-form').innerHTML = 'Reset Password';
  document.getElementById('forgetText').style.cssText = 'display:none';
  document.getElementById('forgetPassword').style.cssText = 'display:block';
  document.getElementById('login-form').style.cssText = 'display:none';
  document.getElementById('loginText').style.cssText = 'display:block';
}

function loginForm() {
  document.getElementById('title-form').innerHTML = 'Login';
  document.getElementById('loginText').style.cssText = 'display:none';
  document.getElementById('forgetText').style.cssText = 'display:block';
  document.getElementById('forgetPassword').style.cssText = 'display:none';
  document.getElementById('login-form').style.cssText = 'display:block';
}

// form select

$(document).ready(function() {
  $('.dropdown-toggle').dropdown();
});

$('.md-select ul li').on('click', function() {
  var v = $(this).text();

  $('.md-select ul li')
    .not($(this))
    .removeClass('active');
  $(this).addClass('active');
  $('.md-select  button').text(v);
});

// on window load
$(document).ready(function() {
  $('.category').addClass('show');
});
// news letter
var $form = $('.register');

function validateEmail(email) {
  var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return regex.test(email);
}

$form.on('keyup', 'input', function(e) {
  var $this = $(this),
    $input = $this.val();
  if ($input.length > 0) {
    $form.find('label').addClass('active');
    if (validateEmail($input)) {
      $form.find('button').addClass('active');
      $form.find('button').text('OK');
      console.log(e);
      if (e.which === 13) {
        $form.find('button').click();
        $this.blur();
      }
    } else {
      $form.find('button').removeClass('active');
    }
    $(this).addClass('active');
  } else {
    $form.find('label').removeClass('active');
    $form.find('button').removeClass('active');

    $(this).removeClass('active');
  }
});

$form.on('click', 'button.active', function(e) {
  e.preventDefault;
  var $this = $(this);
  $(this).addClass('full');
  $(this).html('Thanks!');

  setTimeout(() => {
    $form
      .find('input')
      .val('')
      .removeClass('active');
    $form.find('label').removeClass('active');
    $this.removeClass('full active');
    $this.html('ENTER');
  }, 1200);
});
// sign up
// Real-time username checks
$('#username').keyup(function() {
  checkSpaces($(this));
  checkRemoveLengthError($(this));
  checkAvailability($(this));
  checkRemovePresenceError($(this));
});

// Real-time password checks
$('#password').keyup(function() {
  checkRemoveLengthError($(this));
  checkRemovePresenceError($(this));
});

// Check lengths on blur
$('#username, #password').blur(function() {
  checkLength($(this));
});

// Check all on submit
$('#submit').click(function(event) {
  event.preventDefault();

  var valid_username =
    checkSpaces($('#username')) &&
    checkLength($('#username')) &&
    checkPresence($('#username')) &&
    checkAvailability($('#username'));
  var valid_password =
    checkLength($('#password')) && checkPresence($('#password'));

  if (valid_username && valid_password) {
    alert('Success!');
  }
});

// Error checking functions

function checkSpaces(target) {
  var value = target.val();
  var label = target.prev('.info').children('.spaces');

  if (value.includes(' ')) {
    label.addClass('error');
  } else {
    label.removeClass('error');
    return true;
  }
}

function checkLength(target) {
  var value = target.val();
  var label = target.prev('.info').children('.length');

  if (value.length > 0 && value.length < 5) {
    label.addClass('error');
  } else {
    label.removeClass('error');
    return true;
  }
}

function checkRemoveLengthError(target) {
  var value = target.val();
  var label = target.prev('.info').children('.length');

  if (value.length == 0 || value.length >= 5) {
    label.removeClass('error');
  }
}

function checkAvailability(target) {
  // Pseudo AJAX check of whether name is available
  var value = target.val();
  var label = target.prev('.info').children('.availability');

  if (value == 'stelios') {
    label.removeClass('hidden');
  } else {
    label.addClass('hidden');
    return true;
  }
}

function checkPresence(target) {
  var value = target.val();
  var label = target.siblings('label');

  if (value.length == 0) {
    label.addClass('error');
  } else {
    label.removeClass('error');
    return true;
  }
}

function checkRemovePresenceError(target) {
  var value = target.val();
  var label = target.siblings('label');

  if (value.length > 0) {
    label.removeClass('error');
  }
}
// scroll header
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  if (scroll >= 300) {
    $('header').addClass('sticky-header');
  } else {
    $('header').removeClass('sticky-header');
  }
});
// contact candidate and protocol
$(document).on('click', '.naccs .menu div', function() {
  var numberIndex = $(this).index();

  if (!$(this).is('active')) {
    $('.naccs .menu div').removeClass('active');
    $('.naccs .nacc .nacc__list').removeClass('active');
    $('.naccs .nacc .nacc__list').slideToggle();

    $(this).addClass('active');
    $('.naccs .nacc')
      .find('.nacc__list:eq(' + numberIndex + ')')
      .addClass('active');
  }
});
