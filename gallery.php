<?php include ("comtop.php");?>
<?php include ("header_sub.php");?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/more_knowledge.css">
</head>

<body>

    <div class="h_bg">
        <h2 class="h-knowledge">
            <p><br>
                Gallery
            </p>
        </h2>
        <nav aria-label="breadcrumb" class="sec-knowledge">
            <ol class="breadcrumb" style="justify-content: center;">
                <li class="breadcrumb-item active" aria-current="page">หน้าหลัก</li>
            </ol>
        </nav>
        <div class="line_h_m"></div>
    </div>
    <br><br>
    <div class="container box_form">
        <!--  container start -->
        <form action="">
            <div class="row text-center">
                <div class="col-xl-10 col-md-8 col-lg-10">
                    <input type="text" class="form_search" placeholder="กรอกคำค้นหา">
                    <select class="list_seach">
                        <option>
                            <p class="m-0">เลือกหมวด</p>
                        </option>
                        <option>
                            <p class="m-0">เกี่ยวกับ KM</p>
                        </option>
                        <option>
                            <p class="m-0">คลังความรู้</p>
                        </option>
                        <option>
                            <p class="m-0">เกี่ยวกับ IM</p>
                        </option>
                        <option>
                            <p class="m-0">คลังนวัตกรรม</p>
                        </option>
                    </select>
                </div>
                <div class="col-xl-2 col-md-4 col-lg-2 text-center">
                    <button type="button" class="btn btn-search-form" title="ค้นหา">
                        <div class="box_search">
                            <div class="mt-0 ml-2">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <div class="mt-0 ml-2">
                                <p class="m-0 text_search text-center">ค้นหา</p>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="d-flex">
                        <div class="box_tag text-center mt-2 m-1 p-1">
                            <p type="button" title="#เกี่ยวกับ KM">#เกี่ยวกับ KM</p>
                        </div>
                        <div class="box_tag text-center mt-2 m-1 p-1">
                            <p type="button" title="#เกี่ยวกับ KM">#เกี่ยวกับ KM</p>
                        </div>
                        <div class="box_tag text-center mt-2 m-1 p-1">
                            <p type="button" title="#เกี่ยวกับ KM">#เกี่ยวกับ KM</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <br>
        <!-- row1 start -->
        <div class="row">
            <div class="col-xl-6 col-md-6 col-lg-6 mb-2">
                <div class="row box_more">
                    <!-- img box -->
                    <div class="col-md-7 col-lg-5 col-xl-5 ">
                        <div class="box_konwledge_row">
                            <div>
                                <div class="img_size">
                                    <img src="assets/images/iStock-1412621642 2.png" alt="" class="cover_main">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="box_day_more">
                                    <p class="text_day"><span class="h_text_day">8</span> <br> ก.ย. <br> 2566</p>
                                </div>
                                <div class="box_view_more">
                                    <div class="d-flex">
                                        <div class="pt-1 pl-1">
                                            <i class="fa-solid fa-eye icon_eye"></i>
                                        </div>
                                        <div class="p-1 pt-2">
                                            <p class="text_view">189</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- img box ends -->
                    <!-- content box -->
                    <div class="col-md-5 col-lg-7 col-xl-7">
                        <div class="row">
                            <div class="col-xl-12 ml-3">
                                <h1 class="text_h_main_row"
                                    title="กทพ. ดำเนินการจัดนิทรรศการ KM Day ประจำปีงบประมาณ 2566">
                                    <span class="h_text_day">วันจัดการภัยพิบัติอาเซียนและวันลดภัยพิบัติสากล ประจำปี 2561</span>
                                </h1>
                                <div class="line_cover"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 ml-1">
                                <div class="d-flex justify-content-between box_md_user">
                                    <div class="box_user d-flex">
                                        <div class="mr-1 box_md_icon_user">
                                            <i class="fa-solid fa-user icon_user text_h_main_row"></i>
                                        </div>
                                        <div>
                                            <div>
                                                <p class="text_h_main_row" title="นาย Admin Admin">
                                                    <span class="h_text_day ml-2">นาย Admin Admin</span>
                                                </p>
                                                <p class="text_user"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="margin_xl">
                                        <div class="d-flex">
                                            <div class="box_like mr-1">
                                                <div class="mr-1">
                                                    <i type="button" onclick="countClicks2()"
                                                        class="fa-solid fa-heart icon_heart"></i>
                                                </div>
                                                <div>
                                                    <p id="output_vote2" class="number_vote">1</p>
                                                </div>
                                            </div>
                                            <div class="box_share">
                                                <i type="button" data-toggle="modal" data-target="#share"
                                                    class="fa-solid fa-share-nodes icon_share"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- content box ends-->
                </div>
            </div>
            <div class="col-xl-6 col-md-6 col-lg-6 mb-2">
                <div class="row box_more">
                    <!-- img box -->
                    <div class="col-md-7 col-lg-5 col-xl-5">
                        <div class="box_konwledge_row">
                            <div>
                                <div class="img_size">
                                    <img src="assets/images/iStock-1412621642 1.png" alt="" class="cover_main">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="box_day_more">
                                    <p class="text_day"><span class="h_text_day">8</span> <br> ก.ย. <br> 2566</p>
                                </div>
                                <div class="box_view_more">
                                    <div class="d-flex">
                                        <div class="pt-1 pl-1">
                                            <i class="fa-solid fa-eye icon_eye"></i>
                                        </div>
                                        <div class="p-1 pt-2">
                                            <p class="text_view">189</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- img box ends -->
                    <!-- content box -->
                    <div class="col-md-5 col-lg-7 col-xl-7">
                        <div class="row">
                            <div class="col-xl-12 ml-3">
                                <h1 class="text_h_main_row"
                                    title="กทพ. ดำเนินการจัดนิทรรศการ KM Day ประจำปีงบประมาณ 2566">
                                    <span class="h_text_day">กทพ. ร่วมสมทบเงินทุนฉุกเฉินเพื่อช่วยเหลือ ผู้ประสบภัยพิบัติ
                                        สภากาชาดไทย</span>
                                </h1>
                                <div class="line_cover"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 ml-1">
                                <div class="d-flex justify-content-between box_md_user">
                                    <div class="box_user d-flex">
                                        <div class="mr-1 box_md_icon_user">
                                            <i class="fa-solid fa-user icon_user text_h_main_row "></i>
                                        </div>
                                        <div>
                                            <p class="text_h_main_row" title="นาย Admin Admin">
                                                <span class="h_text_day ml-2">นาย Admin Admin</span>
                                            </p>
                                            <p class="text_user"></p>
                                        </div>
                                    </div>
                                    <div class="margin_xl">
                                        <div class="d-flex">
                                            <div class="box_like mr-1">
                                                <div class="mr-1">
                                                    <i type="button" onclick="countClicks1()"
                                                        class="fa-solid fa-heart icon_heart"></i>
                                                </div>
                                                <div>
                                                    <p id="output_vote1" class="number_vote">1</p>
                                                </div>
                                            </div>
                                            <div class="box_share">
                                                <i type="button" data-toggle="modal" data-target="#share"
                                                    class="fa-solid fa-share-nodes icon_share"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row1 ends -->

        <!-- row2 start -->
        <div class="row">
            <div class="col-xl-6 col-md-6 col-lg-6 mb-2">
                <div class="row box_more">
                    <!-- img box -->
                    <div class="col-md-7 col-lg-5 col-xl-5">
                        <div class="box_konwledge_row">
                            <div>
                                <div class="img_size">
                                    <img src="assets/images/iStock-1410953126 1.png" alt="" class="cover_main">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="box_day_more">
                                    <p class="text_day"><span class="h_text_day">8</span> <br> ก.ย. <br> 2566</p>
                                </div>
                                <div class="box_view_more">
                                    <div class="d-flex">
                                        <div class="pt-1 pl-1">
                                            <i class="fa-solid fa-eye icon_eye"></i>
                                        </div>
                                        <div class="p-1 pt-2">
                                            <p class="text_view">189</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- img box ends -->
                    <!-- content box -->
                    <div class="col-md-5 col-lg-7 col-xl-7">
                        <div class="row">
                            <div class="col-xl-12 ml-3">
                                <h1 class="text_h_main_row"
                                    title="กทพ. ดำเนินการจัดนิทรรศการ KM Day ประจำปีงบประมาณ 2566">
                                    <span class="h_text_day">กทพ. ร่วมสมทบเงินทุนฉุกเฉินเพื่อช่วยเหลือ ผู้ประสบภัยพิบัติ
                                        สภากาชาดไทย</span>
                                </h1>
                                <div class="line_cover"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 ml-1">
                                <div class="d-flex justify-content-between box_md_user">
                                    <div class="box_user d-flex">
                                        <div class="mr-1 box_md_icon_user">
                                            <i class="fa-solid fa-user icon_user text_h_main_row"></i>
                                        </div>
                                        <div>
                                            <div>
                                                <p class="text_h_main_row" title="นาย Admin Admin">
                                                    <span class="h_text_day ml-2">นาย Admin Admin</span>
                                                </p>
                                                <p class="text_user"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="margin_xl">
                                        <div class="d-flex">
                                            <div class="box_like mr-1">
                                                <div class="mr-1">
                                                    <i type="button" onclick="countClicks2()"
                                                        class="fa-solid fa-heart icon_heart"></i>
                                                </div>
                                                <div>
                                                    <p id="output_vote2" class="number_vote">1</p>
                                                </div>
                                            </div>
                                            <div class="box_share">
                                                <i type="button" data-toggle="modal" data-target="#share"
                                                    class="fa-solid fa-share-nodes icon_share"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- content box ends-->
                </div>
            </div>

            <div class="col-xl-6 col-md-6 col-lg-6 mb-2">
                <div class="row box_more">
                    <!-- img box -->
                    <div class="col-md-7 col-lg-5 col-xl-5">
                        <div class="box_konwledge_row">
                            <div>
                                <div class="img_size">
                                    <img src="assets/images/iStock-1410953126 1.png" alt="" class="cover_main">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="box_day_more">
                                    <p class="text_day"><span class="h_text_day">8</span> <br> ก.ย. <br> 2566</p>
                                </div>
                                <div class="box_view_more">
                                    <div class="d-flex">
                                        <div class="pt-1 pl-1">
                                            <i class="fa-solid fa-eye icon_eye"></i>
                                        </div>
                                        <div class="p-1 pt-2">
                                            <p class="text_view">189</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- img box ends -->
                    <!-- content box -->
                    <div class="col-md-5 col-lg-7 col-xl-7">
                        <div class="row">
                            <div class="col-xl-12 ml-3">
                                <h1 class="text_h_main_row"
                                    title="กทพ. ดำเนินการจัดนิทรรศการ KM Day ประจำปีงบประมาณ 2566">
                                    <span class="h_text_day">กทพ. ร่วมสมทบเงินทุนฉุกเฉินเพื่อช่วยเหลือ ผู้ประสบภัยพิบัติ
                                        สภากาชาดไทย</span>
                                </h1>
                                <div class="line_cover"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 ml-1">
                                <div class="d-flex justify-content-between box_md_user">
                                    <div class="box_user d-flex">
                                        <div class="mr-1 box_md_icon_user">
                                            <i class="fa-solid fa-user icon_user text_h_main_row"></i>
                                        </div>
                                        <div>
                                            <div>
                                                <p class="text_h_main_row" title="นาย Admin Admin">
                                                    <span class="h_text_day ml-2">นาย Admin Admin</span>
                                                </p>
                                                <p class="text_user"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="margin_xl">
                                        <div class="d-flex">
                                            <div class="box_like mr-1">
                                                <div class="mr-1">
                                                    <i type="button" onclick="countClicks2()"
                                                        class="fa-solid fa-heart icon_heart"></i>
                                                </div>
                                                <div>
                                                    <p id="output_vote2" class="number_vote">1</p>
                                                </div>
                                            </div>
                                            <div class="box_share">
                                                <i type="button" data-toggle="modal" data-target="#share"
                                                    class="fa-solid fa-share-nodes icon_share"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- content box ends-->
                </div>
            </div>
        </div><!-- row2 ends -->

        <!-- row3 start -->
        <div class="row">
            <div class="col-xl-6 col-md-6 col-lg-6 mb-2">
                <div class="row box_more">
                    <!-- img box -->
                    <div class="col-md-7 col-lg-5 col-xl-5">
                        <div class="box_konwledge_row">
                            <div>
                                <div class="img_size">
                                    <img src="assets/images/iStock-1409346804 1.png" alt="" class="cover_main">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="box_day_more">
                                    <p class="text_day"><span class="h_text_day">8</span> <br> ก.ย. <br> 2566</p>
                                </div>
                                <div class="box_view_more">
                                    <div class="d-flex">
                                        <div class="pt-1 pl-1">
                                            <i class="fa-solid fa-eye icon_eye"></i>
                                        </div>
                                        <div class="p-1 pt-2">
                                            <p class="text_view">189</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- img box ends -->
                    <!-- content box -->
                    <div class="col-md-5 col-lg-7 col-xl-7">
                        <div class="row">
                            <div class="col-xl-12 ml-3">
                                <h1 class="text_h_main_row"
                                    title="กทพ. ดำเนินการจัดนิทรรศการ KM Day ประจำปีงบประมาณ 2566">
                                    <span class="h_text_day">กทพ. ร่วมสมทบเงินทุนฉุกเฉินเพื่อช่วยเหลือ ผู้ประสบภัยพิบัติ
                                        สภากาชาดไทย</span>
                                </h1>
                                <div class="line_cover"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 ml-1">
                                <div class="d-flex justify-content-between box_md_user">
                                    <div class="box_user d-flex">
                                        <div class="mr-1 box_md_icon_user">
                                            <i class="fa-solid fa-user icon_user text_h_main_row"></i>
                                        </div>
                                        <div>
                                            <div>
                                                <p class="text_h_main_row" title="นาย Admin Admin">
                                                    <span class="h_text_day ml-2">นาย Admin Admin</span>
                                                </p>
                                                <p class="text_user"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="margin_xl">
                                        <div class="d-flex">
                                            <div class="box_like mr-1">
                                                <div class="mr-1">
                                                    <i type="button" onclick="countClicks2()"
                                                        class="fa-solid fa-heart icon_heart"></i>
                                                </div>
                                                <div>
                                                    <p id="output_vote2" class="number_vote">1</p>
                                                </div>
                                            </div>
                                            <div class="box_share">
                                                <i type="button" data-toggle="modal" data-target="#share"
                                                    class="fa-solid fa-share-nodes icon_share"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- content box ends-->
                </div>
            </div>

            <div class="col-xl-6 col-md-6 col-lg-6 mb-2">
                <div class="row box_more">
                    <!-- img box -->
                    <div class="col-md-7 col-lg-5 col-xl-5">
                        <div class="box_konwledge_row">
                            <div>
                                <div class="img_size">
                                    <img src="assets/images/iStock-1409346804 1.png" alt="" class="cover_main">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="box_day_more">
                                    <p class="text_day"><span class="h_text_day">8</span> <br> ก.ย. <br> 2566</p>
                                </div>
                                <div class="box_view_more">
                                    <div class="d-flex">
                                        <div class="pt-1 pl-1">
                                            <i class="fa-solid fa-eye icon_eye"></i>
                                        </div>
                                        <div class="p-1 pt-2">
                                            <p class="text_view">189</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- img box ends -->
                    <!-- content box -->
                    <div class="col-md-5 col-lg-7 col-xl-7">
                        <div class="row">
                            <div class="col-xl-12 ml-3">
                                <h1 class="text_h_main_row"
                                    title="กทพ. ดำเนินการจัดนิทรรศการ KM Day ประจำปีงบประมาณ 2566">
                                    <span class="h_text_day">กทพ. ร่วมสมทบเงินทุนฉุกเฉินเพื่อช่วยเหลือ ผู้ประสบภัยพิบัติ
                                        สภากาชาดไทย</span>
                                </h1>
                                <div class="line_cover"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 ml-1">
                                <div class="d-flex justify-content-between box_md_user">
                                    <div class="box_user d-flex">
                                        <div class="mr-1 box_md_icon_user">
                                            <i class="fa-solid fa-user icon_user text_h_main_row"></i>
                                        </div>
                                        <div>
                                            <div>
                                                <p class="text_h_main_row" title="นาย Admin Admin">
                                                    <span class="h_text_day ml-2">นาย Admin Admin</span>
                                                </p>
                                                <p class="text_user"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="margin_xl">
                                        <div class="d-flex">
                                            <div class="box_like mr-1">
                                                <div class="mr-1">
                                                    <i type="button" onclick="countClicks2()"
                                                        class="fa-solid fa-heart icon_heart"></i>
                                                </div>
                                                <div>
                                                    <p id="output_vote2" class="number_vote">1</p>
                                                </div>
                                            </div>
                                            <div class="box_share">
                                                <i type="button" data-toggle="modal" data-target="#share"
                                                    class="fa-solid fa-share-nodes icon_share"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- content box ends-->
                </div>
            </div>
        </div><!-- row3 ends -->

        <!-- row4 start -->
        <div class="row">
            <div class="col-xl-6 col-md-6 col-lg-6 mb-2">
                <div class="row box_more">
                    <!-- img box -->
                    <div class="col-md-7 col-lg-5 col-xl-5">
                        <div class="box_konwledge_row">
                            <div>
                                <div class="img_size">
                                    <img src="assets/images/iStock-1410953126 1.png" alt="" class="cover_main">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="box_day_more">
                                    <p class="text_day"><span class="h_text_day">8</span> <br> ก.ย. <br> 2566</p>
                                </div>
                                <div class="box_view_more">
                                    <div class="d-flex">
                                        <div class="pt-1 pl-1">
                                            <i class="fa-solid fa-eye icon_eye"></i>
                                        </div>
                                        <div class="p-1 pt-2">
                                            <p class="text_view">189</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- img box ends -->
                    <!-- content box -->
                    <div class="col-md-5 col-lg-7 col-xl-7">
                        <div class="row">
                            <div class="col-xl-12 ml-3">
                                <h1 class="text_h_main_row"
                                    title="กทพ. ดำเนินการจัดนิทรรศการ KM Day ประจำปีงบประมาณ 2566">
                                    <span class="h_text_day">กทพ. ร่วมสมทบเงินทุนฉุกเฉินเพื่อช่วยเหลือ ผู้ประสบภัยพิบัติ
                                        สภากาชาดไทย</span>
                                </h1>
                                <div class="line_cover"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 ml-1">
                                <div class="d-flex justify-content-between box_md_user">
                                    <div class="box_user d-flex">
                                        <div class="mr-1 box_md_icon_user">
                                            <i class="fa-solid fa-user icon_user text_h_main_row"></i>
                                        </div>
                                        <div>
                                            <div>
                                                <p class="text_h_main_row" title="นาย Admin Admin">
                                                    <span class="h_text_day ml-2">นาย Admin Admin</span>
                                                </p>
                                                <p class="text_user"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="margin_xl">
                                        <div class="d-flex">
                                            <div class="box_like mr-1">
                                                <div class="mr-1">
                                                    <i type="button" onclick="countClicks2()"
                                                        class="fa-solid fa-heart icon_heart"></i>
                                                </div>
                                                <div>
                                                    <p id="output_vote2" class="number_vote">1</p>
                                                </div>
                                            </div>
                                            <div class="box_share">
                                                <i type="button" data-toggle="modal" data-target="#share"
                                                    class="fa-solid fa-share-nodes icon_share"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- content box ends-->
                </div>
            </div>

            <div class="col-xl-6 col-md-6 col-lg-6 mb-2">
                <div class="row box_more">
                    <!-- img box -->
                    <div class="col-md-7 col-lg-5 col-xl-5">
                        <div class="box_konwledge_row">
                            <div>
                                <div class="img_size">
                                    <img src="assets/images/iStock-1410953126 1.png" alt="" class="cover_main">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="box_day_more">
                                    <p class="text_day"><span class="h_text_day">8</span> <br> ก.ย. <br> 2566</p>
                                </div>
                                <div class="box_view_more">
                                    <div class="d-flex">
                                        <div class="pt-1 pl-1">
                                            <i class="fa-solid fa-eye icon_eye"></i>
                                        </div>
                                        <div class="p-1 pt-2">
                                            <p class="text_view">189</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- img box ends -->
                    <!-- content box -->
                    <div class="col-md-5 col-lg-7 col-xl-7">
                        <div class="row">
                            <div class="col-xl-12 ml-3">
                                <h1 class="text_h_main_row"
                                    title="กทพ. ดำเนินการจัดนิทรรศการ KM Day ประจำปีงบประมาณ 2566">
                                    <span class="h_text_day">กทพ. ร่วมสมทบเงินทุนฉุกเฉินเพื่อช่วยเหลือ ผู้ประสบภัยพิบัติ
                                        สภากาชาดไทย</span>
                                </h1>
                                <div class="line_cover"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 ml-1">
                                <div class="d-flex justify-content-between box_md_user">
                                    <div class="box_user d-flex">
                                        <div class="mr-1 box_md_icon_user">
                                            <i class="fa-solid fa-user icon_user text_h_main_row"></i>
                                        </div>
                                        <div>
                                            <div>
                                                <p class="text_h_main_row" title="นาย Admin Admin">
                                                    <span class="h_text_day ml-2">นาย Admin Admin</span>
                                                </p>
                                                <p class="text_user"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="margin_xl">
                                        <div class="d-flex">
                                            <div class="box_like mr-1">
                                                <div class="mr-1">
                                                    <i type="button" onclick="countClicks2()"
                                                        class="fa-solid fa-heart icon_heart"></i>
                                                </div>
                                                <div>
                                                    <p id="output_vote2" class="number_vote">1</p>
                                                </div>
                                            </div>
                                            <div class="box_share">
                                                <i type="button" data-toggle="modal" data-target="#share"
                                                    class="fa-solid fa-share-nodes icon_share"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- content box ends-->
                </div>
            </div>
        </div><!-- row4 ends -->

        <!-- row5 start -->
        <div class="row">
            <div class="col-xl-6 col-md-6 col-lg-6 mb-2">
                <div class="row box_more">
                    <!-- img box -->
                    <div class="col-md-7 col-lg-5 col-xl-5">
                        <div class="box_konwledge_row">
                            <div>
                                <div class="img_size">
                                    <img src="assets/images/iStock-1409346804 1.png" alt="" class="cover_main">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="box_day_more">
                                    <p class="text_day"><span class="h_text_day">8</span> <br> ก.ย. <br> 2566</p>
                                </div>
                                <div class="box_view_more">
                                    <div class="d-flex">
                                        <div class="pt-1 pl-1">
                                            <i class="fa-solid fa-eye icon_eye"></i>
                                        </div>
                                        <div class="p-1 pt-2">
                                            <p class="text_view">189</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- img box ends -->
                    <!-- content box -->
                    <div class="col-md-5 col-lg-7 col-xl-7">
                        <div class="row">
                            <div class="col-xl-12 ml-3">
                                <h1 class="text_h_main_row"
                                    title="กทพ. ดำเนินการจัดนิทรรศการ KM Day ประจำปีงบประมาณ 2566">
                                    <span class="h_text_day">กทพ. ร่วมสมทบเงินทุนฉุกเฉินเพื่อช่วยเหลือ ผู้ประสบภัยพิบัติ
                                        สภากาชาดไทย</span>
                                </h1>
                                <div class="line_cover"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 ml-1">
                                <div class="d-flex justify-content-between box_md_user">
                                    <div class="box_user d-flex">
                                        <div class="mr-1 box_md_icon_user">
                                            <i class="fa-solid fa-user icon_user text_h_main_row"></i>
                                        </div>
                                        <div>
                                            <div>
                                                <p class="text_h_main_row" title="นาย Admin Admin">
                                                    <span class="h_text_day ml-2">นาย Admin Admin</span>
                                                </p>
                                                <p class="text_user"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="margin_xl">
                                        <div class="d-flex">
                                            <div class="box_like mr-1">
                                                <div class="mr-1">
                                                    <i type="button" onclick="countClicks2()"
                                                        class="fa-solid fa-heart icon_heart"></i>
                                                </div>
                                                <div>
                                                    <p id="output_vote2" class="number_vote">1</p>
                                                </div>
                                            </div>
                                            <div class="box_share">
                                                <i type="button" data-toggle="modal" data-target="#share"
                                                    class="fa-solid fa-share-nodes icon_share"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- content box ends-->
                </div>
            </div>

            <div class="col-xl-6 col-md-6 col-lg-6 mb-2">
                <div class="row box_more">
                    <!-- img box -->
                    <div class="col-md-7 col-lg-5 col-xl-5">
                        <div class="box_konwledge_row">
                            <div>
                                <div class="img_size">
                                    <img src="assets/images/iStock-1409346804 1.png" alt="" class="cover_main">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <div class="box_day_more">
                                    <p class="text_day"><span class="h_text_day">8</span> <br> ก.ย. <br> 2566</p>
                                </div>
                                <div class="box_view_more">
                                    <div class="d-flex">
                                        <div class="pt-1 pl-1">
                                            <i class="fa-solid fa-eye icon_eye"></i>
                                        </div>
                                        <div class="p-1 pt-2">
                                            <p class="text_view">189</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- img box ends -->
                    <!-- content box -->
                    <div class="col-md-5 col-lg-7 col-xl-7">
                        <div class="row">
                            <div class="col-xl-12 ml-3">
                                <h1 class="text_h_main_row"
                                    title="กทพ. ดำเนินการจัดนิทรรศการ KM Day ประจำปีงบประมาณ 2566">
                                    <span class="h_text_day">กทพ. ร่วมสมทบเงินทุนฉุกเฉินเพื่อช่วยเหลือ ผู้ประสบภัยพิบัติ
                                        สภากาชาดไทย</span>
                                </h1>
                                <div class="line_cover"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 ml-1">
                                <div class="d-flex justify-content-between box_md_user">
                                    <div class="box_user d-flex">
                                        <div class="mr-1 box_md_icon_user">
                                            <i class="fa-solid fa-user icon_user text_h_main_row"></i>
                                        </div>
                                        <div>
                                            <div>
                                                <p class="text_h_main_row" title="นาย Admin Admin">
                                                    <span class="h_text_day ml-2">นาย Admin Admin</span>
                                                </p>
                                                <p class="text_user"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="margin_xl">
                                        <div class="d-flex">
                                            <div class="box_like mr-1">
                                                <div class="mr-1">
                                                    <i type="button" onclick="countClicks2()"
                                                        class="fa-solid fa-heart icon_heart"></i>
                                                </div>
                                                <div>
                                                    <p id="output_vote2" class="number_vote">1</p>
                                                </div>
                                            </div>
                                            <div class="box_share">
                                                <i type="button" data-toggle="modal" data-target="#share"
                                                    class="fa-solid fa-share-nodes icon_share"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- content box ends-->
                </div>
            </div>
        </div><!-- row5 ends -->

        <!-- next  page buttons -->
        <br>
        <nav aria-label="Page navigation example" class="next_page">
            <ul class="pagination" style="justify-content: center;">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&lt;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&gt;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>


    </div><!-- container end -->

    <!-- [ Modal share   ] -->
    <div class="modal fade" id="share" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="share"><i class="fa-solid fa-share-nodes icon_share_confirm"></i>แชร์
                    </h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div class="row">
                        <div class="col-xl-3 col-md-3">
                            <div class="m-3" title="แชร์เว็บไซต์">
                                <i class="fa-solid fa-globe icon_globe" type="button"></i>
                                <p class="mt-1">เว็บไซต์</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3">
                            <div class="m-3" title="แชร์ facebook">
                                <i class="fa-brands fa-square-facebook facebook_share" type="button"></i>
                                <p class="mt-1">facebook</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3">
                            <div class="m-3" title="แชร์ twitter">
                                <i class="fa-brands fa-square-x-twitter icon_x_twitter" type="button"></i>
                                <p class="mt-1">twitter</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3">
                            <div class="m-3" title="แชร์ line">
                                <i class="fa-brands fa-line icon-line" type="button"></i>
                                <p class="mt-1">line</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- model share ends --> 
    




</body>

</html>
<?php include("footer.php");?>
<?php include("combottom.php");?>