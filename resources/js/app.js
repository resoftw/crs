
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vuetify from 'vuetify';
Vue.use(Vuetify);
import VuePerfectScrollbar from 'vue-perfect-scrollbar';
Vue.component('vue-perfect-scrollbar',VuePerfectScrollbar);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('main-menu', require('./components/MainMenu.vue'));
Vue.component('tool-bar', require('./components/Toolbar.vue'));
Vue.component('login-page',require('./components/Login.vue'));
Vue.component('user-page',require('./components/UserPage.vue'));

const app = new Vue({
	data(){
		return {
			drawer:null,
			cards: ['Good', 'Best', 'Finest'],
		}
	},
    el: '#app',
 	methods: {
      getImage () {
        const min = 550
        const max = 560

        return Math.floor(Math.random() * (max - min + 1)) + min
      }
    }	

});
