<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package GFW blog
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
 <link href='http://fonts.googleapis.com/css?family=Fira+Sans:400,300italic,500italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Fira+Sans:500,400,300italic,500italic' rel='stylesheet' type='text/css'>
<style type="text/css">
  html, body{
    padding: 0;
    margin: 0;
    border: 1px;
  }
  /* line 17, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  .layout-header div, .layout-header span, .layout-header applet, .layout-header object, .layout-header iframe,
  .layout-header h1, .layout-header h2, .layout-header h3, .layout-header h4, .layout-header h5, .layout-header h6, .layout-header p, .layout-header blockquote, .layout-header pre,
  .layout-header a, .layout-header abbr, .layout-header acronym, .layout-header address, .layout-header big, .layout-header cite, .layout-header code,
  .layout-header del, .layout-header dfn, .layout-header em, .layout-header img, .layout-header ins, .layout-header kbd, .layout-header q, .layout-header s, .layout-header samp,
  .layout-header small, .layout-header strike, .layout-header strong, .layout-header sub, .layout-header sup, .layout-header tt, .layout-header var,
  .layout-header b, .layout-header u, .layout-header i, .layout-header center,
  .layout-header dl, .layout-header dt, .layout-header dd, .layout-header ol, .layout-header ul, .layout-header li,
  .layout-header fieldset, .layout-header form, .layout-header label, .layout-header legend,
  .layout-header table, .layout-header caption, .layout-header tbody, .layout-header tfoot, .layout-header thead, .layout-header tr, .layout-header th, .layout-header td,
  .layout-header article, .layout-header aside, .layout-header canvas, .layout-header details, .layout-header embed,
  .layout-header figure, .layout-header figcaption, .layout-header footer, .layout-header header, .layout-header hgroup,
  .layout-header menu, .layout-header nav, .layout-header output, .layout-header ruby, .layout-header section, .layout-header summary,
  .layout-header time, .layout-header mark, .layout-header audio, .layout-header video {
    margin: 0;
    padding: 0;
    border: 0;
    font: inherit;
    font-size: 100%;
    vertical-align: baseline;
  }
  /* line 24, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  .layout-header ol, .layout-header ul {
    list-style: none;
  }
  /* line 26, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  .layout-header table {
    border-collapse: collapse;
    border-spacing: 0;
  }
  /* line 28, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  .layout-header caption, .layout-header th, .layout-header td {
    text-align: left;
    font-weight: normal;
    vertical-align: middle;
  }
  /* line 30, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  .layout-header q, .layout-header blockquote {
    quotes: none;
  }
  /* line 103, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  .layout-header q:before, .layout-header q:after, .layout-header blockquote:before, .layout-header blockquote:after {
    content: "";
    content: none;
  }
  /* line 32, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  .layout-header a img {
    border: none;
  }
  /* line 116, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  .layout-header article, .layout-header aside, .layout-header details, .layout-header figcaption, .layout-header figure, .layout-header footer, .layout-header header, .layout-header hgroup, .layout-header menu, .layout-header nav, .layout-header section, .layout-header summary {
    display: block;
  }
  .layout-header *, .layout-header *:after, .layout-header *:before {
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  .layout-header {
    font-family: "Fira Sans", Georgia, serif;
    background: #EEE;
    -webkit-font-smoothing: antialiased;
  }
  .layout-header svg {
    width: 100%;
    height: 100%;
    -webkit-transition: all 0.15s cubic-bezier(0.445, 0.05, 0.55, 0.95);
    -moz-transition: all 0.15s cubic-bezier(0.445, 0.05, 0.55, 0.95);
    -o-transition: all 0.15s cubic-bezier(0.445, 0.05, 0.55, 0.95);
    transition: all 0.15s cubic-bezier(0.445, 0.05, 0.55, 0.95);
  }
  .layout-header .mobile-hide {
    display: none;
  }
  @media (min-width: 750px) {
    .layout-header .mobile-hide {
      display: block;
    }
  }
  .layout-header .mobile-show {
    display: block;
  }
  @media (min-width: 750px) {
    .layout-header .mobile-show {
      display: none;
    }
  }
/* line 2, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header {
  position: absolute;
  width: 100%;
  height: auto;
  z-index: 1000;
  top: 0;
  left: 0;
}
/* line 9, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header.active {
  height: 100%;
  overflow: auto;
}
/* line 12, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header.active .layout-header-bottom {
  height: 100%;
}
/* line 14, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header.active .layout-header-bottom .inner {
  height: 100%;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
}
@media (min-width: 850px) {
  /* line 2, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
  .layout-header {
    position: relative;
    overflow: visible;
    height: auto;
  }
  /* line 25, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
  .layout-header.active {
    height: auto;
    overflow: visible;
  }
  /* line 28, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
  .layout-header.active .layout-header-bottom {
    height: auto;
  }
  /* line 30, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
  .layout-header.active .layout-header-bottom .inner {
    height: auto;
    overflow: visible;
    -webkit-overflow-scrolling: touch;
  }
}
/* line 48, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top {
  background: #F7F7F7;
  position: fixed;
  width: 100%;
  bottom: 0;
  left: 0;
  z-index: 11;
  border-top: 1px solid #e5e5df;
}
@media (min-width: 850px) {
  /* line 48, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
  .layout-header .layout-header-top {
    position: relative;
    padding: 4px 10px;
    border-top: none;
    border-bottom: 1px solid #e5e5df;
  }
}
/* line 16, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_mixins1600.scss */
.layout-header .layout-header-top:before, .layout-header .layout-header-top:after {
  content: " ";
  display: table;
  visibility: hidden;
  font-size: 0;
  height: 0;
}
/* line 23, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_mixins1600.scss */
.layout-header .layout-header-top:after {
  clear: both;
}
/* line 64, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav > div {
  width: 100%;
  overflow-y: hidden;
  overflow-x: scroll;
  -webkit-overflow-scrolling: touch;
}
@media (min-width: 850px) {
  /* line 64, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
  .layout-header .layout-header-top nav > div {
    width: auto;
    overflow: visible;
  }
}
/* line 73, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav > div > ul {
  width: 580px;
  padding: 0 5px;
  height: 55px;
}
@media (min-width: 850px) {
  /* line 73, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
  .layout-header .layout-header-top nav > div > ul {
    width: auto;
    margin: 0;
    height: auto;
  }
}
/* line 82, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav > div > ul > li {
  float: left;
  height: 55px;
}
@media (min-width: 850px) {
  /* line 82, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
  .layout-header .layout-header-top nav > div > ul > li {
    height: 25px;
    width: 25px;
    margin: 0 0 0 20px;
  }
  /* line 89, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
  .layout-header .layout-header-top nav > div > ul > li:first-child {
    margin: 0;
  }
}
/* line 93, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav > div > ul > li > a, .layout-header .layout-header-top nav > div > ul > li .link {
  cursor: pointer;
  display: inline-block;
  line-height: 55px;
  padding: 0px 10px 0 35px;
  position: relative;
  text-decoration: none;
  text-transform: uppercase;
  -webkit-transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1);
  -moz-transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1);
  -o-transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1);
  transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1);
}
@media (min-width: 850px) {
  /* line 93, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
  .layout-header .layout-header-top nav > div > ul > li > a, .layout-header .layout-header-top nav > div > ul > li .link {
    padding: 0;
    width: 100%;
    height: 100%;
    line-height: normal;
  }
}
/* line 109, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav > div > ul > li > a > span, .layout-header .layout-header-top nav > div > ul > li .link > span {
  font-size: 12px;
  color: #000;
  line-height: 28px;
  margin: 0 0 0 5px;
}
@media (min-width: 850px) {
  /* line 109, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
  .layout-header .layout-header-top nav > div > ul > li > a > span, .layout-header .layout-header-top nav > div > ul > li .link > span {
    display: block;
  }
  /* line 117, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
  .layout-header .layout-header-top nav > div > ul > li > a > span em, .layout-header .layout-header-top nav > div > ul > li .link > span em {
    display: inline-block;
  }
}
/* line 123, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav > div > ul > li > a .tooltip1, .layout-header .layout-header-top nav > div > ul > li .link .tooltip1 {
  margin: 0;
  color: #555555;
  line-height: normal;
}
@media (max-width: 849px) {
  /* line 123, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
  .layout-header .layout-header-top nav > div > ul > li > a .tooltip1, .layout-header .layout-header-top nav > div > ul > li .link .tooltip1 {
    position: relative;
    background: none;
    box-shadow: none;
    z-index: 1;
    visibility: visible;
    opacity: 1;
    top: auto;
    left: auto;
    text-align: left;
    padding: 0;
    -webkit-transform: translate(0, 0);
    -moz-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    -o-transform: translate(0, 0);
    transform: translate(0, 0);
  }
  /* line 139, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
  .layout-header .layout-header-top nav > div > ul > li > a .tooltip1:after, .layout-header .layout-header-top nav > div > ul > li .link .tooltip1:after {
    display: none;
  }
}
/* line 146, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav > div > ul > li > a form > input, .layout-header .layout-header-top nav > div > ul > li .link form > input {
  border: none;
  border-bottom: 2px solid #B6B6BA;
  background: none;
  box-shadow: none;
  height: 25px;
  outline: none;
  width: auto;
  font-family: inherit;
  margin: 0;
  padding: 0 5px;
}
/* line 159, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav > div > ul > li > a svg, .layout-header .layout-header-top nav > div > ul > li .link svg {
  fill: #B6B6BA;
  position: absolute;
  top: 48%;
  left: 5px;
  -webkit-transform: translate(0, -50%);
  -moz-transform: translate(0, -50%);
  -ms-transform: translate(0, -50%);
  -o-transform: translate(0, -50%);
  transform: translate(0, -50%);
}
@media (min-width: 850px) {
  /* line 159, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
  .layout-header .layout-header-top nav > div > ul > li > a svg, .layout-header .layout-header-top nav > div > ul > li .link svg {
    position: relative;
    top: auto;
    left: auto;
    -webkit-transform: translate(0, 0);
    -moz-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    -o-transform: translate(0, 0);
    transform: translate(0, 0);
  }
}
/* line 174, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav > div > ul > li > a.shape-world svg, .layout-header .layout-header-top nav > div > ul > li .link.shape-world svg {
  -webkit-transform: translate(0, -50%) scale(0.9);
  -moz-transform: translate(0, -50%) scale(0.9);
  -ms-transform: translate(0, -50%) scale(0.9);
  -o-transform: translate(0, -50%) scale(0.9);
  transform: translate(0, -50%) scale(0.9);
}
@media (min-width: 850px) {
  /* line 174, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
  .layout-header .layout-header-top nav > div > ul > li > a.shape-world svg, .layout-header .layout-header-top nav > div > ul > li .link.shape-world svg {
    position: relative;
    top: auto;
    left: auto;
    -webkit-transform: scale(0.9);
    -moz-transform: scale(0.9);
    -ms-transform: scale(0.9);
    -o-transform: scale(0.9);
    transform: scale(0.9);
  }
}
/* line 186, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav > div > ul > li > a:hover.shape-house svg, .layout-header .layout-header-top nav > div > ul > li > a.current.shape-house svg, .layout-header .layout-header-top nav > div > ul > li .link:hover.shape-house svg, .layout-header .layout-header-top nav > div > ul > li .link.current.shape-house svg {
  fill: #97bd3d;
}
/* line 187, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav > div > ul > li > a:hover.shape-world svg, .layout-header .layout-header-top nav > div > ul > li > a.current.shape-world svg, .layout-header .layout-header-top nav > div > ul > li .link:hover.shape-world svg, .layout-header .layout-header-top nav > div > ul > li .link.current.shape-world svg {
  fill: #97bd3d;
}
/* line 188, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav > div > ul > li > a:hover.shape-country svg, .layout-header .layout-header-top nav > div > ul > li > a.current.shape-country svg, .layout-header .layout-header-top nav > div > ul > li .link:hover.shape-country svg, .layout-header .layout-header-top nav > div > ul > li .link.current.shape-country svg {
  fill: #97bd3d;
}
/* line 189, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav > div > ul > li > a:hover.shape-fire svg, .layout-header .layout-header-top nav > div > ul > li > a.current.shape-fire svg, .layout-header .layout-header-top nav > div > ul > li .link:hover.shape-fire svg, .layout-header .layout-header-top nav > div > ul > li .link.current.shape-fire svg {
  fill: #ed1846;
}
/* line 190, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav > div > ul > li > a:hover.shape-commodities svg, .layout-header .layout-header-top nav > div > ul > li > a.current.shape-commodities svg, .layout-header .layout-header-top nav > div > ul > li .link:hover.shape-commodities svg, .layout-header .layout-header-top nav > div > ul > li .link.current.shape-commodities svg {
  fill: #e98300;
}
/* line 191, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav > div > ul > li > a:hover.shape-blog svg, .layout-header .layout-header-top nav > div > ul > li > a.current.shape-blog svg, .layout-header .layout-header-top nav > div > ul > li .link:hover.shape-blog svg, .layout-header .layout-header-top nav > div > ul > li .link.current.shape-blog svg {
  fill: #97bd3d;
}
/* line 192, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav > div > ul > li > a:hover svg, .layout-header .layout-header-top nav > div > ul > li > a.current svg, .layout-header .layout-header-top nav > div > ul > li .link:hover svg, .layout-header .layout-header-top nav > div > ul > li .link.current svg {
  fill: #97bd3d;
}
/* line 201, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav .btn-menu {
  width: 55px;
  height: 100%;
  position: absolute;
  top: 50%;
  right: 0;
  display: block;
  z-index: 5;
  box-shadow: none;
  background-color: #dedede;
  border: none;
  outline: none;
  -webkit-transform: translate(0, -50%);
  -moz-transform: translate(0, -50%);
  -ms-transform: translate(0, -50%);
  -o-transform: translate(0, -50%);
  transform: translate(0, -50%);
}
/* line 215, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav .btn-menu:after {
  content: "";
  display: none;
  width: 20px;
  height: 100%;
  right: 100%;
  position: absolute;
  top: 0;
  z-index: 2;
}
@media (min-width: 850px) {
  /* line 201, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
  .layout-header .layout-header-top nav .btn-menu {
    display: none;
  }
}
/* line 229, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav .btn-menu .icon {
  margin: 0 auto;
  fill: #555555;
}
/* line 232, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav .btn-menu .icon.hamburguer {
  display: block;
}
/* line 235, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav .btn-menu .icon.close {
  display: none;
}
/* line 239, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav .btn-menu.active {
  background: white;
  border-left: 1px solid #e5e5df;
  box-shadow: 1px -2px 0 white;
}
/* line 243, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav .btn-menu.active .icon {
  margin: 0 auto;
}
/* line 245, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav .btn-menu.active .icon.hamburguer {
  display: none;
}
/* line 248, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav .btn-menu.active .icon.close {
  display: block;
}
/* line 252, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav .btn-menu.active:after {
  border-right: 1px solid #e5e5df;
}
/* line 258, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav.first-nav {
  float: left;
  position: relative;
  width: 100%;
}
@media (min-width: 850px) {
  /* line 258, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
  .layout-header .layout-header-top nav.first-nav {
    padding: 0;
    width: auto;
  }
}
/* line 271, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav.first-nav > div > ul > li > a:hover .tooltip1, .layout-header .layout-header-top nav.first-nav > div > ul > li .link:hover .tooltip1 {
  visibility: visible;
  opacity: 1;
}
/* line 282, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav.second-nav {
  float: right;
}
/* line 286, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav.second-nav > div > ul > li {
  height: 25px;
  width: auto;
  position: relative;
}
/* line 291, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav.second-nav > div > ul > li > a,
.layout-header .layout-header-top nav.second-nav > div > ul > li .link {
  text-indent: 0;
  width: auto;
}
/* line 294, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav.second-nav > div > ul > li > a > span,
.layout-header .layout-header-top nav.second-nav > div > ul > li .link > span {
  display: none;
}
@media (min-width: 1050px) {
  /* line 294, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
  .layout-header .layout-header-top nav.second-nav > div > ul > li > a > span,
  .layout-header .layout-header-top nav.second-nav > div > ul > li .link > span {
    display: inline-block;
  }
}
/* line 300, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav.second-nav > div > ul > li > a svg,
.layout-header .layout-header-top nav.second-nav > div > ul > li .link svg {
  height: 25px;
  float: left;
  display: inline-block;
}
/* line 306, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav.second-nav > div > ul > li .home_data {
  font-size: 12px;
  border: 0;
  text-decoration: none;
}
/* line 310, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav.second-nav > div > ul > li .home_data span {
  line-height: 28px;
}
/* line 313, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav.second-nav > div > ul > li .home_data:visited {
  color: #000;
}
/* line 318, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_header1600.scss */
.layout-header .layout-header-top nav.second-nav > div > ul > li:hover .submenu-tooltip {
  visibility: visible;
  opacity: 1;
}
  #google_translate_element_box2 {
    padding: 0 15px 10px;
  }
  @media (min-width: 750px) {
    #google_translate_element_box2 {
      display: none;
    }
  }
  #google_translate_element .goog-te-gadget {
    font-family: inherit;
  }
  #google_translate_element .goog-te-gadget .goog-te-gadget-simple {
    border: none;
    background: none;
  }
  #google_translate_element .goog-te-gadget .goog-te-gadget-simple .goog-te-menu-value {
    color: #000;
    text-transform: uppercase;
    font-size: 12px;
    line-height: 28px;
    position: relative;
    padding-right: 16px;
  }
  #google_translate_element .goog-te-gadget .goog-te-gadget-simple .goog-te-menu-value span:last-child {
    visibility: hidden;
    display: block;
    position: absolute;
    top: 50%;
    right: 0;
    height: 16px;
    width: 16px;
    -webkit-transform: translate(0, -55%);
    -moz-transform: translate(0, -55%);
    -ms-transform: translate(0, -55%);
    -o-transform: translate(0, -55%);
    transform: translate(0, -55%);
  }
  #google_translate_element .goog-te-gadget .goog-te-gadget-simple .goog-te-menu-value span:last-child:before {
    content: "";
    visibility: visible;
    display: block;
    height: 100%;
    width: 100%;
    background: url(http://gfw-nav.herokuapp.com/assets/svg-icons/arrow-down.svg) no-repeat center;
    background-size: contain;
  }  
/* line 14, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/layouts/_grid1600.scss */
.layout-header .inner {
  position: relative;
  margin: 0 auto;
  width: 100%;
}
@media (min-width: 850px) {
  /* line 14, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/layouts/_grid1600.scss */
  .layout-header .inner {
    width: 95%;
  }
}
@media (min-width: 1400px) {
  /* line 14, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/layouts/_grid1600.scss */
  .layout-header .inner {
    width: 75%;
    max-width: 1200px;
  }
}
/* line 22, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
.layout-header .tooltip1 {
  position: absolute;
  background: white;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25);
  z-index: 1;
  margin: 0;
  visibility: hidden;
  opacity: 0;
  text-transform: uppercase;
  position: absolute;
  top: 100%;
  left: 50%;
  text-align: center;
  padding: 10px;
  white-space: nowrap;
  -webkit-transform: translate(-50%, 10px);
  -moz-transform: translate(-50%, 10px);
  -ms-transform: translate(-50%, 10px);
  -o-transform: translate(-50%, 10px);
  transform: translate(-50%, 10px);
}
/* line 38, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
.layout-header .tooltip1:after {
  content: "";
  display: block;
  position: absolute;
  width: 16px;
  height: 16px;
  background: white;
  z-index: 2;
  top: 0;
  left: 50%;
  -webkit-transform: translate(-50%, -50%) rotate(45deg);
  -moz-transform: translate(-50%, -50%) rotate(45deg);
  -ms-transform: translate(-50%, -50%) rotate(45deg);
  -o-transform: translate(-50%, -50%) rotate(45deg);
  transform: translate(-50%, -50%) rotate(45deg);
  border-top: 1px solid #f0f0ed;
  border-left: 1px solid #f0f0ed;
}
  /* line 53, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
  .layout-header .submenu-tooltip {
    position: absolute;
    min-width: 150px;
    background: white;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25);
    z-index: 1;
    visibility: hidden;
    opacity: 0;
    text-transform: none;
    -webkit-backface-visibility: hidden;
    -webkit-transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1);
    -moz-transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1);
    -o-transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1);
    transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1);
  }
  /* line 63, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
  .layout-header .submenu-tooltip.top {
    top: 100%;
    left: 50%;
    -webkit-transform: translate(-50%, 10px);
    -moz-transform: translate(-50%, 10px);
    -ms-transform: translate(-50%, 10px);
    -o-transform: translate(-50%, 10px);
    transform: translate(-50%, 10px);
  }
  /* line 67, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
  .layout-header .submenu-tooltip.top:after {
    top: 0;
    left: 50%;
    -webkit-transform: translate(-50%, -50%) rotate(45deg);
    -moz-transform: translate(-50%, -50%) rotate(45deg);
    -ms-transform: translate(-50%, -50%) rotate(45deg);
    -o-transform: translate(-50%, -50%) rotate(45deg);
    transform: translate(-50%, -50%) rotate(45deg);
    border-top: 1px solid #e5e5df;
    border-left: 1px solid #e5e5df;
  }
  /* line 75, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
  .layout-header .submenu-tooltip.bottom {
    bottom: 100%;
    left: 50%;
    -webkit-transform: translate(-50%, -10px);
    -moz-transform: translate(-50%, -10px);
    -ms-transform: translate(-50%, -10px);
    -o-transform: translate(-50%, -10px);
    transform: translate(-50%, -10px);
  }
  /* line 79, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
  .layout-header .submenu-tooltip.bottom:after {
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 50%) rotate(45deg);
    -moz-transform: translate(-50%, 50%) rotate(45deg);
    -ms-transform: translate(-50%, 50%) rotate(45deg);
    -o-transform: translate(-50%, 50%) rotate(45deg);
    transform: translate(-50%, 50%) rotate(45deg);
    border-bottom: 1px solid #e5e5df;
    border-right: 1px solid #e5e5df;
  }
  /* line 89, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
  .layout-header .submenu-tooltip:after {
    content: "";
    display: block;
    position: absolute;
    width: 16px;
    height: 16px;
    background: white;
    z-index: 2;
  }
  /* line 98, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
  .layout-header .submenu-tooltip li {
    border-top: 1px solid #EAECEF;
    font-size: 15px;
    white-space: nowrap;
    position: relative;
    z-index: 3;
  }
  /* line 104, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
  .layout-header .submenu-tooltip li:first-child {
    border-top: none;
  }
  /* line 105, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
  .layout-header .submenu-tooltip li a, .submenu-tooltip li .link {
    color: #444;
    font-weight: 300;
    padding: 14px 20px;
    text-decoration: none;
    text-align: center;
    display: block;
  }
  /* line 112, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
  .layout-header .submenu-tooltip li a:hover, .submenu-tooltip li .link:hover {
    background: #fafafa;
  }
  /* line 1, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_icons1600.scss */
  .layout-header .icon {
    display: block;
    height: 25px;
    width: 25px;
  }
  </style>
  <style type="text/css">
  html, body{
    padding: 0;
    margin: 0;
    border: 1px;
  }
  /* line 17, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  .layout-footer div, .layout-footer span, .layout-footer applet, .layout-footer object, .layout-footer iframe,
  .layout-footer h1, .layout-footer h2, .layout-footer h3, .layout-footer h4, .layout-footer h5, .layout-footer h6, .layout-footer p, .layout-footer blockquote, .layout-footer pre,
  .layout-footer a, .layout-footer abbr, .layout-footer acronym, .layout-footer address, .layout-footer big, .layout-footer cite, .layout-footer code,
  .layout-footer del, .layout-footer dfn, .layout-footer em, .layout-footer img, .layout-footer ins, .layout-footer kbd, .layout-footer q, .layout-footer s, .layout-footer samp,
  .layout-footer small, .layout-footer strike, .layout-footer strong, .layout-footer sub, .layout-footer sup, .layout-footer tt, .layout-footer var,
  .layout-footer b, .layout-footer u, .layout-footer i, .layout-footer center,
  .layout-footer dl, .layout-footer dt, .layout-footer dd, .layout-footer ol, .layout-footer ul, .layout-footer li,
  .layout-footer fieldset, .layout-footer form, .layout-footer label, .layout-footer legend,
  .layout-footer table, .layout-footer caption, .layout-footer tbody, .layout-footer tfoot, .layout-footer thead, .layout-footer tr, .layout-footer th, .layout-footer td,
  .layout-footer article, .layout-footer aside, .layout-footer canvas, .layout-footer details, .layout-footer embed,
  .layout-footer figure, .layout-footer figcaption, .layout-footer footer, .layout-footer header, .layout-footer hgroup,
  .layout-footer menu, .layout-footer nav, .layout-footer output, .layout-footer ruby, .layout-footer section, .layout-footer summary,
  .layout-footer time, .layout-footer mark, .layout-footer audio, .layout-footer video {
    margin: 0;
    padding: 0;
    border: 0;
    font: inherit;
    font-size: 100%;
    vertical-align: baseline;
  }
  /* line 24, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  .layout-footer ol, .layout-footer ul {
    list-style: none;
  }
  /* line 26, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  .layout-footer table {
    border-collapse: collapse;
    border-spacing: 0;
  }
  /* line 28, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  .layout-footer caption, .layout-footer th, .layout-footer td {
    text-align: left;
    font-weight: normal;
    vertical-align: middle;
  }
  /* line 30, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  .layout-footer q, .layout-footer blockquote {
    quotes: none;
  }
  /* line 103, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  .layout-footer q:before, .layout-footer q:after, .layout-footer blockquote:before, .layout-footer blockquote:after {
    content: "";
    content: none;
  }
  /* line 32, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  .layout-footer a img {
    border: none;
  }
  /* line 116, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  .layout-footer article, .layout-footer aside, .layout-footer details, .layout-footer figcaption, .layout-footer figure, .layout-footer footer, .layout-footer header, .layout-footer hgroup, .layout-footer menu, .layout-footer nav, .layout-footer section, .layout-footer summary {
    display: block;
  }
  .layout-footer *, .layout-footer *:after, .layout-footer *:before {
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  .layout-footer {
    font-family: "Fira Sans", Georgia, serif;
    background: #EEE;
    -webkit-font-smoothing: antialiased;
  }
  .layout-footer svg {
    width: 100%;
    height: 100%;
    -webkit-transition: all 0.15s cubic-bezier(0.445, 0.05, 0.55, 0.95);
    -moz-transition: all 0.15s cubic-bezier(0.445, 0.05, 0.55, 0.95);
    -o-transition: all 0.15s cubic-bezier(0.445, 0.05, 0.55, 0.95);
    transition: all 0.15s cubic-bezier(0.445, 0.05, 0.55, 0.95);
  }
  .layout-footer .mobile-hide {
    display: none;
  }
  @media (min-width: 750px) {
    .layout-footer .mobile-hide {
      display: block;
    }
  }
  .layout-footer .mobile-show {
    display: block;
  }
  @media (min-width: 750px) {
    .layout-footer .mobile-show {
      display: none;
    }
  }
  /* line 234, logos/*.png */
  .logos-sprite, .layout-footer .partner-box .row .wri-logo, .layout-footer .footer-logos a.wri, .layout-footer .footer-logos a.wri:hover, .layout-footer .footer-logos a.google, .layout-footer .footer-logos a.google:hover, .layout-footer .footer-logos a.esri, .layout-footer .footer-logos a.esri:hover, .layout-footer .footer-logos a.universitymaryland, .layout-footer .footer-logos a.universitymaryland:hover, .layout-footer .footer-logos a.unep, .layout-footer .footer-logos a.unep:hover, .layout-footer .footer-logos a.imazon, .layout-footer .footer-logos a.imazon:hover, .layout-footer .footer-logos a.cfgd, .layout-footer .footer-logos a.cfgd:hover, .layout-footer .footer-logos a.osfac, .layout-footer .footer-logos a.osfac:hover, .layout-footer .footer-logos a.gfwca, .layout-footer .footer-logos a.gfwca:hover, .layout-footer .footer-logos a.scanex, .layout-footer .footer-logos a.scanex:hover, .layout-footer .footer-logos a.twrus, .layout-footer .footer-logos a.twrus:hover, .layout-footer .footer-logos a.norwegian, .layout-footer .footer-logos a.norwegian:hover, .layout-footer .footer-logos a.usaid, .layout-footer .footer-logos a.usaid:hover, .layout-footer .footer-logos a.gef, .layout-footer .footer-logos a.gef:hover, .layout-footer .footer-logos a.ukaid, .layout-footer .footer-logos a.ukaid:hover, .layout-footer .footer-logos a.tilia, .layout-footer .footer-logos a.tilia:hover, .layout-footer .footer-logos a.goodall, .layout-footer .footer-logos a.goodall:hover, .layout-footer .footer-logos a.cartodb, .layout-footer .footer-logos a.cartodb:hover, .layout-footer .footer-logos a.vizzuality, .layout-footer .footer-logos a.vizzuality:hover, .layout-footer .footer-logos a.blueraster, .layout-footer .footer-logos a.blueraster:hover, .layout-footer .footer-logos a.sida, .layout-footer .footer-logos a.sida:hover, .layout-footer .footer-logos a.danida, .layout-footer .footer-logos a.danida:hover, .layout-footer .footer-logos a.cgiar, .layout-footer .footer-logos a.cgiar:hover, .layout-footer .footer-logos a.dutchforeign, .layout-footer .footer-logos a.dutchforeign:hover, .layout-footer .footer-logos a.moore, .layout-footer .footer-logos a.moore:hover, .layout-footer .footer-logos a.bobolink, .layout-footer .footer-logos a.vizzuality-big, .layout-footer .footer-logos a.vizzuality-big:hover {
    background: url(http://gfw-nav.herokuapp.com/assets/logos-sd59f31ac4c.png) no-repeat;
  }
/* line 14, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/layouts/_grid1600.scss */
.layout-footer .inner {
  position: relative;
  margin: 0 auto;
  width: 100%;
}
@media (min-width: 850px) {
  /* line 14, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/layouts/_grid1600.scss */
  .layout-footer .inner {
    width: 95%;
  }
}
@media (min-width: 1400px) {
  /* line 14, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/layouts/_grid1600.scss */
  .layout-footer .inner {
    width: 75%;
    max-width: 1200px;
  }
}
  /* line 1, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_icons1600.scss */
  .layout-footer .icon {
    display: block;
    height: 25px;
    width: 25px;
  }
/* line 30, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer {
  background: #EDEDE8;
  clear: both;
}
/* line 33, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .apps-footer {
  padding: 20px 0;
  border-bottom: 1px solid #E5E5DF;
}
/* line 36, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .apps-footer ul {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-box-pack: justify;
  -moz-box-pack: justify;
  -ms-flex-pack: justify;
  -webkit-justify-content: space-between;
  justify-content: space-between;
  -webkit-box-align: stretch;
  -moz-box-align: stretch;
  -ms-flex-align: stretch;
  -webkit-align-items: stretch;
  align-items: stretch;
}
/* line 38, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .apps-footer ul li {
  width: 16.666666%;
}
/* line 40, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .apps-footer ul li a {
  display: block;
  padding: 20px;
  text-decoration: none;
}
/* line 44, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .apps-footer ul li a svg {
  display: block;
  height: 30px;
  width: 30px;
  margin: 0 auto;
  float: none;
  fill: #555555;
}
/* line 52, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .apps-footer ul li a h3 {
  text-transform: uppercase;
  text-align: center;
  font-size: 12px;
  padding: 5px 0 0;
  color: #555555;
  -webkit-transition: all 0.25s cubic-bezier(0.645, 0.045, 0.355, 1);
  -moz-transition: all 0.25s cubic-bezier(0.645, 0.045, 0.355, 1);
  -o-transition: all 0.25s cubic-bezier(0.645, 0.045, 0.355, 1);
  transition: all 0.25s cubic-bezier(0.645, 0.045, 0.355, 1);
}
/* line 62, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .apps-footer ul li a:hover.fire svg {
  fill: #ed1846;
}
/* line 63, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .apps-footer ul li a:hover.fire h3 {
  color: #ed1846;
}
/* line 66, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .apps-footer ul li a:hover.commodities svg {
  fill: #e98300;
}
/* line 67, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .apps-footer ul li a:hover.commodities h3 {
  color: #e98300;
}
/* line 69, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .apps-footer ul li a:hover svg {
  fill: #97bd3d;
}
/* line 70, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .apps-footer ul li a:hover h3 {
  color: #97bd3d;
}
/* line 76, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .site-map {
  padding: 0 0 40px;
}
/* line 78, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .site-map .row {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-box-pack: justify;
  -moz-box-pack: justify;
  -ms-flex-pack: justify;
  -webkit-justify-content: space-between;
  justify-content: space-between;
  -webkit-box-align: stretch;
  -moz-box-align: stretch;
  -ms-flex-align: stretch;
  -webkit-align-items: stretch;
  align-items: stretch;
  padding: 40px 0;
  border-bottom: 1px solid #E5E5DF;
}
/* line 82, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .site-map .row .col {
  width: 25%;
}
/* line 84, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .site-map .row .col a {
  text-decoration: none;
  color: #555555;
}
/* line 87, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .site-map .row .col a:hover {
  text-decoration: underline;
}
/* line 91, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .site-map .row .col h3 {
  font-size: 14px;
  color: #555555;
  text-transform: uppercase;
  padding: 0 0 15px;
  font-weight: 500;
}
/* line 98, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .site-map .row .col ul {
  margin: -10px 0 0;
}
/* line 100, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .site-map .row .col ul li {
  font-size: 13px;
  padding: 5px 10px 5px 0;
}
/* line 108, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .partner-box {
  padding: 40px 20px;
}
@media (min-width: 850px) {
  /* line 108, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .partner-box {
    padding: 0 0 40px;
  }
}
/* line 113, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .partner-box h4 {
  font-size: 14px;
  color: #555555;
  padding: 0 0 15px;
  text-align: center;
  font-weight: 500;
}
@media (min-width: 850px) {
  /* line 113, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .partner-box h4 {
    text-align: left;
    font-weight: 400;
  }
}
/* line 124, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .partner-box .row {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-box-pack: justify;
  -moz-box-pack: justify;
  -ms-flex-pack: justify;
  -webkit-justify-content: space-between;
  justify-content: space-between;
  -webkit-box-align: start;
  -moz-box-align: start;
  -ms-flex-align: start;
  -webkit-align-items: flex-start;
  align-items: flex-start;
  -webkit-box-lines: multiple;
  -moz-box-lines: multiple;
  -ms-flex-wrap: wrap;
  -webkit-flex-wrap: wrap;
  flex-wrap: wrap;
}
/* line 127, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .partner-box .row .wri-logo {
  width: 200px;
  height: 70px;
  margin: 0 auto;
  background-position: 0 -1711px;
}
@media (min-width: 850px) {
  /* line 127, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .partner-box .row .wri-logo {
    margin: 0;
  }
}
/* line 136, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .partner-box .row .address {
  text-align: center;
  padding: 25px 20px 0;
  max-width: 300px;
  margin: 0 auto;
  font-size: 14px;
  font-weight: 300;
  color: #555555;
}
@media (min-width: 850px) {
  /* line 136, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .partner-box .row .address {
    text-align: right;
    max-width: none;
    margin: 0;
    padding: 0;
  }
}
/* line 150, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .partner-box .row .address > * {
  margin: 8px 0 0;
}
/* line 152, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .partner-box .row .address > *:first-child {
  margin: 0;
}
/* line 154, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .partner-box .row .address a {
  color: #555555;
  font-weight: 400;
}
/* line 158, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .partner-box .row .address strong, .layout-footer .partner-box .row .address span {
  display: block;
}
/* line 159, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .partner-box .row .address strong {
  font-weight: 400;
}
/* line 166, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos-btn {
  padding: 20px 0;
}
/* line 168, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos-btn .inner {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-box-pack: justify;
  -moz-box-pack: justify;
  -ms-flex-pack: justify;
  -webkit-justify-content: space-between;
  justify-content: space-between;
  -webkit-box-align: stretch;
  -moz-box-align: stretch;
  -ms-flex-align: stretch;
  -webkit-align-items: stretch;
  align-items: stretch;
}
/* line 174, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos-btn a, .layout-footer .footer-logos-btn span {
  color: #555555;
}
/* line 175, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos-btn span {
  font-size: 19px;
}
/* line 178, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos-btn a {
  text-decoration: none;
}
/* line 180, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos-btn a:hover {
  text-decoration: underline;
}
/* line 186, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos {
  display: none;
}
@media (min-width: 850px) {
  /* line 186, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .footer-logos {
    display: block;
    padding: 0px 0 40px;
  }
}
/* line 192, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos .slick-slide {
  height: 60px;
}
/* line 195, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a {
  display: block;
  margin: 0 auto;
  width: 88px;
  position: relative;
  top: 50%;
  -webkit-transform: translate(0, -50%);
  -moz-transform: translate(0, -50%);
  -ms-transform: translate(0, -50%);
  -o-transform: translate(0, -50%);
  transform: translate(0, -50%);
}
/* line 202, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.wri {
  height: 32px;
  width: 95px;
  background-position: 0 -2414px;
}
/* line 204, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.wri:hover {
  background-position: 0 -1075px;
}
/* line 208, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.google {
  height: 29px;
  width: 85px;
  background-position: 0 -2715px;
}
/* line 210, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.google:hover {
  background-position: 0 -656px;
}
/* line 214, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.esri {
  height: 33px;
  width: 87px;
  background-position: 0 -2381px;
}
/* line 216, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.esri:hover {
  background-position: 0 -1042px;
}
/* line 220, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.universitymaryland {
  height: 51px;
  width: 56px;
  background-position: 0 -2034px;
}
/* line 222, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.universitymaryland:hover {
  background-position: 0 -742px;
}
/* line 226, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.unep {
  height: 57px;
  width: 49px;
  background-position: 0 -1874px;
}
/* line 228, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.unep:hover {
  background-position: 0 -793px;
}
/* line 232, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.imazon {
  height: 24px;
  width: 79px;
  background-position: 0 -2839px;
}
/* line 234, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.imazon:hover {
  background-position: 0 -1484px;
}
/* line 238, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.cfgd {
  height: 40px;
  width: 84px;
  background-position: 0 -1946px;
}
/* line 240, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.cfgd:hover {
  background-position: 0 -850px;
}
/* line 244, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.osfac {
  height: 56px;
  width: 44px;
  background-position: 0 -2183px;
}
/* line 246, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.osfac:hover {
  background-position: 0 -890px;
}
/* line 250, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.gfwca {
  height: 44px;
  width: 42px;
  background-position: 0 -2580px;
}
/* line 252, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.gfwca:hover {
  background-position: 0 -1667px;
}
/* line 256, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.scanex {
  height: 20px;
  width: 110px;
  background-position: 0 -2624px;
}
/* line 258, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.scanex:hover {
  background-position: 0 -1313px;
}
/* line 262, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.twrus {
  height: 28px;
  width: 110px;
  background-position: 0 -2552px;
}
/* line 264, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.twrus:hover {
  background-position: 0 -1285px;
}
/* line 268, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.norwegian {
  height: 46px;
  width: 110px;
  background-position: 0 -2137px;
}
/* line 270, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.norwegian:hover {
  background-position: 0 -1828px;
}
/* line 274, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.usaid {
  height: 64px;
  width: 80px;
  background-position: 0 -1566px;
}
/* line 276, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.usaid:hover {
  background-position: 0 -549px;
}
/* line 280, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.gef {
  height: 59px;
  width: 51px;
  background-position: 0 -2239px;
}
/* line 282, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.gef:hover {
  background-position: 0 -983px;
}
/* line 286, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.ukaid {
  height: 47px;
  width: 43px;
  background-position: 0 -2644px;
}
/* line 288, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.ukaid:hover {
  background-position: 0 -1781px;
}
/* line 292, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.tilia {
  height: 25px;
  width: 67px;
  background-position: 0 -3013px;
}
/* line 294, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.tilia:hover {
  background-position: 0 -2988px;
}
/* line 298, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.goodall {
  height: 26px;
  width: 110px;
  background-position: 0 -2962px;
}
/* line 300, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.goodall:hover {
  background-position: 0 -2446px;
}
/* line 304, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.cartodb {
  height: 39px;
  width: 110px;
  background-position: 0 -2298px;
}
/* line 306, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.cartodb:hover {
  background-position: 0 -1162px;
}
/* line 310, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.vizzuality {
  height: 58px;
  width: 109px;
  background-position: 0 -1508px;
}
/* line 312, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.vizzuality:hover {
  background-position: 0 -491px;
}
/* line 316, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.blueraster {
  height: 48px;
  width: 110px;
  background-position: 0 -1986px;
}
/* line 318, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.blueraster:hover {
  background-position: 0 -1201px;
}
/* line 322, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.sida {
  height: 55px;
  width: 110px;
  background-position: 0 -1386px;
}
/* line 324, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.sida:hover {
  background-position: 0 -1107px;
}
/* line 328, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.danida {
  height: 15px;
  width: 82px;
  background-position: 0 -2824px;
}
/* line 330, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.danida:hover {
  background-position: 0 -1931px;
}
/* line 334, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.cgiar {
  height: 43px;
  width: 124px;
  background-position: 0 -1441px;
}
/* line 336, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.cgiar:hover {
  background-position: 0 -613px;
}
/* line 340, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.dutchforeign {
  height: 80px;
  width: 106px;
  background-position: 0 -2744px;
}
/* line 342, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.dutchforeign:hover {
  background-position: 0 -2472px;
}
/* line 346, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.moore {
  height: 37px;
  width: 96px;
  background-position: 0 -1630px;
}
/* line 348, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.moore:hover {
  background-position: 0 -946px;
}
/* line 354, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.bobolink {
  height: 53px;
  width: 105px;
  background-position: 0 -1333px;
}
/* line 357, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.vizzuality-big {
  height: 58px;
  width: 109px;
  background-position: 0 -1508px;
}
/* line 359, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .footer-logos a.vizzuality-big:hover {
  background-position: 0 -491px;
}
/* line 366, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .terms {
  text-align: center;
  padding: 1em 0;
}
/* line 369, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .terms a {
  text-decoration: none;
  color: #555555;
  font-size: 12px;
}
/* line 373, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.layout-footer .terms a:hover {
  text-decoration: underline;
}
/* line 380, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.footer-share-container {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  height: 155px;
  background: white;
  -ms-flex-pack: distribute;
  -webkit-justify-content: space-around;
  justify-content: space-around;
  -webkit-box-align: center;
  -moz-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  align-items: center;
  border-top: 1px solid #e5e5df;
  border-bottom: 1px solid #e5e5df;
  position: relative;
}
/* line 389, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.footer-share-container .footer-close {
  display: none;
  position: absolute;
  top: 0;
  right: 0;
  width: 50px;
  height: 50px;
  z-index: 2;
  color: #555555;
  background: none;
  padding: 0;
  border: none;
  font-size: 25px;
}
/* line 402, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.footer-share-container .footer-close:hover {
  color: #484848;
}
/* line 407, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.footer-share-container .footer-share {
  color: #555;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-box-orient: vertical;
  -moz-box-orient: vertical;
  -ms-flex-direction: column;
  -webkit-flex-direction: column;
  flex-direction: column;
  text-align: center;
  height: 60px;
  -webkit-box-align: center;
  -moz-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  align-items: center;
  -webkit-box-pack: justify;
  -moz-box-pack: justify;
  -ms-flex-pack: justify;
  -webkit-justify-content: space-between;
  justify-content: space-between;
}
/* line 416, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.footer-share-container .footer-share p strong {
  font-weight: bold;
}
/* line 420, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.footer-share-container .footer-share svg {
  height: 22px;
  width: 22px;
  fill: #464352;
}
/* line 425, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.footer-share-container .footer-share .fb-like {
  top: -4px;
}
/* line 430, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.footer-share-container .footer-share.keep-updated p:nth-child(2) a:nth-child(2) {
  margin: 0 30px;
}
/* line 432, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
.footer-share-container .footer-share.keep-updated p:nth-child(2) a:nth-child(2) svg {
  transform: scale(1.1);
  top: -2px;
  position: relative;
}
  /* Slider */
  /* line 40, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-slider {
    position: relative;
    display: block;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -ms-touch-action: pan-y;
    touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
  }
  /* line 55, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-list {
    position: relative;
    overflow: hidden;
    display: block;
    margin: 0;
    padding: 0;
  }
  /* line 62, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-list:focus {
    outline: none;
  }
  /* line 66, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-loading .slick-list {
    background: white url(/images/ajax-loader.gif) center center no-repeat;
  }
  /* line 70, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-list.dragging {
    cursor: pointer;
    cursor: hand;
  }
  /* line 75, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-slider .slick-track {
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  /* line 83, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-track {
    position: relative;
    left: 0;
    top: 0;
    display: block;
  }
  /* line 90, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-track:before, .slick-track:after {
    content: "";
    display: table;
  }
  /* line 95, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-track:after {
    clear: both;
  }
  /* line 99, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-loading .slick-track {
    visibility: hidden;
  }
  /* line 103, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-slide {
    float: left;
    height: 100%;
    min-height: 1px;
    display: none;
  }
  /* line 107, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  [dir="rtl"] .slick-slide {
    float: right;
  }
  /* line 110, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-slide img {
    display: block;
  }
  /* line 113, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-slide.slick-loading img {
    display: none;
  }
  /* line 119, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-slide.dragging img {
    pointer-events: none;
  }
  /* line 123, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-initialized .slick-slide {
    display: block;
  }
  /* line 127, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-loading .slick-slide {
    visibility: hidden;
  }
  /* line 131, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-vertical .slick-slide {
    display: block;
    height: auto;
    border: 1px solid transparent;
  }
  /* Icons */
  @font-face {
    font-family: "slick";
    src: url(/fonts/slick.eot);
    src: url(/fonts/slick.eot?#iefix) format("embedded-opentype"), url(/fonts/slick.woff) format("woff"), url(/fonts/slick.ttf) format("truetype"), url(/fonts/slick.svg#slick) format("svg");
    font-weight: normal;
    font-style: normal;
  }
  /* Arrows */
  /* line 155, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-prev,
  .layout-footer .slick-next {
    position: absolute;
    display: block;
    height: 50px;
    width: 50px;
    line-height: 0;
    font-size: 0;
    cursor: pointer;
    background: #E0E0D9;
    color: transparent;
    top: 50%;
    margin-top: -25px;
    padding: 0;
    border: none;
    outline: none;
    border-radius: 50%;
  }
  /* line 171, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-prev:hover, .layout-footer .slick-prev:focus,
  .layout-footer .slick-next:hover,
  .layout-footer .slick-next:focus {
    outline: none;
    background: #97bd3d;
    color: transparent;
  }
  /* line 175, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-prev:hover:before, .layout-footer .slick-prev:focus:before,
  .layout-footer .slick-next:hover:before,
  .layout-footer .slick-next:focus:before {
    opacity: 1;
  }
  /* line 179, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-prev.slick-disabled:before,
  .layout-footer .slick-next.slick-disabled:before {
    opacity: 0.25;
  }
  /* line 183, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-prev:before, .layout-footer .slick-next:before {
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
  }
  /* line 191, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-prev {
    left: -50px;
  }
  /* line 193, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-prev:before {
    background: url(http://gfw-nav.herokuapp.com/assets/svg-icons/arrow-left.svg) center no-repeat;
  }
  /* line 197, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-next {
    right: -50px;
  }
  /* line 199, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-next:before {
    background: url(http://gfw-nav.herokuapp.com/assets/svg-icons/arrow-right.svg) center no-repeat;
  }
  /* Dots */
  /* line 206, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-slider {
    margin-bottom: 0px;
  }
  /* line 209, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-dots {
    position: absolute;
    bottom: -45px;
    list-style: none;
    display: block;
    text-align: center;
    padding: 0;
    width: 100%;
  }
  /* line 218, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-dots li {
    position: relative;
    display: inline-block;
    height: 20px;
    width: 20px;
    margin: 0 5px;
    padding: 0;
    cursor: pointer;
  }
  /* line 227, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-dots li button {
    border: 0;
    background: transparent;
    display: block;
    height: 20px;
    width: 20px;
    outline: none;
    line-height: 0;
    font-size: 0;
    color: transparent;
    padding: 5px;
    cursor: pointer;
  }
  /* line 239, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-dots li button:hover, .layout-footer .slick-dots li button:focus {
    outline: none;
  }
  /* line 241, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-dots li button:hover:before, .layout-footer .slick-dots li button:focus:before {
    opacity: 1;
  }
  /* line 246, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-dots li button:before {
    position: absolute;
    top: 0;
    left: 0;
    content: "\2022";
    width: 20px;
    height: 20px;
    font-family: "slick";
    font-size: 6px;
    line-height: 20px;
    text-align: center;
    color: black;
    opacity: 0.25;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  /* line 265, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .layout-footer .slick-dots li.slick-active button:before {
    color: black;
    opacity: 0.75;
  }
  </style>
</head>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header id="headerView" class="layout-header">
  <div class="layout-header-top">
    <div class="inner">
      <nav class="first-nav">
        <div>
          <ul>
            <li class="nav-item"><a class="shape-house " href="http://gfw-nav.herokuapp.com/"><svg class="icon shape-house"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-house"></use></svg><span class="tooltip1">Home</span></a></li>
            <li class="nav-item"><a class="shape-world " href="http://gfw-nav.herokuapp.com/map"><svg class="icon shape-world"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-world"></use></svg><span class="tooltip1"><em class="mobile-hide">GFW Interactive</em> Map</span></a></li>
            <li class="nav-item"><a class="shape-country " href="http://gfw-nav.herokuapp.com/countries"><svg class="icon shape-country"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-country"></use></svg><span class="tooltip1">Country <em class="mobile-hide">profiles &amp; rankings</em></span></a></li>
            <li class="nav-item"><a class="shape-fire" href="http://staging.blueraster.com/wri/gfw-fires/#v=map&x=&y=&l=&lyrs=Active_Fires"><svg class="icon shape-fire"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-fire"></use></svg><span class="tooltip1">Fires</span></a></li>
            <li class="nav-item"><a class="shape-commodities" href="http://staging.blueraster.com/wri/gfw-commodities/#v=map&lyrs=tcc%2Closs"><svg class="icon shape-commodities"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-commodities"></use></svg><span class="tooltip1">Commodities</span></a></li>
            <li class="nav-item"><a class="shape-blog" href="http://blog.globalforestwatch.org/"><svg class="icon shape-blog"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-blog"></use></svg><span class="tooltip1">Blog</span></a></li>
          </ul>    
        </div>
        <button class="btn-menu mobile-show" id="btn-menu">
          <svg class="icon hamburguer"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-hamburger"></use></svg>
          <svg class="icon close"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-close"></use></svg>
        </button>      
      </nav>
      <nav class="second-nav mobile-hide">
        <div>  
          <ul>
            <li class="nav-item">
              <a href="http://gfw-nav.herokuapp.com/howto" class="link">
                <svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-help"></use></svg>
                <span>How to</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="http://gfw-nav.herokuapp.com/data" class="link">
                <div class="home_data link">
                  <svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-download"></use></svg>
                  <span>Download data</span>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <div class="link">
                <svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-hamburger"></use></svg>
                <span>Menu</span>
              </div>
              <ul class="submenu-tooltip top">
                <li><a href="http://gfw-nav.herokuapp.com/applications">Applications</a></li>
                <li><a href="http://gfw-nav.herokuapp.com/keepupdated">Keep updated</a></li>
                <li><a href="http://gfw-nav.herokuapp.com/getinvolved">Get involved</a></li>
                <li><a href="http://gfw-nav.herokuapp.com/howto">How to</a></li>
                <li><a href="http://gfw-nav.herokuapp.com/about">About</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <div class="link">
                <form action="http://gfw-nav.herokuapp.com/search">
                  <svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-search"></use></svg>
                  <input type="text" name="query" id="search-input" placeholder="Search GFW website">
                </form>
              </div>
            </li>
            <li id="google_translate_element_box1"><div id="google_translate_element"></div></li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <svg class="is-hidden" style="display:none">
      <!-- Commodities -->
      <symbol id="shape-commodities" viewBox="0 0 25 25">
        <path d="M 9 12 L 9 6 L 4.0951 6 L 2 10.7362 L 2 12.3678 L 2 14.1076 L 2 14.8813 L 1.303 16.0884 L 1 17 L 2.8126 17 C 2.8126 18.4816 3.605 19.9649 4.9428 19.9649 C 6.2807 19.9649 7.3653 18.4816 7.3653 17 L 16.7935 17 C 16.7935 18.4816 17.8781 19.9649 19.2159 19.9649 C 20.5538 19.9649 21.6385 18.4816 21.6385 17 L 24 17 L 24 12 L 9 12 ZM 4.2784 7 L 8 7 L 8 10 L 2.8673 10 L 4.2784 7 Z"></path>
        <path d="M 22 9 L 10 9 L 10 11 L 22 11 L 22 9 Z"></path>
      </symbol>
      <!-- Country -->
      <symbol id="shape-country" viewBox="-4 -4 68 64">
        <g>
          <path d="M 20.6438 24.29 L 15.8209 27.5601 L 15.8199 34.6431 L 13.4478 37.0303 L 13.4481 29.4268 L 15.8209 27.3539 L 15.8209 18.7083 C 21.1965 21.7839 24.7625 10.8802 34.0149 18.2052 L 34.0149 4.8955 C 24.7627 -2.4294 21.1963 8.4709 15.8209 5.397 L 15.8209 3.1515 L 15.8457 3.1515 C 16.7057 3.1515 17.4031 2.446 17.4031 1.5757 C 17.4031 0.7054 16.7057 0 15.8457 0 L 13.4231 0 C 12.563 0 11.8657 0.7054 11.8657 1.5757 C 11.8657 2.446 12.563 3.1515 13.4231 3.1515 L 13.4478 3.1515 L 13.4478 29.1711 L 10.1304 31.4205 L 0 51.7424 L 18.0991 44.4266 L 20.6438 24.29 Z"></path>
          <path d="M 32.9375 31.3567 L 22.1449 24.0503 L 19.5618 44.4913 L 36.7056 51.9279 L 32.9375 31.3567 Z"></path>
          <path d="M 42.7659 25.5846 L 34.4008 31.2482 L 38.2019 52 L 54 42.5917 L 42.7659 25.5846 Z"></path>
        </g>
      </symbol>
      <!-- Develop -->
      <symbol id="shape-develop" viewBox="0 0 25 25">
        <g>
          <path d="M 13.2204 16.4641 C 13.3931 16.6516 13.0252 17.3231 12.8785 17.5164 L 17.9667 22.7297 C 18.4057 23.1791 19.1195 23.1731 19.562 22.7172 L 21.1641 21.0658 C 21.6066 20.6098 21.6125 19.874 21.1763 19.4216 L 16.1024 14.1605 L 15.1013 15.2042 C 14.8212 15.4961 14.4401 15.6104 14.0876 15.5454 C 14.0876 15.5454 13.2648 16.3875 13.1831 16.4236 L 13.2204 16.4641 ZM 8.1833 12.7084 L 8.9826 13.5262 L 9.0353 13.4712 C 9.2188 13.2828 9.8982 12.9083 10.0814 13.1073 L 10.1974 13.2342 C 10.2334 13.149 10.9788 12.3464 10.9788 12.3464 C 10.8714 11.9392 10.9786 11.4769 11.2943 11.1531 L 12.2531 10.1686 L 11.4532 9.3381 C 11.3471 9.228 11.2255 9.144 11.0957 9.085 C 11.335 8.4846 11.4785 7.8316 11.5063 7.1447 C 11.638 3.886 9.122 1.1153 5.8938 1.0035 C 5.1565 0.9778 4.4489 1.0944 3.7959 1.3278 L 7.6174 5.1216 L 4.3725 8.5183 L 0.4395 4.5484 C 0.1652 5.2154 0.0101 5.9458 0.0005 6.7128 C -0.0394 9.9063 2.4572 12.5609 5.585 12.6872 C 6.4074 12.7204 7.1968 12.5765 7.916 12.2873 C 7.9733 12.441 8.0624 12.5845 8.1833 12.7084 Z"></path>
        </g>
        <g>
          <path d="M 21.0269 1.805 L 11.9175 11.1531 C 11.6018 11.4769 11.4947 11.9392 11.6021 12.3464 L 10.5941 13.3828 C 10.5266 13.4522 10.4742 13.5323 10.4383 13.6174 L 10.3224 13.4906 C 10.1391 13.2916 9.842 13.2828 9.6585 13.4712 L 8.9926 14.1545 C 8.8084 14.3435 8.8073 14.6592 8.9906 14.8595 L 9.4855 15.4004 L 6.5746 18.3993 L 3.9555 19.766 L 2.7294 22.4347 L 4.116 24 L 6.6564 22.7876 L 8.0297 20.0109 L 10.9404 16.9902 L 11.4401 17.5362 C 11.6258 17.7392 11.9259 17.7479 12.1102 17.5558 L 12.7761 16.8618 C 12.9596 16.6705 12.9577 16.3521 12.7721 16.1504 L 12.7348 16.1099 C 12.8164 16.0738 12.8941 16.0214 12.9616 15.9512 L 14.0215 14.8485 C 14.3741 14.9133 14.7552 14.7992 15.0352 14.5073 L 24.143 5.0149 C 24.5765 4.563 24.5761 3.8373 24.1439 3.3937 L 22.586 1.7951 C 22.1577 1.3555 21.4605 1.36 21.0269 1.805 Z"></path>
        </g>
      </symbol>
      <!-- Download -->
      <symbol id="shape-download" viewBox="0 0 25 25">
        <g>
          <g>
            <path d="M 11.0536 5 L 11.0536 10.8968 L 8 10.8968 L 12.5 17 L 17 10.8968 L 13.9464 10.8968 L 13.9464 5 L 11.0536 5 Z"></path>
          </g>
        </g>
        <path d="M 4 21 L 21 21 L 21 14 L 19 14 L 19 19 L 6 19 L 6 14 L 4 14 L 4 21 Z"></path>
      </symbol>

      <!-- Fire -->
      <symbol id="shape-fire" viewBox="0 0 25 25">
        <path d="M 4.1513 14.3746 C 4.2951 13.771 4.6617 12.8008 5.2512 11.4642 C 5.8407 10.1275 6.1642 9.0568 6.2217 8.252 C 6.7968 9.3155 7.1275 10.3791 7.2137 11.4426 C 9.3991 8.7406 10.5349 5.5931 10.6212 2 C 10.7649 2.0862 10.9519 2.2084 11.1819 2.3665 C 11.4119 2.5246 11.8361 2.8623 12.4543 3.3798 C 13.0725 3.8971 13.6189 4.4361 14.0933 4.9966 C 14.5678 5.5571 15.0135 6.2686 15.4305 7.1309 C 15.8474 7.9933 16.0989 8.8556 16.1853 9.7179 C 16.4153 9.2005 16.559 8.6256 16.6165 7.9933 C 16.6741 7.3609 16.6022 6.7716 16.4009 6.2255 C 16.6309 6.3979 16.9329 6.6854 17.3067 7.0878 C 17.6805 7.4902 18.0974 8.0364 18.5575 8.7262 C 19.0176 9.4161 19.4273 10.1491 19.7868 10.9252 C 20.1462 11.7013 20.3763 12.5708 20.4769 13.5338 C 20.5776 14.4967 20.5128 15.431 20.2828 16.3364 C 20.0528 17.2419 19.5208 18.176 18.6869 19.139 C 17.853 20.102 16.7316 20.9858 15.3226 21.7907 C 16.2715 19.8936 16.4584 17.8455 15.8833 15.6465 C 15.3082 13.4475 14.1724 11.7588 12.4759 10.5803 C 12.6197 11.2127 12.5406 12.2546 12.2386 13.7063 C 11.9367 15.1579 11.455 16.2574 10.7937 17.0047 C 10.9087 16.0849 10.9375 15.3375 10.8799 14.7626 C 10.8225 14.1877 10.7362 13.7565 10.6212 13.4691 L 10.4055 13.0811 C 10.233 14.1159 9.7873 15.1507 9.0684 16.1855 C 8.6946 16.7317 8.4142 17.2347 8.2273 17.6946 C 8.0404 18.1545 7.9685 18.7438 8.0116 19.4624 C 8.0548 20.181 8.2776 20.9571 8.6802 21.7907 C 6.6961 20.6696 5.3662 19.5342 4.6905 18.3845 C 4.0147 17.2347 3.835 15.898 4.1513 14.3746 L 4.1513 14.3746 Z"></path>
      </symbol>

      <!-- Hamburger -->
      <symbol id="shape-hamburger" viewBox="0 0 25 25">
        <g>
          <rect x="5" y="6" width="15" height="3.25" stroke="none" stroke-width="1"/>
        </g>
        <g>
          <rect x="5" y="10.875" width="15" height="3.25" stroke="none" stroke-width="1"/>
        </g>
        <g>
          <rect x="5" y="15.75" width="15" height="3.25" stroke="none" stroke-width="1"/>
        </g>
      </symbol>

      <!-- House -->
      <symbol id="shape-house" viewBox="0 0 25 25">
        <path d="M 7 12 L 7 21 L 11 21 L 11 15 L 15 15 L 15 21 L 19 21 L 19 12 L 22 12 L 13 3 L 4 12 L 7 12 Z"></path>
      </symbol>

      <!-- Map -->
      <symbol id="shape-map" viewBox="0 0 25 25">
        <g>
          <path d="M 2.3195 13.7369 C 2.8089 13.779 2.931 13.2339 3.3115 13.0829 C 3.5958 12.97 4.1204 12.9552 4.4188 13.0441 C 4.6616 13.1163 4.8429 13.2537 5.0115 13.4296 C 5.2716 13.7009 5.5631 13.9544 5.8481 14.1982 C 6.3729 14.6469 7.0793 14.7054 7.6503 15.0595 C 7.9657 15.2551 7.871 15.5145 7.6619 15.7697 C 7.3566 16.1421 7.1124 16.5083 6.8752 16.929 C 6.5498 17.5056 5.7795 17.6036 5.3411 18.0997 L 5.288 18.1646 C 4.626 17.7266 4.0238 17.2052 3.4948 16.616 L 2.3195 13.7369 ZM 6.7418 5.3446 C 6.2845 4.9581 6.4302 4.6283 6.6927 4.1843 C 7.0517 3.5768 6.8392 2.7686 6.2344 2.3757 L 9.463 1.0577 C 9.7309 1.0314 10.0024 1.0176 10.2765 1.0147 C 10.1881 1.4392 10.2171 1.8986 10.0203 2.2971 C 9.8358 2.6708 9.5559 2.9495 9.2695 3.2475 C 8.9055 3.6262 8.3678 3.8156 8.068 4.2574 C 7.814 4.6317 7.3698 5.8754 6.7418 5.3446 ZM 3.4463 9.5269 C 3.0892 9.8181 2.9987 10.232 3.2361 10.6389 C 3.3715 10.8707 3.5079 11.0679 3.1015 11.0993 C 2.9321 11.1123 2.8356 11.0371 2.6823 10.9869 C 2.4965 10.9262 2.2895 10.9117 2.0948 10.9117 C 2.0042 10.7123 2.0331 10.4302 2.027 10.2164 C 2.011 9.6627 2.025 9.1116 2.038 8.558 C 2.0469 8.1817 2.0346 7.8005 2.1108 7.4301 C 2.1663 7.1599 2.2524 6.8982 2.2841 6.623 C 2.3705 5.8737 2.7142 5.3217 3.3507 4.894 L 4.0382 5.0863 C 4.1332 5.5283 4.5069 5.73 4.8758 5.9339 C 5.1916 6.1085 5.4287 6.4842 5.6012 6.8033 C 5.7651 7.1064 5.6055 7.3168 5.319 7.4263 C 4.9515 7.5668 4.5677 7.7446 4.401 8.1275 C 4.1624 8.6755 3.9196 9.1409 3.4463 9.5269 ZM 14.9808 3.9905 L 16.3563 3.211 C 18.3748 4.9247 19.6583 7.488 19.6583 10.3541 C 19.6583 10.594 19.6464 10.8309 19.6287 11.0662 C 19.4872 10.9505 19.3326 10.8435 19.1665 10.7432 C 18.506 10.3445 17.4301 10.3765 16.7743 10.8019 C 16.8167 10.983 16.8783 11.1784 16.83 11.3669 C 16.772 11.5927 16.5606 11.6538 16.4338 11.839 C 16.2296 12.1373 16.3551 12.2693 16.511 12.5269 C 16.6047 12.6817 16.6906 12.8818 16.7196 13.0594 C 16.7741 13.3947 16.5921 13.5676 16.3558 13.7753 C 15.9958 14.0915 15.6527 14.3945 15.3987 14.8144 C 15.0192 15.4417 15.1285 16.0277 15.0585 16.7187 C 15.0051 17.2447 14.8614 17.8498 14.2406 17.8884 C 13.7784 17.917 13.3791 17.7474 13.1486 17.3513 C 12.9169 16.9533 12.742 16.5072 12.7065 16.0429 C 12.677 15.658 12.7405 15.271 12.6861 14.8864 C 12.6078 14.3335 12.2786 13.9137 11.8271 13.6146 C 11.5063 13.4022 11.2634 13.4478 10.891 13.5065 C 10.4055 13.5831 9.7577 13.5617 9.408 13.1547 C 9.1157 12.8145 9.1157 12.3358 9.1782 11.916 C 9.2282 11.5806 9.3827 11.3032 9.4774 10.9866 C 9.5338 10.7982 9.5581 10.5981 9.6169 10.4096 C 9.7095 10.1133 9.8621 9.8031 10.112 9.6076 C 10.3296 9.4374 10.6339 9.4195 10.9118 9.405 C 11.5803 9.3701 12.164 9.6729 12.8168 9.6987 C 13.3396 9.7193 14.1436 9.5524 14.4162 9.0289 C 14.542 8.787 14.6783 7.9196 14.4282 7.7038 C 14.1798 7.4895 13.6468 7.8837 13.4121 7.9755 C 12.8109 8.2106 12.2112 8.2423 11.5786 8.2058 C 11.4183 8.1965 11.2578 8.1852 11.1596 8.3539 C 11.0973 8.461 11.1339 8.6225 11.0846 8.7389 C 10.9891 8.9649 10.7449 9.1037 10.5128 9.144 C 10.1169 9.2126 9.582 9.0132 9.5789 8.5442 C 9.5751 7.9736 10.5886 8.6305 10.5163 7.9323 C 10.4526 7.3176 10.6041 6.6723 11.2961 6.6103 C 11.7716 6.5676 12.2369 6.5094 12.6292 6.2191 C 12.8746 6.0376 13.1264 5.8034 13.2979 5.5488 C 13.4316 5.3505 13.429 5.3158 13.3591 5.1247 C 13.3061 4.9798 13.0707 4.5015 12.8834 4.5119 C 12.7729 4.5181 12.7027 5.1334 12.6114 5.2592 C 12.2346 5.7784 10.5965 5.6837 11.1256 4.8932 C 11.4498 4.4088 12.0693 3.9913 12.6063 3.7973 C 12.9435 3.6755 13.1445 3.7895 13.4438 3.9742 C 13.7231 4.1465 13.9496 4.3448 14.2969 4.2836 C 14.5205 4.2442 14.8039 4.1338 14.9808 3.9905 ZM 0 10.35 C 0 16.0662 4.6036 20.7 10.2828 20.7 C 15.9619 20.7 20.5656 16.0662 20.5656 10.35 C 20.5656 4.6338 15.9619 0 10.2828 0 C 4.6036 0 0 4.6338 0 10.35 Z"></path>
        </g>
      </symbol>

      <!-- Search -->
      <symbol id="shape-search" viewBox="0 0 25 25">
        <path d="M 6.8824 12.3204 C 6.8824 9.5482 9.0388 7.1252 11.8055 6.8994 C 14.697 6.6637 17.1388 8.8989 17.1388 11.9021 C 17.1388 14.9053 14.697 17.3398 11.8055 17.3398 C 9.0388 17.3398 6.8824 15.0926 6.8824 12.3204 ZM 15.5128 18.0776 C 15.5798 18.1734 15.6593 18.2611 15.7477 18.3414 L 18.1974 20.5672 C 18.8044 21.1187 19.7969 21.1529 20.4503 20.6136 C 21.148 20.0381 21.1954 19.0397 20.5128 18.4192 L 17.7952 15.9506 C 18.6251 14.7653 19.1176 13.3269 19.1176 11.7767 C 19.1176 7.7224 15.7564 4.7047 11.7765 5.023 C 7.9683 5.3277 5 8.5989 5 12.3414 C 5 16.0838 7.9683 19.1176 11.7765 19.1176 C 13.13 19.1176 14.4105 18.7388 15.5128 18.0776 Z"></path>
      </symbol>

      <!-- Soon -->
      <symbol id="shape-soon" viewBox="0 0 25 25">
        <g>
          <path d="M 21.7648 18.6091 C 19.364 20.408 16.2264 21.9304 14.7727 22.4883 C 12.646 23.3042 6.2469 24.9124 5.9756 24.981 C 5.9628 24.9829 5.9528 24.9835 5.9402 24.9854 C 6.1008 25.006 6.2666 25.006 6.4366 24.9776 L 20.6423 22.6109 C 21.0976 22.5354 21.4968 22.2805 21.7668 21.8951 C 22.0372 21.5088 22.145 21.0381 22.0714 20.5679 L 21.7648 18.6091 Z"></path>
          <path d="M 4.2932 6.5273 C 4.3626 6.9696 4.7599 7.2799 5.2043 7.2054 C 5.4139 7.1706 5.5978 7.0537 5.7218 6.8762 C 5.8459 6.6987 5.8958 6.482 5.862 6.2658 L 5.3986 3.3059 C 5.3359 2.9065 5.0066 2.6165 4.6159 2.6165 C 4.5736 2.6165 4.5309 2.6202 4.4876 2.6273 C 4.278 2.6621 4.0946 2.779 3.9701 2.9565 C 3.846 3.134 3.7962 3.3507 3.8304 3.5669 L 4.2932 6.5273 Z"></path>
          <path d="M 13.9976 4.9103 C 14.067 5.3528 14.4662 5.6612 14.9086 5.5889 C 15.1182 5.5541 15.3016 5.4369 15.4261 5.2594 C 15.5502 5.0819 15.6001 4.8655 15.5659 4.6493 L 15.1025 1.6891 C 15.0402 1.2897 14.7114 1 14.3203 1 C 14.278 1 14.2352 1.0034 14.1919 1.0108 C 13.9824 1.0456 13.7985 1.1625 13.6744 1.34 C 13.5504 1.5175 13.5005 1.7342 13.5342 1.9504 L 13.9976 4.9103 Z"></path>
          <path d="M 23.4567 14.2103 C 23.3906 14.1141 22.904 14.1024 22.6702 14.0965 C 22.0538 14.0818 21.2868 14.0631 20.8914 13.416 C 19.8667 11.7396 18.6891 5.2202 18.6392 4.9437 C 18.5014 4.0641 17.7857 3.4341 16.935 3.4341 C 16.8433 3.4341 16.7506 3.4417 16.657 3.4574 L 16.3728 3.5047 L 16.5268 4.4889 C 16.6023 4.9697 16.4916 5.4521 16.2151 5.8473 C 15.9389 6.2422 15.5297 6.5026 15.0635 6.5803 C 14.9685 6.596 14.8739 6.6038 14.7803 6.6038 C 13.9097 6.6038 13.1763 5.9591 13.0366 5.0707 L 12.8827 4.0861 L 6.669 5.1212 L 6.8229 6.1057 C 6.898 6.5867 6.7873 7.0691 6.5107 7.464 C 6.2346 7.859 5.8254 8.1193 5.3592 8.1968 C 5.2642 8.2127 5.1696 8.2203 5.076 8.2203 C 4.2049 8.2203 3.472 7.5756 3.3323 6.6874 L 3.1783 5.7026 L 2.4517 5.8238 C 1.5117 5.9804 0.8706 6.897 1.0222 7.8668 L 3.3162 22.5227 C 3.4668 23.4841 4.336 24.1573 5.2965 23.9975 C 5.325 23.9886 11.8737 22.3432 13.9467 21.547 C 16.9426 20.3978 22.6578 17.1721 23.3816 14.8363 C 23.5104 14.4201 23.4795 14.2436 23.4567 14.2103 Z"></path>
        </g>
      </symbol>

      <!-- World -->
      <symbol id="shape-world" viewBox="0 0 25 25">
        <path d="M 4.3195 15.7369 C 4.8089 15.779 4.931 15.2339 5.3115 15.0829 C 5.5958 14.97 6.1204 14.9552 6.4188 15.0441 C 6.6616 15.1163 6.8429 15.2537 7.0115 15.4296 C 7.2716 15.7009 7.5631 15.9544 7.8481 16.1982 C 8.3729 16.6469 9.0793 16.7054 9.6503 17.0595 C 9.9657 17.2551 9.871 17.5145 9.6619 17.7697 C 9.3566 18.1421 9.1124 18.5083 8.8752 18.929 C 8.5498 19.5056 7.7795 19.6036 7.3411 20.0997 L 7.288 20.1646 C 6.626 19.7266 6.0238 19.2052 5.4948 18.616 L 4.3195 15.7369 ZM 8.7418 7.3446 C 8.2845 6.9581 8.4302 6.6283 8.6927 6.1843 C 9.0517 5.5768 8.8392 4.7686 8.2344 4.3757 L 11.463 3.0577 C 11.7309 3.0314 12.0024 3.0176 12.2765 3.0147 C 12.1881 3.4392 12.2171 3.8986 12.0203 4.2971 C 11.8358 4.6708 11.5559 4.9495 11.2695 5.2475 C 10.9055 5.6262 10.3678 5.8156 10.068 6.2574 C 9.814 6.6317 9.3698 7.8754 8.7418 7.3446 ZM 5.4463 11.5269 C 5.0892 11.8181 4.9987 12.232 5.2361 12.6389 C 5.3715 12.8707 5.5079 13.0679 5.1015 13.0993 C 4.9321 13.1123 4.8356 13.0371 4.6823 12.9869 C 4.4965 12.9262 4.2895 12.9117 4.0948 12.9117 C 4.0042 12.7123 4.0331 12.4302 4.027 12.2164 C 4.011 11.6627 4.025 11.1116 4.038 10.558 C 4.0469 10.1817 4.0346 9.8005 4.1108 9.4301 C 4.1663 9.1599 4.2524 8.8982 4.2841 8.623 C 4.3705 7.8737 4.7142 7.3217 5.3507 6.894 L 6.0382 7.0863 C 6.1332 7.5283 6.5069 7.73 6.8758 7.9339 C 7.1916 8.1085 7.4287 8.4842 7.6012 8.8033 C 7.7651 9.1064 7.6055 9.3168 7.319 9.4263 C 6.9515 9.5668 6.5677 9.7446 6.401 10.1275 C 6.1624 10.6755 5.9196 11.1409 5.4463 11.5269 ZM 16.9808 5.9905 L 18.3563 5.211 C 20.3748 6.9247 21.6583 9.488 21.6583 12.3541 C 21.6583 12.594 21.6464 12.8309 21.6287 13.0662 C 21.4872 12.9505 21.3326 12.8435 21.1665 12.7432 C 20.506 12.3445 19.4301 12.3765 18.7743 12.8019 C 18.8167 12.983 18.8783 13.1784 18.83 13.3669 C 18.772 13.5927 18.5606 13.6538 18.4338 13.839 C 18.2296 14.1373 18.3551 14.2693 18.511 14.5269 C 18.6047 14.6817 18.6906 14.8818 18.7196 15.0594 C 18.7741 15.3947 18.5921 15.5676 18.3558 15.7753 C 17.9958 16.0915 17.6527 16.3945 17.3987 16.8144 C 17.0192 17.4417 17.1285 18.0277 17.0585 18.7187 C 17.0051 19.2447 16.8614 19.8498 16.2406 19.8884 C 15.7784 19.917 15.3791 19.7474 15.1486 19.3513 C 14.9169 18.9533 14.742 18.5072 14.7065 18.0429 C 14.677 17.658 14.7405 17.271 14.6861 16.8864 C 14.6078 16.3335 14.2786 15.9137 13.8271 15.6146 C 13.5063 15.4022 13.2634 15.4478 12.891 15.5065 C 12.4055 15.5831 11.7577 15.5617 11.408 15.1547 C 11.1157 14.8145 11.1157 14.3358 11.1782 13.916 C 11.2282 13.5806 11.3827 13.3032 11.4774 12.9866 C 11.5338 12.7982 11.5581 12.5981 11.6169 12.4096 C 11.7095 12.1133 11.8621 11.8031 12.112 11.6076 C 12.3296 11.4374 12.6339 11.4195 12.9118 11.405 C 13.5803 11.3701 14.164 11.6729 14.8168 11.6987 C 15.3396 11.7193 16.1436 11.5524 16.4162 11.0289 C 16.542 10.787 16.6783 9.9196 16.4282 9.7038 C 16.1798 9.4895 15.6468 9.8837 15.4121 9.9755 C 14.8109 10.2106 14.2112 10.2423 13.5786 10.2058 C 13.4183 10.1965 13.2578 10.1852 13.1596 10.3539 C 13.0973 10.461 13.1339 10.6225 13.0846 10.7389 C 12.9891 10.9649 12.7449 11.1037 12.5128 11.144 C 12.1169 11.2126 11.582 11.0132 11.5789 10.5442 C 11.5751 9.9736 12.5886 10.6305 12.5163 9.9323 C 12.4526 9.3176 12.6041 8.6723 13.2961 8.6103 C 13.7716 8.5676 14.2369 8.5094 14.6292 8.2191 C 14.8746 8.0376 15.1264 7.8034 15.2979 7.5488 C 15.4316 7.3505 15.429 7.3158 15.3591 7.1247 C 15.3061 6.9798 15.0707 6.5015 14.8834 6.5119 C 14.7729 6.5181 14.7027 7.1334 14.6114 7.2592 C 14.2346 7.7784 12.5965 7.6837 13.1256 6.8932 C 13.4498 6.4088 14.0693 5.9913 14.6063 5.7973 C 14.9435 5.6755 15.1445 5.7895 15.4438 5.9742 C 15.7231 6.1465 15.9496 6.3448 16.2969 6.2836 C 16.5205 6.2442 16.8039 6.1338 16.9808 5.9905 ZM 2 12.35 C 2 18.0662 6.6036 22.7 12.2828 22.7 C 17.9619 22.7 22.5656 18.0662 22.5656 12.35 C 22.5656 6.6338 17.9619 2 12.2828 2 C 6.6036 2 2 6.6338 2 12.35 Z"></path>
      </symbol>

      <!-- Blog -->
      <symbol id="shape-blog" viewBox="0 0 25 25">
        <path d="M 20 6 L 20 4 L 2 4 L 2 17.5385 C 2 17.5385 2 20 4.5 20 L 20.125 20 C 20.125 20 22 19.9619 22 17.5385 L 22 6 L 20 6 ZM 4.25 19 C 3 19 3 17.7692 3 17.7692 L 3 5 L 19 5 L 19 17.5385 C 19 18.1052 19.1776 18.7281 19.4224 19 L 4.25 19 ZM 12 13 L 12 14 L 17 14 L 17 13 L 12 13 ZM 5 8 L 17 8 L 17 7 L 5 7 L 5 8 ZM 12 16 L 16 16 L 16 15 L 12 15 L 12 16 ZM 12 12 L 17 12 L 17 11 L 12 11 L 12 12 ZM 12 10 L 17 10 L 17 9 L 12 9 L 12 10 ZM 5 16 L 11 16 L 11 9 L 5 9 L 5 16 Z"></path>
      </symbol>

      <!-- Arrows -->
      <symbol id="shape-arrow-up" viewBox="0 0 26 15">
        <path d="M 2 13 L 13 2 L 24 13 " stroke-width="2" fill="none"/>
      </symbol>
      <symbol id="shape-arrow-right" viewBox="0 0 15 26">
        <path d="M 3 2 L 14 13 L 3 24 " stroke-width="2" fill="none"/>
      </symbol>
      <symbol id="shape-arrow-down" viewBox="0 0 26 15">
        <path d="M 24 2 L 13 13 L 2 2 " stroke-width="2" fill="none"/>
      </symbol>
      <symbol id="shape-arrow-left" viewBox="0 0 15 26">
        <path d="M 13 24 L 2 13 L 13 2 " stroke-width="2" fill="none"/>
      </symbol>

      <!-- Spinner -->
      <symbol id="shape-spinner" viewBox="0 0 512 512">
        <path d="M480,288h-64c-17.688,0-32-14.312-32-32c0-17.688,14.312-32,32-32h64c17.688,0,32,14.312,32,32  C512,273.688,497.688,288,480,288z M391.75,165.5c-12.5,12.5-32.75,12.5-45.25,0s-12.5-32.75,0-45.25L391.75,75  c12.5-12.5,32.75-12.5,45.25,0s12.5,32.75,0,45.25L391.75,165.5z M256,512c-17.688,0-32-14.312-32-32v-64c0-17.688,14.312-32,32-32  c17.688,0,32,14.312,32,32v64C288,497.688,273.688,512,256,512z M256,128c-17.688,0-32-14.312-32-32V32c0-17.688,14.312-32,32-32  c17.688,0,32,14.312,32,32v64C288,113.688,273.688,128,256,128z M120.25,437c-12.5,12.5-32.75,12.5-45.25,0  c-12.5-12.469-12.5-32.75,0-45.25l45.25-45.25c12.5-12.5,32.75-12.5,45.25,0s12.5,32.75,0,45.25L120.25,437z M120.25,165.5  L75,120.25C62.5,107.75,62.5,87.5,75,75s32.75-12.5,45.25,0l45.25,45.25c12.5,12.5,12.5,32.75,0,45.25S132.75,178,120.25,165.5z   M128,256c0,17.688-14.312,32-32,32H32c-17.688,0-32-14.312-32-32c0-17.688,14.312-32,32-32h64C113.688,224,128,238.312,128,256z   M391.75,346.5L437,391.75c12.5,12.5,12.5,32.781,0,45.25c-12.5,12.5-32.75,12.5-45.25,0l-45.25-45.25  c-12.5-12.5-12.5-32.75,0-45.25S379.25,334,391.75,346.5z"></path>
      </symbol>

      <!-- Close -->
      <symbol id="shape-close" viewBox="0 0 25 25">
        <path d="M 5 19 L 19 5 L 21 7 L 7 21 L 5 19 ZM 7 5 L 21 19 L 19 21 L 5 7 L 7 5 Z"></path>
      </symbol>

      <symbol id="shape-fast-forward-up" viewBox="0 0 11 12">
        <path d="M 1 11 L 5.5 6 L 10 11 " stroke="#76767d" stroke-width="1" fill="none"></path>
        <path d="M 1 6 L 5.5 1 L 10 6 " stroke="#76767d" stroke-width="1" fill="none"></path>
      </symbol>
      <symbol id="shape-fast-forward-left" viewBox="0 0 12 11">
        <path d="M 11 10 L 6 5.5 L 11 1 " stroke="#76767d" stroke-width="1" fill="none"></path>
        <path d="M 6 10 L 1 5.5 L 6 1 " stroke="#76767d" stroke-width="1" fill="none"></path>
      </symbol>



      <symbol id="shape-instagram" viewBox="0 0 512 512">
        <path d="M480,0H32C14.312,0,0,14.312,0,32v448c0,17.688,14.312,32,32,32h448c17.688,0,32-14.312,32-32V32  C512,14.312,497.688,0,480,0z M192,256c0,0,5.062-64,64-64c58.938,0,64,64,64,64s1.844,64-64,64C190.156,320,192,256,192,256z   M448,448H64V224h64h4.53c-2.655,10.281-4.53,20.875-4.53,32c0,70.688,57.312,128,128,128c70.688,0,128-57.312,128-128  c0-11.125-1.875-21.719-4.531-32H384h64V448z M448,160h-96V64h96V160z"></path>
      </symbol>

      <symbol id="shape-twitter" viewBox="4 4 48 48">
        <path d="M52.837,15.065c-1.811,0.805-3.76,1.348-5.805,1.591c2.088-1.25,3.689-3.23,4.444-5.592c-1.953,1.159-4.115,2-6.418,2.454  c-1.843-1.964-4.47-3.192-7.377-3.192c-5.581,0-10.106,4.525-10.106,10.107c0,0.791,0.089,1.562,0.262,2.303  c-8.4-0.422-15.848-4.445-20.833-10.56c-0.87,1.492-1.368,3.228-1.368,5.082c0,3.506,1.784,6.6,4.496,8.412  c-1.656-0.053-3.215-0.508-4.578-1.265c-0.001,0.042-0.001,0.085-0.001,0.128c0,4.896,3.484,8.98,8.108,9.91  c-0.848,0.23-1.741,0.354-2.663,0.354c-0.652,0-1.285-0.063-1.902-0.182c1.287,4.015,5.019,6.938,9.441,7.019  c-3.459,2.711-7.816,4.327-12.552,4.327c-0.815,0-1.62-0.048-2.411-0.142c4.474,2.869,9.786,4.541,15.493,4.541  c18.591,0,28.756-15.4,28.756-28.756c0-0.438-0.009-0.875-0.028-1.309C49.769,18.873,51.483,17.092,52.837,15.065z"></path>
      </symbol>

      <symbol id="shape-mail" viewBox="0 0 16 16">
        <g fill-rule="evenodd" id="Icons with numbers" stroke="none" stroke-width="1">
          <g id="Group" transform="translate(-384.000000, 0.000000)"><path d="M393.731959,11.4845362 L398.681755,15.7272182 C398.501681,15.8954635 398.259495,16 397.993155,16 L386.006845,16 C385.739189,16 385.496237,15.8970552 385.316068,15.7290845 L390.268041,11.4845362 L392,13.0000001 Z M392,12 L385,6 L392,0 L399,6 Z M399,15.1856084 L394.167358,11.0788577 L399,6.875422 L399,15.1856084 L399,15.1856084 Z M385,15.1856079 L385,6.87815189 L389.832642,11.0788574 L385,15.1856079 L385,15.1856079 Z M385,15.1856079"></path></g>
        </g>
      </symbol>

      <symbol id="shape-carbon" viewBox="0 0 24 40">
        <path d="M 13.0261 0 C 13.2986 0.2155 13.608 0.4348 13.8889 0.6853 C 18.1848 4.515 21.9324 14.4971 18.2307 21.8433 C 17.1406 24.0067 15.4537 25.728 13.512 27.2003 C 12.0095 28.3392 10.4614 29.426 9.052 30.6564 C 6.4963 32.8876 5.8309 35.7672 7.0615 38.8962 C 7.4329 38.3276 7.765 37.8108 8.1051 37.2985 C 10.2017 34.1414 13.0007 32.0007 17.0349 31.5745 C 18.4011 31.4303 19.7637 31.1517 20.9355 30.2789 C 18.5017 30.6986 16.1128 31.0354 13.7686 31.537 C 11.6243 31.9957 10.0725 33.3881 8.6702 34.9514 C 8.876 32.4525 11.5476 29.7017 14.3945 29.2104 C 15.8506 28.9596 17.3519 28.9222 18.8376 28.8177 C 20.4866 28.7014 22.0706 28.4404 23.5 27.2344 C 23.4224 28.1647 23.4608 29.1221 23.2432 30.0176 C 22.7566 32.0205 21.77 33.7867 20.2576 35.2372 C 18.4996 36.9231 16.3359 37.4685 13.9102 37.2513 C 12.991 37.1689 12.0723 37.035 11.1539 37.0161 C 9.1284 36.9745 7.8578 37.8643 7.0635 40 C 6.7218 39.592 6.3489 39.3354 6.2588 39.0106 C 4.9172 34.175 4.2478 29.2926 5.2065 24.2935 C 5.8359 21.0115 7.4473 18.2306 9.4954 15.6211 C 11.2239 13.4189 13.0159 11.2307 13.7437 8.438 C 13.9451 7.6648 14.0442 6.8645 14.0682 6.0359 C 12.96 10.179 10.0137 13.1125 7.3734 16.1934 C 3.7881 20.3766 2.5974 25.2191 2.9514 30.5403 C 2.9659 30.7567 2.9854 30.9728 2.8386 31.2524 C 2.4961 30.5148 2.0885 29.7975 1.8207 29.0356 C 0.4587 25.1591 -0.2253 21.1941 1.646 17.3783 C 2.6226 15.3866 4.0957 13.5973 5.5293 11.8538 C 7.2212 9.7955 9.1844 7.9445 10.9041 5.8879 C 12.1702 4.3738 12.8789 2.5651 12.8054 0.5276 C 12.8007 0.4004 12.8301 0.2716 12.8516 0.1448 C 12.8553 0.1215 12.8975 0.1044 13.0261 0 Z"></path>
      </symbol>
      <symbol id="shape-biodiversity" viewBox="0 0 45 47">
        <g>
        <path d="M 19.9235 0 C 20.2219 0.5747 20.6204 1.0623 21.0606 1.5248 C 21.4522 1.9363 21.9307 2.0657 22.4443 2.1218 C 22.6776 2.1475 22.9181 2.1505 23.1509 2.1221 C 24.416 1.9681 25.6501 2.3438 26.9073 2.3724 C 27.296 2.3815 27.713 2.5511 28.1342 2.5732 C 28.2341 2.5785 28.3255 2.7593 28.4261 2.8647 C 27.9007 3.5364 27.1884 3.7899 26.3982 3.8197 C 25.9158 3.8378 25.4102 3.9332 24.9664 3.6145 C 24.6068 3.8173 24.3286 3.1995 23.8857 3.5488 C 23.6459 3.7382 23.1848 3.6183 22.7852 3.64 C 22.8288 3.8765 22.5267 4.2153 23.0289 4.2524 C 23.1107 4.5553 23.5889 4.7574 23.211 5.1913 C 23.1323 5.2815 23.1974 5.5929 23.286 5.7445 C 23.4957 6.1035 23.3373 6.3268 23.0527 6.5975 C 22.8814 6.2025 22.7329 5.8286 22.3429 5.5823 C 22.0158 5.3757 21.9419 4.8708 21.5115 4.6528 C 21.1232 4.4562 20.7784 4.1492 20.3694 3.9584 C 20.2156 3.8868 20.1169 3.7482 19.9449 3.9053 C 19.8766 3.9678 19.7717 4.0458 19.6973 4.0322 C 18.8403 3.8768 18.1855 4.4883 17.422 4.6815 C 17.2421 4.7269 17.0728 4.88 16.8987 4.88 C 15.9768 4.8805 15.0882 5.1987 14.1514 5.1194 C 13.2477 5.0431 12.3335 5.1029 11.4238 5.1029 C 11.298 5.1029 11.1721 5.1029 11.0497 5.1029 C 11.0203 4.782 10.8477 4.4531 11.3187 4.4604 C 11.8474 3.9291 12.6256 4.0122 13.2086 3.6145 C 13.7003 4.0043 14.0231 3.2886 14.4729 3.4019 C 14.9455 3.521 15.3556 3.2419 15.7909 3.1477 C 16.2424 3.0498 16.6627 2.802 17.1047 2.6444 C 17.6071 2.4653 18.1798 2.5203 18.6251 2.1346 C 18.6658 2.0995 18.8257 2.1532 18.8843 2.2145 C 19.2211 2.5656 19.3286 2.1543 19.5684 1.9838 C 19.2828 1.5458 18.9973 1.1077 18.694 0.6421 C 18.8278 0.4373 18.9705 0.2188 19.1131 0 C 19.3832 0 19.6534 0 19.9235 0 Z"></path>
        <path d="M 11.1394 40.6176 C 11.6206 40.6176 12.0081 40.6176 12.5897 40.6176 C 12.1729 40.2672 11.9108 40.0468 11.6492 39.8268 C 11.8657 39.5999 12.3016 39.9518 12.5123 39.5657 C 12.801 40.0438 13.0673 39.5234 13.3504 39.5383 C 13.8999 39.5667 14.4136 39.3716 14.922 39.1696 C 15.0397 39.1227 15.179 39.1259 15.3087 39.1239 C 17.476 39.0923 19.6345 38.7762 21.8067 38.9088 C 22.1281 38.9282 22.4321 38.9083 22.747 39.1013 C 23.0029 39.2582 23.414 38.9735 23.6661 39.3298 C 24.5266 39.4352 25.3441 39.8275 26.23 39.7579 C 26.4509 39.7405 26.6538 39.7318 26.8859 39.6224 C 27.1953 39.4767 27.6763 39.4203 27.9535 39.5776 C 28.4907 39.8828 28.9313 39.6412 29.4227 39.5562 C 30.2415 39.4142 30.9913 39.0923 31.717 38.6945 C 32.0531 38.5101 32.1482 38.272 32.0628 37.9374 C 31.8835 37.235 31.9468 37.0435 32.5137 36.5708 L 33.3098 37.5449 C 33.429 37.6703 33.6457 37.792 33.65 37.9215 C 33.6639 38.3561 34.047 38.3132 34.2502 38.4664 C 34.4664 38.6296 34.822 38.5875 35.0415 38.748 C 35.4686 39.0604 35.9139 39.1787 36.4163 39.1216 C 36.6985 39.0895 36.9525 39.123 37.1525 39.4888 C 36.756 39.7201 36.3587 39.9559 35.9561 40.1815 C 35.9035 40.2108 35.7881 40.2156 35.7611 40.1809 C 35.5071 39.8546 35.2173 40.2529 34.9367 40.119 C 34.5973 39.957 34.1494 39.9703 33.88 39.7391 C 33.4282 39.3512 33.1024 39.6938 32.884 39.9078 C 32.2375 40.542 31.5072 41.0532 30.8307 41.637 C 30.3277 42.0713 29.7698 42.3965 29.2205 42.7158 C 28.2955 43.2534 27.3864 43.8749 26.296 44.0216 C 26.007 44.4298 25.5309 44.0857 25.127 44.3214 C 25.2314 44.4916 25.2863 44.6642 25.4004 44.754 C 26.3402 45.4952 27.4633 45.8481 28.5266 46.3219 C 28.784 46.4365 29.1352 46.4028 29.4236 46.3391 C 29.9097 46.2316 30.3005 46.5861 30.76 46.5791 C 30.799 46.5784 30.8411 46.7894 30.9132 46.9894 C 29.9867 46.9894 29.1495 47.0182 28.3151 46.9811 C 27.5316 46.9462 26.7511 46.8416 25.9036 46.7616 C 25.7525 46.5636 25.5656 46.3185 25.4979 46.2299 C 24.8369 46.0065 24.2994 46.38 23.8691 45.931 C 23.8111 45.8708 23.6571 45.907 23.606 45.8452 C 23.4645 45.6747 23.3854 45.3574 23.2255 45.3108 C 22.7639 45.1765 22.2668 45.1823 21.7982 45.0675 C 21.0814 44.8916 20.3345 44.9528 19.6241 44.6809 C 19.2137 44.5237 18.717 44.7539 18.2934 44.4504 C 18.1782 44.3679 17.9166 44.5088 17.8032 44.4254 C 17.0375 43.8634 16.0931 43.7957 15.2755 43.3806 C 14.6584 43.0675 13.9785 42.8749 13.3959 42.507 C 12.6888 42.0609 11.8859 41.7458 11.3361 41.0529 C 11.2635 40.9612 11.2341 40.8319 11.1394 40.6176 Z"></path>
        <path d="M 39.9584 37.9648 C 39.5916 37.7479 39.2842 37.6591 39.1125 37.4487 C 38.3786 36.5488 37.3207 36.1113 36.4869 35.3591 C 36.3715 35.255 36.1921 35.2291 36.0773 35.1248 C 35.8482 34.9165 35.6436 34.6792 35.4274 34.4524 C 35.3563 34.5194 35.2852 34.5865 35.196 34.6704 C 35.1523 34.5376 35.1117 34.4141 35.0594 34.2555 C 34.6058 34.1705 34.0978 34.3369 33.6501 34.0353 C 33.5731 33.9833 33.3423 34.1051 33.2299 34.2053 C 33.0008 34.4093 32.8041 34.653 32.4994 34.9832 C 32.5126 34.6716 32.4603 34.4447 32.5407 34.2975 C 32.7412 33.9297 33.1309 33.7898 33.4697 33.5961 C 33.4957 33.5814 33.5369 33.599 33.5699 33.5933 C 33.851 33.5457 34.2207 33.7512 34.3871 33.3828 C 34.4925 33.1497 34.4612 32.8517 34.5107 32.5869 C 34.6393 31.9005 34.694 31.1809 34.9379 30.5417 C 35.1746 29.9218 35.5966 29.3934 36.2432 29.1001 C 36.902 28.8013 37.5291 28.423 38.1618 28.0629 C 38.5767 27.8269 38.986 27.576 39.3782 27.3013 C 39.5371 27.1901 39.7162 27.0179 39.7625 26.8383 C 39.9263 26.2015 40.1904 25.5955 40.3455 24.9709 C 40.4542 24.5334 40.5617 24.0452 40.5699 23.5815 C 40.5847 22.7482 41.0029 22.2396 41.6674 21.9629 C 41.9709 21.8365 42.237 21.7158 42.5094 21.5145 C 42.7986 21.3013 43.1879 21.1053 43.6589 21.3687 C 43.45 21.7289 43.2433 22.0858 42.9762 22.5472 C 43.2859 22.4902 43.5359 22.4442 43.8062 22.3947 C 43.9267 22.803 43.5284 22.896 43.363 23.116 C 43.1639 23.3802 43.1661 23.6003 43.3532 23.8484 C 44.2841 25.0817 44.3871 25.9343 44.0704 27.5325 C 43.9645 28.0677 43.8038 28.5632 43.5837 29.0256 C 43.4716 29.2614 43.4272 29.4642 43.4227 29.701 C 43.4069 30.5454 43.4486 30.5992 44.2449 30.6138 C 44.6636 30.6217 44.6631 30.6138 45 31.0254 C 44.8541 30.9694 44.697 30.8463 44.5642 30.8704 C 44.1692 30.9419 43.78 31.0588 43.3954 31.1815 C 43.0436 31.2937 42.767 31.5167 42.6108 31.8812 C 42.5212 32.0903 42.4239 32.2957 42.3335 32.5046 C 42.0057 33.2617 41.4702 33.6632 40.6549 33.5957 C 40.5238 33.585 40.3912 33.5942 40.1376 33.5942 C 40.3233 33.3635 40.5048 33.22 40.5714 33.0319 C 40.637 32.8473 40.5857 32.6174 40.5857 32.3502 C 39.7275 32.2662 38.9143 32.2837 38.1343 32.7329 C 37.8389 32.9031 37.389 32.8542 37.1713 33.0784 C 36.8697 33.3885 36.908 33.8953 36.9501 34.375 C 37.4633 34.4873 38.0049 34.5549 38.5122 34.7316 C 39.0151 34.9063 39.554 35.0519 39.9257 35.5078 C 40.6139 35.4709 40.7455 36.1693 41.133 36.5541 C 40.8663 36.4889 40.5966 36.3623 40.3337 36.3766 C 40.0988 36.3892 39.8716 36.557 39.6361 36.6584 C 39.7231 37.0112 39.8192 37.4004 39.9584 37.9648 Z"></path>
        <path d="M 4.0361 29.1775 C 4.0966 28.9973 4.1295 28.8698 4.1828 28.7528 C 4.2104 28.6927 4.2747 28.651 4.3332 28.5895 C 4.1172 28.3682 3.9282 28.1022 3.6791 27.9354 C 3.2653 27.6588 3.322 27.1615 3.1245 26.7871 C 3.0054 26.5615 3.2502 26.2135 3.4844 26.1525 C 3.8195 26.0651 4.3121 26.2551 4.52 26.6288 C 4.7515 27.0448 5.23 27.23 5.3751 27.7455 C 5.4158 27.8906 5.8154 27.9247 6.0927 28.0251 C 6.3724 27.3783 7.0699 27.41 7.6259 27.2469 C 8.0406 27.125 8.6041 27.1509 8.9715 27.3611 C 9.4567 27.639 10.0735 27.917 10.147 28.6984 C 9.2489 28.4122 8.3737 28.2629 7.5886 28.9734 C 8.1734 29.7552 8.7308 30.5367 9.328 31.283 C 9.6087 31.6338 9.6923 32.0399 9.8412 32.4436 C 10.1426 33.2603 10.2438 34.0846 10.1924 34.9403 C 10.1832 35.0931 10.0461 35.2338 10.016 35.3901 C 9.9718 35.6204 9.9255 35.8326 9.8345 36.0562 C 9.7609 36.2367 10.0452 36.567 10.1486 36.8401 C 10.3177 37.2864 10.469 37.7405 10.6748 38.3253 C 10.2145 37.8812 9.7947 37.2216 9.5444 36.6064 C 9.2686 36.6064 8.9733 36.6064 8.6415 36.6064 C 8.6276 36.661 8.5694 36.7626 8.586 36.8483 C 8.6357 37.1058 8.7938 37.3695 8.7599 37.6072 C 8.7255 37.8475 8.5048 38.0551 8.3791 38.2852 C 8.2706 38.4839 8.2079 38.7166 8.0737 38.8911 C 7.9846 39.0071 7.7781 39.1366 7.6724 39.1008 C 7.4829 39.0377 7.2834 38.8871 7.1733 38.7133 C 7.0379 38.4998 6.9232 38.2688 6.9454 37.9594 C 6.9906 37.326 6.959 36.6869 6.959 36.0101 C 6.4257 35.7815 5.8322 35.6139 5.3816 35.2076 C 5.1228 34.9745 4.7371 34.793 4.7266 34.3342 C 4.3545 34.2329 4.2183 33.9088 4.0045 33.6121 C 3.5117 32.9283 3.2872 32.1973 3.3112 31.3582 C 3.3201 31.0486 3.3127 30.7384 3.3127 30.3033 C 2.5259 31.1138 1.8563 31.8132 1.6516 32.8727 C 1.5994 33.1428 1.3529 33.3717 1.1924 33.625 C 0.8329 33.5193 0.647 33.3435 0.6741 32.9556 C 0.6985 32.6035 0.6529 32.2454 0.6868 31.895 C 0.7187 31.5668 0.7677 31.2245 0.8904 30.9248 C 1.2834 29.9655 1.7931 29.0726 2.8058 28.7386 C 3.051 28.6576 3.3952 28.8951 3.6902 28.9977 C 3.8017 29.0364 3.9033 29.1071 4.0361 29.1775 Z"></path>
        <path d="M 26.7119 26.3666 C 26.957 25.8512 27.2033 25.2629 26.9691 24.7745 C 26.7047 24.2228 26.8259 23.8069 27.0246 23.3108 C 26.6332 22.8976 26.3568 22.436 26.3915 21.7919 C 26.4158 21.344 25.8484 20.309 25.3337 19.6022 C 25.2597 19.5004 25.2095 19.3796 25.0785 19.1404 C 25.8032 19.4572 26.2166 19.9508 26.6926 20.3706 C 27.2186 20.8346 27.3422 21.5148 27.6403 22.0547 C 28.3487 21.6515 29.0282 21.2605 29.7131 20.8802 C 29.7933 20.8358 29.9058 20.8276 29.9987 20.8405 C 30.8157 20.9526 31.3738 20.5107 31.8799 19.8516 C 31.7919 19.2241 31.9437 18.5548 31.713 17.8567 C 31.5769 17.4447 31.4579 16.8065 31.9637 16.3883 C 32.5548 16.8817 32.9315 17.5044 33.1024 18.29 C 33.1771 18.6337 33.3505 18.9666 33.5374 19.264 C 33.6293 19.4105 33.8463 19.4843 34.0196 19.5577 C 34.811 19.8944 35.609 20.1937 36.249 20.8428 C 37.1385 21.7445 37.603 22.8048 37.5453 24.1379 C 37.8783 24.438 38.1477 24.7831 38.2643 25.2863 C 38.3757 25.7675 38.4435 25.75 38.9974 26.0559 C 38.189 26.3892 37.6132 25.9844 37.0176 25.4979 C 36.7209 25.8229 36.4116 26.1436 36.1223 26.4825 C 35.6494 27.0371 34.994 27.1718 34.4147 26.9675 C 33.6796 26.7081 32.8738 26.4698 32.3887 25.7087 C 31.9698 26.5371 31.3909 27.1367 30.46 27.4175 C 30.574 26.4644 30.6989 25.5562 31.512 24.9573 C 31.4128 24.759 31.3449 24.6115 31.2666 24.47 C 30.9517 23.9009 30.4435 23.6237 29.9064 23.8906 C 29.4209 24.1322 29.0931 24.0597 28.7911 23.6548 C 28.5439 23.3231 28.227 23.3575 27.8179 23.4336 C 27.8757 24.5684 27.7607 25.6735 26.7119 26.3666 Z"></path>
        <path d="M 11.4154 14.4583 C 11.3282 14.3875 11.243 14.2589 11.1533 14.2551 C 10.6531 14.2352 10.1518 14.2456 9.5192 14.2456 C 9.6389 14.0427 9.6915 13.8507 9.7723 13.8368 C 9.9595 13.8043 10.2183 13.7832 10.344 13.8912 C 10.6938 14.1912 11.0387 13.933 11.4446 14.0798 C 11.2057 13.6499 10.5977 13.7976 10.6085 13.0762 C 11.1427 13.4752 11.5608 13.8153 12.0077 14.1068 C 12.171 14.213 12.4026 14.2034 12.7385 14.2756 C 11.7169 13.1672 11.3291 12.984 9.9734 12.9437 C 10.0419 12.7865 10.0963 12.5614 10.1471 12.5621 C 10.4188 12.5668 10.6896 12.6277 11.0331 12.6803 C 10.8618 12.2749 10.8568 11.783 10.2919 11.671 C 10.2467 11.6622 10.1902 11.4828 10.2124 11.4063 C 10.2308 11.3425 10.3574 11.3132 10.4362 11.269 C 10.5432 11.5378 11.0601 11.1128 11.0433 11.7225 C 11.0338 12.0668 11.3397 12.4325 11.5392 12.765 C 11.6089 12.8811 11.7852 12.9266 12.0087 12.9006 C 11.8846 12.7399 11.7607 12.5791 11.6179 12.3943 C 11.7226 12.3656 11.8135 12.3411 11.9822 12.295 C 12.0035 12.0065 12.0277 11.6737 12.0602 11.2299 C 12.2087 11.3151 12.3984 11.3628 12.4124 11.4443 C 12.4465 11.6411 12.4599 11.8893 12.3734 12.0533 C 12.0042 12.7524 12.2662 13.2994 12.717 13.7941 C 12.9693 14.0708 13.109 14.3945 13.2512 14.7334 C 13.2875 14.8199 13.479 14.835 13.8148 14.9683 C 13.3456 14.0626 12.9882 13.3729 12.6218 12.6653 C 12.7562 12.595 12.8911 12.5245 13.028 12.453 C 12.9854 12.3997 12.9452 12.3499 12.8521 12.2335 C 12.972 12.1754 13.105 12.1509 13.1721 12.0681 C 13.2472 11.975 13.2628 11.8291 13.306 11.701 C 13.3604 11.7559 13.4382 11.8004 13.4351 11.837 C 13.4149 12.0723 13.3718 12.3052 13.3461 12.5398 C 13.3172 12.8019 13.2907 13.0649 13.2876 13.3279 C 13.2874 13.3549 13.4538 13.384 13.5353 13.4097 C 13.8625 12.8832 13.3358 12.1786 13.9884 11.6792 C 14.0562 11.7924 14.1345 11.9231 14.2128 12.0537 C 14.118 12.1533 13.9985 12.2787 13.8844 12.3984 C 13.9399 12.5452 14.0813 12.7432 14.0352 12.8245 C 13.6354 13.5319 13.8416 14.1923 14.1261 14.8625 C 14.4462 14.6581 14.5955 14.4161 14.36 14.031 C 14.2858 13.9094 14.3157 13.8893 14.6197 13.819 C 14.6324 13.9564 14.6181 14.0975 14.6617 14.2151 C 14.7819 14.5388 14.4423 14.7985 14.5811 15.137 C 14.6948 15.4144 14.7703 15.7328 14.5084 15.9961 C 14.7052 16.4122 14.902 16.8285 15.1639 17.3817 C 15.3547 16.7213 15.1623 16.1887 15.4419 15.708 C 15.5284 15.5593 15.3282 15.2179 15.2407 14.9717 C 15.2084 14.8809 15.0567 14.7917 15.0718 14.7339 C 15.2839 13.9127 14.6646 13.549 14.2776 13.1021 C 14.3737 12.9061 14.46 12.7302 14.5436 12.5597 C 14.9114 12.7916 15.0891 13.1588 15.2842 13.568 C 15.2067 12.9044 15.1292 12.241 15.0518 11.5774 C 14.6627 11.6438 14.7501 11.1038 14.4641 11.0619 C 14.2138 11.025 14.1796 10.8124 14.2997 10.7218 C 14.4188 10.6321 14.6999 10.6371 14.8217 10.7291 C 14.9706 10.8418 15.0279 11.0881 15.1998 11.4225 C 15.251 11.0485 15.2778 10.8533 15.3122 10.6017 C 15.4548 10.7915 15.7416 10.7612 15.5303 11.1423 C 15.3481 11.4711 15.1927 11.9679 15.6196 12.3396 C 16.3596 12.1836 15.9154 11.4637 16.1987 10.9883 C 16.2531 11.2738 16.2935 11.4858 16.3558 11.8127 C 16.5939 11.5731 16.7633 11.4026 17.0504 11.1136 C 17.0723 11.4365 17.0833 11.601 17.0979 11.8156 C 16.4467 12.0313 15.8256 12.3951 15.6965 13.1395 C 15.6003 13.6941 15.0467 14.2389 15.5586 14.8765 C 15.89 14.418 15.8185 13.7031 16.5233 13.3611 C 16.2767 14.0371 16.0616 14.627 15.8282 15.2673 C 16.0828 15.1959 16.2615 15.1458 16.5452 15.0665 C 16.3513 15.5559 16.2968 16.0137 16.0501 16.2543 C 15.4011 16.8871 15.4372 17.6432 15.4947 18.6125 C 16.1284 17.8193 16.0251 16.9005 16.3702 16.1665 C 16.4423 16.234 16.5135 16.3009 16.5848 16.3678 C 16.6086 16.3428 16.6466 16.3219 16.6544 16.2921 C 16.8638 15.4996 16.874 14.7534 16.6818 14.3491 C 16.7773 14.2524 16.874 14.1547 16.9863 14.0408 C 17.05 14.1801 17.1128 14.3171 17.1769 14.4572 C 17.3908 14.2445 17.5991 14.0374 17.8294 13.8085 C 17.7935 14.3193 17.7888 14.3141 17.2023 14.8905 C 17.1328 14.9585 17.1483 15.1218 17.1243 15.2411 C 17.1959 15.2111 17.2654 15.1703 17.3398 15.155 C 17.3835 15.1461 17.4748 15.1748 17.4761 15.192 C 17.4891 15.3724 17.4993 15.5723 17.7365 15.5079 C 17.8112 15.4875 17.8295 15.292 17.9031 15.2039 C 18.0586 15.0177 18.2338 14.8497 18.4135 14.6614 C 18.6707 15.0201 18.2953 15.1243 18.1902 15.3362 C 18.1547 15.4073 18.2313 15.5396 18.2596 15.6567 C 18.2454 15.6658 18.1921 15.728 18.1371 15.7297 C 17.0875 15.765 17.0875 15.7635 17.0875 16.8385 C 17.0875 17.0118 17.0875 17.1848 17.0875 17.4763 C 17.2772 17.3954 17.408 17.3479 17.5319 17.2854 C 17.8627 17.1182 18.1023 17.2444 18.3187 17.6061 C 18.0154 17.6205 17.7269 17.6132 17.4443 17.653 C 17.098 17.7015 16.7299 17.7294 16.4232 17.8817 C 16.2252 17.98 16.1069 18.2766 15.9769 18.4999 C 15.797 18.8086 15.5763 19.1143 15.4907 19.454 C 15.4073 19.7844 15.4725 20.156 15.4725 20.3225 C 15.6981 20.6547 15.8519 20.881 16.007 21.1097 C 16.2992 20.9038 16.5293 20.7419 16.8608 20.5081 C 16.7758 20.8138 16.7337 20.9835 16.681 21.1494 C 16.6323 21.3021 16.5721 21.4508 16.4938 21.6641 C 16.9814 21.9338 17.5027 22.2223 18.1564 22.5841 C 18.0626 22.3395 18.041 22.1763 17.9536 22.0767 C 17.7126 21.801 17.4887 21.4939 17.1155 21.3831 C 17.0916 21.3761 17.1124 21.2029 17.1124 21.1028 C 17.358 21.1691 17.5845 21.2302 17.8441 21.3002 C 17.8347 21.1809 17.8442 21.1239 17.8247 21.0824 C 17.5668 20.5334 17.2858 20.009 16.8358 19.5903 C 16.7071 19.4705 16.7167 19.1868 16.6414 18.8951 C 17.4651 19.0028 17.2868 19.8655 17.8391 20.178 C 17.8569 20.1006 17.8879 19.9679 17.9436 19.7284 C 17.9311 19.7075 17.7952 19.4816 17.6566 19.2512 C 18.3313 18.8656 18.5507 19.4783 18.9418 19.7527 C 18.6475 20.0128 18.3632 20.264 18.1531 20.4497 C 17.8759 21.4695 18.4986 22.1361 18.7709 22.9091 C 18.7868 22.9545 18.9413 22.9463 19.1009 22.9758 C 19.0189 22.5571 18.9456 22.1824 18.8621 21.755 C 19.0952 21.7124 19.2808 21.6783 19.4768 21.6423 C 19.5074 21.4445 19.5374 21.2496 19.5895 20.9117 C 19.7538 21.1062 19.9255 21.2296 19.908 21.3031 C 19.8406 21.5862 19.7483 21.8773 19.5992 22.1211 C 19.2949 22.6194 19.2465 23.0914 19.645 23.6412 C 19.6957 23.3828 19.7365 23.1747 19.8254 22.7209 C 20.0226 23.5184 20.1617 24.0808 20.3051 24.6598 C 20.6635 24.5167 20.7216 24.4183 20.5558 24.0874 C 20.4087 23.7938 20.4711 23.3851 20.4356 22.9633 C 20.5151 23.0095 20.6946 23.0518 20.7197 23.1415 C 20.7798 23.3558 20.7671 23.5927 20.7916 23.9271 C 21.1712 23.6758 21.2846 23.3932 21.338 23.0712 C 21.3414 23.0508 21.2805 23.0249 21.2736 22.9955 C 21.1526 22.4794 21.0876 21.9076 20.8928 21.462 C 20.6425 20.8894 20.3458 20.2211 19.6496 19.97 C 19.4894 19.9122 19.3967 19.6487 19.3275 19.4093 C 19.6537 19.4224 19.9445 19.4562 20.124 19.7596 C 20.1393 19.7852 20.1174 19.8322 20.1274 19.8641 C 20.2231 20.1707 20.7811 19.7273 20.7509 20.3088 C 20.7384 20.5482 20.9148 20.7987 21.0573 21.1854 C 21.22 20.7744 21.3796 20.4916 21.4383 20.1871 C 21.4912 19.9135 21.2651 19.5957 21.5803 19.3391 C 21.1551 18.6904 20.5309 18.3397 19.9286 17.9611 C 20.0957 17.7858 20.2628 17.6105 20.4298 17.4349 C 20.6047 17.9957 21.0981 18.2782 21.4263 18.7059 C 21.7676 18.3501 21.2519 17.6908 21.9492 17.3296 C 21.9492 18.3407 21.965 19.2494 21.9374 20.1563 C 21.9309 20.3696 21.8116 20.6049 21.6852 20.7838 C 21.2269 21.4326 21.2166 22.0763 21.6434 22.7491 C 22.0275 22.3829 22.1812 21.9309 22.1555 21.39 C 22.1343 20.9479 22.1123 20.4987 22.353 20.0958 C 22.4139 19.9938 22.4894 19.7823 22.5068 19.7882 C 23.0234 19.9631 22.8926 19.3545 23.3629 19.1925 C 23.0673 19.0298 22.8994 18.9374 22.7315 18.8448 C 23.3799 18.8795 23.5188 19.0673 23.2877 19.524 C 23.1072 19.8805 22.8468 20.1921 22.5809 20.5844 C 22.5809 20.8732 22.5809 21.2527 22.5809 21.6469 C 22.9461 21.7657 23.1249 21.5455 23.1511 21.2598 C 23.1841 20.9011 23.3867 20.6503 23.5184 20.3519 C 23.7648 19.7942 24.0134 19.2233 23.4223 18.5773 C 23.7371 18.5343 23.9143 18.5099 24.1365 18.4797 C 24.1365 19.0354 24.1365 19.5564 24.1365 20.1218 C 23.4088 20.9108 23.4088 20.9108 24.0148 21.6313 C 23.3564 21.6715 22.8336 21.8843 22.3796 22.3672 C 22.0755 22.6907 22.117 23.1981 21.6435 23.455 C 21.3495 23.6144 21.1975 24.163 21.0153 24.5341 C 20.8395 24.8914 20.9168 25.4248 20.9933 25.8594 C 21.0222 26.0243 21.1272 26.1516 20.95 26.2317 C 20.7845 26.3063 20.5504 26.3868 20.416 26.3174 C 20.276 26.2446 20.1576 26.0034 20.1362 25.8219 C 20.0191 24.8312 19.4348 24.1929 18.7429 23.5946 C 17.7979 22.7772 16.6111 22.4855 15.5551 21.912 C 15.3958 21.8257 15.1573 21.9 14.9371 21.9 C 14.8239 22.3098 14.7106 22.7207 14.5781 23.2015 C 14.437 23.1447 14.3011 23.0897 14.0996 23.0083 C 14.1564 22.9987 14.1243 22.9938 14.1098 23.0082 C 13.8516 23.2676 13.6033 23.5216 13.2748 23.7087 C 13.1046 23.8058 13.071 24.1672 12.9532 24.4668 C 12.7846 24.4269 12.5056 24.4438 12.4465 24.3325 C 12.2339 23.9315 12.9149 24.1525 12.8338 23.7933 C 12.7341 23.4738 12.037 23.5461 12.3307 22.8756 C 12.5781 23.069 12.7806 23.2275 13.018 23.4133 C 13.2731 23.2604 13.5461 23.0972 13.9595 22.8495 C 13.6833 22.7611 13.4877 22.6985 13.2338 22.6172 C 13.488 22.399 13.5298 22.3324 13.5741 22.3303 C 13.81 22.3197 14.0493 22.349 14.282 22.3188 C 14.5214 22.2875 14.7216 21.9363 14.65 21.6825 C 14.6155 21.5607 14.5203 21.451 14.435 21.3529 C 14.2845 21.1797 14.1554 21.2607 14.0149 21.3933 C 13.9525 21.4521 13.7906 21.5031 13.7529 21.4668 C 13.1962 20.9316 12.9497 21.5873 12.6331 21.8137 C 12.2045 22.1206 11.9517 22.6692 11.4188 22.8501 C 11.245 22.9091 11.0624 22.9387 10.8192 22.8442 C 11.2247 22.5906 11.6302 22.337 12.0643 22.0656 C 11.4813 21.6078 10.9832 22.1938 10.4433 22.1 C 10.4433 21.8077 10.4433 21.5446 10.4433 21.1855 C 11.1826 21.6161 11.8868 21.8124 12.6323 21.3751 C 11.8281 20.7804 10.9036 21.1901 10.0566 21.0087 C 10.296 20.7155 10.417 20.639 10.9296 20.5192 C 10.6014 20.4391 10.4109 20.3926 10.2163 20.345 C 10.2983 20.1952 10.3723 20.0596 10.4698 19.881 C 10.0504 19.7488 9.7043 19.5408 9.3009 19.7913 C 9.2048 19.5905 9.1131 19.3989 9.0053 19.1741 C 9.1113 19.163 9.2499 19.108 9.2881 19.1512 C 9.5028 19.3932 9.7236 19.4481 10.0255 19.2303 C 9.751 18.4037 8.9311 18.2455 8.361 17.7915 C 8.7214 17.3635 9.0104 17.9529 9.4239 17.8099 C 9.2833 17.4755 9.1542 17.1682 9.0117 16.8291 C 9.183 16.8291 9.3412 16.8291 9.5173 16.8291 C 9.7279 17.422 9.6448 18.1398 10.0417 18.7001 C 10.8586 18.3143 9.9965 17.7266 10.2727 17.2097 C 10.374 17.3999 10.4635 17.5677 10.6491 17.9164 C 10.8835 17.3759 11.0043 17.0973 11.1068 16.861 C 11.199 16.9403 11.3218 17.0461 11.486 17.1875 C 11.1437 17.7003 10.6049 18.05 10.5883 18.7415 C 10.5825 18.9795 10.2748 19.2072 10.442 19.4856 C 10.6302 19.7994 10.8217 20.1423 11.0934 20.3606 C 11.3275 20.5485 11.6766 20.5778 11.9741 20.6798 C 12.1284 20.7327 13.6844 20.9792 14.009 20.9554 C 13.6711 20.798 13.4893 20.6973 13.2971 20.6278 C 13.0599 20.5421 12.8054 20.5039 12.577 20.3998 C 12.5016 20.3654 12.4841 20.1907 12.4402 20.0802 C 12.5554 20.0679 12.6723 20.0383 12.7853 20.0505 C 12.8373 20.056 12.8815 20.1429 12.9293 20.1932 C 12.9886 19.4114 12.7903 19.2 11.6182 18.797 C 11.5978 18.4865 11.7799 18.3849 11.9653 18.5696 C 12.1721 18.7756 12.2234 18.582 12.3342 18.5045 C 12.6955 18.8977 13.0151 19.2958 13.264 19.8009 C 13.6455 20.5748 14.4592 20.8706 15.2444 21.202 C 15.1895 21.1219 15.1423 21.0343 15.0781 20.9634 C 14.9155 20.7834 14.7454 20.6112 14.5784 20.4359 C 14.3874 20.2354 14.1965 20.035 14.0054 19.8347 C 13.7906 19.6091 13.5724 19.3871 13.3623 19.157 C 13.2099 18.9904 12.9388 18.8527 13.1932 18.5569 C 13.0058 18.3601 12.8182 18.1632 12.5523 17.884 C 13.3016 17.865 13.5063 18.3529 13.6986 18.8882 C 13.8295 18.8289 13.9562 18.7551 14.0917 18.7147 C 14.233 18.6729 14.4511 18.7914 14.4541 18.498 C 14.698 18.7734 14.9419 19.049 15.2559 19.4036 C 15.2946 18.3422 14.897 17.5472 14.3586 16.8032 C 14.1464 16.51 13.8954 16.239 13.7302 15.9191 C 13.2271 14.9456 12.4766 14.4398 11.4154 14.4583 Z"></path>
        <path d="M 30.7007 7.52 C 30.7062 8.0532 31.4633 7.6266 31.4793 8.2924 C 30.9626 8.2924 30.4608 8.343 29.9745 8.2733 C 29.6811 8.2314 29.3715 8.0527 29.1406 7.8473 C 28.7023 7.4573 28.3181 7.3792 27.7507 7.6271 C 27.1468 7.8906 26.4574 7.9382 25.8051 8.0795 C 25.4965 8.1462 25.1876 8.2113 24.8034 8.2933 C 24.8135 8.0913 24.7509 7.8014 24.8444 7.7264 C 25.5688 7.1465 25.7734 6.1722 26.4539 5.5313 C 27.1268 4.8976 27.8735 4.5258 28.6949 4.2587 C 29.6246 3.9565 30.5746 3.7495 31.5599 3.8269 C 32.1319 3.8719 32.6021 3.7021 33.0924 3.3356 C 33.7194 2.8667 34.4473 2.507 35.2776 2.5548 C 35.4427 3.059 34.9067 3.1646 34.8638 3.5853 C 34.8289 3.928 34.84 4.2115 35.0054 4.4319 C 35.2951 4.8185 35.6116 5.2268 36.0032 5.478 C 37.4341 6.3955 38.1255 7.8439 38.6989 9.3951 C 38.7214 9.4561 38.7694 9.5247 38.7584 9.5787 C 38.5316 10.6957 39.352 11.3152 39.8499 12.0778 C 40.1171 12.4869 40.1753 12.506 40.2896 12.895 C 40.1642 12.7634 39.8996 12.4856 39.7856 12.366 C 37.9541 12.3003 37.5283 11.9218 37.9456 10.9427 C 37.4816 10.4558 36.9923 9.9789 36.5436 9.4634 C 35.7648 8.5684 34.7827 8.0228 33.7102 7.6687 C 33.0475 7.45 32.3434 7.3679 31.6569 7.2302 C 31.2786 7.1544 30.9772 7.3663 30.7007 7.52 Z"></path>
        <path d="M 32.7814 29.972 C 32.9637 29.1467 33.1279 28.4038 33.2935 27.6548 C 33.4946 27.739 33.628 27.8062 33.7681 27.8513 C 34.0477 27.9417 34.2814 27.3689 34.6401 27.8296 C 34.7586 27.9817 35.2035 27.8535 35.6932 27.8535 C 35.4295 28.0885 35.3132 28.1921 35.2049 28.2886 C 34.6293 28.0576 34.0778 27.8398 33.4705 28.3713 C 34.0839 28.5914 34.3218 28.969 33.9861 29.5696 C 33.9695 29.5992 33.9177 29.6414 33.9185 29.6425 C 34.2952 30.0659 34.076 30.375 33.749 30.673 C 33.4576 30.9381 33.224 31.2051 32.7786 31.3121 C 32.1907 31.453 31.6265 31.6792 31.0073 31.6881 C 30.725 31.6921 30.4484 31.7334 30.158 31.824 C 29.8296 31.9268 29.3882 31.6655 29.0049 31.5339 C 28.1438 31.238 27.2975 30.8895 26.4265 30.6324 C 26.0054 30.5081 25.624 30.7319 25.2794 31.0435 C 24.2515 31.9722 23.4888 33.0941 22.9644 34.3983 C 22.6924 35.0743 22.2468 35.53 21.6699 35.9678 C 21.0647 36.4269 20.5002 36.8813 19.7626 37.0632 C 19.2703 37.1846 18.8095 37.4343 18.2844 37.4274 C 18.0652 37.4246 17.824 37.3348 17.6299 37.5758 C 17.5685 37.6519 17.3378 37.6821 17.2621 37.6235 C 16.842 37.2971 16.3555 37.3719 15.9239 37.4415 C 15.0916 37.5756 14.4352 37.1753 13.8947 36.6818 C 13.2728 36.1139 12.5394 35.8257 11.8101 35.4001 C 11.5805 35.2184 12.3427 34.9661 11.7705 34.7316 C 12.2567 34.7219 12.6627 34.5776 13.13 34.6094 C 13.5042 34.6348 13.933 34.4423 14.3595 34.439 C 15.2743 34.4314 16.1559 34.6639 16.9308 35.1057 C 17.9813 35.7045 18.9448 35.6467 19.9495 35.084 C 20.5573 34.7438 21.1172 34.3578 21.3928 33.6499 C 21.4281 33.5591 21.5383 33.48 21.5371 33.397 C 21.524 32.4882 22.0928 31.9036 22.614 31.3148 C 23.3226 30.5143 24.0832 29.7734 25.0658 29.3274 C 25.2413 29.2476 25.3835 29.1382 25.5948 29.1215 C 27.1097 29.0017 28.5568 29.3729 29.9822 29.8199 C 30.6693 30.0356 31.3405 30.2616 32.0604 30.1838 C 32.3351 30.1542 32.6005 30.0273 32.7814 29.972 Z"></path>
        <path d="M 1.2429 20.738 C 1.914 20.5454 1.914 20.5454 2.2244 19.9397 C 2.3331 20.0068 2.4581 20.0536 2.5405 20.1434 C 2.6262 20.2367 2.6708 20.3717 2.8221 20.6536 C 2.8776 20.2927 2.9383 20.1621 2.8998 20.1044 C 2.7145 19.8253 2.5015 19.567 2.3026 19.2979 C 2.2924 19.2842 2.3216 19.2385 2.3535 19.1489 C 2.4476 19.2147 2.5323 19.2739 2.6619 19.3645 C 2.6619 19.1693 2.6619 19.0056 2.6619 18.8077 C 2.366 18.6926 2.0207 18.5587 1.6649 18.4207 C 1.765 18.0894 1.956 17.8065 1.6395 17.5535 C 2.3117 17.1812 2.4581 17.8917 2.9598 18.0983 C 2.8478 17.7728 2.7695 17.5455 2.6783 17.2806 C 2.8156 17.2557 2.9662 17.194 2.9908 17.2292 C 3.2219 17.5612 3.4315 17.9098 3.6728 18.2941 C 3.7045 18.0635 3.7312 17.8682 3.7593 17.6631 C 4.3349 17.9479 4.3705 17.92 4.6581 16.9476 C 4.8719 17.1073 5.07 17.2549 5.3922 17.4952 C 5.295 17.1001 5.2271 16.8237 5.142 16.4775 C 5.3412 16.3713 5.58 16.2443 5.8196 16.1165 C 6.0344 16.4252 6.0004 16.6649 5.7645 16.8813 C 5.856 16.9354 5.9475 16.9891 6.1486 17.1075 C 6.1486 16.7518 6.0945 16.4958 6.1629 16.2838 C 6.2416 16.0396 6.4184 15.825 6.5757 15.6168 C 6.6242 15.5526 6.7619 15.5089 6.8333 15.5344 C 6.8941 15.556 6.9749 15.7336 6.9506 15.7687 C 6.5386 16.3612 7.2121 16.4567 7.3641 16.7861 C 7.3505 17.174 6.7995 17.184 6.8443 17.6486 C 6.877 17.9872 6.8084 18.3418 6.7495 18.6826 C 6.714 18.8882 6.6102 19.0807 6.686 19.3815 C 6.7513 19.1759 6.8165 18.9707 6.8819 18.7654 C 6.9456 18.8195 7.0091 18.8737 7.0727 18.9279 C 7.1768 19.4741 7.2808 20.0206 7.39 20.5936 C 7.5656 20.5936 7.7245 20.5936 7.8909 20.5936 C 7.9818 20.2992 8.0671 19.9821 8.1833 19.6781 C 8.2074 19.6147 8.3519 19.5586 8.4273 19.5739 C 8.4887 19.5862 8.5884 19.7346 8.5709 19.7815 C 8.1401 20.9375 8.4826 22.1375 8.3816 23.3108 C 8.3514 23.6622 8.3409 24.024 8.3855 24.3719 C 8.4517 24.8906 8.2282 25.2252 7.8898 25.4762 C 7.7578 25.4122 7.6428 25.3071 7.5306 25.3102 C 6.8749 25.3286 6.2787 25.0908 5.6563 24.9332 C 5.1057 24.7938 4.4952 24.8464 3.9639 24.5902 C 3.3796 24.3086 2.7801 24.5531 2.1978 24.4349 C 2.2147 24.1917 2.2759 23.9169 1.9414 23.8131 C 1.4905 23.6732 1.0405 23.5309 0.5903 23.3882 C 0.3257 23.3042 0.326 23.3033 0 22.7814 C 0.584 23.0503 1.1025 22.9344 1.6481 22.9729 C 1.5014 22.2744 0.715 22.7015 0.5052 22.1678 C 0.9668 21.9607 1.4965 22.3035 1.9504 21.9717 C 2.0169 21.923 2.2277 22.0328 2.3365 22.1184 C 2.5747 22.3055 2.7902 22.5239 3.0148 22.7295 C 3.5132 22.1201 3.8019 23.1311 4.2543 22.9313 C 4.2097 22.6719 4.1646 22.4094 4.1195 22.147 C 4.1674 22.1299 4.2152 22.1128 4.2631 22.0959 C 4.4188 22.3741 4.6825 22.6411 4.7098 22.9326 C 4.7814 23.6995 5.4223 23.8472 5.8456 24.2312 C 5.8845 24.2664 6.0237 24.2621 6.036 24.2354 C 6.2312 23.811 6.5524 24.4791 6.7465 24.1401 C 6.7616 24.1139 6.7536 24.0728 6.7642 23.9413 C 6.698 23.9084 6.5931 23.8746 6.5078 23.8114 C 5.9778 23.4189 5.3156 23.2258 4.9927 22.5234 C 4.8404 22.192 4.4868 21.9625 4.2581 21.7223 C 3.6589 21.6841 3.0954 21.6481 2.5322 21.6123 C 2.3026 21.0267 1.4518 21.5255 1.2429 20.738 Z"></path>
        <path d="M 6.4852 6.1276 C 7.1992 6.2552 7.7938 5.9929 8.3574 6.363 C 8.4901 6.4503 8.8156 6.4222 8.92 6.3109 C 9.2651 5.9426 9.8141 6.4277 10.1024 5.9534 C 10.5071 5.9534 10.9117 5.9534 11.3164 5.9534 C 11.7546 5.9534 12.2045 5.8881 12.6285 5.9697 C 13.1787 6.0757 13.7086 6.2986 14.3005 6.488 C 14.2178 6.646 14.1444 6.7863 14.0623 6.943 C 14.1649 6.9803 14.2824 7.0233 14.3999 7.0659 C 14.4121 7.0909 14.44 7.1332 14.4345 7.1385 C 13.9905 7.5851 13.6278 8.1565 12.9683 8.2887 C 12.2513 8.4323 12.2707 8.4261 12.2156 9.0786 C 12.1894 9.391 12.0563 9.694 11.9481 10.0865 C 11.712 9.7169 11.5335 9.4374 11.3679 9.178 C 10.2667 9.6959 9.1688 10.1388 8.0118 10.4309 C 7.4603 10.5701 6.8848 10.5792 6.3509 10.8324 C 5.9693 11.0135 5.8649 11.25 6.0103 11.6942 C 6.5276 11.6942 7.0611 11.7111 7.5933 11.688 C 7.9152 11.6741 8.0823 11.8263 8.2009 12.1736 C 7.679 12.6597 7.1675 13.186 6.6059 13.6445 C 6.053 14.0956 5.8748 14.8268 5.4365 15.3169 C 4.5914 15.1991 4.7612 14.4114 4.5901 13.9348 C 4.4435 13.526 4.3039 13.0038 4.3534 12.5654 C 4.4389 11.8075 4.4476 11.0194 4.7338 10.2972 C 4.9999 9.6256 5.2354 8.9384 5.7371 8.3944 C 6.0521 8.0526 6.3134 7.6565 6.601 7.2867 C 6.8243 6.9991 6.8179 6.8242 6.4852 6.1276 Z"></path>
        <path d="M 14.561 32.1658 C 14.6393 31.9388 14.6819 31.816 14.7281 31.6824 C 14.7811 31.7391 14.8594 31.7893 14.8533 31.8219 C 14.7686 32.2731 14.6724 32.7218 14.5278 33.4176 C 14.3799 32.5497 14.2737 31.9253 14.1321 31.0933 C 13.9838 31.8302 13.8716 32.3866 13.7596 32.9432 C 13.7366 32.9445 13.7136 32.9456 13.6907 32.9465 C 13.675 32.6896 13.6899 32.4252 13.6352 32.1777 C 13.5804 31.9303 13.4557 31.6998 13.3516 31.4366 C 13.2129 31.8243 13.0881 32.1732 12.9633 32.522 C 12.9287 32.5129 12.8943 32.504 12.8599 32.4951 C 12.9186 31.9335 13.0649 31.3625 13.0121 30.8126 C 12.9561 30.229 13.4398 29.7157 13.1665 29.0925 C 12.639 29.9802 12.5823 30.9165 12.6273 31.8781 C 12.6425 32.2006 12.7122 32.5706 12.2951 32.6973 C 12.3821 31.6711 12.4693 30.6454 12.5668 29.4979 C 12.4254 29.6917 12.3211 29.8253 12.2271 29.9664 C 12.1356 30.1033 12.0544 30.2483 11.957 30.4094 C 11.796 29.7435 11.8352 29.6526 12.6227 28.819 C 12.4329 28.4779 12.4329 28.4779 12.6661 28.0643 C 12.1327 28.1469 11.7381 27.9858 11.4198 27.5668 C 11.3047 27.415 10.9845 27.4518 10.8256 27.3152 C 10.6788 27.1895 10.4026 27.2821 10.3564 26.8966 C 10.327 26.6506 10.4378 26.3105 10.2001 26.0905 C 10.3184 25.978 10.3358 25.6984 10.6 25.8271 C 10.6848 25.8684 10.7714 25.9301 10.8594 25.9347 C 11.1287 25.9487 11.3992 25.9397 11.7288 25.9397 C 12.4189 25.068 13.3857 24.5814 14.4072 24.1544 C 14.7953 23.9922 15.0401 24.024 15.3955 24.22 C 15.8719 24.4828 16.3555 24.6984 16.7861 25.0664 C 17.32 25.5223 18.0714 25.5885 18.5984 26.1202 C 18.9732 26.4987 19.0976 26.9297 18.6589 27.1056 C 18.2488 27.2698 18.3527 27.549 18.2327 27.863 C 17.7037 27.7388 17.2664 27.9431 17.0994 28.512 C 16.9789 28.9231 16.6099 28.5386 16.4438 28.827 C 16.2816 29.1082 16.0335 29.4082 15.6679 28.7894 C 15.6595 29.5002 16.2959 29.827 15.9867 30.4259 C 15.8386 30.1165 15.7048 29.8365 15.5708 29.5566 C 15.5411 29.5614 15.5114 29.5657 15.4815 29.5704 C 15.5443 30.0559 15.6312 30.5397 15.6626 31.0273 C 15.6939 31.5133 15.6694 32.0032 15.6016 32.4956 C 15.4029 32.172 15.4852 31.8104 15.4703 31.4666 C 15.4552 31.1217 15.4669 30.7756 15.3969 30.4299 C 15.1717 31.3992 15.3426 32.3945 15.2111 33.5049 C 14.9938 32.4882 15.0199 30.4529 15.2365 29.5925 C 15.1396 29.5817 14.9822 29.5339 14.9651 29.5665 C 14.8462 29.7952 14.7139 30.0323 14.6681 30.2832 C 14.6179 30.5565 14.6829 30.8512 14.6489 31.1302 C 14.6175 31.3889 14.5155 31.6377 14.4592 31.8945 C 14.4478 31.9464 14.5015 32.0143 14.561 32.1658 Z"></path>
        <path d="M 26.1846 18.1914 C 26.923 17.6329 27.7428 17.9473 28.5264 17.8477 C 29.7975 16.6514 29.1548 16.209 28.1661 15.4723 C 27.899 15.8662 27.3712 16.0439 27.392 16.6954 C 27.3952 16.7947 27.1035 16.9652 26.9302 16.998 C 26.4635 17.0867 25.7753 17.0349 25.4097 16.778 C 25.1228 16.5762 24.9458 16.2021 24.6339 15.7915 C 25.1206 15.7515 25.4634 15.723 25.8061 15.6948 C 25.386 15.5299 24.9944 15.4818 24.564 15.6232 C 24.1646 15.7542 23.7194 15.7313 23.2126 15.7849 C 22.6591 16.1418 22.4659 17.2903 21.4009 16.9662 C 21.1971 16.6434 21.5316 16.4041 21.6389 16.406 C 22.0372 16.4132 22.2377 16.2411 22.2834 15.7596 C 22.1874 15.6825 22.0076 15.5375 21.7816 15.3555 C 21.4969 15.5782 21.1434 15.8551 20.7373 16.1731 C 20.5537 16.0686 20.3204 15.9358 20.0963 15.8083 C 20.1495 15.6736 20.1738 15.5603 20.1973 15.5605 C 20.7684 15.5642 21.2168 15.4021 21.3872 14.7432 C 21.4265 14.5903 21.7923 14.7493 21.7552 14.3876 C 21.697 13.8182 21.5308 13.2905 21.3497 12.7563 C 21.1856 12.2717 20.7675 12.1045 20.4132 11.9292 C 19.9702 11.7102 19.5465 11.5243 19.2927 11.066 C 19.8841 10.4148 19.8841 10.4148 21.4461 10.4219 C 21.9305 10.851 22.1743 11.4266 22.3558 12.0443 C 22.556 12.7261 22.8414 12.9875 23.489 12.9607 C 24.2382 12.9297 24.9843 12.8264 25.7323 12.7578 C 26.5334 12.6843 27.1727 13.0394 27.722 13.6096 C 28.4891 14.406 29.2736 15.1865 30.0043 16.0186 C 30.5848 16.6794 30.6181 17.2684 30.2479 18.0621 C 30.1696 18.2301 30.0323 18.4135 29.8775 18.4885 C 28.6759 19.0732 27.6063 19.1899 26.54 18.3276 C 26.4491 18.254 26.315 18.2395 26.1846 18.1914 Z"></path>
        <path d="M 41.6453 15.2495 C 41.472 15.9054 41.0883 16.2891 40.788 16.7618 C 41.3653 16.924 41.4315 16.0271 41.9966 16.1913 C 41.6784 16.4885 41.3918 16.7561 41.0802 17.0472 C 41.6674 17.4226 42.1138 17.1097 42.7515 16.9379 C 42.2333 17.5743 41.647 17.6575 41.0939 18.047 C 41.8519 18.047 42.5092 18.047 43.1663 18.047 C 43.1718 18.0992 43.1771 18.1516 43.1826 18.2037 C 43.0325 18.2311 42.8741 18.3036 42.7339 18.276 C 42.4441 18.2191 42.2293 18.3679 42.0101 18.5039 C 41.9215 18.559 41.8697 18.6787 41.8011 18.7693 C 42.0386 18.9583 41.77 19.2008 41.8248 19.3248 C 41.9294 19.5626 42.1729 19.7332 42.4141 19.9907 C 42.1498 19.95 41.9189 19.9144 41.6359 19.8708 C 41.6611 19.9852 41.7023 20.1737 41.7628 20.4496 C 41.5078 20.351 41.2921 20.2673 40.9886 20.1499 C 41.0932 20.4066 41.1583 20.5663 41.2747 20.8523 C 40.9351 20.8003 40.7042 20.765 40.4305 20.7233 C 40.4144 20.812 40.3797 21.0042 40.334 21.2556 C 40.2278 21.0703 40.1348 20.908 40.073 20.8002 C 39.4892 21.0886 39.4892 21.0886 39.2791 20.6288 C 39.1366 20.7686 38.9969 20.9056 38.8201 21.079 C 38.7841 20.8528 38.7527 20.6581 38.7213 20.4618 C 38.348 20.5931 37.9838 20.7212 37.6122 20.8521 C 37.6755 20.4846 37.729 20.1744 37.7825 19.8643 C 37.7349 19.8463 37.6873 19.8282 37.6396 19.8102 C 37.6089 19.8876 37.5865 19.9705 37.545 20.0408 C 37.494 20.1268 37.4388 20.2196 37.3635 20.2778 C 37.2695 20.3502 37.1528 20.3903 36.9672 20.4838 C 37.1584 19.9855 37.1175 19.4962 37.4887 19.1237 C 37.3606 19.1763 37.216 19.2045 37.1077 19.2859 C 36.7646 19.5442 36.7698 19.552 36.116 19.4224 C 36.7772 19.5205 36.9702 18.7606 37.5927 18.6262 C 37.0098 18.1436 36.335 18.1482 35.7152 17.9553 C 36.3862 17.8593 37.0482 17.7499 37.7634 17.9423 C 37.2188 17.4546 36.674 16.9672 36.0707 16.4271 C 36.8431 16.2949 37.0918 17.152 37.7935 17.2512 C 37.4718 16.7771 37.2194 16.4049 36.9617 16.0251 C 37.3549 15.7084 37.3859 16.3168 37.7142 16.3043 C 37.7142 16.249 37.7506 16.1136 37.707 16.0194 C 37.6045 15.7981 37.2079 15.7281 37.3967 15.3552 C 37.7349 15.7115 38.0729 16.0677 38.541 16.561 C 38.568 15.7715 38.0276 15.2902 38.2026 14.6143 C 38.5012 15.1835 38.7611 15.679 39.0211 16.1744 C 39.0695 16.1605 39.1178 16.1469 39.1663 16.1329 C 39.1663 15.301 39.1663 14.4692 39.1663 13.6372 C 39.2051 13.6348 39.244 13.6327 39.2828 13.6305 C 39.3903 14.402 39.4977 15.174 39.6052 15.9456 C 39.6461 15.9493 39.6871 15.9532 39.7281 15.957 C 39.907 15.3195 40.0859 14.682 40.3322 13.804 C 40.48 14.8263 39.9115 15.5758 40.2819 16.3951 C 40.8316 16.2222 41.0655 15.6199 41.6453 15.2495 Z"></path>
        <path d="M 18.8902 4.7891 C 18.9526 4.9059 19.001 5.1058 19.1233 5.2042 C 19.4572 5.4725 19.9225 5.5813 20.1182 6.0123 C 20.291 6.3939 20.3667 6.8237 20.5384 7.2059 C 20.7777 7.7394 21.0663 8.2485 21.3796 8.8568 C 20.4332 8.8301 19.8518 9.6456 18.9775 9.868 C 18.3037 10.0392 17.6642 9.9133 17.0132 9.9702 C 16.9154 9.9785 16.7516 9.6932 16.6914 9.5165 C 16.5872 9.2087 16.5399 8.8798 16.4512 8.4814 C 16.225 8.6753 16.0447 8.8297 15.8562 8.9915 C 15.4346 8.2229 15.4346 8.2229 15.5553 7.2166 C 15.9588 7.3878 16.3579 7.557 16.7505 7.7235 C 17.2961 6.6188 17.5263 5.3713 18.8902 4.7891 Z"></path>
        <path d="M 18.1166 32.2753 C 18.0513 31.5867 18.1115 31.009 18.4949 30.4697 C 18.8671 29.9457 18.7387 29.3407 18.4437 28.7164 C 18.6003 28.7655 18.6492 28.7745 18.6928 28.7957 C 18.9194 28.9052 19.2335 29.1741 19.353 29.099 C 19.6792 28.8944 20.0667 28.887 20.3746 28.5795 C 21.4704 27.4854 22.4602 26.3112 23.1576 24.8975 C 23.5541 24.0938 24.2951 23.9996 24.9921 23.8331 C 25.205 23.7822 25.4888 23.925 25.7012 24.0511 C 25.851 24.1401 25.9354 24.3507 26.1635 24.6646 C 25.7557 24.597 25.658 24.3755 25.4895 24.238 C 24.793 24.4091 24.1621 24.691 23.9023 25.4891 C 23.8111 25.7692 23.7441 26.0601 23.6877 26.3505 C 23.5206 27.2113 22.9302 27.8022 22.4668 28.4722 C 22.2783 28.7444 21.9842 28.9176 21.8829 29.2831 C 21.8335 29.4619 21.6265 29.6067 21.4673 29.7343 C 21.1595 29.9811 20.835 30.2047 20.5362 30.424 C 20.6196 30.7941 20.6884 31.0994 20.793 31.5645 C 20.4809 31.42 20.3183 31.3448 20.1389 31.2618 C 20.105 31.27 20.0156 31.2631 19.9865 31.3036 C 19.6414 31.7837 19.1221 31.9998 18.6418 32.2628 C 18.4967 32.3425 18.2785 32.2753 18.1166 32.2753 Z"></path>
        <path d="M 32.2808 12.0122 C 32.722 11.5496 33.1628 11.0867 33.6036 10.6241 C 33.5609 10.5614 33.5181 10.499 33.4753 10.4365 C 32.7738 10.6462 32.0244 10.6438 31.3276 11.0131 C 31.2736 10.9565 31.1784 10.8566 31.0753 10.7485 C 31.1165 10.7094 31.1608 10.6337 31.1984 10.637 C 31.4454 10.6594 31.7554 10.6295 31.7894 10.3802 C 31.8837 9.6881 32.6362 9.5415 32.7467 8.8945 C 33.1854 9.1385 33.5793 9.3392 33.9562 9.571 C 34.6799 10.0161 34.8849 10.8196 34.5081 11.6678 C 34.4423 11.8159 34.37 11.9607 34.2958 12.1173 C 34.3596 12.4454 34.9191 12.598 34.6925 12.9811 C 34.4874 13.328 34.6479 13.9152 34.0226 14.0483 C 33.9523 13.9197 33.871 13.7709 33.7739 13.5933 C 33.5546 14.1289 33.7922 14.5431 34.0488 14.9198 C 34.3625 15.3804 34.6738 15.8293 34.83 16.3842 C 34.9841 16.931 34.5249 17.8024 34.0155 17.8344 C 33.8813 17.8429 33.7083 17.7458 33.6089 17.6394 C 33.4813 17.5032 33.3437 17.3124 33.3341 17.1377 C 33.325 16.9725 33.4402 16.7527 33.5679 16.6414 C 33.6689 16.553 33.871 16.5923 34.0584 16.5715 C 34.077 16.7084 34.0902 16.8055 34.1035 16.9028 C 34.1166 17 34.1295 17.0973 34.1625 17.3423 C 34.3233 17.1233 34.4161 16.9971 34.5588 16.8029 C 34.2597 16.3326 33.9603 15.8271 33.6268 15.3483 C 33.3394 14.9359 32.9631 14.5851 32.7177 14.15 C 32.4636 13.7006 32.1085 13.2563 32.2721 12.645 C 32.3246 12.4489 32.2802 12.2238 32.2808 12.0122 Z"></path>
        <path d="M 24.7936 33.48 C 25.2954 33.0802 25.4668 33.0702 25.8995 33.379 C 26.378 33.7211 26.9073 34.0055 27.1119 34.675 C 27.9096 34.3094 28.7059 33.9441 29.523 33.5695 C 29.7396 33.8854 29.6923 34.1483 29.4164 34.3645 C 28.9019 34.7671 28.3792 35.1586 27.8166 35.5878 C 28.0724 35.9208 28.381 36.0654 28.7598 36.1621 C 29.0538 36.2372 29.3201 36.4492 29.5836 36.6254 C 29.6356 36.66 29.6594 36.8354 29.6223 36.8962 C 29.5833 36.9607 29.4065 37.019 29.3749 36.9873 C 29.2108 36.8218 29.1147 36.9089 28.92 36.968 C 28.3681 37.1354 27.8549 36.8674 27.3555 36.5004 C 27.2251 36.6959 27.1038 36.8459 27.0178 37.016 C 26.9307 37.1881 26.8712 37.377 26.8121 37.563 C 26.6276 38.1444 26.244 38.3605 25.6206 38.2435 C 25.7542 38.0239 25.8969 37.8308 25.995 37.6157 C 26.0884 37.4104 26.1392 37.1831 26.2022 36.9634 C 26.2725 36.7186 26.3356 36.4717 26.4011 36.2279 C 25.3625 35.8091 24.9019 36.6597 24.2543 37.4133 C 24.2101 36.9614 24.185 36.7051 24.1653 36.5035 C 24.6942 35.8561 25.2234 35.3168 26.028 35.2758 C 25.8239 34.4219 25.5266 33.7781 24.7936 33.48 Z"></path>
        <path d="M 30.0306 10.641 C 29.3931 11.0414 28.6913 11.4819 27.9364 11.9562 C 27.8668 11.79 27.8415 11.5731 27.7426 11.5259 C 27.5345 11.4265 27.3391 11.4963 27.1196 11.6571 C 26.8423 11.8601 26.4886 12.0016 26.1151 11.906 C 25.9599 11.8663 25.8804 11.5815 25.9482 11.3109 C 25.5222 11.3832 25.0947 11.4553 24.6739 11.5267 C 24.566 11.1368 24.2473 10.8376 24.7485 10.46 C 24.9601 10.46 25.3201 10.46 25.6608 10.46 C 25.8 10.1564 25.8599 9.8113 26.0562 9.6558 C 26.2669 9.4888 26.6103 9.4553 26.8766 9.7314 C 26.909 9.7197 26.9681 9.717 26.9995 9.6847 C 27.6758 8.9941 27.7681 8.9773 28.5923 9.4183 C 28.8142 9.5371 29.0282 9.6755 29.257 9.777 C 29.6071 9.9324 29.9187 10.1206 30.0306 10.641 Z"></path>
        <path d="M 14.4541 18.498 C 14.1865 18.3239 13.88 18.1904 13.6621 17.9636 C 13.4266 17.7185 13.1905 17.6024 12.8727 17.6479 C 12.5858 17.6891 12.3724 17.5875 12.2502 17.3032 C 12.4553 16.9752 12.7634 17.6458 12.9586 17.2223 C 13.2293 17.2855 13.5001 17.3485 13.8371 17.427 C 13.7731 17.1906 13.6367 17.0883 13.4724 17.0099 C 12.651 16.619 11.8401 16.2012 11.0046 15.8485 C 10.4973 15.6345 9.9552 15.6407 9.4354 15.8945 C 9.4354 15.6296 9.4354 15.3677 9.4354 15.0227 C 9.7773 15.199 10.0516 15.3405 10.4172 15.5287 C 10.3562 15.3506 10.3256 15.1211 10.2671 15.1132 C 9.9407 15.0681 9.8359 14.855 9.7715 14.579 C 10.0575 14.3494 10.3552 14.3783 10.4723 14.6608 C 10.6924 15.1927 11.2993 15.2357 11.5521 15.9631 C 11.7102 15.0477 11.072 14.9241 10.736 14.4583 C 11.0311 14.4583 11.2231 14.4583 11.4154 14.4583 C 11.6736 14.9457 11.802 15.5189 12.2612 15.8723 C 12.2919 15.8959 12.3532 15.8752 12.3903 15.8752 C 12.5328 15.7059 12.2082 15.1132 12.8088 15.3834 C 12.8322 15.6501 12.8549 15.9086 12.877 16.1616 C 13.1488 16.1616 13.348 16.1616 13.5461 16.1616 C 13.6874 16.4532 13.7874 16.7758 13.9764 17.0233 C 14.3128 17.4639 14.4424 17.9541 14.4541 18.498 Z"></path>
        <path d="M 14.4541 18.498 C 14.4424 17.9541 14.3128 17.4639 13.9764 17.0233 C 13.7874 16.7758 13.6874 16.4532 13.5461 16.1616 C 13.348 16.1616 13.1488 16.1616 12.877 16.1616 C 12.8549 15.9086 12.8322 15.6501 12.8088 15.3834 C 12.2082 15.1132 12.5328 15.7059 12.3903 15.8752 C 12.3532 15.8752 12.2919 15.8959 12.2612 15.8723 C 11.802 15.5189 11.6736 14.9457 11.4154 14.4583 C 12.4766 14.4398 13.2271 14.9456 13.7302 15.9191 C 13.8954 16.239 14.1464 16.51 14.3586 16.8032 C 14.897 17.5472 15.2946 18.3422 15.2559 19.4036 C 14.9419 19.049 14.698 18.7734 14.4541 18.498 Z"></path>
      </g>
      </symbol>
      <!-- SHAPE HELP -->
      <symbol id="shape-help" viewBox="-3 -3 25 25">
        <path d="M 2 9.5 C 2 5.3578 5.3578 2 9.5 2 C 13.6422 2 17 5.3578 17 9.5 C 17 13.6422 13.6422 17 9.5 17 C 5.3578 17 2 13.6422 2 9.5 ZM 0 9.5 C 0 14.7467 4.2532 19 9.5 19 C 14.7468 19 19 14.7467 19 9.5 C 19 4.2533 14.7468 0 9.5 0 C 4.2532 0 0 4.2533 0 9.5 Z"></path>
        <path d="M 6.8218 4.564 C 7.4036 4.1881 8.1187 4 8.9668 4 C 10.0812 4 11.0071 4.2672 11.7443 4.8015 C 12.4813 5.3358 12.85 6.1274 12.85 7.1763 C 12.85 7.8194 12.6902 8.3612 12.3705 8.8015 C 12.1836 9.0686 11.8247 9.41 11.2935 9.8256 L 10.7698 10.2338 C 10.4845 10.4564 10.2952 10.7161 10.2018 11.0129 C 10.1428 11.201 10.1108 11.4929 10.1059 11.8886 L 8.1014 11.8886 C 8.1309 11.0526 8.2097 10.4749 8.3375 10.1558 C 8.4653 9.8367 8.7946 9.4694 9.3256 9.0538 L 9.864 8.6307 C 10.041 8.4972 10.1835 8.3513 10.2917 8.1929 C 10.4883 7.9208 10.5867 7.6215 10.5867 7.2949 C 10.5867 6.9191 10.4773 6.5764 10.2583 6.2672 C 10.0395 5.9579 9.6396 5.8033 9.0593 5.8033 C 8.4886 5.8033 8.0839 5.9938 7.8454 6.3748 C 7.6069 6.7558 7.4875 7.1515 7.4875 7.5621 L 5.35 7.5621 C 5.4091 6.1521 5.8998 5.1528 6.8218 4.564 ZM 8.0497 12.9053 L 10.2613 12.9053 L 10.2613 15.05 L 8.0497 15.05 L 8.0497 12.9053 Z"></path>
      </symbol>

      <symbol id="shape-lorem" viewBox="0 0 59 58">
        <path d="M 4.9615 29 C 4.9615 15.4476 15.9476 4.4615 29.5 4.4615 C 43.0524 4.4615 54.0385 15.4476 54.0385 29 C 54.0385 42.5524 43.0524 53.5385 29.5 53.5385 C 15.9476 53.5385 4.9615 42.5524 4.9615 29 ZM 0.5 29 C 0.5 45.0165 13.4835 58 29.5 58 C 45.5165 58 58.5 45.0165 58.5 29 C 58.5 12.9835 45.5165 0 29.5 0 C 13.4835 0 0.5 12.9835 0.5 29 Z"></path>
      </symbol>
      <symbol id="shape-climate" viewBox="0 0 53 35">
        <g>
          <g>
            <path d="M 19.6296 5.8696 C 20.7137 5.8696 21.5926 4.9945 21.5926 3.913 L 21.5926 1.9565 C 21.5926 0.8751 20.7137 0 19.6296 0 C 18.5456 0 17.6667 0.8751 17.6667 1.9565 L 17.6667 3.913 C 17.6667 4.9945 18.5456 5.8696 19.6296 5.8696 Z"></path>
            <path d="M 7.1368 9.882 C 7.5202 10.2641 8.0225 10.4551 8.5247 10.4551 C 9.0269 10.4551 9.5292 10.2641 9.9126 9.882 C 10.6794 9.1177 10.6794 7.8796 9.9126 7.1153 L 8.5247 5.732 C 7.7579 4.9677 6.5157 4.9677 5.749 5.732 C 4.9822 6.4963 4.9822 7.7344 5.749 8.4987 L 7.1368 9.882 Z"></path>
            <path d="M 3.9259 17.6087 L 1.963 17.6087 C 0.8789 17.6087 0 18.4838 0 19.5652 C 0 20.6467 0.8789 21.5217 1.963 21.5217 L 3.9259 21.5217 C 5.01 21.5217 5.8889 20.6467 5.8889 19.5652 C 5.8889 18.4838 5.01 17.6087 3.9259 17.6087 Z"></path>
            <path d="M 30.7326 10.4551 C 31.2349 10.4551 31.7371 10.2641 32.1205 9.882 L 33.5084 8.4967 C 34.2752 7.7305 34.2752 6.4924 33.5065 5.7281 C 32.7378 4.9658 31.4956 4.9639 30.7326 5.7301 L 29.3438 7.1153 C 28.578 7.8815 28.578 9.1196 29.3457 9.8839 C 29.7281 10.2641 30.2304 10.4551 30.7326 10.4551 Z"></path>
            <path d="M 44.2874 21.9249 C 42.4606 17.0699 37.7909 13.6957 32.3889 13.6957 C 30.84 13.6957 29.3505 13.9937 27.9588 14.5115 C 26.2422 11.6913 23.175 9.7826 19.6296 9.7826 C 14.218 9.7826 9.8148 14.1714 9.8148 19.5652 C 9.8148 21.9727 10.7043 24.1661 12.1612 25.8647 C 12.1343 25.9545 12.0912 26.0386 12.0672 26.1302 C 8.45 27.5747 5.8889 31.1037 5.8889 35.2174 C 5.8889 40.6112 10.2921 45 15.7037 45 L 41.2222 45 C 47.7169 45 53 39.7341 53 33.2609 C 53 27.8441 49.3003 23.2719 44.2874 21.9249 ZM 19.6296 13.6957 C 21.7086 13.6957 23.5268 14.7752 24.5715 16.3973 C 23.4137 17.2953 22.3987 18.3768 21.605 19.6226 C 21.2763 19.5844 20.9437 19.5652 20.6111 19.5652 C 18.1747 19.5652 15.9797 20.5683 14.38 22.1637 C 13.9842 21.3784 13.7408 20.5052 13.7408 19.5652 C 13.7408 16.3247 16.3775 13.6957 19.6296 13.6957 ZM 41.2222 41.0869 L 41.2222 41.0869 L 15.7037 41.0869 C 12.4506 41.0869 9.8148 38.4597 9.8148 35.2174 C 9.8148 31.975 12.4506 29.3478 15.7037 29.3478 C 15.7382 29.3478 15.7698 29.3574 15.8044 29.3574 C 15.7382 29.0383 15.7037 28.7078 15.7037 28.3696 C 15.7037 25.6679 17.8996 23.4783 20.6111 23.4783 C 21.8063 23.4783 22.8875 23.9215 23.7386 24.6285 C 24.5658 20.6218 28.1237 17.6087 32.3889 17.6087 C 36.934 17.6087 40.6356 21.0441 41.1245 25.4443 C 41.157 25.4443 41.1896 25.4348 41.2222 25.4348 C 45.5603 25.4348 49.0741 28.9351 49.0741 33.2609 C 49.0741 37.5867 45.5603 41.0869 41.2222 41.0869 Z"></path>
          </g>
          <path id="Ellipse" d="M 8 36 C 8 32.134 13.1487 29 19.5 29 C 25.8513 29 31 32.134 31 36 C 31 39.866 25.8513 43 19.5 43 C 13.1487 43 8 39.866 8 36 Z"></path>
          <path id="Ellipse2" d="M 24 32.5 C 24 27.8055 30.0441 24 37.5 24 C 44.9559 24 51 27.8055 51 32.5 C 51 37.1945 44.9559 41 37.5 41 C 30.0441 41 24 37.1945 24 32.5 Z"></path>
          <path id="Ellipse3" d="M 23 22.5 C 23 18.3578 27.2532 15 32.5 15 C 37.7468 15 42 18.3578 42 22.5 C 42 26.6422 37.7468 30 32.5 30 C 27.2532 30 23 26.6422 23 22.5 Z"></path>
          <path id="Ellipse4" d="M 12 29 C 12 25.6863 15.8055 23 20.5 23 C 25.1945 23 29 25.6863 29 29 C 29 32.3137 25.1945 35 20.5 35 C 15.8055 35 12 32.3137 12 29 Z"></path>
          <path id="Ellipse5" d="M 25 39 C 25 36.2385 30.1487 34 36.5 34 C 42.8513 34 48 36.2385 48 39 C 48 41.7615 42.8513 44 36.5 44 C 30.1487 44 25 41.7615 25 39 Z"></path>
          <path id="Ellipse6" d="M 10 32.5 C 10 30.567 11.567 29 13.5 29 C 15.433 29 17 30.567 17 32.5 C 17 34.433 15.433 36 13.5 36 C 11.567 36 10 34.433 10 32.5 Z"></path>
        </g>
      </symbol>
  </svg>
</header>
<div id="page" class="hfeed site">
  <?php do_action( 'before' ); ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

  <?php if (is_category() && in_category( 'Update' )) : ?>
    <header id="masthead" role="banner" class="site-header update-header">
    <div class="badge badge-credit">Photo: Ollivier Girard/ CIFOR</div>
  <?php elseif (is_category() && in_category( 'Feature posts' )) : ?>
    <header id="masthead" role="banner" class="site-header feature-header">
    <div class="badge badge-credit">Photo: Kate Evans/ CIFOR</div>
  <?php elseif (in_category( 'News roundups' )) : ?>
    <header id="masthead" role="banner" class="site-header news-header">
    <div class="badge badge-credit">Photo: Ollivier Girard/ CIFOR</div>
  <?php elseif (in_category( 'Map of the day' )) : ?>
    <header id="masthead" role="banner" class="site-header mapoftheday-header">
    <div class="badge badge-credit">Photo: CIFOR</div>
  <?php elseif (is_single()) : ?>
    <header id="masthead" role="banner" style="background-image: url('<?php echo $image[0]; ?>'); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;" class="site-header">
  <?php else : ?>
    <header id="masthead" role="banner" class="site-header">
    <div class="badge badge-credit">Photo: Marco Simola/ CIFOR</div>
  <?php endif; ?>

    <div class="header-inner">
      <nav id="site-navigation" class="main-navigation" role="navigation">
        <a href="http://www.globalforestwatch.org/" title="GLOBAL FOREST WATCH" class="logo">&nbsp;</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Home" class="home">Blog</a>

        <div id="google_translate_element"></div>
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      </nav><!-- #site-navigation -->

      <?php if (is_single()) : ?>
        <div class="site-branding">
          <p class="post-description"><?php gfw_blog_posted_on(); ?></p>
          <div class="site-branding-sep"></div>
          <h1 class="post-title"><a href="<?php the_permalink(); ?>" rel="home"><?php the_title(); ?></a></h1>
          <div class="site-branding-sep"></div>

          <div class="entry-meta">
            <?php
              /* translators: used between list items, there is a space after the comma */
              $category_list = get_the_category_list( __( ', ', 'gfw-blog' ) );

              /* translators: used between list items, there is a space after the comma */
              $tag_list = get_the_tag_list( '', __( ', ', 'gfw-blog' ) );

              if ( ! gfw_blog_categorized_blog() ) {
                // This blog only has 1 category so we just need to worry about tags in the meta text
                if ( '' != $tag_list ) {
                  $meta_text = __( '<span class="cat-links">%2$s</span><span class="sep"><span>·</span></span>', 'gfw-blog' );
                }

              } else {
                // But this blog has loads of categories so we should probably display them here
                if ( '' != $tag_list ) {
                  $meta_text = __( '<span class="cat-links">%1$s</span><span class="sep"><span>·</span></span><span class="tags-links">%2$s</span>', 'gfw-blog' );
                } else {
                  $meta_text = __( '<span class="cat-links">%1$s</span>', 'gfw-blog' );
                }

              } // end check for categories on this blog

              printf(
                $meta_text,
                $category_list,
                $tag_list
              );
            ?>

            <?php edit_post_link( __( 'Edit', 'gfw-blog' ), '<span class="sep"><span>·</span></span><span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-meta -->
        </div>
      <?php elseif (is_category() && in_category( 'News roundups' )) : ?>
        <div class="site-branding">
          <div class="site-branding-sep top"></div>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">GFW News roundups</a></h1>
          <p class="site-description">A recurring digest of news stories on forest science, conservation, and monitoring</p>
          <div class="site-branding-sep"></div>
        </div>
      <?php elseif (is_category() && in_category( 'Map of the day' )) : ?>
        <div class="site-branding">
          <div class="site-branding-sep top"></div>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">GFW Map of the day</a></h1>
          <p class="site-description">Connecting Global Forest Watch to current events</p>
          <div class="site-branding-sep"></div>
        </div>
      <?php elseif (is_category() && in_category( 'Feature posts' )) : ?>
        <div class="site-branding">
          <div class="site-branding-sep top"></div>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">GFW Feature posts</a></h1>
          <p class="site-description">Original analysis and commentary authored by GFW experts and partners.</p>
          <div class="site-branding-sep"></div>
        </div>
      <?php elseif (is_category() && in_category( 'Update' )) : ?>
        <div class="site-branding">
          <div class="site-branding-sep top"></div>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">GFW Update</a></h1>
          <p class="site-description">Short posts on recent news, updates to the GFW site, and reports on new analysis</p>
          <div class="site-branding-sep"></div>
        </div>
      <?php else : ?>
        <div class="site-branding">
          <div class="site-branding-sep top"></div>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <p class="site-description"><?php bloginfo( 'description' ); ?></p>
          <div class="site-branding-sep"></div>
        </div>
      <?php endif; ?>
    </div><!-- .header-inner -->

    <?php if (is_single() && in_category( 'News roundups' )) : ?>
      <div class="badge badge-news"><i></i>News roundups</div>
    <?php elseif (is_single() && in_category( 'Feature posts' )) : ?>
      <div class="badge badge-feature"><i></i>Feature posts</div>
    <?php elseif (is_single() && in_category( 'Update' )) : ?>
      <div class="badge badge-updates"><i></i>Update</div>
    <?php endif; ?>
  </header><!-- #masthead -->

  <div id="content" class="site-content">
