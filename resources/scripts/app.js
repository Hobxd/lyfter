import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);


//  document.addEventListener("DOMContentLoaded", function() {
  //  const items = document.querySelectorAll('.animate-in');

  //  const slideIn = () => {
    
   // items.forEach((item) => {
    //  item.classList.add('visible'); // Add class immediately
   //  });
 // };

  // Trigger slide in on page load
 // slideIn();
// });