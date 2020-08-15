/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueLazyLoad from 'vue-lazyload'

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
import CookieMelding from './components/CookieMelding'
import Cookies from 'js-cookie'


Vue.component('contact-me', require('./components/Portfolio/ContactMe').default);
Vue.component('portfolio-filter-new', require('./components/Portfolio/ProjectsFilterNew').default);
Vue.component('portfolio-progress', require('./components/Portfolio/PortfolioProgress').default);
Vue.component('about-me-gallery', require('./components/Portfolio/AboutMeGallery').default);
Vue.use(VueLazyLoad);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

window.CookiePopUp = function() {
    return new Promise(resolve => {

        const ComponentClass = Vue.extend(CookieMelding);
        let instance = new ComponentClass();

        resolve(instance);

        instance.$mount();
        document.body.appendChild(instance.$el);
    })
}

document.addEventListener('DOMContentLoaded', (event) => {
    if (document.getElementById('app')) {
        const app = new Vue({
            el: '#app',
        });
    }

    let cookie = Cookies.get('cookie-popup')

    if (! cookie) {
        CookiePopUp();
    }

    // Mobile Navbar
    let navContent = document.getElementById('navbar-content')
    if (navContent) {

        let navbarButton = document.getElementById('narbar-button')

        navbarButton.addEventListener('click', event => {
            if (navContent.classList.contains('hidden')){
                navContent.classList.remove('hidden');
            } else {
                navContent.classList.add('hidden');
            }
        });
    }
});



