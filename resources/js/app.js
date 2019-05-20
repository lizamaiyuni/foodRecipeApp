
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// libraries
window.Tagify = require('@yaireo/tagify/dist/tagify.min.js');
window.Quill = require('quill');
window.Dropzone = require('./dropzone');
Window.croppie = require('croppie');

// script
require('./main');
require('./editor');
require('./resep');
require('./profil');
