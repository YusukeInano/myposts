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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/map.js":
/*!*****************************!*\
  !*** ./resources/js/map.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

function initMap() {
  'use strict';

  var target = document.getElementById('target');
  var map = new google.maps.Map(target, {
    center: {
      lat: 34.964506,
      lng: 135.710373
    },
    zoom: 15,
    clickableIcons: false
  });
  var geocoder = new google.maps.Geocoder();
  document.getElementById('search').addEventListener('click', function () {
    geocoder.geocode({
      address: document.getElementById('address').value
    }, function (results, status) {
      if (status !== 'OK') {
        alert('失敗しました');
        return;
      }

      if (results[0]) {
        var new_map = new google.maps.Map(target, {
          center: results[0].geometry.location,
          zoom: 15,
          clickableIcons: false
        });
        new_map.addListener('dblclick', function (e) {
          geocoder.geocode({
            location: e.latLng
          }, function (results, status) {
            if (status !== 'OK') {
              alert('失敗しました');
              return;
            }

            if (results[0]) {
              var new_marker = new google.maps.Marker({
                position: e.latLng,
                map: new_map,
                title: results[0].formatted_address,
                animation: google.maps.Animation.DROP
              });
              var new_infoWindow = new google.maps.InfoWindow({
                content: results[0].formatted_address
              });
              new_marker.addListener('click', function () {
                new_infoWindow.open(map, new_marker);
              });
              document.getElementById("search_results").value = results[0].formatted_address;
            } else {
              alert('データを取得できませんでした');
              return;
            }
          });
        });
      } else {
        alert('データを取得できませんでした');
        return;
      }
    });
  });
  map.addListener('dblclick', function (e) {
    geocoder.geocode({
      location: e.latLng
    }, function (results, status) {
      if (status !== 'OK') {
        alert('失敗しました');
        return;
      }

      if (results[0]) {
        var marker = new google.maps.Marker({
          position: e.latLng,
          map: map,
          title: results[0].formatted_address,
          animation: google.maps.Animation.DROP
        });
        var infoWindow = new google.maps.InfoWindow({
          content: results[0].formatted_address
        });
        marker.addListener('click', function () {
          infoWindow.open(map, marker);
        });
        document.getElementById("search_results").value = results[0].formatted_address;
      } else {
        alert('データを取得できませんでした');
        return;
      }
    });
  });
}

/***/ }),

/***/ 2:
/*!***********************************!*\
  !*** multi ./resources/js/map.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/ec2-user/environment/myposts/resources/js/map.js */"./resources/js/map.js");


/***/ })

/******/ });