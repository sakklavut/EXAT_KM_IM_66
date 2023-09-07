<div class="bg_header">
    <div class="container">
        <div class="box_header">
            <div class="box_login">
                <div class="login">
                    <div class="p-1">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="p-1">
                        <a href="#" title="เข้าสู่ระบบ" data-toggle="modal" data-target="#login"><p class="m-0 text_login">เข้าสู่ระบบ</p></a>
                    </div>
                    <div class="p-1">
                        <i class="fa-solid fa-bell"></i>
                        <!-- <a href="http://" class="notification"> </a> -->
                    </div>
                </div>
            </div>
            <div class="text-center box_logo">
                <img src="assets/images/logo.png" class="logo" alt="">
            </div>
            <div class="box_chage_size">
                <div class="change_size">
                    <div class="d-flex">
                        <div>
                            <button class="m-1 button_sm">
                                <p class="size_sm" id="small" value="small">ก</p>
                            </button>
                        </div>
                        <div>
                            <button class="m-1 button_sm">
                                <p class="size_md" id="normal" value="normal">ก</p>
                            </button>
                        </div>
                        <div>
                            <button class="m-1 button_sm">
                                <p class="size_xl" id="large" value="large">ก</p>
                            </button>
                        </div>
                    </div>
                 </div>
                 <div class="change_color">
                    <div class="d-flex">
                        <div class="button_white m-1" type="button" id="normally_bg" onclick="normally_bg();"></div>
                        <div class="button_yellow m-1" type="button"  id="yellow_bg" onclick="yellow_bg();"></div>
                        <div class="button_black m-1" type="button" id="black_bg" onclick="black_bg();"></div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    
    <div class="container box_menu">
        <div class="row">
            <div class="col-xl-12 mt-3 menu_box">
                <div class="topnav" id="myTopnav">
                    <a href="#" class="active" title="หน้าแรก"><p class="m-0">หน้าแรก</p></a>
                    <a href="#" class="KM" title="เกี่ยวกับ KM"><p class="m-0">เกี่ยวกับ KM</p></a>
                    <a href="#" class="information" title="คลังความรู้"><p class="m-0">คลังความรู้</p></a>
                    <a href="#" class="IM" title="เกี่ยวกับ IM"><p class="m-0">เกี่ยวกับ IM</p></a>
                    <a href="#" class="ibrary" title="คลังนวัตกรรม"><p class="m-0">คลังนวัตกรรม</p></a>
                    <a href="javascript:void(0);" class="icon" onclick="menu()">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>



    <div class="container box_form">
        <form action="">
            <div class="row text-center">
                <div class="col-xl-10 col-md-8 col-lg-10">
                        <input type="text" class="form_search" placeholder="กรอกคำค้นหา"> 
                        <select class="list_seach">
                            <option><p class="m-0">เลือกหมวด</p></option>
                            <option><p class="m-0">เกี่ยวกับ KM</p></option>
                            <option><p class="m-0">คลังความรู้</p></option>
                            <option><p class="m-0">เกี่ยวกับ IM</p></option>
                            <option><p class="m-0">คลังนวัตกรรม</p></option>
                        </select>                        
                </div>
                <div class="col-xl-2 col-md-4 col-lg-2 text-center">
                     <button type="button" class="btn btn-search-form" title="ค้นหา">
                        <div class="box_search">
                            <div class="mt-0 ml-2">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div> 
                            <div class="mt-0 ml-2">
                                <p class="m-0 text_search" >ค้นหา</p>
                            </div> 
                        </div>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="d-flex">
                        <div class="box_tag text-center mt-2 m-1 p-1">
                            <p  type="button"  title="#เกี่ยวกับ KM" >#เกี่ยวกับ KM</p>
                        </div>
                        <div class="box_tag text-center mt-2 m-1 p-1">
                            <p  type="button"  title="#เกี่ยวกับ KM" >#เกี่ยวกับ KM</p>
                        </div>
                        <div class="box_tag text-center mt-2 m-1 p-1">
                            <p  type="button"  title="#เกี่ยวกับ KM" >#เกี่ยวกับ KM</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <div class="container box_icon">
        <div class="container-fluid mt-2 mb-2">
            <div class="row">
                <div class="col-xl-12">
                    <div class="owl-carousel owl-theme" id="icon_serve">
                        <div class="item">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="bg_icon" title="บริหารการจัดการความรู้">
                                        <div class="row">
                                            <div class="col-xl-12 text-center">
                                                <img src="assets/icon/icon_1.png" class="icon" alt="">
                                            </div>
                                       </div>
                                        <div class="row">
                                            <div class="col-xl-12 text-center">
                                                <a href="#"><p class="m-0 text_icon">บริหารการจัดการความรู้ (CoPs)</p></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="bg_icon" title="คลังความรู้">
                                        <div class="row">
                                            <div class="col-xl-12 text-center">
                                                <img src="assets/icon/icon_2.png" class="icon" alt="">
                                            </div>
                                       </div>
                                        <div class="row">
                                            <div class="col-xl-12 text-center">
                                                <a href="#"><p class="m-0 text_icon">คลังความรู้</p></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="bg_icon" title="แผนยุทธศาสตร์ลูกค้าและตลาด">
                                        <div class="row">
                                            <div class="col-xl-12 text-center">
                                                <img src="assets/icon/icon_3.png" class="icon" alt="">
                                            </div>
                                       </div>
                                        <div class="row">
                                            <div class="col-xl-12 text-center">
                                                <a href="#"><p class="m-0 text_icon">แผนยุทธศาสตร์ลูกค้าและตลาด</p></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="bg_icon" title="โครงการประกวดผลงาน">
                                        <div class="row">
                                            <div class="col-xl-12 text-center">
                                                <img src="assets/icon/icon_4.png" class="icon" alt="">
                                            </div>
                                       </div>
                                        <div class="row">
                                            <div class="col-xl-12 text-center">
                                                <a href="#"><p class="m-0 text_icon">โครงการประกวดผลงาน</p></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="bg_icon" title="การศึกษาดูงาน">
                                        <div class="row">
                                            <div class="col-xl-12 text-center">
                                                <img src="assets/icon/icon_5.png" class="icon" alt="">
                                            </div>
                                       </div>
                                        <div class="row">
                                            <div class="col-xl-12 text-center">
                                                <a href="#"><p class="m-0 text_icon">การศึกษาดูงาน</p></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="bg_icon" title="Gallery">
                                        <div class="row">
                                            <div class="col-xl-12 text-center">
                                                <img src="assets/icon/icon_6.png" class="icon" alt="">
                                            </div>
                                       </div>
                                        <div class="row">
                                            <div class="col-xl-12 text-center">
                                                <a href="#"><p class="m-0 text_icon">Gallery</p></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="d-flex justify-content-end">
            <div class="bg_quiz">
                <img src="assets/icon/icon_quiz.png" alt="">
            </div>
            <!--  คุยกับน้องการทาง -->
            <!-- <div class="bg_chat_bot">
                <div class="d-flex">
                    <div class="p-1">
                        <img src="assets/icon/icon_chat.png" alt="">
                    </div>
                    <div class="p-1" type="button" onclick="">
                        <p class="text_chat_bot">
                            คุยกับน้องการทาง
                        </p>
                        
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- chat_bot -->
    <df-messenger class="chat_demo" chat-title="คุยกับน้องการทาง" agent-id="2004860f-f1f2-4981-a367-26d5feb3ba15" language-code="th"> </df-messenger>




    <!-- The Modal -->
    <div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal_login">
        <span class="close">&times;</span>
        <div class="box_modal_login">
            <div class="row">
                <div class="col-xl-12">
                    <img src="assets/images/logo.png" class="logo_modal" alt=""> 
                </div>
            </div>
            <form action="">
                <div class="row">
                    <div class="col-xl-12 mb-1">
                        <input type="text" class="form_modal" placeholder="Username">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 mb-1">
                        <input type="Password" class="form_modal" placeholder="Password">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <button class="button_login">
                                เข้าสู่ระบบ
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>



  <!-- [ Modal login  ] -->
<div class="modal fade " id="login" tabindex="-1">
    <div class="modal-dialog ">
        <div class="modal-content_login">
            <div class="box_modal_login">
                <div>
                    <div class="row">
                        <div class="col-xl-12 text-center">
                            <img src="assets/images/logo.png" class="logo_modal" alt=""> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="input-group has-validation  p-1">
                                <span class="input-group-text" >
                                    <i class="fa-solid fa-user-tie"></i>
                                </span>
                                <input type="text" class="form-control" id="#" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="input-group has-validation  p-1">
                                <span class="input-group-text" >
                                    <i class="fa-solid fa-right-to-bracket"></i>
                                </span>
                                <input type="password" class="form-control pass-swap" placeholder="รหัสผ่าน">
                                <span class="input-group-text input-group-append">
                                        <i class="fa fa-eye icon_eye_login"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 text-center">
                            <button type="submit" class="btn btn-login button_login" data-toggle="modal" data-target="#confirm_login" data-dismiss="modal">
                                    เข้าสู่ระบบ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal confirm_login  -->
<div class="modal fade" id="confirm_login" tabindex="-1" aria-labelledby="confirm_login" data-bs-toggle="modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center">
        <i class="fa-solid fa-square-check icon_check"></i>
        <p class="mt-2 mb-0"> เข้าสู่ระบบเรียบร้อยแล้ว</p>
      </div>
    </div>
  </div>
</div>



<script>
 // สไล icon 
    $('#icon_serve').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:4
            },
            1000:{
                items:6
            }
        }
    })

  // กรณีใช้ร่วมกับ bootstrap และ fontawesome 
  $(document.body).on("click","[class*='fa-eye']",function(){
         $(this).toggleClass("fa-eye-slash fa-eye");  
         let ele = $(this).closest(".input-group-append").siblings(".pass-swap");
         let swap_attr = (ele.attr("type")=="password")?"text":"password";
         ele.attr("type",swap_attr);         
     });     

        // เมนู
      function menu() {
      let x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
    
</script> 
