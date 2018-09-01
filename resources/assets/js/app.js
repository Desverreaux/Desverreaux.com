

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import './bootstrap';
import UIkit from 'uikit';



//External Vue Components

// UIkit.use(Icons);


window.Vue = require('vue');



import VueCarousel from 'vue-carousel';

Vue.use(VueCarousel);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//NAMING CONVENTIONS NOTE: both the component reference and the filename need to be ALL LOWERCASE because of issues with exporting to ubuntu
//  as well as different browser environments interpreting the variable declarations wrong. 

// [dev.]{component-name}.vue


var ukcarousel = Vue.component('ukcarousel', require('./components/dev.ukcarousel.vue'));
var ukcarouselelement = Vue.component('ukcarouselelement', require('./components/dev.Ukcarouselelement.vue'));

var slider = Vue.component('slider', require('./components/dev.slider.vue'));
var slideritem = Vue.component('slideritem', require('./components/dev.sliderItem.vue'));

var test = Vue.component('test', require('./components/Test.vue'));

//------------------------------------------------

var Sidebar = Vue.component('sidebar', require('./components/Sidebar.vue')); // TODO fix the capitalization of the variable throughout the code base
var sidebarlink = Vue.component('sidebarlink', require('./components/SidebarLink.vue'));


// Landing Page -----------------------------------------------------------------------------------
var landing = Vue.component('landing', require('./components/PageSpecific/Landing/Content.vue'));
var splash = Vue.component('splash', require('./components/Splash.vue'));
// var parentcomponent = Vue.component('parentcomponent', require('./components/ParentComponent.vue'));


const app = new Vue({
    el: '#app',

    // data: {'propvar': null},
    // created: function() {
    //     if (typeof(propvar) != "undefined") {
    //         this.propvar = propvar;
    //     }
    // }
    components: {

    },
});

