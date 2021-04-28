/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { toFinite } = require('lodash');

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

var coll = document.getElementsByClassName("coll");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}


let td = document.getElementsByClassName('totalprice');
let totalcol = document.querySelector('#total');
let total = 0;
let trs = document.querySelectorAll('tr');

for(let i = 1; i < trs.length; i++) {
  let price = trs[i].cells[1].innerHTML.slice(0, -1);
  console.log(price);
  var quantity = trs[i].cells[3].innerHTML;
  var answer = quantity * price;
  console.log(answer);
  trs[i].cells[5].innerHTML = answer.toFixed(2) + "$";
}

for (i = 0; i < td.length; i++) {
  let thistd = 0;
  thistd = td[i].innerHTML;//.slice(0, -1);
  total =  total + parseFloat(thistd);
}

totalcol.innerHTML = total.toFixed(2);