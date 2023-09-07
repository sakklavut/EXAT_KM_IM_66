    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/font_size.js"></script>
    <script src="assets/js/change_color.js"></script>
    <script src="assets/js/calendar.js"></script> 
    <!-- <script src="assets/js/header.js"></script> -->
    
    <script>
      let count = 0;
      let output = document.getElementById('output_vote');
      let output1 = document.getElementById('output_vote1');
      let output2 = document.getElementById('output_vote2');
      let output3 = document.getElementById('output_vote3');
      let output4 = document.getElementById('output_vote4');


      function countClicks()
          {
              count = count + 1;
              output.innerHTML = count;
          }
          function countClicks1()
          {
              count = count + 1;
              output1.innerHTML = count;
          }
          function countClicks2()
          {
              count = count + 1;
              output2.innerHTML = count;
          }
          function countClicks3()
          {
              count = count + 1;
              output3.innerHTML = count;
          }
          function countClicks4()
          {
              count = count + 1;
              output4.innerHTML = count;
          }

          
    </script>

  </body>
</html>