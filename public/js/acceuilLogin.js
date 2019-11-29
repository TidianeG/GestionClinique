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

/***/ "./resources/js/acceuilLogin.js":
/*!**************************************!*\
  !*** ./resources/js/acceuilLogin.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var formulaire = document.getElementById("formulaire");
var buton = document.getElementById('buton');
/*buton.addEventListener('click', function(e){
    //e.preventDefault();
    let sous_page=document.getElementById('sous_page');
    let parent_info=document.getElementById('parent_info');

    //parent_info.classList.add("cacher");
    //sous_page.style.display="block";
    //sous_page.classList.add("afficher");
    //parent_info.remove();
    
});*/

formulaire.addEventListener("click", function (event) {
  event.preventDefault();
  var login = document.getElementById("login");
  var pass = document.getElementById("pass");
  var option1 = document.getElementById('option1');
  var option2 = document.getElementById('option2');
  var error_champ = document.getElementById('error_champ');
  var select = document.getElementById('select');
  var info_login = document.getElementById('info_login');
  var info_pass = document.getElementById('info_pass');

  if (option1.selected == false && option2.selected == false) {//document.getElementById('select').classList.add('alert', 'alert-danger');
    //select.innerHTML="<div class='alert alert-danger'>Veuiller selectionner une option</div>";
  } else if (login.value == "") {
    login.classList.add('alert', 'alert-danger'); //info_login.innerHTML="<div class='alert alert-danger'>Veuiller saisir votre login</div>";
  } else if (pass.value == "") {
    pass.classList.add('alert', 'alert-danger'); //info_pass.innerHTML="<div class='alert alert-danger'>Veuiller saisir votre mot de pass</div>";
  } else if (login.value !== "" && pass.value !== "" && (option2.selected == true || option1.selected == true)) {
    formulaire1.submit();
  }
});

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!**********************************************************************!*\
  !*** multi ./resources/js/acceuilLogin.js ./resources/sass/app.scss ***!
  \**********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /home/tidiane/www/GestionClinique/resources/js/acceuilLogin.js */"./resources/js/acceuilLogin.js");
module.exports = __webpack_require__(/*! /home/tidiane/www/GestionClinique/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });