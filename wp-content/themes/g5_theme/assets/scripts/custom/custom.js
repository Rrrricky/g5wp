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

          if (Math.abs(dx) + Math.abs(dy) < 0.1) {
            x = xmouse;
            y = ymouse;
          } else {
            x += dx;
            y += dy;
          }
        }

        $ball.style.left = x + 'px';
        $ball.style.top = y + 'px';
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

          if (acceleration > 0) {
            ball.style.width = _speed / 100 + 60 + 'px';
            ball.style.height = _speed / 100 + 60 + 'px';
          } else {
            ball.style.height = '60px';
            ball.style.width = '60px';
          }
        }

        prevEvent = currentEvent;
        prevSpeed = speed;
      }, 100);
    }
  }]);

  return NewMouse;
}();

var newMouse = new NewMouse();