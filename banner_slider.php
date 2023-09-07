<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-xl-12">
            <div class="owl-carousel owl-theme" id="banner_slider">
                    <div class="item box_banner_slider" title="CoPs Community of Proectice">
                        <a href="#">
                            <img src="assets/images/banner_1.png" class="img_banner_slider"  alt="">
                        </a>
                    </div>
                    <div class="item box_banner_slider" title="MOU ระหว่าง กกพ. และหน่วยงานต่างๆ">
                        <a href="#">
                            <img src="assets/images/banner_2.png" class="img_banner_slider"  alt="">
                        </a>
                    </div>
                    <div class="item box_banner_slider" title="ต้องพิสูจน์ รางวัล และเกียรติคุณ">
                        <a href="#">
                            <img src="assets/images/banner_3.png" class="img_banner_slider"  alt="">
                        </a>
                    </div>
                    <div class="item box_banner_slider" title="วิทยานิพนธ์และสารพิพนธ์">
                        <a href="#">
                            <img src="assets/images/banner_4.png" class="img_banner_slider"  alt="">
                        </a>
                    </div>
                    <div class="item box_banner_slider" title="Gallery">
                        <a href="#">
                            <img src="assets/images/banner_5.png" class="img_banner_slider"  alt="">
                        </a>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>


<script>
    // icon 
  $('#banner_slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:4
        },
        1000:{
            items:5
        }
    }
})

</script>