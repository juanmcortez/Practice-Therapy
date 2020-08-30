// ***** Imports *****
// lodash
window._ = require('lodash');
// bootstrap
try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
} catch (e) { }
// axios
window.axios = require('axios');
// Vue
window.Vue = require('vue');
import VueRouter from 'vue-router';
import { Routes } from './routes/index.js';
// ***** Imports *****


// ***** Configs *****
// axios
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.defaults.timeout = 2500;
axios.defaults.responseType = 'json';
axios.defaults.responseEncoding = 'utf8';
// Vue
Vue.use(VueRouter);
Vue.config.productionTip = false;
// Router
const Router = new VueRouter({
    mode: 'history',
    routes: Routes,
    linkExactActiveClass: 'current'
})
// ***** Configs *****


// ***** Main component *****
import PracticeTherapy from './components/layout/PracticeTherapy';
// ***** Main component *****


// ***** Actions *****
Router.beforeEach((to, from, next) => {
    // Update the page title.
    document.title = to.meta.title + ' | ' + process.env.MIX_APP_NAME;

    next();
});
// ***** Actions *****


// ***** Run the app *****
const PTApp = new Vue({
    el: '#PracticeTherapy',
    components: { 'practicetherapy': PracticeTherapy },
    router: Router
});
// ***** Run the app *****
