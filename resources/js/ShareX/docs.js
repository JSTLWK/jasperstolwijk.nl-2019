window.Vue = require('vue');

Vue.component('sharex-docs', require('../components/ShareX/Docs').default);


const app = new Vue({
    el: '#docs',
});
