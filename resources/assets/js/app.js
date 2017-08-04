
require('./bootstrap');

window.Vue = require('vue');

import VueInstantSearch from 'vue-instantsearch';

Vue.use(VueInstantSearch);

Vue.component('home-item', require('./components/HomeItem.vue'));

const app = new Vue({
    el: '#app'
});
