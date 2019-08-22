/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('form-input', require('./components/FormInputComponent.vue').default);
Vue.component('form-submit', require('./components/FormSubmitComponent.vue').default);
Vue.component('form-cancel', require('./components/FormCancelComponent.vue').default);
Vue.component('form-delete', require('./components/FormDeleteComponent.vue').default);
Vue.component('form-password', require('./components/FormPasswordComponent.vue').default);
Vue.component('role-select-component', require('./components/RoleSelectComponent.vue').default);
Vue.component('vehicle-type-select-component', require('./components/VehicleTypeSelectComponent.vue').default);
Vue.component('vehicle-make-select-component', require('./components/VehicleMakeSelectComponent.vue').default);
Vue.component('vehicle-model-select-component', require('./components/VehicleModelSelectComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
