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

/* =Global
-------------------------------------------------------------- */
a {
  color: #9bdbf6;
}
body {
  color: #fff;
  background: #004193;
  background-image: url("images/water.jpg");
  background-position: center top;
  background-repeat: repeat-x;
}
pre {
  background: #e0e6e9;
  color: #000;
}
#content {
  background: #0a61af; /* IE */
  background: rgba(24, 145, 218, 0.6);
} 


/* =Header
-------------------------------------------------------------- */


/* =Menu
-------------------------------------------------------------- */
#access,
#access2 {
}
#access a,
#access2 a {
  color: #004193;
}
#access ul ul,
#access2 ul ul {
  box-shadow: 0 3px 3px rgba(0,0,0,0.2); /* IE9, Firefox 4, Chrome, Opera, and Safari 5.1.1 */
}
#access ul ul a,
#access2 ul ul a {
  background: #1891da;
  color: #fff;
}
#access li:hover > a,
#access2 li:hover > a {
  color: #1891da;
}
#access ul ul a:hover,
#access2 ul ul a:hover {
  background: #fff;
  color: #004193;
}
#access ul ul li:hover > a,
#access2 ul ul li:hover > a {

}

/* =Content
-------------------------------------------------------------- */
a .entry-title {
  color: #fff;
}

/* Notices */
.post .notice {
  background: rgb(167,49,49);
}

/* Image Attachments */
.image-attachment .entry-content .entry-attachment {
  background: #eee;
}


/* =Forms
-------------------------------------------------------------- */
#s:hover,
#s:focus {
  background: #9bdbf6;
}
input#s {
  color: #004193;
  background: #9bdbf6;
}
/* Class for labelling required form items */
.required {
  color: #d43837;
}


/* =Footer
-------------------------------------------------------------- */
#colophon {
  background: #1891da; /* IE */
  background: rgba(24, 145, 218, 0.6);
}
#contactinfo h2 {
  color: #fff;
}
#buttons img {
  background: #fff;
}
#buttons img:hover {
  background: #9bdbf6;
}
#buttons #contact,
#buttons #prayer {
  color: #0055c0;
  background: #fff;
}
#buttons #contact:hover,
#buttons #prayer:hover {
  background: #9bdbf6;
}


/* =Next Steps
-------------------------------------------------------------- */
.ns-title {
  background: #ccd0d3; /* IE */
  background: rgba(224,230,233,0.9);
  color: #004193;
}
#ns1:hover .ns-title,
#ns2:hover .ns-title,
#ns3:hover .ns-title {
  background: #e0e6e9; /* IE */
  background: rgba(224,230,233,1);
}


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


/* =Events Calendar
-------------------------------------------------------------- */
.gce-page-grid .gce-calendar .gce-month-title {
  color: #fff;
}
.gce-page-grid .gce-calendar,
.gce-caption {
  color: #fff!important;
}
.gce-page-grid .gce-calendar .gce-has-events {
color: #fff!important;
background-color: #ff9a00;
}
.gce-page-grid .gce-calendar .gce-today {
background-color: #0055c0!important;
}

/* =Article Template
-------------------------------------------------------------- */
#article-teaser {
  background: #0a61af; /* IE */
  background: rgba(24, 145, 218, 0.6);
}
#comments {

}
