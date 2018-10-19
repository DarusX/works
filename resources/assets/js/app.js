
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

require('@fortawesome/fontawesome-free/js/all')


window.swal = require('sweetalert')

window.Vue = require('vue');

window.ClassicEditor = require('@ckeditor/ckeditor5-build-classic/build/ckeditor')

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('table-activities', require('./components/TableActivities.vue'));




$(document).ready(function () {
    const app = new Vue({
        el: '#app'
    });
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
    $('[data-toggle="tooltip"]').tooltip({
        html: true
    })
    $(".destroy").click(function (event) {
        event.preventDefault()
        swal({
            title: "¿Desea eliminar este elemento?",
            icon: "warning",
            buttons: ["No", "Sí"],
            dangerMode: true,
        }).then((confirmation) => {
            if(confirmation) {
                $(".form-destroy").attr({
                    action: $(this).attr("href"),
                    method: "POST"
                }).submit()
            }
        })
    })
    ClassicEditor
        .create(document.querySelector('.ckeditor'))
        .then(editor => {
        })
        .catch(error => {
            console.error(error);
        });

});

