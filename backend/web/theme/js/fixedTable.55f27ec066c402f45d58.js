/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/fixedTable.js":
/***/ (function(module, exports) {

(function ($) {

  $.fn.tableHeadFixer = function (param) {
    var defaults = {
      head: true,
      foot: false,
      left: 0,
      right: 0
    };

    var settings = $.extend({}, defaults, param);

    return this.each(function () {
      settings.table = this;
      settings.parent = $("<div></div>");
      setParent();

      if (settings.head == true) fixHead();

      if (settings.foot == true) fixFoot();

      if (settings.left > 0) fixLeft();

      if (settings.right > 0) fixRight();

      // self.setCorner();

      $(settings.parent).trigger("scroll");

      $(window).resize(function () {
        $(settings.parent).trigger("scroll");
      });
    });

    function setTable(table) {}

    function setParent() {
      var container = $(settings.table).parent();
      var parent = $(settings.parent);
      var table = $(settings.table);

      table.before(parent);
      parent.append(table);
      parent.css({
        'width': '100%',
        'height': container.css("height"),
        'overflow': 'scroll',
        'max-height': container.css("max-height"),
        'min-height': container.css("min-height"),
        'max-width': container.css('max-width'),
        'min-width': container.css('min-width')
      });

      parent.scroll(function () {
        var scrollWidth = parent[0].scrollWidth;
        var clientWidth = parent[0].clientWidth;
        var scrollHeight = parent[0].scrollHeight;
        var clientHeight = parent[0].clientHeight;
        var top = parent.scrollTop();
        var left = parent.scrollLeft();

        if (settings.head) this.find("thead tr > *").css("top", top);

        if (settings.foot) this.find("tfoot tr > *").css("bottom", scrollHeight - clientHeight - top);

        if (settings.left > 0) {
          console.log(left);
          if (left <= 2500) {
            var position = settings.leftColumns.css("left", left);
          } else {
            parent.scrollLeft(2500);
          }
        }

        if (settings.right > 0) settings.rightColumns.css("right", scrollWidth - clientWidth - left);
      }.bind(table));
    }

    function fixHead() {
      var thead = $(settings.table).find("thead");
      var tr = thead.find("tr");
      var cells = thead.find("tr > *");

      setBackground(cells);
      cells.css({
        'position': 'relative',
        'z-index': '1000'

      });
    }

    function fixFoot() {
      var tfoot = $(settings.table).find("tfoot");
      var tr = tfoot.find("tr");
      var cells = tfoot.find("tr > *");

      setBackground(cells);
      cells.css({
        'position': 'relative'
      });
    }

    function fixLeft() {
      var table = $(settings.table);

      var fixColumn = settings.left;

      settings.leftColumns = $();

      for (var i = 1; i <= fixColumn; i++) {
        settings.leftColumns = settings.leftColumns.add(table.find("tr > *:nth-child(" + i + ")"));
      }

      var column = settings.leftColumns;

      column.each(function (k, cell) {
        var cell = $(cell);

        setBackground(cell);
        cell.css({
          'position': 'relative',
          'z-index': '100'
        });
      });
    }

    function fixRight() {
      var table = $(settings.table);

      var fixColumn = settings.right;

      settings.rightColumns = $();

      for (var i = 1; i <= fixColumn; i++) {
        settings.rightColumns = settings.rightColumns.add(table.find("tr > *:nth-last-child(" + i + ")"));
      }

      var column = settings.rightColumns;

      column.each(function (k, cell) {
        var cell = $(cell);

        setBackground(cell);
        cell.css({
          'position': 'relative'
        });
      });
    }

    function setBackground(elements) {
      elements.each(function (k, element) {
        var element = $(element);
        var parent = $(element).parent();

        var elementBackground = element.css("background-color");
        elementBackground = elementBackground == "transparent" || elementBackground == "rgba(0, 0, 0, 0)" ? null : elementBackground;

        var parentBackground = parent.css("background-color");
        parentBackground = parentBackground == "transparent" || parentBackground == "rgba(0, 0, 0, 0)" ? null : parentBackground;

        var background = parentBackground ? parentBackground : "white";
        background = elementBackground ? elementBackground : background;

        element.css("background-color", background);
      });
    }
  };
})(jQuery);

/***/ }),

/***/ 0:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./resources/assets/js/fixedTable.js");


/***/ })

/******/ });