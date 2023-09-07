$(document).ready(function() {
     $("#small").click(function() {
         $("a,p,button,ol,ul,li,h1,h2,h3,h4,h5,h6,form")
             .children().each(function() {
                 let fontsize = parseInt($(this).css("font-size"));
                 fontsize = fontsize - 2 + "px";
                 $(this).css({
                     'font-size': fontsize
                 });
             }
         );
     });
 });
 $(document).ready(function() {
     $("#normal").click(function() {
         $("a,p,button,ol,ul,li,h1,h2,h3,h4,h5,h6,form")
             .children().each(function() {
                let fontsize = parseInt($(this).css("font-size"));
                 fontsize = "" 
                 $(this).css({
                     'font-size': fontsize
                 });
             }
         );
     });
 });
 $(document).ready(function() {
     $("#large").click(function() {
         $("a,p,button,ol,ul,li,h1,h2,h3,h4,h5,h6,form")
             .children().each(function() {
                let fontsize = parseInt($(this).css("font-size"));
                 fontsize = fontsize + 2 + "px";
                 $(this).css({
                     'font-size': fontsize
                 });
             }
         );
     });
 });