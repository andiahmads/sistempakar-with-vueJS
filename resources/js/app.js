/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'
import { Form} from 'vform';
window.Form = Form;

import VueFormWizard from 'vue-form-wizard'
import 'vue-form-wizard/dist/vue-form-wizard.min.css'
import { ValidationProvider } from 'vee-validate';
import swal from 'sweetalert2'
window.swal = swal;

const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 6000
});

window.toast = toast;

Vue.component('ValidationProvider', ValidationProvider);

Vue.use(VueFormWizard);
let routes = [
    {path: '/diagnosa', component: require('./components/Diagnosa.vue').default},

]

Vue.component('diagnosa-component', require('./components/Diagnosa.vue').default);
Vue.component('chart-diagnosa', require('./components/Chart.vue').default);


Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue')
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue')
);




const router = new VueRouter({
    routes
})


const app = new Vue({
    el: '#app',
    router,
});
