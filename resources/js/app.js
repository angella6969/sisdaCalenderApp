import './bootstrap';
import Vue from 'vue';
import Calendar from './components/Calendar.vue';
import toastr from 'toastr';
window.toastr = toastr;


Vue.component('calendar', Calendar);

const app = new Vue({
  el: '#app',
});
