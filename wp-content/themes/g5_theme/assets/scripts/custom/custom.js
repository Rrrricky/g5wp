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
}); // appear habitat
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
"use strict";

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/**
 * Modules in this bundle
 * @license
 *
 * modal-video:
 *   license: appleple
 *   author: appleple
 *   homepage: http://developer.a-blogcms.jp
 *   version: 2.4.1
 *
 * custom-event-polyfill:
 *   license: MIT (http://opensource.org/licenses/MIT)
 *   maintainers: krambuhl <evan.krambuhl@gmail.com>
 *   contributors: Frank Panetta, Mikhail Reenko <reenko@yandex.ru>, Joscha Feth <joscha@feth.com>
 *   homepage: https://github.com/krambuhl/custom-event-polyfill#readme
 *   version: 0.3.0
 *
 * es6-object-assign:
 *   license: MIT (http://opensource.org/licenses/MIT)
 *   author: Rubén Norte <rubennorte@gmail.com>
 *   homepage: https://github.com/rubennorte/es6-object-assign
 *   version: 1.1.0
 *
 * This header is generated by licensify (https://github.com/twada/licensify)
 */
(function (f) {
  if ((typeof exports === "undefined" ? "undefined" : _typeof(exports)) === "object" && typeof module !== "undefined") {
    module.exports = f();
  } else if (typeof define === "function" && define.amd) {
    define([], f);
  } else {
    var g;

    if (typeof window !== "undefined") {
      g = window;
    } else if (typeof global !== "undefined") {
      g = global;
    } else if (typeof self !== "undefined") {
      g = self;
    } else {
      g = this;
    }

    g.ModalVideo = f();
  }
})(function () {
  var define, module, exports;
  return function e(t, n, r) {
    function s(o, u) {
      if (!n[o]) {
        if (!t[o]) {
          var a = typeof require == "function" && require;
          if (!u && a) return a(o, !0);
          if (i) return i(o, !0);
          var f = new Error("Cannot find module '" + o + "'");
          throw f.code = "MODULE_NOT_FOUND", f;
        }

        var l = n[o] = {
          exports: {}
        };
        t[o][0].call(l.exports, function (e) {
          var n = t[o][1][e];
          return s(n ? n : e);
        }, l, l.exports, e, t, n, r);
      }

      return n[o].exports;
    }

    var i = typeof require == "function" && require;

    for (var o = 0; o < r.length; o++) {
      s(r[o]);
    }

    return s;
  }({
    1: [function (require, module, exports) {
      // Polyfill for creating CustomEvents on IE9/10/11
      // code pulled from:
      // https://github.com/d4tocchini/customevent-polyfill
      // https://developer.mozilla.org/en-US/docs/Web/API/CustomEvent#Polyfill
      try {
        var ce = new window.CustomEvent('test');
        ce.preventDefault();

        if (ce.defaultPrevented !== true) {
          // IE has problems with .preventDefault() on custom events
          // http://stackoverflow.com/questions/23349191
          throw new Error('Could not prevent default');
        }
      } catch (e) {
        var CustomEvent = function CustomEvent(event, params) {
          var evt, origPrevent;
          params = params || {
            bubbles: false,
            cancelable: false,
            detail: undefined
          };
          evt = document.createEvent("CustomEvent");
          evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);
          origPrevent = evt.preventDefault;

          evt.preventDefault = function () {
            origPrevent.call(this);

            try {
              Object.defineProperty(this, 'defaultPrevented', {
                get: function get() {
                  return true;
                }
              });
            } catch (e) {
              this.defaultPrevented = true;
            }
          };

          return evt;
        };

        CustomEvent.prototype = window.Event.prototype;
        window.CustomEvent = CustomEvent; // expose definition to window
      }
    }, {}],
    2: [function (require, module, exports) {
      /**
       * Code refactored from Mozilla Developer Network:
       * https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object/assign
       */
      'use strict';

      function assign(target, firstSource) {
        if (target === undefined || target === null) {
          throw new TypeError('Cannot convert first argument to object');
        }

        var to = Object(target);

        for (var i = 1; i < arguments.length; i++) {
          var nextSource = arguments[i];

          if (nextSource === undefined || nextSource === null) {
            continue;
          }

          var keysArray = Object.keys(Object(nextSource));

          for (var nextIndex = 0, len = keysArray.length; nextIndex < len; nextIndex++) {
            var nextKey = keysArray[nextIndex];
            var desc = Object.getOwnPropertyDescriptor(nextSource, nextKey);

            if (desc !== undefined && desc.enumerable) {
              to[nextKey] = nextSource[nextKey];
            }
          }
        }

        return to;
      }

      function polyfill() {
        if (!Object.assign) {
          Object.defineProperty(Object, 'assign', {
            enumerable: false,
            configurable: true,
            writable: true,
            value: assign
          });
        }
      }

      module.exports = {
        assign: assign,
        polyfill: polyfill
      };
    }, {}],
    3: [function (require, module, exports) {
      'use strict';

      Object.defineProperty(exports, "__esModule", {
        value: true
      });

      var _createClass = function () {
        function defineProperties(target, props) {
          for (var i = 0; i < props.length; i++) {
            var descriptor = props[i];
            descriptor.enumerable = descriptor.enumerable || false;
            descriptor.configurable = true;
            if ("value" in descriptor) descriptor.writable = true;
            Object.defineProperty(target, descriptor.key, descriptor);
          }
        }

        return function (Constructor, protoProps, staticProps) {
          if (protoProps) defineProperties(Constructor.prototype, protoProps);
          if (staticProps) defineProperties(Constructor, staticProps);
          return Constructor;
        };
      }();

      require('custom-event-polyfill');

      var _util = require('../lib/util');

      function _classCallCheck(instance, Constructor) {
        if (!(instance instanceof Constructor)) {
          throw new TypeError("Cannot call a class as a function");
        }
      }

      var assign = require('es6-object-assign').assign;

      var defaults = {
        channel: 'youtube',
        facebook: {},
        youtube: {
          autoplay: 1,
          cc_load_policy: 1,
          color: null,
          controls: 1,
          disablekb: 0,
          enablejsapi: 0,
          end: null,
          fs: 1,
          h1: null,
          iv_load_policy: 1,
          list: null,
          listType: null,
          loop: 0,
          modestbranding: null,
          origin: null,
          playlist: null,
          playsinline: null,
          rel: 0,
          showinfo: 1,
          start: 0,
          wmode: 'transparent',
          theme: 'dark',
          nocookie: false
        },
        ratio: '16:9',
        vimeo: {
          api: false,
          autopause: true,
          autoplay: true,
          byline: true,
          callback: null,
          color: null,
          height: null,
          loop: false,
          maxheight: null,
          maxwidth: null,
          player_id: null,
          portrait: true,
          title: true,
          width: null,
          xhtml: false
        },
        allowFullScreen: true,
        animationSpeed: 300,
        classNames: {
          modalVideo: 'modal-video',
          modalVideoClose: 'modal-video-close',
          modalVideoBody: 'modal-video-body',
          modalVideoInner: 'modal-video-inner',
          modalVideoIframeWrap: 'modal-video-movie-wrap',
          modalVideoCloseBtn: 'modal-video-close-btn'
        },
        aria: {
          openMessage: 'You just openned the modal video',
          dismissBtnMessage: 'Close the modal by clicking here'
        }
      };

      var ModalVideo = function () {
        function ModalVideo(ele, option) {
          var _this = this;

          _classCallCheck(this, ModalVideo);

          var opt = assign({}, defaults, option);
          var selectors = typeof ele === 'string' ? document.querySelectorAll(ele) : ele;
          var body = document.querySelector('body');
          var classNames = opt.classNames;
          var speed = opt.animationSpeed;
          [].forEach.call(selectors, function (selector) {
            selector.addEventListener('click', function (event) {
              if (selector.tagName === 'A') {
                event.preventDefault();
              }

              var videoId = selector.dataset.videoId;
              var channel = selector.dataset.channel || opt.channel;
              var id = (0, _util.getUniqId)();

              var videoUrl = selector.dataset.videoUrl || _this.getVideoUrl(opt, channel, videoId);

              var html = _this.getHtml(opt, videoUrl, id);

              (0, _util.append)(body, html);
              var modal = document.getElementById(id);
              var btn = modal.querySelector('.js-modal-video-dismiss-btn');
              modal.focus();
              modal.addEventListener('click', function () {
                (0, _util.addClass)(modal, classNames.modalVideoClose);
                setTimeout(function () {
                  (0, _util.remove)(modal);
                  selector.focus();
                }, speed);
              });
              modal.addEventListener('keydown', function (e) {
                if (e.which === 9) {
                  e.preventDefault();

                  if (document.activeElement === modal) {
                    btn.focus();
                  } else {
                    modal.setAttribute('aria-label', '');
                    modal.focus();
                  }
                }
              });
              btn.addEventListener('click', function () {
                (0, _util.triggerEvent)(modal, 'click');
              });
            });
          });
        }

        _createClass(ModalVideo, [{
          key: 'getPadding',
          value: function getPadding(ratio) {
            var arr = ratio.split(':');
            var width = Number(arr[0]);
            var height = Number(arr[1]);
            var padding = height * 100 / width;
            return padding + '%';
          }
        }, {
          key: 'getQueryString',
          value: function getQueryString(obj) {
            var url = '';
            Object.keys(obj).forEach(function (key) {
              url += key + '=' + obj[key] + '&';
            });
            return url.substr(0, url.length - 1);
          }
        }, {
          key: 'getVideoUrl',
          value: function getVideoUrl(opt, channel, videoId) {
            if (channel === 'youtube') {
              return this.getYoutubeUrl(opt.youtube, videoId);
            } else if (channel === 'vimeo') {
              return this.getVimeoUrl(opt.vimeo, videoId);
            } else if (channel === 'facebook') {
              return this.getFacebookUrl(opt.facebook, videoId);
            }

            return '';
          }
        }, {
          key: 'getVimeoUrl',
          value: function getVimeoUrl(vimeo, videoId) {
            var query = this.getQueryString(vimeo);
            return '//player.vimeo.com/video/' + videoId + '?' + query;
          }
        }, {
          key: 'getYoutubeUrl',
          value: function getYoutubeUrl(youtube, videoId) {
            var query = this.getQueryString(youtube);

            if (youtube.nocookie === true) {
              return '//www.youtube-nocookie.com/embed/' + videoId + '?' + query;
            }

            return '//www.youtube.com/embed/' + videoId + '?' + query;
          }
        }, {
          key: 'getFacebookUrl',
          value: function getFacebookUrl(facebook, videoId) {
            return '//www.facebook.com/v2.10/plugins/video.php?href=https://www.facebook.com/facebook/videos/' + videoId + '&' + this.getQueryString(facebook);
          }
        }, {
          key: 'getHtml',
          value: function getHtml(opt, videoUrl, id) {
            var padding = this.getPadding(opt.ratio);
            var classNames = opt.classNames;
            return '\n      <div class="' + classNames.modalVideo + '" tabindex="-1" role="dialog" aria-label="' + opt.aria.openMessage + '" id="' + id + '">\n        <div class="' + classNames.modalVideoBody + '">\n          <div class="' + classNames.modalVideoInner + '">\n            <div class="' + classNames.modalVideoIframeWrap + '" style="padding-bottom:' + padding + '">\n              <button class="' + classNames.modalVideoCloseBtn + ' js-modal-video-dismiss-btn" aria-label="' + opt.aria.dismissBtnMessage + '"></button>\n              <iframe width=\'460\' height=\'230\' src="' + videoUrl + '" frameborder=\'0\' allowfullscreen=' + opt.allowFullScreen + ' tabindex="-1"/>\n            </div>\n          </div>\n        </div>\n      </div>\n    ';
          }
        }]);

        return ModalVideo;
      }();

      exports.default = ModalVideo;
      module.exports = exports['default'];
    }, {
      "../lib/util": 5,
      "custom-event-polyfill": 1,
      "es6-object-assign": 2
    }],
    4: [function (require, module, exports) {
      'use strict';

      module.exports = require('./core/');
    }, {
      "./core/": 3
    }],
    5: [function (require, module, exports) {
      'use strict';

      Object.defineProperty(exports, "__esModule", {
        value: true
      });

      var append = exports.append = function append(element, string) {
        var div = document.createElement('div');
        div.innerHTML = string;

        while (div.children.length > 0) {
          element.appendChild(div.children[0]);
        }
      };

      var getUniqId = exports.getUniqId = function getUniqId() {
        return (Date.now().toString(36) + Math.random().toString(36).substr(2, 5)).toUpperCase();
      };

      var remove = exports.remove = function remove(element) {
        if (element && element.parentNode) {
          element.parentNode.removeChild(element);
        }
      };

      var addClass = exports.addClass = function addClass(element, className) {
        if (element.classList) {
          element.classList.add(className);
        } else {
          element.className += ' ' + className;
        }
      };

      var triggerEvent = exports.triggerEvent = function triggerEvent(el, eventName, options) {
        var event = void 0;

        if (window.CustomEvent) {
          event = new CustomEvent(eventName, {
            cancelable: true
          });
        } else {
          event = document.createEvent('CustomEvent');
          event.initCustomEvent(eventName, false, false, options);
        }

        el.dispatchEvent(event);
      };
    }, {}]
  }, {}, [4])(4);
});