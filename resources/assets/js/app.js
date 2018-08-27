

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import './bootstrap';
import UIkit from 'uikit';

//External Vue Components
import { Carousel, Slide } from 'vue-carousel';



// UIkit.use(Icons);


window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

var articlecard = Vue.component('articlecard', require('./components/ArticleCard.vue'));
var componentcard = Vue.component('componentcard', require('./components/ComponentCard.vue'));
var carousel = Vue.component('UKCarousel', require('./components/carousel.vue'));
var carouselItem = Vue.component('UKCarouselElement', require('./components/carouselItem.vue'));
var gallerycard = Vue.component('gallerycard', require('./components/GalleryCard.vue'));
var mytable = Vue.component('mytable', require('./components/mytable.vue'));
var Sidebar = Vue.component('Sidebar', require('./components/Sidebar.vue')); // TODO fix the capitalization of the variable throughout the code base
var sidebarlink = Vue.component('sidebarlink', require('./components/SidebarLink.vue'));

var test = Vue.component('test', require('./components/Test.vue'));

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
        'Carousel': Carousel,
        'Slide': Slide,
    },
});

