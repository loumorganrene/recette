/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

require('./components/Example');

/**
* Generate a dynamic slug for each recipe like in WP
*/

//récupère l'élément input title
let title = document.querySelector('#recipeTitle');

//récupère l'élément input slug
let slug = document.querySelector('#urlSlug');


title.addEventListener('focusout', function(){
//récupère la valeur de l'input title lors de la perte de focus de l'input et remplace les espaces par des - et insère cette nouvelle valeur dans l'input slug 
slug.value = title.value.replaceAll(' ', '-');
});