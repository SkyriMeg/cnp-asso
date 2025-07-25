/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.scss';
import './bootstrap.js';
//import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');


import sayHello, { sayGoodbye } from './greet.js';

console.log(sayHello("Meg"));
console.log(sayGoodbye("SHEIKAH"));