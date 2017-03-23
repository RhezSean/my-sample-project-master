
window._ = require('lodash');



window.$ = window.jQuery = require('jquery');
require('bootstrap-sass/assets/javascripts/bootstrap');


window.Vue = require('vue');
require('vue-resource');


Vue.http.interceptors.push((request, next) => {
    request.headers['X-CSRF-TOKEN'] = Laravel.csrfToken;

    next();
});
