
require('./bootstrap');

window.Vue = require('vue');

import VueInstantSearch from 'vue-instantsearch';
var gmap = require('vue2-google-maps');

Vue.use(VueInstantSearch);
Vue.use(gmap, {
    load: {
        key: 'AIzaSyDYL5UN55U8ZsjRiJftSm-WuH5ekzq0aTk'
    }
});

Vue.component('home-item', require('./components/HomeItem.vue'));

const app = new Vue({
    el: '#app'
});
