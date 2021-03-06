"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Ajax =
/*#__PURE__*/
function () {
  function Ajax() {
    _classCallCheck(this, Ajax);
  }

  _createClass(Ajax, [{
    key: "ajaxRequest",
    value: function ajaxRequest() {
      var $pagination = document.querySelector(".readMore").dataset.pagination;
      var $readMore = document.querySelector(".readMore");
      $readMore.addEventListener("click", function (e) {
        e.preventDefault();
        var $ajax_section = document.querySelector(".ajax-section");
        var request = new XMLHttpRequest();
        request.open('POST', ajaxurl, true);
        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded;');

        request.onload = function () {
          if (this.status >= 200 && this.status < 400) {
            $ajax_section.insertAdjacentHTML('beforeend', this.response);
            $pagination++;

            if (max_paged < $pagination) {
              document.querySelector(".readMore").style.display = "none";
            }
          } else {
            console.log(this.response);
          }
        };

        request.send('action=ajax-morePhotos&pagination=' + $pagination);
      });
    }
  }, {
    key: "autoComplete",
    value: function (_autoComplete) {
      function autoComplete() {
        return _autoComplete.apply(this, arguments);
      }

      autoComplete.toString = function () {
        return _autoComplete.toString();
      };

      return autoComplete;
    }(function () {
      var templateUrl = object_name.templateUrl; //Auto-complete library

      var loadJSON = function loadJSON(callback) {
        var xobj = new XMLHttpRequest();
        xobj.overrideMimeType("animals/json");
        xobj.open('GET', templateUrl + '/assets/scripts/animals.json', true); // Replace 'my_data' with the path to your file

        xobj.onreadystatechange = function () {
          if (xobj.readyState == 4 && xobj.status == "200") {
            // Required use of an anonymous callback as .open will NOT return a value but simply returns undefined in asynchronous mode
            callback(xobj.responseText);
          }
        };

        xobj.send(null);
      };

      var init = function init() {
        loadJSON(function (response) {
          // Parse JSON string into object
          var actual_JSON = JSON.parse(response);
          complete(actual_JSON);
        });
      };

      init();

      var complete = function complete(json) {
        new autoComplete({
          selector: 'input[name="name"]',
          minChars: 0,
          offsetTop: 5,
          source: function source(term, suggest) {
            term = term.toLowerCase();
            var choices = json;
            var matches = [];

            for (var i = 0; i < choices.length; i++) {
              if (~choices[i].name.toLowerCase().indexOf(term)) matches.push(choices[i].name);
            }

            suggest(matches);
          }
        });
      };
    })
  }]);

  return Ajax;
}();

var $ajax = new Ajax();

if (document.querySelector(".readMore")) {
  $ajax.ajaxRequest();
}

$ajax.autoComplete();
"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Animations =
/*#__PURE__*/
function () {
  function Animations() {
    _classCallCheck(this, Animations);
  }

  _createClass(Animations, [{
    key: "mainDataTransition",
    value: function mainDataTransition() {
      var $threeMainData = document.querySelectorAll(".js-RegionPage__mainData");
      var threeDataPosition = $threeMainData[0].offsetTop;
      window.addEventListener("scroll", function () {
        var scrollPosition = pageYOffset;

        if (scrollPosition >= threeDataPosition - 3 / 4 * window.innerHeight) {
          var _iteratorNormalCompletion = true;
          var _didIteratorError = false;
          var _iteratorError = undefined;

          try {
            for (var _iterator = $threeMainData[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
              var $MainData = _step.value;
              $MainData.style.opacity = "1";
            }
          } catch (err) {
            _didIteratorError = true;
            _iteratorError = err;
          } finally {
            try {
              if (!_iteratorNormalCompletion && _iterator.return != null) {
                _iterator.return();
              }
            } finally {
              if (_didIteratorError) {
                throw _iteratorError;
              }
            }
          }
        }
      });
    }
  }, {
    key: "basicTransition",
    value: function basicTransition() {
      var $transitions = document.querySelectorAll(".js-transitions");
      var transitionPositions = [];
      var _iteratorNormalCompletion2 = true;
      var _didIteratorError2 = false;
      var _iteratorError2 = undefined;

      try {
        for (var _iterator2 = $transitions[Symbol.iterator](), _step2; !(_iteratorNormalCompletion2 = (_step2 = _iterator2.next()).done); _iteratorNormalCompletion2 = true) {
          var transition = _step2.value;
          transitionPositions.push(transition.offsetTop);
        }
      } catch (err) {
        _didIteratorError2 = true;
        _iteratorError2 = err;
      } finally {
        try {
          if (!_iteratorNormalCompletion2 && _iterator2.return != null) {
            _iterator2.return();
          }
        } finally {
          if (_didIteratorError2) {
            throw _iteratorError2;
          }
        }
      }

      window.addEventListener("scroll", function () {
        var scrollPosition = pageYOffset;
        console.log("scroll : " + scrollPosition);

        for (var i = 0; i < transitionPositions.length; i++) {
          console.log("element : " + transitionPositions[i]);

          if (scrollPosition >= transitionPositions[i] - 3 / 4 * window.innerHeight) {
            $transitions[i].style.opacity = "1";
            console.log("ouch");
          }
        }
      });
    }
  }]);

  return Animations;
}();

var animations = new Animations();

if (document.querySelector(".js-RegionPage__mainData")) {
  animations.mainDataTransition();
}

if (document.querySelector(".js-transitions")) {
  animations.basicTransition();
}
"use strict";

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

// JavaScript autoComplete v1.0.4
// https://github.com/Pixabay/JavaScript-autoComplete
var autoComplete = function () {
  function e(e) {
    function t(e, t) {
      return e.classList ? e.classList.contains(t) : new RegExp("\\b" + t + "\\b").test(e.className);
    }

    function o(e, t, o) {
      e.attachEvent ? e.attachEvent("on" + t, o) : e.addEventListener(t, o);
    }

    function s(e, t, o) {
      e.detachEvent ? e.detachEvent("on" + t, o) : e.removeEventListener(t, o);
    }

    function n(e, s, n, l) {
      o(l || document, s, function (o) {
        for (var s, l = o.target || o.srcElement; l && !(s = t(l, e));) {
          l = l.parentElement;
        }

        s && n.call(l, o);
      });
    }

    if (document.querySelector) {
      var l = {
        selector: 0,
        source: 0,
        minChars: 3,
        delay: 150,
        offsetLeft: 0,
        offsetTop: 1,
        cache: 1,
        menuClass: "",
        renderItem: function renderItem(e, t) {
          t = t.replace(/[-\/\\^$*+?.()|[\]{}]/g, "\\$&");
          var o = new RegExp("(" + t.split(" ").join("|") + ")", "gi");
          return '<div class="autocomplete-suggestion" data-val="' + e + '">' + e.replace(o, "<b>$1</b>") + "</div>";
        },
        onSelect: function onSelect() {}
      };

      for (var c in e) {
        e.hasOwnProperty(c) && (l[c] = e[c]);
      }

      for (var a = "object" == _typeof(l.selector) ? [l.selector] : document.querySelectorAll(l.selector), u = 0; u < a.length; u++) {
        var i = a[u];
        i.sc = document.createElement("div"), i.sc.className = "autocomplete-suggestions " + l.menuClass, i.autocompleteAttr = i.getAttribute("autocomplete"), i.setAttribute("autocomplete", "off"), i.cache = {}, i.last_val = "", i.updateSC = function (e, t) {
          var o = i.getBoundingClientRect();
          if (i.sc.style.left = Math.round(o.left + (window.pageXOffset || document.documentElement.scrollLeft) + l.offsetLeft) + "px", i.sc.style.top = Math.round(o.bottom + (window.pageYOffset || document.documentElement.scrollTop) + l.offsetTop) + "px", i.sc.style.width = Math.round(o.right - o.left) + "px", !e && (i.sc.style.display = "block", i.sc.maxHeight || (i.sc.maxHeight = parseInt((window.getComputedStyle ? getComputedStyle(i.sc, null) : i.sc.currentStyle).maxHeight)), i.sc.suggestionHeight || (i.sc.suggestionHeight = i.sc.querySelector(".autocomplete-suggestion").offsetHeight), i.sc.suggestionHeight)) if (t) {
            var s = i.sc.scrollTop,
                n = t.getBoundingClientRect().top - i.sc.getBoundingClientRect().top;
            n + i.sc.suggestionHeight - i.sc.maxHeight > 0 ? i.sc.scrollTop = n + i.sc.suggestionHeight + s - i.sc.maxHeight : 0 > n && (i.sc.scrollTop = n + s);
          } else i.sc.scrollTop = 0;
        }, o(window, "resize", i.updateSC), document.body.appendChild(i.sc), n("autocomplete-suggestion", "mouseleave", function () {
          var e = i.sc.querySelector(".autocomplete-suggestion.selected");
          e && setTimeout(function () {
            e.className = e.className.replace("selected", "");
          }, 20);
        }, i.sc), n("autocomplete-suggestion", "mouseover", function () {
          var e = i.sc.querySelector(".autocomplete-suggestion.selected");
          e && (e.className = e.className.replace("selected", "")), this.className += " selected";
        }, i.sc), n("autocomplete-suggestion", "mousedown", function (e) {
          if (t(this, "autocomplete-suggestion")) {
            var o = this.getAttribute("data-val");
            i.value = o, l.onSelect(e, o, this), i.sc.style.display = "none";
          }
        }, i.sc), i.blurHandler = function () {
          try {
            var e = document.querySelector(".autocomplete-suggestions:hover");
          } catch (t) {
            var e = 0;
          }

          e ? i !== document.activeElement && setTimeout(function () {
            i.focus();
          }, 20) : (i.last_val = i.value, i.sc.style.display = "none", setTimeout(function () {
            i.sc.style.display = "none";
          }, 350));
        }, o(i, "blur", i.blurHandler);

        var r = function r(e) {
          var t = i.value;

          if (i.cache[t] = e, e.length && t.length >= l.minChars) {
            for (var o = "", s = 0; s < e.length; s++) {
              o += l.renderItem(e[s], t);
            }

            i.sc.innerHTML = o, i.updateSC(0);
          } else i.sc.style.display = "none";
        };

        i.keydownHandler = function (e) {
          var t = window.event ? e.keyCode : e.which;

          if ((40 == t || 38 == t) && i.sc.innerHTML) {
            var o,
                s = i.sc.querySelector(".autocomplete-suggestion.selected");
            return s ? (o = 40 == t ? s.nextSibling : s.previousSibling, o ? (s.className = s.className.replace("selected", ""), o.className += " selected", i.value = o.getAttribute("data-val")) : (s.className = s.className.replace("selected", ""), i.value = i.last_val, o = 0)) : (o = 40 == t ? i.sc.querySelector(".autocomplete-suggestion") : i.sc.childNodes[i.sc.childNodes.length - 1], o.className += " selected", i.value = o.getAttribute("data-val")), i.updateSC(0, o), !1;
          }

          if (27 == t) i.value = i.last_val, i.sc.style.display = "none";else if (13 == t || 9 == t) {
            var s = i.sc.querySelector(".autocomplete-suggestion.selected");
            s && "none" != i.sc.style.display && (l.onSelect(e, s.getAttribute("data-val"), s), setTimeout(function () {
              i.sc.style.display = "none";
            }, 20));
          }
        }, o(i, "keydown", i.keydownHandler), i.keyupHandler = function (e) {
          var t = window.event ? e.keyCode : e.which;

          if (!t || (35 > t || t > 40) && 13 != t && 27 != t) {
            var o = i.value;

            if (o.length >= l.minChars) {
              if (o != i.last_val) {
                if (i.last_val = o, clearTimeout(i.timer), l.cache) {
                  if (o in i.cache) return void r(i.cache[o]);

                  for (var s = 1; s < o.length - l.minChars; s++) {
                    var n = o.slice(0, o.length - s);
                    if (n in i.cache && !i.cache[n].length) return void r([]);
                  }
                }

                i.timer = setTimeout(function () {
                  l.source(o, r);
                }, l.delay);
              }
            } else i.last_val = o, i.sc.style.display = "none";
          }
        }, o(i, "keyup", i.keyupHandler), i.focusHandler = function (e) {
          i.last_val = "\n", i.keyupHandler(e);
        }, l.minChars || o(i, "focus", i.focusHandler);
      }

      this.destroy = function () {
        for (var e = 0; e < a.length; e++) {
          var t = a[e];
          s(window, "resize", t.updateSC), s(t, "blur", t.blurHandler), s(t, "focus", t.focusHandler), s(t, "keydown", t.keydownHandler), s(t, "keyup", t.keyupHandler), t.autocompleteAttr ? t.setAttribute("autocomplete", t.autocompleteAttr) : t.removeAttribute("autocomplete"), document.body.removeChild(t.sc), t = null;
        }
      };
    }
  }

  return e;
}();

!function () {
  "function" == typeof define && define.amd ? define("autoComplete", function () {
    return autoComplete;
  }) : "undefined" != typeof module && module.exports ? module.exports = autoComplete : window.autoComplete = autoComplete;
}();
"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

/* Display the current animal's number on the grid-based menu (regions and animals) */
var GridNumber =
/*#__PURE__*/
function () {
  function GridNumber() {
    _classCallCheck(this, GridNumber);

    this.count();
  }

  _createClass(GridNumber, [{
    key: "count",
    value: function count() {
      var gridNumbers = document.querySelectorAll('.grid-menu__number');
      var $animalWrapper = document.querySelector('.animal-wrapper');

      for (var i = 0; i < gridNumbers.length; i++) {
        gridNumbers[i].innerHTML = i + 1;
      }
    }
  }]);

  return GridNumber;
}();

var gridNumb = new GridNumber();
"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var LazyLoading =
/*#__PURE__*/
function () {
  function LazyLoading() {
    _classCallCheck(this, LazyLoading);
  }

  _createClass(LazyLoading, [{
    key: "parse",
    value: function parse() {
      var $lazyLoads = Array.from(document.querySelectorAll(".js-lazyload")); // Get it in an array

      var _loop = function _loop() {
        var $lazyLoad = $lazyLoads[_i];
        var $img = $lazyLoad.querySelector('img');
        var $newImg = document.createElement('img'); // Useful if the picture is loaded from the cache

        $newImg.addEventListener('load', function () {
          $lazyLoad.classList.add('loaded'); // When loaded
        });
        $newImg.src = $img.src; // Add src
      };

      for (var _i = 0; _i < $lazyLoads.length; _i++) {
        _loop();
      }
    }
  }]);

  return LazyLoading;
}();

var lazyLoading = new LazyLoading();
lazyLoading.parse();
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
          var movement = Math.sqrt(movementX * movementX + movementY * movementY); // Speed=movement/100ms= movement/0.1s= 10*movement/s

          var _speed = 10 * movement; // current speed


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

if (document.querySelector(".wrap")) {
  var $newMouse = new NewMouse();
}
"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var NavBar =
/*#__PURE__*/
function () {
  function NavBar() {
    _classCallCheck(this, NavBar);

    this.navItems();
    this.hamburgerMenu();
  }

  _createClass(NavBar, [{
    key: "navItems",
    value: function navItems() {
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
    }
  }, {
    key: "hamburgerMenu",
    value: function hamburgerMenu() {
      var $hamburgerIcon = document.querySelector(".hamburger");
      var $links = document.querySelector(".nav__links");
      var $main = document.querySelector("main");
      $hamburgerIcon.addEventListener("click", function () {
        $links.classList.toggle("is-active");
        $hamburgerIcon.classList.toggle("is-active");
      });
    }
  }]);

  return NavBar;
}();

var navigation = new NavBar();
"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Parallax =
/*#__PURE__*/
function () {
  function Parallax() {
    _classCallCheck(this, Parallax);

    this.setItems();
  }

  _createClass(Parallax, [{
    key: "setItems",
    value: function setItems() {
      // Get elements
      var $elements = document.querySelectorAll('.js-parallax');

      if ($elements.length != 0) {
        this.items = new Array(); // Set parameters

        var _iteratorNormalCompletion = true;
        var _didIteratorError = false;
        var _iteratorError = undefined;

        try {
          for (var _iterator = $elements[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
            var $element = _step.value;
            var item = {};
            item.$element = $element;
            item.amplitude = parseFloat($element.dataset.amplitude);
            item.offsetX = 0;
            item.offsetY = 0;
            this.items.push(item);
          }
        } catch (err) {
          _didIteratorError = true;
          _iteratorError = err;
        } finally {
          try {
            if (!_iteratorNormalCompletion && _iterator.return != null) {
              _iterator.return();
            }
          } finally {
            if (_didIteratorError) {
              throw _iteratorError;
            }
          }
        }

        this.setMouse();
        this.setAnimation();
      }
    }
  }, {
    key: "setMouse",
    value: function setMouse() {
      var _this = this;

      // Get mouse data
      this.mouse = {};
      this.mouse.x = 0;
      this.mouse.y = 0; // Get window sizes

      var windowWidth = window.innerWidth;
      var windowHeight = window.innerHeight; // Listen to resize

      window.addEventListener('resize', function () {
        windowWidth = window.innerWidth;
        windowHeight = window.innerHeight;
      }); // Listen to mousemove

      window.addEventListener('mousemove', function (event) {
        _this.mouse.x = event.clientX / windowWidth - 0.5;
        _this.mouse.y = event.clientY / windowHeight - 0.5;
      });
    }
  }, {
    key: "setAnimation",
    value: function setAnimation() {
      var _this2 = this;

      var loop = function loop() {
        window.requestAnimationFrame(loop); // Set parallax effect

        var _iteratorNormalCompletion2 = true;
        var _didIteratorError2 = false;
        var _iteratorError2 = undefined;

        try {
          for (var _iterator2 = _this2.items[Symbol.iterator](), _step2; !(_iteratorNormalCompletion2 = (_step2 = _iterator2.next()).done); _iteratorNormalCompletion2 = true) {
            var item = _step2.value;
            var targetOffetX = -_this2.mouse.x * 100 * item.amplitude;
            var targetOffetY = -_this2.mouse.y * 100 * item.amplitude;
            item.offsetX += (targetOffetX - item.offsetX) * 0.05;
            item.offsetY += (targetOffetY - item.offsetY) * 0.05;
            var roundedOffsetX = Math.round(item.offsetX * 100) / 100;
            var roundedOffsetY = Math.round(item.offsetY * 100) / 100;
            item.$element.style.transform = "translateX(".concat(roundedOffsetX, "px) translateY(").concat(roundedOffsetY, "px)");
          }
        } catch (err) {
          _didIteratorError2 = true;
          _iteratorError2 = err;
        } finally {
          try {
            if (!_iteratorNormalCompletion2 && _iterator2.return != null) {
              _iterator2.return();
            }
          } finally {
            if (_didIteratorError2) {
              throw _iteratorError2;
            }
          }
        }
      };

      loop();
    }
  }]);

  return Parallax;
}();

var parallax = new Parallax();
"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

// Display video
var VideoDisplayer =
/*#__PURE__*/
function () {
  function VideoDisplayer() {
    _classCallCheck(this, VideoDisplayer);
  }

  _createClass(VideoDisplayer, [{
    key: "display",
    value: function display() {
      if (document.querySelector('.wrapperAnimal__home__footer__video')) {
        var videoBtn = document.querySelector('.wrapperAnimal__home__footer__video');
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
          isVideoDisplayed = false;
          videoDisplay.classList.remove('active');
          videoClose.classList.remove('active');
        });
      }
    }
  }]);

  return VideoDisplayer;
}();

var displayer = new VideoDisplayer();
displayer.display();