<?php header('Content-type: text/css'); ?>
/*
Theme Name: LifePointe
Author: Matt Beall
Author URI: http://mattbeall.me
Description: A theme built for LifePointe Church of Fort Collins, Colorado featuring custom post types for Staff and Sermon Archives, custom "tabs" and "next steps" sidebars, custom menus to appear on left and right of logo image, and custom page template for pages displayed only in Modal windows. Built to work with Nivo Slider, Formidable Forms, and Lightbox Plus. Also supports "thmx" mime-type for uploads.
Version: 0.7.6
License: GNU General Public License
License URI: license.txt
Tags: custom-menu, sticky-post, microformats, rtl-language-support, translation-ready, full-width-template, post-formats, theme-options, custom-post-type, custom-sidebars, lightbox-plus-ready, nivo-slider-ready

*/


/* =More Link
-------------------------------------------------------------- */
a.more-link {
    text-shadow: none;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
    box-shadow: 0 1px 2px rgba(0,0,0,.2);
}
.more-link {
    color: #004193;
    background: #fff;
    background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#e0e6e9));
    background: -moz-linear-gradient(top,  #fff,  #e0e6e9);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#e0e6e9');
}
.more-link:hover {
    background: #e0e6e9;
    background: -webkit-gradient(linear, left top, left bottom, from(#e0e6e9), to(#fff));
    background: -moz-linear-gradient(top,  #e0e6e9,  #fff);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#e0e6e9', endColorstr='#ffffff');
}
.more-link:active {
    background: #a5afba; /* IE */
    background: -webkit-gradient(linear, left top, left bottom, from(#a5afba), to(#e0e6e9));
    background: -moz-linear-gradient(top,  #a5afba,  #e0e6e9);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#a5afba', endColorstr='#e0e6e9');
}


/* =[lbutton]
-------------------------------------------------------------- */
a.lbutton {
    text-shadow: 0 1px 1px rgba(0,0,0,.3);
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
    box-shadow: 0 1px 2px rgba(0,0,0,.2);
}
.lbutton.blue {
    color: #fff;
    background: #004193;
    background: -webkit-gradient(linear, left top, left bottom, from(#1891da), to(#004193));
    background: -moz-linear-gradient(top,  #1891da,  #004193);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#1891da', endColorstr='#004193');
}
.lbutton.blue:hover {
    background: #1891da;
    background: -webkit-gradient(linear, left top, left bottom, from(#004193), to(#1891da));
    background: -moz-linear-gradient(top,  #004193,  #1891da);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#004193', endColorstr='#1891da');
}
.lbutton.blue:active {
    background: #0055c0; /* IE */
    background: -webkit-gradient(linear, left top, left bottom, from(#004193), to(#0055c0));
    background: -moz-linear-gradient(top,  #004193,  #0055c0);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#004193', endColorstr='#0055c0');
}
.lbutton.gray {
    text-shadow: none;
    color: #004193;
    background: #fff;
    background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#e0e6e9));
    background: -moz-linear-gradient(top,  #fff,  #e0e6e9);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#e0e6e9');
}
.lbutton.gray:hover {
    background: #e0e6e9;
    background: -webkit-gradient(linear, left top, left bottom, from(#e0e6e9), to(#fff));
    background: -moz-linear-gradient(top,  #e0e6e9,  #fff);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#e0e6e9', endColorstr='#ffffff');
}
.lbutton.gray:active {
    background: #a5afba; /* IE */
    background: -webkit-gradient(linear, left top, left bottom, from(#a5afba), to(#e0e6e9));
    background: -moz-linear-gradient(top,  #a5afba,  #e0e6e9);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#a5afba', endColorstr='#e0e6e9');
}


/* =[lslide] and [ltoggle]
-------------------------------------------------------------- */
.lslide,
.ltoggle {
  -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
  -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
  box-shadow: 0 1px 2px rgba(0,0,0,.2);
    text-shadow: none;
    color: #004193;
    background: #ffffff;
    background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#e0e6e9));
    background: -moz-linear-gradient(top,  #fff,  #e0e6e9);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#e0e6e9');
}
.lslide:hover,
.ltoggle:hover {
    background: #e0e6e9;
    background: -webkit-gradient(linear, left top, left bottom, from(#e0e6e9), to(#fff));
    background: -moz-linear-gradient(top,  #e0e6e9,  #fff);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#e0e6e9', endColorstr='#ffffff');
}
a.lslide:active,
a.ltoggle:active {
    background: #a5afba; /* IE */
    background: -webkit-gradient(linear, left top, left bottom, from(#a5afba), to(#e0e6e9));
    background: -moz-linear-gradient(top,  #a5afba,  #e0e6e9);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#a5afba', endColorstr='#e0e6e9');
}


/* =Formidable Forms
-------------------------------------------------------------- */
.form-field input[type="text"] {
  background: rgb(224,230,233);
  color: rgb(0,85,192);
}
.form-field textarea {
  background: rgb(224,230,233);
  color: rgb(0,85,192);
}
#recaptcha_table {
  background: #fff;
}
#form_flipside .form-field input[type="text"] {
  background: rgb(224,230,233);
  color: rgb(0,85,192);
}


/* =TheThe Sliding Panel
-------------------------------------------------------------- */
#tspBottomPanel .thethe-content a {
  color: #fff;
}


/* =Sermon List
-------------------------------------------------------------- */
.sermon-list {

}
.passage a {
  color: #9bdbf6;
}


/* =RefTagger
-------------------------------------------------------------- */
.lbsTooltip {
  background: #e0e6e9;
  border: 1px solid #004193;
}
.lbsTooltipHeader {
  background: #ffcb00;
  color: #fff;
}
.lbsTooltipBody p, .lbsTooltipBody span {
  color: #000;
}
.lbsTooltipFooter a:link, .lbsTooltipFooter a:visited, .lbsTooltipFooter a:hover {
  color: #004193;
}
.lbsTooltipBody .verse-ref {
  color: #e0e6e9;
}

/* =Article Template
-------------------------------------------------------------- */
#article-teaser {
  background: #0a61af; /* IE */
  background: rgba(24, 145, 218, 0.6);
}
#comments {

}
