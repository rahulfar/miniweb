<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color:  transparent;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav-right {
  float: right;
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="https://www.google.com/search?q=news&rlz=1C1CHBD_enIN837IN837&oq=news&aqs=chrome..69i57j69i60j0j5l2j0.5403j1j7&sourceid=chrome&ie=UTF-8">News</a>
  <a href="#contact">Contact</a>
  <div class="topnav-right">
    <a href="#search">Search</a>
    <a href="icon.html">About</a>
  </div>
</div>

<div style="padding-center:16px">
</div>

</body>
</html>

<?php
session_start();
include "db.php";
?>
<html>
<head>
<title>Login</title>
<style>
/* -- import Bootstrap v3 ----------------------------- */
@import "//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css";
/* -- import Bootstrap docs ---------------------------- */
@import "//getbootstrap.com/assets/css/docs.min.css";
/* -- import Roboto Font ------------------------------ */
@import "//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css";
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 100;
  src: local('Roboto Thin Italic'), local('Roboto-ThinItalic'), url(https://fonts.gstatic.com/s/roboto/v18/KFOiCnqEu92Fr1Mu51QrEzQdKg.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: local('Roboto Light Italic'), local('Roboto-LightItalic'), url(https://fonts.gstatic.com/s/roboto/v18/KFOjCnqEu92Fr1Mu51TjASc-CsE.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v18/KFOkCnqEu92Fr1Mu51xMIzc.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 500;
  src: local('Roboto Medium Italic'), local('Roboto-MediumItalic'), url(https://fonts.gstatic.com/s/roboto/v18/KFOjCnqEu92Fr1Mu51S7ACc-CsE.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://fonts.gstatic.com/s/roboto/v18/KFOjCnqEu92Fr1Mu51TzBic-CsE.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 900;
  src: local('Roboto Black Italic'), local('Roboto-BlackItalic'), url(https://fonts.gstatic.com/s/roboto/v18/KFOjCnqEu92Fr1Mu51TLBCc-CsE.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: local('Roboto Thin'), local('Roboto-Thin'), url(https://fonts.gstatic.com/s/roboto/v18/KFOkCnqEu92Fr1MmgVxMIzc.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: local('Roboto Light'), local('Roboto-Light'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmSU5fABc9.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu5mxP.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: local('Roboto Medium'), local('Roboto-Medium'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fABc9.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfABc9.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url(https://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmYUtfABc9.ttf) format('truetype');
}
/*-- Body style ---------------------------------- */
body {
  font-family: "Roboto", 'Helvetica Neue, Helvetica, Arial', sans-serif;
  font-style: normal;
  font-weight: 300;
  font-size: 14px;
  line-height: 1.4;
  color: #212121;
  overflow-x: hidden;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}
/* -- Main style ------------------------------------ */
.btn {
  font-family: "Roboto", 'Helvetica Neue, Helvetica, Arial', sans-serif;
  font-size: 14px;
  font-weight: 400;
  line-height: 1.1;
  text-transform: uppercase;
  letter-spacing: inherit;
  color: rgba(255, 255, 255, 0.87);
}
.btn-default,
.btn-link {
  color: rgba(0, 0, 0, 0.87);
}
/* -- Buttons style ------------------------------------ */
.btn {
  outline: 0;
  outline-offset: 0;
  border: 0;
  border-radius: 2px;
  transition: all 0.15s ease-in-out;
  -o-transition: all 0.15s ease-in-out;
  -moz-transition: all 0.15s ease-in-out;
  -webkit-transition: all 0.15s ease-in-out;
}
.btn:focus,
.btn:active,
.btn.active,
.btn:active:focus,
.btn.active:focus {
  outline: 0;
  outline-offset: 0;
  box-shadow: none;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
}
/* -- Buttons types -------------------------------- */
.btn-raised {
  -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
  -moz-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
}
.btn-raised:active,
.btn-raised.active,
.btn-raised:active:focus,
.btn-raised.active:focus {
  -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  -moz-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}
.btn-raised:focus {
  -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  -moz-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}
.btn.btn-circle {
  padding: 0;
  border-radius: 50%;
}
/* -- Buttons colors -------------------------------- */
.btn-default,
.dropdown-toggle.btn-default {
  background-color: #fff;
}
.btn-default:hover,
.dropdown-toggle.btn-default:hover {
  background-color: #e5e5e5;
}
.btn-default:active,
.dropdown-toggle.btn-default:active,
.btn-default.active,
.dropdown-toggle.btn-default.active {
  background-color: #e5e5e5;
}
.btn-default:focus,
.dropdown-toggle.btn-default:focus {
  background-color: #cccccc;
}
.btn-default:disabled,
.dropdown-toggle.btn-default:disabled,
.btn-default.disabled,
.dropdown-toggle.btn-default.disabled,
.btn-default[disabled],
.dropdown-toggle.btn-default[disabled] {
  background-color: #b3b3b3;
}
.btn-default .ink,
.dropdown-toggle.btn-default .ink {
  background-color: #b8b8b8;
}
.btn-flat.btn-default {
  color: #212121;
  background-color: transparent;
}
.btn-flat.btn-default:hover {
  color: #141414;
  background-color: #e5e5e5;
}
.btn-flat.btn-default:active,
.btn-flat.btn-default.active {
  color: #020202;
  background-color: #cccccc;
}
.btn-flat.btn-default:focus {
  color: #000;
  background-color: #cccccc;
}
.btn-flat.btn-default .ink {
  background-color: #808080;
}
.btn-primary,
.dropdown-toggle.btn-primary {
  background-color: #5677fc;
}
.btn-primary:hover,
.dropdown-toggle.btn-primary:hover {
  background-color: #4e6cef;
}
.btn-primary:active,
.dropdown-toggle.btn-primary:active,
.btn-primary.active,
.dropdown-toggle.btn-primary.active {
  background-color: #4e6cef;
}
.btn-primary:focus,
.dropdown-toggle.btn-primary:focus {
  background-color: #455ede;
}
.btn-primary:disabled,
.dropdown-toggle.btn-primary:disabled,
.btn-primary.disabled,
.dropdown-toggle.btn-primary.disabled,
.btn-primary[disabled],
.dropdown-toggle.btn-primary[disabled] {
  background-color: #b3b3b3;
}
.btn-primary .ink,
.dropdown-toggle.btn-primary .ink {
  background-color: #3b50ce;
}
.btn-flat.btn-primary {
  color: #5677fc;
  background-color: transparent;
}
.btn-flat.btn-primary:hover {
  color: #4e6cef;
  background-color: #e5e5e5;
}
.btn-flat.btn-primary:active,
.btn-flat.btn-primary.active {
  color: #455ede;
  background-color: #cccccc;
}
.btn-flat.btn-primary:focus {
  color: #3b50ce;
  background-color: #cccccc;
}
.btn-flat.btn-primary .ink {
  background-color: #808080;
}
.btn-success,
.dropdown-toggle.btn-success {
  background-color: #259b24;
}
.btn-success:hover,
.dropdown-toggle.btn-success:hover {
  background-color: #0a8f08;
}
.btn-success:active,
.dropdown-toggle.btn-success:active,
.btn-success.active,
.dropdown-toggle.btn-success.active {
  background-color: #0a8f08;
}
.btn-success:focus,
.dropdown-toggle.btn-success:focus {
  background-color: #0a7e07;
}
.btn-success:disabled,
.dropdown-toggle.btn-success:disabled,
.btn-success.disabled,
.dropdown-toggle.btn-success.disabled,
.btn-success[disabled],
.dropdown-toggle.btn-success[disabled] {
  background-color: #b3b3b3;
}
.btn-success .ink,
.dropdown-toggle.btn-success .ink {
  background-color: #056f00;
}
.btn-flat.btn-success {
  color: #259b24;
  background-color: transparent;
}
.btn-flat.btn-success:hover {
  color: #0a8f08;
  background-color: #e5e5e5;
}
.btn-flat.btn-success:active,
.btn-flat.btn-success.active {
  color: #0a7e07;
  background-color: #cccccc;
}
.btn-flat.btn-success:focus {
  color: #056f00;
  background-color: #cccccc;
}
.btn-flat.btn-success .ink {
  background-color: #808080;
}
.btn-info,
.dropdown-toggle.btn-info {
  background-color: #03a9f4;
}
.btn-info:hover,
.dropdown-toggle.btn-info:hover {
  background-color: #039be5;
}
.btn-info:active,
.dropdown-toggle.btn-info:active,
.btn-info.active,
.dropdown-toggle.btn-info.active {
  background-color: #039be5;
}
.btn-info:focus,
.dropdown-toggle.btn-info:focus {
  background-color: #0288d1;
}
.btn-info:disabled,
.dropdown-toggle.btn-info:disabled,
.btn-info.disabled,
.dropdown-toggle.btn-info.disabled,
.btn-info[disabled],
.dropdown-toggle.btn-info[disabled] {
  background-color: #b3b3b3;
}
.btn-info .ink,
.dropdown-toggle.btn-info .ink {
  background-color: #0277bd;
}
.btn-flat.btn-info {
  color: #03a9f4;
  background-color: transparent;
}
.btn-flat.btn-info:hover {
  color: #039be5;
  background-color: #e5e5e5;
}
.btn-flat.btn-info:active,
.btn-flat.btn-info.active {
  color: #0288d1;
  background-color: #cccccc;
}
.btn-flat.btn-info:focus {
  color: #0277bd;
  background-color: #cccccc;
}
.btn-flat.btn-info .ink {
  background-color: #808080;
}
.btn-warning,
.dropdown-toggle.btn-warning {
  background-color: #ffc107;
}
.btn-warning:hover,
.dropdown-toggle.btn-warning:hover {
  background-color: #ffb300;
}
.btn-warning:active,
.dropdown-toggle.btn-warning:active,
.btn-warning.active,
.dropdown-toggle.btn-warning.active {
  background-color: #ffb300;
}
.btn-warning:focus,
.dropdown-toggle.btn-warning:focus {
  background-color: #ffa000;
}
.btn-warning:disabled,
.dropdown-toggle.btn-warning:disabled,
.btn-warning.disabled,
.dropdown-toggle.btn-warning.disabled,
.btn-warning[disabled],
.dropdown-toggle.btn-warning[disabled] {
  background-color: #b3b3b3;
}
.btn-warning .ink,
.dropdown-toggle.btn-warning .ink {
  background-color: #ff8f00;
}
.btn-flat.btn-warning {
  color: #ffc107;
  background-color: transparent;
}
.btn-flat.btn-warning:hover {
  color: #ffb300;
  background-color: #e5e5e5;
}
.btn-flat.btn-warning:active,
.btn-flat.btn-warning.active {
  color: #ffa000;
  background-color: #cccccc;
}
.btn-flat.btn-warning:focus {
  color: #ff8f00;
  background-color: #cccccc;
}
.btn-flat.btn-warning .ink {
  background-color: #808080;
}
.btn-danger,
.dropdown-toggle.btn-danger {
  background-color: #ff5722;
}
.btn-danger:hover,
.dropdown-toggle.btn-danger:hover {
  background-color: #f4511e;
}
.btn-danger:active,
.dropdown-toggle.btn-danger:active,
.btn-danger.active,
.dropdown-toggle.btn-danger.active {
  background-color: #f4511e;
}
.btn-danger:focus,
.dropdown-toggle.btn-danger:focus {
  background-color: #e64a19;
}
.btn-danger:disabled,
.dropdown-toggle.btn-danger:disabled,
.btn-danger.disabled,
.dropdown-toggle.btn-danger.disabled,
.btn-danger[disabled],
.dropdown-toggle.btn-danger[disabled] {
  background-color: #b3b3b3;
}
.btn-danger .ink,
.dropdown-toggle.btn-danger .ink {
  background-color: #d84315;
}
.btn-flat.btn-danger {
  color: #ff5722;
  background-color: transparent;
}
.btn-flat.btn-danger:hover {
  color: #f4511e;
  background-color: #e5e5e5;
}
.btn-flat.btn-danger:active,
.btn-flat.btn-danger.active {
  color: #e64a19;
  background-color: #cccccc;
}
.btn-flat.btn-danger:focus {
  color: #d84315;
  background-color: #cccccc;
}
.btn-flat.btn-danger .ink {
  background-color: #808080;
}
/* -- Buttons sizes -------------------------------- */
.btn {
  min-width: 88px;
  padding: 10px 14px;
}
.btn-lg,
.btn-group-lg > .btn {
  min-width: 122px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3;
}
.btn-sm,
.btn-group-sm > .btn {
  min-width: 64px;
  padding: 4px 12px;
  font-size: 12px;
  line-height: 1.5;
}
.btn-xs,
.btn-group-xs > .btn {
  min-width: 46px;
  padding: 2px 10px;
  font-size: 10px;
  line-height: 1.5;
}
.btn-circle {
  width: 56px;
  height: 56px;
  min-width: 56px;
}
.btn-circle span {
  line-height: 56px;
}
.btn-circle.btn-lg {
  width: 78px;
  height: 78px;
  min-width: 78px;
}
.btn-circle.btn-lg span {
  line-height: 78px;
}
.btn-circle.btn-sm {
  width: 40px;
  height: 40px;
  min-width: 40px;
}
.btn-circle.btn-sm span {
  line-height: 40px;
}
.btn-circle.btn-xs {
  width: 30px;
  height: 30px;
  min-width: 30px;
}
.btn-circle.btn-xs span {
  line-height: 30px;
}
/*-- Button groups --------------------------------- */
.btn-group .btn {
  border-radius: 2px;
}
.btn-group.open .dropdown-toggle {
  outline: 0;
  outline-offset: 0;
  box-shadow: none;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
}
.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
  margin-left: 0;
}
.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover {
  z-index: 0;
}
.btn-group > .btn:focus:hover,
.btn-group-vertical > .btn:focus:hover,
.btn-group > .btn:active:hover,
.btn-group-vertical > .btn:active:hover,
.btn-group > .btn.active:hover,
.btn-group-vertical > .btn.active:hover {
  z-index: 2;
}
/* -- Ripple effect -------------------------------- */
.ripple-effect {
  position: relative;
  overflow: hidden;
  -webkit-transform: translate3d(0, 0, 0);
}
.ink {
  display: block;
  position: absolute;
  pointer-events: none;
  border-radius: 50%;
  -webkit-transform: scale(0);
  -moz-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  transform: scale(0);
  background: #fff;
  opacity: 1;
}
.ink.animate {
  -webkit-animation: ripple 0.5s linear;
  -moz-animation: ripple 0.5s linear;
  -ms-animation: ripple 0.5s linear;
  -o-animation: ripple 0.5s linear;
  animation: ripple 0.5s linear;
}
@keyframes ripple {
  100% {
    opacity: 0;
    transform: scale(2.5);
  }
}
@-webkit-keyframes ripple {
  100% {
    opacity: 0;
    -webkit-transform: scale(2.5);
    transform: scale(2.5);
  }
}
@-moz-keyframes ripple {
  100% {
    opacity: 0;
    -moz-transform: scale(2.5);
    transform: scale(2.5);
  }
}
@-ms-keyframes ripple {
  100% {
    opacity: 0;
    -ms-transform: scale(2.5);
    transform: scale(2.5);
  }
}
@-o-keyframes ripple {
  100% {
    opacity: 0;
    -o-transform: scale(2.5);
    transform: scale(2.5);
  }
}
/* -- import Bootstrap v3 --------------------------- */
/* -- import Bootstrap docs ------------------------- */
/* -- import Roboto Font ---------------------------- */
/* -- Body style ------------------------------------ */
/* -- Input styles ---------------------------------- */
.form-group {
  position: relative;
  margin-top: 35px;
  margin-bottom: 20px;
}
.input-group {
  position: relative;
}
.form-control {
  display: block;
  height: 36px;
  width: 100%;
  border: none;
  border-radius: 0 !important;
  font-size: 16px;
  font-weight: 300;
  padding: 0;
  background-color: transparent;
  box-shadow: none;
  border-bottom: 1px solid #757575;
}
.input-group .form-control {
  position: relative;
  z-index: inherit;
  float: inherit;
  width: 100%;
  margin-bottom: 0;
}
.form-control:focus {
  border-color: #757575;
  outline: none;
  box-shadow: none;
}
/* -- label styles ---------------------------------- */
label {
  position: absolute;
  top: -18px;
  color: #999;
  font-size: 12px;
  font-weight: 300;
  transition: 0.2s ease all;
  -moz-transition: 0.2s ease all;
  -webkit-transition: 0.2s ease all;
}
.form-horizontal .control-label {
  position: relative;
  top: 0;
  margin-bottom: 0;
}
@media (min-width: 768px) {
  .form-horizontal .control-label {
    font-size: 16px;
  }
}
.float-label {
  left: 0;
  top: 7px;
  font-size: 16px;
  pointer-events: none;
}
/* active state */
.form-control:focus ~ .float-label,
.form-control:valid ~ .float-label {
  top: -18px;
  font-size: 12px;
}
/* input colors ---- */
.form-control:focus ~ label {
  color: #03a9f4;
}
.form-control:focus ~ .form-bar:before,
.form-control:focus ~ .form-bar:after {
  background: #03a9f4;
}
/* help-block */
.form-group .help-block {
  position: absolute;
}
.help-block {
  color: #bdbdbd;
  font-size: 12px;
  font-weight: 300;
}
/* input addon ---*/
.input-group-addon {
  border: none;
  background: transparent;
}
/* ------  inline ----*/
.input-group-addon,
.form-inline .input-group {
  display: table-cell;
}
.input-group-addon,
.input-group-btn {
  width: inherit;
}
.input-group {
  width: 100%;
}
@media (min-width: 768px) {
  .form-inline .form-group {
    margin-top: 16px;
  }
  .input-group-btn,
  .input-group .form-control,
  .input-group-addon,
  .form-inline .input-group {
    display: inline-block;
  }
  .input-group {
    width: auto;
  }
}
/* -- bar styles -------------------------------------- */
.form-bar {
  position: relative;
  display: block;
  width: 100%;
}
.form-bar:before,
.form-bar:after {
  content: '';
  height: 1px;
  width: 0;
  bottom: 0;
  position: absolute;
  transition: 0.3s ease all;
  -moz-transition: 0.3s ease all;
  -webkit-transition: 0.3s ease all;
}
.form-bar:before {
  left: 50%;
}
.form-bar:after {
  right: 50%;
}
/* active state */
.form-control:focus ~ .form-bar:before,
.form-control:focus ~ .form-bar:after {
  width: 50%;
}
/* -- highlighter styles ------------------------------ */
.form-highlight {
  position: absolute;
  height: 60%;
  width: 60px;
  top: 25%;
  left: 0;
  pointer-events: none;
  opacity: 0.4;
}
/* active state */
.form-control:focus ~ .form-highlight {
  -webkit-animation: inputHighlighter 0.3s ease;
  -moz-animation: inputHighlighter 0.3s ease;
  animation: inputHighlighter 0.3s ease;
}
/* -- highlighter animation --------------------------- */
@-webkit-keyframes inputHighlighter {
  from {
    background: #5264AE;
  }
  to {
    width: 0;
    background: transparent;
  }
}
@-moz-keyframes inputHighlighter {
  from {
    background: #5264AE;
  }
  to {
    width: 0;
    background: transparent;
  }
}
@keyframes inputHighlighter {
  from {
    background: #5264AE;
  }
  to {
    width: 0;
    background: transparent;
  }
}
/*-- Checkbox --------------------------- */
/* 
 * Core styles required for the checkboxes.
 * @author Jason Mayes 2014, www.jasonmayes.com
*/
.form-group.checkbox {
  margin-top: 20px;
}
.checkbox input[type='checkbox'] {
  height: 0;
  width: 0;
  opacity: 0;
}
.checkbox label {
  font-size: 14px;
  font-weight: 300;
  line-height: 1;
  display: inline-block;
  overflow: hidden;
  position: relative;
  top: 10px;
  padding-left: 0;
}
.checkbox .chk-span {
  top: 0;
  border: 1px solid #5a5a5a;
  color: #1d1d1d;
  cursor: pointer;
  display: inline-block;
  float: left;
  height: 14px;
  margin: 0 14px 14px 1px;
  outline-color: #eaeaea;
  padding: 0;
  position: relative;
  width: 14px;
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  z-index: 1;
}
.checkbox .chk-span.checked {
  top: -2px;
  border-left: 2px solid #03a9f4;
  border-bottom: 4px solid #03a9f4;
  border-top: 1px solid rgba(0, 0, 0, 0);
  border-right: 1px solid rgba(0, 0, 0, 0);
  -webkit-transform: rotate(-45deg) scaleY(0.5);
  -moz-transform: rotate(-45deg) scaleY(0.5);
  -ms-transform: rotate(-45deg) scaleY(0.5);
  -o-transform: rotate(-45deg) scaleY(0.5);
  transform: rotate(-45deg) scaleY(0.5);
}
.checkbox .chk-span.checked {
  border-left-color: #03a9f4;
  border-bottom-color: #03a9f4;
}
.checkbox input[type='checkbox']:focus ~ label {
  color: #03a9f4;
}
.checkbox input[type='checkbox']:focus ~ label .chk-span {
  border-color: #03a9f4;
}
.checkbox input[type='checkbox']:focus ~ label .chk-span.checked {
  border-left-color: #03a9f4;
  border-bottom-color: #03a9f4;
  border-top: 1px solid rgba(0, 0, 0, 0);
  border-right: 1px solid rgba(0, 0, 0, 0);
}
@media (min-width: 768px) {
  .form-inline .radio label,
  .form-inline .checkbox label {
    padding-left: 5px;
  }
}
.form-control-static {
  font-size: 16px;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  background-color: transparent;
  border-bottom-style: dashed;
}
#focusedInput {
  border-color: #ccc;
  border-color: rgba(82, 168, 236, 0.8);
  outline: 0;
  box-shadow: none;
}
/* -- import Bootstrap v3 ----------------------------- */
/* -- import Roboto Font ------------------------------ */
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 100;
  src: local('Roboto Thin Italic'), local('Roboto-ThinItalic'), url(http://fonts.gstatic.com/s/roboto/v18/KFOiCnqEu92Fr1Mu51QrEzQdKg.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 300;
  src: local('Roboto Light Italic'), local('Roboto-LightItalic'), url(http://fonts.gstatic.com/s/roboto/v18/KFOjCnqEu92Fr1Mu51TjASc-CsE.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 400;
  src: local('Roboto Italic'), local('Roboto-Italic'), url(http://fonts.gstatic.com/s/roboto/v18/KFOkCnqEu92Fr1Mu51xMIzc.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 500;
  src: local('Roboto Medium Italic'), local('Roboto-MediumItalic'), url(http://fonts.gstatic.com/s/roboto/v18/KFOjCnqEu92Fr1Mu51S7ACc-CsE.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 700;
  src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(http://fonts.gstatic.com/s/roboto/v18/KFOjCnqEu92Fr1Mu51TzBic-CsE.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: italic;
  font-weight: 900;
  src: local('Roboto Black Italic'), local('Roboto-BlackItalic'), url(http://fonts.gstatic.com/s/roboto/v18/KFOjCnqEu92Fr1Mu51TLBCc-CsE.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 100;
  src: local('Roboto Thin'), local('Roboto-Thin'), url(http://fonts.gstatic.com/s/roboto/v18/KFOkCnqEu92Fr1MmgVxMIzc.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 300;
  src: local('Roboto Light'), local('Roboto-Light'), url(http://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmSU5fABc9.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 400;
  src: local('Roboto'), local('Roboto-Regular'), url(http://fonts.gstatic.com/s/roboto/v18/KFOmCnqEu92Fr1Mu5mxP.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 500;
  src: local('Roboto Medium'), local('Roboto-Medium'), url(http://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmEU9fABc9.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 700;
  src: local('Roboto Bold'), local('Roboto-Bold'), url(http://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmWUlfABc9.ttf) format('truetype');
}
@font-face {
  font-family: 'Roboto';
  font-style: normal;
  font-weight: 900;
  src: local('Roboto Black'), local('Roboto-Black'), url(http://fonts.gstatic.com/s/roboto/v18/KFOlCnqEu92Fr1MmYUtfABc9.ttf) format('truetype');
}
/* -- body styles ------------------------------------- */
body {
  font-family: "Roboto", 'Helvetica Neue, Helvetica, Arial', sans-serif;
  background: #0277bd;
}
/* -- button styles ------------------------------------- */
/*-- signin-card animation ---------------------------------------- */
.signin-card {
  -webkit-animation: cardEnter 0.75s ease-in-out 0.5s;
  animation: cardEnter 0.75s ease-in-out 0.5s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  opacity: 0;
}
/* -- login paper styles ------------------------------ */
.signin-card {
  max-width: 350px;
  border-radius: 2px;
  margin: 20px auto;
  padding: 20px;
  background-color: #eceff1;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
}
.signin-card .logo-image,
.signin-card h1,
.signin-card p {
  text-align: center;
}
/* -- font styles ------------------------------------- */
.display1 {
  font-size: 28px;
  font-weight: 100;
  line-height: 1.2;
  color: #757575;
  text-transform: inherit;
  letter-spacing: inherit;
}
.subhead {
  font-size: 16px;
  font-weight: 300;
  line-height: 1.1;
  color: #212121;
  text-transform: inherit;
  letter-spacing: inherit;
}
/* card animation from Animate.css -------------------- */
@-webkit-keyframes cardEnter {
  0%,
  20%,
  40%,
  60%,
  80%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    -ms-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3);
  }
  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    -ms-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1);
  }
  40% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9);
    -ms-transform: scale3d(0.9, 0.9, 0.9);
    transform: scale3d(0.9, 0.9, 0.9);
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
    -ms-transform: scale3d(1.03, 1.03, 1.03);
    transform: scale3d(1.03, 1.03, 1.03);
  }
  80% {
    -webkit-transform: scale3d(0.97, 0.97, 0.97);
    -ms-transform: scale3d(0.97, 0.97, 0.97);
    transform: scale3d(0.97, 0.97, 0.97);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
    -ms-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}
@keyframes cardEnter {
  0%,
  20%,
  40%,
  60%,
  80%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    -ms-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3);
  }
  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    -ms-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1);
  }
  40% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9);
    -ms-transform: scale3d(0.9, 0.9, 0.9);
    transform: scale3d(0.9, 0.9, 0.9);
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
    -ms-transform: scale3d(1.03, 1.03, 1.03);
    transform: scale3d(1.03, 1.03, 1.03);
  }
  80% {
    -webkit-transform: scale3d(0.97, 0.97, 0.97);
    -ms-transform: scale3d(0.97, 0.97, 0.97);
    transform: scale3d(0.97, 0.97, 0.97);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
    -ms-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}

</style>
</head>
<body background="hqdefault.jpg">
<div class="container" style="padding-top:100px;">
<div id="login" class="signin-card">
  <div class="logo-image">
  <img src="ro.jpg" alt="Logo" title="Logo" style="height:50px;width:80px;">
  </div>
  <h1 class="display1">Sign In</h1>
  <form action="" method="POST" class="" role="form">
    <div id="form-login-username" class="form-group">
      <input id="username" class="form-control" name="email" type="text" size="18" required />
      <span class="form-highlight"></span>
      <span class="form-bar"></span>
      <label for="username" class="float-label">Email</label>
    </div>
    <div id="form-login-password" class="form-group">
      <input id="passwd" class="form-control" name="pass" type="password" size="18"  required />
      <span class="form-highlight"></span>
      <span class="form-bar"></span>
      <label for="password" class="float-label">Password</label>
    </div>
    <div>
      <button class="btn btn-block btn-info ripple-effect" type="submit" name="login" alt="sign in">Login in</button>  <br>
     <center> <a href="index.php">Forget Password?</a>	</center> 
      <a href="index.php"><h3>Back</h3></a>	 
	 </div>

    </div>
  </form>
</div>
</div>
<body>
<?php
if(isset($_POST['login'])){
	//$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];   
	$query = "SELECT * FROM register WHERE email='$email' AND pass='$pass'";
	$data = mysqli_query($con,$query);
	$total = mysqli_num_rows($data);
	if($total==1){
		//$_SESSION['name']=$name;
		$_SESSION['email']=$email;
		echo '<script type="text/javascript">
           window.location = "profile.php"
      </script>';
	}
	else{
		echo '<script type="text/javascript">
           alert("You Have Enter Wrong Username And Password");
      </script>';
	}
}
?>