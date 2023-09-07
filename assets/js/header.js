   
        // เมนู
    function menu() {
      const x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
    
    // สลับ text กับ password 
    $(function(){
         // กรณีใช้ร่วมกับ bootstrap และ fontawesome 
         $(document.body).on("click","[class*='fa-eye']",function(){
             $(this).toggleClass("fa-eye-slash fa-eye");  
             let ele = $(this).closest(".input-group-append").siblings(".pass-swap");
             let swap_attr = (ele.attr("type")=="password")?"text":"password";
             ele.attr("type",swap_attr);         
         });     
    });