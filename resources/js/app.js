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
document.addEventListener('DOMContentLoaded', (event) => {
    if (document.getElementById('app')) {
        const app = new Vue({
            el: '#app',
        });
    }

    /**
     * Typing thing on the homepage
     */
    if (document.getElementById('typing')) {
        var i     = 0;
        var number = 1;
        var speed = 150;

        setTimeout(typeWriter, 500, '<?php');
        setTimeout(typeWriter, 1500, 'namespace');
        setTimeout(typeWriter, 3000, 'Model');
        setTimeout(typeWriter, 4000, ';');
        setTimeout(typeWriter, 4200, 'class');
        setTimeout(typeWriter, 5100, 'JasperStolwijk');
        setTimeout(typeWriter, 7300, '{');
        setTimeout(typeWriter, 7500, 'const');
        setTimeout(typeWriter, 8300, 'PHP_KNOWLEDGE');
        setTimeout(typeWriter, 10450, '=');
        setTimeout(typeWriter, 10650, '"80%"');
        setTimeout(typeWriter, 11500, ';');
        setTimeout(typeWriter, 12000, 'const');
        setTimeout(typeWriter, 13000, 'MYSQL_KNOWLEDGE');
        setTimeout(typeWriter, 15500, '=');
        setTimeout(typeWriter, 15700, '"40%"');
        setTimeout(typeWriter, 16550, ';');
        setTimeout(typeWriter, 17200, 'const');
        setTimeout(typeWriter, 18200, 'FRONT_END_KNOWLEDGE');
        setTimeout(typeWriter, 21250, '=');
        setTimeout(typeWriter, 21550, '"60%"');
        setTimeout(typeWriter, 22400, ';');
        setTimeout(typeWriter, 22900, 'public function');
        setTimeout(typeWriter, 25600, 'talking');
        setTimeout(typeWriter, 26950, '() {');
        setTimeout(typeWriter, 27700, 'echo ');
        setTimeout(typeWriter, 28600, '"Enjoy my portfolio website!"');
        setTimeout(typeWriter, 33250, ';');
        setTimeout(typeWriter, 33550, '}');
        setTimeout(typeWriter, 33850, '}');

        function typeWriter(txt) {
            if (i < txt.length) {
                document.getElementById(`typing-${number}`).innerHTML += txt[i];
                i++;
                setTimeout(typeWriter, speed, txt);
            } else {
                number++;
                i = 0;
            }
        }
    }


});

