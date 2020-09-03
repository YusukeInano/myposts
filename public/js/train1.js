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
/******/ 	return __webpack_require__(__webpack_require__.s = 7);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/train1.js":
/*!********************************!*\
  !*** ./resources/js/train1.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var x = 0; //type:1 13号, 17号,33号,37号,45号,49号
//type:2 15号,19号,21号,23号,25号,27号,29号,31号,35号,39号,41号,43号
//type:3 1号,3号,9号
//type:4 5号,11豪
//type:5 7号,47号
// IDサンダーバードの号数、発車時刻を計算しやすくするため時間と分に分けた　ダイヤのパターンをtypeとした

var timetable_up = {
  1: {
    id: 1,
    hour: 6,
    minute: 30,
    type: 3
  },
  2: {
    id: 3,
    hour: 7,
    minute: 0,
    type: 3
  },
  3: {
    id: 5,
    hour: 7,
    minute: 40,
    type: 4
  },
  4: {
    id: 7,
    hour: 8,
    minute: 10,
    type: 5
  },
  5: {
    id: 9,
    hour: 8,
    minute: 40,
    type: 3
  },
  6: {
    id: 11,
    hour: 9,
    minute: 12,
    type: 4
  },
  7: {
    id: 13,
    hour: 9,
    minute: 42,
    type: 1
  },
  8: {
    id: 15,
    hour: 10,
    minute: 12,
    type: 2
  },
  9: {
    id: 17,
    hour: 10,
    minute: 42,
    type: 1
  },
  10: {
    id: 19,
    hour: 11,
    minute: 42,
    type: 2
  },
  11: {
    id: 21,
    hour: 12,
    minute: 12,
    type: 2
  },
  12: {
    id: 23,
    hour: 12,
    minute: 42,
    type: 2
  },
  13: {
    id: 25,
    hour: 13,
    minute: 42,
    type: 2
  },
  14: {
    id: 27,
    hour: 14,
    minute: 42,
    type: 2
  },
  15: {
    id: 29,
    hour: 15,
    minute: 12,
    type: 2
  },
  16: {
    id: 31,
    hour: 15,
    minute: 42,
    type: 2
  },
  17: {
    id: 33,
    hour: 16,
    minute: 42,
    type: 2
  },
  18: {
    id: 35,
    hour: 17,
    minute: 12,
    type: 1
  },
  19: {
    id: 37,
    hour: 17,
    minute: 42,
    type: 1
  },
  20: {
    id: 39,
    hour: 18,
    minute: 12,
    type: 2
  },
  21: {
    id: 41,
    hour: 18,
    minute: 42,
    type: 2
  },
  22: {
    id: 43,
    hour: 19,
    minute: 12,
    type: 2
  },
  23: {
    id: 45,
    hour: 19,
    minute: 27,
    type: 1
  },
  24: {
    id: 47,
    hour: 20,
    minute: 7,
    type: 5
  },
  25: {
    id: 49,
    hour: 20,
    minute: 54,
    type: 1
  }
}; // 駅の到着時間にパターンがあったので、パターンにした

var traintype = {
  1: {
    "Osaka": 0,
    "SinOsaka": 4,
    "Takatsuki": 14,
    "Katsuragawa": 22,
    "Kyoto": 27
  },
  2: {
    "Osaka": 0,
    "SinOsaka": 4,
    "Takatsuki": 14,
    "Katsuragawa": 23,
    "Kyoto": 28
  },
  3: {
    "Osaka": 0,
    "SinOsaka": 4,
    "Takatsuki": 14,
    "Katsuragawa": 24,
    "Kyoto": 29
  },
  4: {
    "Osaka": 0,
    "SinOsaka": 4,
    "Takatsuki": 15,
    "Katsuragawa": 25,
    "Kyoto": 30
  },
  5: {
    "Osaka": 0,
    "SinOsaka": 4,
    "Takatsuki": 15,
    "Katsuragawa": 26,
    "Kyoto": 31
  }
};

function setTrainPosition() {
  var nowdate = new Date();
  var timetablekey = 0;
  var nowday = nowdate.getFullYear() + "/" + nowdate.getMonth() + "/" + nowdate.getDate();
  var nowtime = nowday + " " + nowdate.getHours() + ":" + nowdate.getMinutes() + ":" + nowdate.getSeconds();
  var nowmin = nowdate.getMinutes();
  var nowsec = Math.round(nowdate.getSeconds() / 10);
  var trainpoint = 0; // for 現在時刻＜発車時刻 break　key を保存

  for (key in timetable_up) {
    var traindetail = timetable_up[key];
    var traintime = nowday + " " + traindetail.hour + ":" + traindetail.minute + ":00";

    if (Date.parse(nowtime) < Date.parse(traintime)) {
      timetablekey = key;
      break;
    } //console.log( nowtime );
    //console.log( traintime );

  }

  console.log(timetablekey); //発車時刻+Kyoto＜現在時刻＜発車時刻　の場合に電車を非表示
  // 駅の位置を微調整する

  var target_after = "";
  var target_before = "";
  var stationtime = "";
  var starttime = "";
  var endtime = "";
  var kyotime = "";
  var katsutime = "";
  var takatime = "";
  var shintime = "";
  var osatime = "";

  if (timetablekey == 0) {
    target_before = timetable_up[25];
    stationtime = traintype[target_before.type];
    starttime = nowday + " " + +target_before.hour + ":" + target_before.minute + ":00"; // 通貨時刻を計算する

    if (target_before.minute + stationtime.Kyoto > 60) {
      kyotime = target_before.hour + 1 + ":" + (target_before.minute + stationtime.Kyoto - 60);
      endtime = nowday + " " + (target_before.hour + 1) + ":" + (target_before.minute + stationtime.Kyoto - 60);
    } else {
      kyotime = target_before.hour + ":" + (target_before.minute + stationtime.Kyoto);
      endtime = nowday + " " + target_before.hour + ":" + (target_before.minute + stationtime.Kyoto);
    }

    if (target_before.minute + stationtime.Katsuragawa > 60) {
      katsutime = target_before.hour + 1 + ":" + (target_before.minute + stationtime.Katsuragawa - 60);
    } else {
      katsutime = target_before.hour + ":" + (target_before.minute + stationtime.Katsuragawa);
    }

    if (target_before.minute + stationtime.Takatsuki > 60) {
      takatime = target_before.hour + 1 + ":" + (target_before.minute + stationtime.Takatsuki - 60);
    } else {
      takatime = target_before.hour + ":" + (target_before.minute + stationtime.Takatsuki);
    }

    if (target_before.minute + stationtime.SinOsaka > 60) {
      shintime = target_before.hour + 1 + ":" + (target_before.minute + stationtime.SinOsaka - 60);
    } else {
      shintime = target_before.hour + ":" + (target_before.minute + stationtime.SinOsaka);
    }

    if (target_before.minute + stationtime.Osaka > 60) {
      osatime = target_before.hour + 1 + ":" + (target_before.minute + stationtime.Osaka - 60);
    } else {
      osatime = target_before.hour + ":" + (target_before.minute + stationtime.Osaka);
    }
  } else if (timetablekey == 1) {
    target_after = timetable_up[timetablekey];
    stationtime = traintype[target_after.type];
    starttime = nowday + " " + +target_after.hour + ":" + target_after.minute + ":00"; // 通貨時刻を計算する

    if (target_after.minute + stationtime.Kyoto > 60) {
      kyotime = target_after.hour + 1 + ":" + (target_after.minute + stationtime.Kyoto - 60);
      endtime = nowday + " " + (target_after.hour + 1) + ":" + (target_after.minute + stationtime.Kyoto - 60);
    } else {
      kyotime = target_after.hour + ":" + (target_after.minute + stationtime.Kyoto);
      endtime = nowday + " " + target_after.hour + ":" + (target_after.minute + stationtime.Kyoto);
    }

    if (target_after.minute + stationtime.Katsuragawa > 60) {
      katsutime = target_after.hour + 1 + ":" + (target_after.minute + stationtime.Katsuragawa - 60);
    } else {
      katsutime = target_after.hour + ":" + (target_after.minute + stationtime.Katsuragawa);
    }

    if (target_after.minute + stationtime.Takatsuki > 60) {
      takatime = target_after.hour + 1 + ":" + (target_after.minute + stationtime.Takatsuki - 60);
    } else {
      takatime = target_after.hour + ":" + (target_after.minute + stationtime.Takatsuki);
    }

    if (target_after.minute + stationtime.SinOsaka > 60) {
      shintime = target_after.hour + 1 + ":" + (target_after.minute + stationtime.SinOsaka - 60);
    } else {
      shintime = target_after.hour + ":" + (target_after.minute + stationtime.SinOsaka);
    }

    if (target_after.minute + stationtime.Osaka > 60) {
      osatime = target_after.hour + 1 + ":" + (target_after.minute + stationtime.Osaka - 60);
    } else {
      osatime = target_after.hour + ":" + (target_after.minute + stationtime.Osaka);
    }
  } else {
    target_after = timetable_up[timetablekey];
    target_before = timetable_up[timetablekey - 1];
    stationtime = traintype[target_before.type];
    starttime = nowday + " " + +target_before.hour + ":" + target_before.minute + ":00"; // 通貨時刻を計算する

    if (target_before.minute + stationtime.Kyoto > 60) {
      kyotime = target_before.hour + 1 + ":" + (target_before.minute + stationtime.Kyoto - 60);
      endtime = nowday + " " + (target_before.hour + 1) + ":" + (target_before.minute + stationtime.Kyoto - 60);
    } else {
      kyotime = target_before.hour + ":" + (target_before.minute + stationtime.Kyoto);
      endtime = nowday + " " + target_before.hour + ":" + (target_before.minute + stationtime.Kyoto);
    }

    if (target_before.minute + stationtime.Katsuragawa > 60) {
      katsutime = target_before.hour + 1 + ":" + (target_before.minute + stationtime.Katsuragawa - 60);
    } else {
      katsutime = target_before.hour + ":" + (target_before.minute + stationtime.Katsuragawa);
    }

    if (target_before.minute + stationtime.Takatsuki > 60) {
      takatime = target_before.hour + 1 + ":" + (target_before.minute + stationtime.Takatsuki - 60);
    } else {
      takatime = target_before.hour + ":" + (target_before.minute + stationtime.Takatsuki);
    }

    if (target_before.minute + stationtime.SinOsaka > 60) {
      shintime = target_before.hour + 1 + ":" + (target_before.minute + stationtime.SinOsaka - 60);
    } else {
      shintime = target_before.hour + ":" + (target_before.minute + stationtime.SinOsaka);
    }

    if (target_before.minute + stationtime.Osaka > 60) {
      osatime = target_before.hour + 1 + ":" + (target_before.minute + stationtime.Osaka - 60);
    } else {
      osatime = target_before.hour + ":" + (target_before.minute + stationtime.Osaka);
    }
  }

  document.getElementById('nowdate').innerHTML = nowday;
  document.getElementById('name').innerHTML = 'サンダーバード';
  document.getElementById('number').innerHTML = target_before.id + '号'; //発車時刻＜=現在時刻＜=発車時刻+Kyoto の場合に電車を表示

  if (Date.parse(starttime) <= Date.parse(nowtime) && Date.parse(nowtime) <= Date.parse(endtime)) {
    calctim = Math.round((Date.parse(nowtime) - Date.parse(starttime)) / 10000);
    console.log(calctim);
    trainpoint = calctim * 3;
    document.getElementById('express').style.left = trainpoint + "px";
    console.log(trainpoint);
  } else {
    if (timetablekey > 1) {
      stationtime = traintype[target_after.type];

      if (target_after.minute + stationtime.Kyoto > 60) {
        kyotime = target_after.hour + 1 + ":" + (target_after.minute + stationtime.Kyoto - 60);
      } else {
        kyotime = target_after.hour + ":" + (target_after.minute + stationtime.Kyoto);
      }

      if (target_after.minute + stationtime.Katsuragawa > 60) {
        katsutime = target_after.hour + 1 + ":" + (target_after.minute + stationtime.Katsuragawa - 60);
      } else {
        katsutime = target_after.hour + ":" + (target_after.minute + stationtime.Katsuragawa);
      }

      if (target_after.minute + stationtime.Takatsuki > 60) {
        takatime = target_after.hour + 1 + ":" + (target_after.minute + stationtime.Takatsuki - 60);
      } else {
        takatime = target_after.hour + ":" + (target_after.minute + stationtime.Takatsuki);
      }

      if (target_after.minute + stationtime.SinOsaka > 60) {
        shintime = target_after.hour + 1 + ":" + (target_after.minute + stationtime.SinOsaka - 60);
      } else {
        shintime = target_after.hour + ":" + (target_after.minute + stationtime.SinOsaka);
      }

      if (target_after.minute + stationtime.Osaka > 60) {
        osatime = target_after.hour + 1 + ":" + (target_after.minute + stationtime.Osaka - 60);
      } else {
        osatime = target_after.hour + ":" + (target_after.minute + stationtime.Osaka);
      }

      trainpoint = 0;
    } else if (timetablekey == 0) {
      trainpoint = 540;
    }

    document.getElementById('express').style.left = trainpoint + "px";
    console.log(trainpoint);
  }

  var osapoint = stationtime.Osaka * 18;
  var shinpoint = stationtime.SinOsaka * 18 - 20; // 画像の大きさだけズレるのでオフセットを入れた

  var takapoint = stationtime.Takatsuki * 18 - 80; // 画像の大きさだけズレるのでオフセットを入れた

  var katsupoint = stationtime.Katsuragawa * 18 - 120; // 画像の大きさだけズレるのでオフセットを入れた

  var kyopoint = stationtime.Kyoto * 18 - 160; // 画像の大きさだけズレるのでオフセットを入れた

  document.getElementById('osaka').style.left = osapoint + "px";
  console.log(osapoint);
  document.getElementById('shinosaka').style.left = shinpoint + "px";
  console.log(shinpoint);
  document.getElementById('takatsuki').style.left = takapoint + "px";
  console.log(takapoint);
  document.getElementById('katsuragawa').style.left = katsupoint + "px";
  console.log(katsupoint);
  document.getElementById('kyoto').style.left = kyopoint + "px";
  console.log(kyopoint);
  document.getElementById('osatime').innerHTML = osatime;
  console.log(osatime);
  document.getElementById('shintime').innerHTML = shintime;
  console.log(shintime);
  document.getElementById('takatime').innerHTML = takatime;
  console.log(takatime);
  document.getElementById('katsutime').innerHTML = katsutime;
  console.log(katsutime);
  document.getElementById('kyotime').innerHTML = kyotime;
  console.log(kyotime);
  console.log(nowtime); //移動： 1分18px 10秒3px
  //type:1 13号, 17号,33号,37号,45号,49号
  //type:2 15号,19号,21号,23号,25号,27号,29号,31号,35号,39号,41号,43号
  //type:3 1号,3号,9号
  //type:4 5号,11豪
  //type:5 7号,47号
} //開いたとき


window.onload = function () {
  setTrainPosition();
}; //10秒に1回呼び出す


setInterval(setTrainPosition, 10000);

/***/ }),

/***/ 7:
/*!**************************************!*\
  !*** multi ./resources/js/train1.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/ec2-user/environment/myposts/resources/js/train1.js */"./resources/js/train1.js");


/***/ })

/******/ });