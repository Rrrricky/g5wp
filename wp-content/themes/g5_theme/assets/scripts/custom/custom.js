"use strict";

/* Display the current animal's number on the grid-based menu (regions and animals) */
var gridNumbers = document.querySelectorAll('.grid-menu__number');
var $animalWrapper = document.querySelector('.animal-wrapper');

for (var i = 0; i < gridNumbers.length; i++) {
  gridNumbers[i].innerHTML = i + 1;
}
"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var NewMouse =
/*#__PURE__*/
function () {
  function NewMouse() {
    _classCallCheck(this, NewMouse);

    this.setMouse();
    this.setEffect();
  }

  _createClass(NewMouse, [{
    key: "setMouse",
    value: function setMouse() {
      document.body.style.cursor = 'none';
      var $body = document.querySelector('body');
      var $ball = document.querySelector('.wrap__ball-js');
      var xmouse, ymouse;
      $body.addEventListener('mousemove', function (e) {
        xmouse = e.clientX || e.pageX;
        ymouse = e.clientY || e.pageY;
      });
      var x = 0,
          y = 0,
          dx = 0,
          dy = 0,
          tx = 0,
          ty = 0,
          key = -1;

      var followMouse = function followMouse() {
        key = requestAnimationFrame(followMouse);

        if (!x || !y) {
          x = xmouse;
          y = ymouse;
        } else {
          dx = (xmouse - x) * 0.125;
          dy = (ymouse - y) * 0.125;

          if (0.1 > Math.abs(dx) + Math.abs(dy)) {
            x = xmouse;
            y = ymouse;
          } else {
            x += dx;
            y += dy;
          }
        }

        $ball.style.left = x + 'px';
        $ball.style.top = y + window.pageYOffset + 'px';
      };

      followMouse();
    }
  }, {
    key: "setEffect",
    value: function setEffect() {
      var prevEvent, currentEvent;
      document.documentElement.addEventListener('mousemove', function (event) {
        currentEvent = event;
      });
      var maxSpeed = 0,
          prevSpeed = 0,
          maxPositiveAcc = 0,
          maxNegativeAcc = 0,
          speed = 0;
      setInterval(function () {
        if (prevEvent && currentEvent) {
          var movementX = Math.abs(currentEvent.screenX - prevEvent.screenX);
          var movementY = Math.abs(currentEvent.screenY - prevEvent.screenY);
          var movement = Math.sqrt(movementX * movementX + movementY * movementY); //speed=movement/100ms= movement/0.1s= 10*movement/s

          var _speed = 10 * movement; //current speed


          var acceleration = 10 * (_speed - prevSpeed);
          var ball = document.querySelector('.wrap__ball-js');

          if (0 < acceleration) {
            ball.style.width = _speed / 100 + 10 + 'px';
            ball.style.height = _speed / 100 + 10 + 'px';
          } else {
            ball.style.height = '20px';
            ball.style.width = '20px';
          }
        }

        prevEvent = currentEvent;
        prevSpeed = speed;
      }, 100);
    }
  }]);

  return NewMouse;
}();

if (document.querySelector('.wrap')) {
  var newMouse = new NewMouse();
} // Hide the mouse icon


$(window).scroll(function () {
  $('.wrapperAnimal__home__footer__mouse').css('opacity', 1 - $(window).scrollTop() / 250);
}); // display video

if (document.querySelector('.wrapperAnimal__home__footer__video')) {
  var videoBtn = document.querySelector('.wrapperAnimal__home__footer__video');
  console.log(videoBtn);
  var videoDisplay = document.querySelector('.wrapperAnimal__home__displayVideo');
  var videoClose = document.querySelector('.wrapperAnimal__home__close');
  var videoFrame = document.querySelector('#video');
  var isVideoDisplayed = false;
  videoBtn.addEventListener('click', function () {
    if (true == isVideoDisplayed) {
      isVideoDisplayed = false;
      videoDisplay.classList.remove('active');
      videoClose.classList.remove('active');
    } else if (false == isVideoDisplayed) {
      isVideoDisplayed = true;
      videoDisplay.classList.add('active');
      videoClose.classList.add('active');
    }
  });
  videoClose.addEventListener('click', function () {
    console.log('cose');
    isVideoDisplayed = false;
    videoDisplay.classList.remove('active');
    videoClose.classList.remove('active');
  });
}
"use strict";

/* Get navbar's items */
var navItems = document.querySelectorAll('.menu-item');
/* Get Current page link */

var currentPage = window.location.href;
/* Loop inside the navbar's items */

for (var i = 0; i < navItems.length; i++) {
  /* Define the current item stringified */
  var currentItem = navItems[i].firstChild.toString();
  /* If the current item's link is the same as the current page's link, than add class active */

  if (currentItem == currentPage) {
    navItems[i].appendChild(document.createElement('div')).classList.add('nav__active');
  }
}

var $hamburgerIcon = document.querySelector(".hamburger");
var $links = document.querySelector(".nav__links");
$hamburgerIcon.addEventListener("click", function () {
  $links.classList.toggle("is-active");
  $hamburgerIcon.classList.toggle("is-active");
});