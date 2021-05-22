//import Vue from 'vue';
//window.Vue = Vue;
import Vue from 'vue';
import Vuex from 'vuex'
window.Vue = require('vue');
require('./bootstrap');

Vue.use(Vuex);

//import Vuex from 'vuex';

import store from './store/index';

//Vue.use(Vuex);

Vue.component('addressInfo', require('./components/Addresses.vue').default);
Vue.component('createAddress', require('./components/CreateAddress.vue').default);
//Vue.component('addresses', require('./components/Addresses.vue').default);
//Vue.component('createAddress', require('./components/CreateAddress.vue').default);

const app = new Vue({
  el: '#app',
  store
});
