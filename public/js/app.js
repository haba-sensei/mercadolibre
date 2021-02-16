/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
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
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/alpinejs/dist/alpine.js":
/*!**********************************************!*\
  !*** ./node_modules/alpinejs/dist/alpine.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open 'C:\\laragon\\www\\blog2\\node_modules\\alpinejs\\dist\\alpine.js'");

/***/ }),

/***/ "./node_modules/axios/index.js":
/*!*************************************!*\
  !*** ./node_modules/axios/index.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open 'C:\\laragon\\www\\blog2\\node_modules\\axios\\index.js'");

/***/ }),

/***/ "./node_modules/cash-dom/dist/cash.js":
/*!********************************************!*\
  !*** ./node_modules/cash-dom/dist/cash.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open 'C:\\laragon\\www\\blog2\\node_modules\\cash-dom\\dist\\cash.js'");

/***/ }),

/***/ "./node_modules/dayjs/dayjs.min.js":
/*!*****************************************!*\
  !*** ./node_modules/dayjs/dayjs.min.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed: Error: ENOENT: no such file or directory, open 'C:\\laragon\\www\\blog2\\node_modules\\dayjs\\dayjs.min.js'");

/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/css-loader/index.js):\nModuleBuildError: Module build failed (from ./node_modules/postcss-loader/src/index.js):\nError: Failed to find 'tailwindcss/base'\n  in [\n    C:\\laragon\\www\\blog2\\resources\\css\n  ]\n    at C:\\laragon\\www\\blog2\\node_modules\\postcss-import\\lib\\resolve-id.js:35:13\n    at C:\\laragon\\www\\blog2\\node_modules\\webpack\\lib\\NormalModule.js:316:20\n    at C:\\laragon\\www\\blog2\\node_modules\\loader-runner\\lib\\LoaderRunner.js:367:11\n    at C:\\laragon\\www\\blog2\\node_modules\\loader-runner\\lib\\LoaderRunner.js:233:18\n    at context.callback (C:\\laragon\\www\\blog2\\node_modules\\loader-runner\\lib\\LoaderRunner.js:111:13)\n    at C:\\laragon\\www\\blog2\\node_modules\\postcss-loader\\src\\index.js:208:9");

/***/ }),

/***/ "./resources/css/base_web.css":
/*!************************************!*\
  !*** ./resources/css/base_web.css ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/css-loader/index.js):\nModuleBuildError: Module build failed: Error: ENOENT: no such file or directory, open 'C:\\laragon\\www\\blog2\\node_modules\\css-loader\\lib\\css-base.js'\n    at C:\\laragon\\www\\blog2\\node_modules\\webpack\\lib\\NormalModule.js:316:20\n    at C:\\laragon\\www\\blog2\\node_modules\\loader-runner\\lib\\LoaderRunner.js:367:11\n    at C:\\laragon\\www\\blog2\\node_modules\\loader-runner\\lib\\LoaderRunner.js:203:19\n    at C:\\laragon\\www\\blog2\\node_modules\\enhanced-resolve\\lib\\CachedInputFileSystem.js:85:15\n    at processTicksAndRejections (internal/process/task_queues.js:75:11)");

/***/ }),

/***/ "./resources/css/dash.css":
/*!********************************!*\
  !*** ./resources/css/dash.css ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/css-loader/index.js):\nModuleBuildError: Module build failed: Error: ENOENT: no such file or directory, open 'C:\\laragon\\www\\blog2\\node_modules\\css-loader\\lib\\css-base.js'\n    at C:\\laragon\\www\\blog2\\node_modules\\webpack\\lib\\NormalModule.js:316:20\n    at C:\\laragon\\www\\blog2\\node_modules\\loader-runner\\lib\\LoaderRunner.js:367:11\n    at C:\\laragon\\www\\blog2\\node_modules\\loader-runner\\lib\\LoaderRunner.js:203:19\n    at C:\\laragon\\www\\blog2\\node_modules\\enhanced-resolve\\lib\\CachedInputFileSystem.js:85:15\n    at processTicksAndRejections (internal/process/task_queues.js:75:11)");

/***/ }),

/***/ "./resources/css/web.css":
/*!*******************************!*\
  !*** ./resources/css/web.css ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/css-loader/index.js):\nModuleBuildError: Module build failed: Error: ENOENT: no such file or directory, open 'C:\\laragon\\www\\blog2\\node_modules\\css-loader\\lib\\css-base.js'\n    at C:\\laragon\\www\\blog2\\node_modules\\webpack\\lib\\NormalModule.js:316:20\n    at C:\\laragon\\www\\blog2\\node_modules\\loader-runner\\lib\\LoaderRunner.js:367:11\n    at C:\\laragon\\www\\blog2\\node_modules\\loader-runner\\lib\\LoaderRunner.js:203:19\n    at C:\\laragon\\www\\blog2\\node_modules\\enhanced-resolve\\lib\\CachedInputFileSystem.js:85:15\n    at processTicksAndRejections (internal/process/task_queues.js:75:11)");

/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! ./bootstrap */ "./resources/js/bootstrap.js");

__webpack_require__(/*! alpinejs */ "./node_modules/alpinejs/dist/alpine.js");

/***/ }),

/***/ "./resources/js/bootstrap.js":
/*!***********************************!*\
  !*** ./resources/js/bootstrap.js ***!
  \***********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var cash_dom__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! cash-dom */ "./node_modules/cash-dom/dist/cash.js");
/* harmony import */ var cash_dom__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(cash_dom__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(axios__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _helper__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./helper */ "./resources/js/helper.js");
// Load plugins


 // Set plugins globally

window.cash = cash_dom__WEBPACK_IMPORTED_MODULE_0___default.a;
window.axios = axios__WEBPACK_IMPORTED_MODULE_1___default.a;
window.helper = _helper__WEBPACK_IMPORTED_MODULE_2__["default"]; // CSRF token

var token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
  window.axios.defaults.headers.common["X-CSRF-TOKEN"] = token.content;
} else {
  console.error("CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token");
}

/***/ }),

/***/ "./resources/js/helper.js":
/*!********************************!*\
  !*** ./resources/js/helper.js ***!
  \********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var dayjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! dayjs */ "./node_modules/dayjs/dayjs.min.js");
/* harmony import */ var dayjs__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(dayjs__WEBPACK_IMPORTED_MODULE_0__);

var helpers = {
  cutText: function cutText(text, length) {
    if (text.split(" ").length > 1) {
      var string = text.substring(0, length);
      var splitText = string.split(" ");
      splitText.pop();
      return splitText.join(" ") + "...";
    } else {
      return text;
    }
  },
  formatDate: function formatDate(date, format) {
    return dayjs__WEBPACK_IMPORTED_MODULE_0___default()(date).format(format);
  },
  capitalizeFirstLetter: function capitalizeFirstLetter(string) {
    if (string) {
      return string.charAt(0).toUpperCase() + string.slice(1);
    }
  },
  onlyNumber: function onlyNumber(number) {
    if (number) {
      return number.replace(/\D/g, "");
    } else {
      return "";
    }
  },
  formatCurrency: function formatCurrency(number) {
    if (number) {
      var formattedNumber = number.toString().replace(/\D/g, "");
      var rest = formattedNumber.length % 3;
      var currency = formattedNumber.substr(0, rest);
      var thousand = formattedNumber.substr(rest).match(/\d{3}/g);
      var separator;

      if (thousand) {
        separator = rest ? "." : "";
        currency += separator + thousand.join(".");
      }

      return currency;
    } else {
      return "";
    }
  },
  timeAgo: function timeAgo(time) {
    var date = new Date((time || "").replace(/-/g, "/").replace(/[TZ]/g, " ")),
        diff = (new Date().getTime() - date.getTime()) / 1000,
        dayDiff = Math.floor(diff / 86400);
    if (isNaN(dayDiff) || dayDiff < 0 || dayDiff >= 31) return dayjs__WEBPACK_IMPORTED_MODULE_0___default()(time).format("MMMM DD, YYYY");
    return dayDiff == 0 && (diff < 60 && "just now" || diff < 120 && "1 minute ago" || diff < 3600 && Math.floor(diff / 60) + " minutes ago" || diff < 7200 && "1 hour ago" || diff < 86400 && Math.floor(diff / 3600) + " hours ago") || dayDiff == 1 && "Yesterday" || dayDiff < 7 && dayDiff + " days ago" || dayDiff < 31 && Math.ceil(dayDiff / 7) + " weeks ago";
  },
  diffTimeByNow: function diffTimeByNow(time) {
    var startDate = dayjs__WEBPACK_IMPORTED_MODULE_0___default()(dayjs__WEBPACK_IMPORTED_MODULE_0___default()().format("YYYY-MM-DD HH:mm:ss").toString());
    var endDate = dayjs__WEBPACK_IMPORTED_MODULE_0___default()(dayjs__WEBPACK_IMPORTED_MODULE_0___default()(time).format("YYYY-MM-DD HH:mm:ss").toString());
    var duration = dayjs__WEBPACK_IMPORTED_MODULE_0___default.a.duration(endDate.diff(startDate));
    var milliseconds = Math.floor(duration.asMilliseconds());
    var days = Math.round(milliseconds / 86400000);
    var hours = Math.round(milliseconds % 86400000 / 3600000);
    var minutes = Math.round(milliseconds % 86400000 % 3600000 / 60000);
    var seconds = Math.round(milliseconds % 86400000 % 3600000 % 60000 / 1000);

    if (seconds < 30 && seconds >= 0) {
      minutes += 1;
    }

    return {
      days: days.toString().length < 2 ? "0" + days : days,
      hours: hours.toString().length < 2 ? "0" + hours : hours,
      minutes: minutes.toString().length < 2 ? "0" + minutes : minutes,
      seconds: seconds.toString().length < 2 ? "0" + seconds : seconds
    };
  },
  isset: function isset(obj) {
    return Object.keys(obj).length;
  },
  assign: function assign(obj) {
    return JSON.parse(JSON.stringify(obj));
  },
  delay: function delay(time) {
    return new Promise(function (resolve, reject) {
      setTimeout(function () {
        resolve();
      }, time);
    });
  },
  randomNumbers: function randomNumbers(from, to, length) {
    var numbers = [0];

    for (var i = 1; i < length; i++) {
      numbers.push(Math.ceil(Math.random() * (from - to) + to));
    }

    return numbers;
  },
  replaceAll: function replaceAll(str, find, replace) {
    return str.replace(new RegExp(find, "g"), replace);
  }
};
/* harmony default export */ __webpack_exports__["default"] = (helpers);

/***/ }),

/***/ 0:
/*!*****************************************************************************************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/css/app.css ./resources/css/dash.css ./resources/css/web.css ./resources/css/base_web.css ***!
  \*****************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\laragon\www\blog2\resources\js\app.js */"./resources/js/app.js");
__webpack_require__(/*! C:\laragon\www\blog2\resources\css\app.css */"./resources/css/app.css");
__webpack_require__(/*! C:\laragon\www\blog2\resources\css\dash.css */"./resources/css/dash.css");
__webpack_require__(/*! C:\laragon\www\blog2\resources\css\web.css */"./resources/css/web.css");
module.exports = __webpack_require__(/*! C:\laragon\www\blog2\resources\css\base_web.css */"./resources/css/base_web.css");


/***/ })

/******/ });