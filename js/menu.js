$(document).ready(function name() {
   $('.menu li:has(ul)').click(function name(e) {
       e.preventDefault();
   });

   $('ul').click(function name(s) {
       s.stopPropagation();
   });
});