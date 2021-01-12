// Laravel defaults
window._ = require('lodash');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Components
import ExampleComponent from './components/ExampleComponent';

// Vue
import Vue from 'vue';

Vue.config.productionTip = false;
Vue.config.devtools = true;

Vue.component('example-component', ExampleComponent);

new Vue({
  el: "#app"
});
