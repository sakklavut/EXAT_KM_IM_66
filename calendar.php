<div class="bg_calender">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-12  col-lg-6">
                <div class="row">
                    <div class="col-xl-12">
                        <h4 class="text_h_calender">
                            <p>KM&IM Calendar</p>
                        </h4>
                        <div class="line_h"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div id='calendar' class="mb-4"></div>
                    </div>
                </div>
            </div>
                <div class="col-xl-6 col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <h4 class="text_h_news">
                               <p>
                                    KM&IM News
                               </p> 
                            </h4>
                            <div class="line_h"></div>
                        </div>
                    </div>
                    <div class="row knowledge_row_news mt-4 mb-4">
                        <div class="col-md-7 col-lg-12 col-xl-12 padding_md">
                            <div class="box_knowledge_row">
                                <div>
                                    <div>
                                        <img src="assets/images/cover_main.png" class="cover_main" alt="">
                                        <div class="d-flex justify-content-end">
                                            <div class="box_day_row">
                                                <p class="text_day"><span class="h_text_day">10</span> <br> ก.ย. <br> 2566</p>
                                            </div>
                                            <div class="box_view_row ">
                                                <div class="d-flex">
                                                    <div class="pt-1 pl-1">
                                                        <i class="fa-solid fa-eye icon_eye"></i>
                                                    </div>
                                                    <div class="p-1 pt-2">
                                                        <p class="text_view">255</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5  col-xl-12 col-lg-12">
                            <div class="row">
                                <div class="col-xl-12">
                                    <h4 class="text_h_main_row_news" title="กทพ. ดำเนินการจัดนิทรรศการ KM Day ประจำปีงบประมาณ 2566">
                                       <p>
                                            กทพ. ดำเนินการจัดนิทรรศการ KM Day ประจำปีงบประมาณ 2566
                                       </p>
                                    </h4>
                                    <div class="line_cover"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="d-flex justify-content-between box_md_user">
                                        <div class="box_user d-flex">
                                            <div class="mr-1">
                                                <i class="fa-solid fa-user icon_user_row_news"></i>
                                            </div>
                                            <p  title="นาย Admin Admin">
                                                <span class="h_text_day ml-2">นาย Admin Admin</span>
                                            </p>
                                        </div>
                                        <div class="margin_xl mt-2 mb-2">
                                            <div class="d-flex">
                                                <div class="box_like mr-1">
                                                    <div class="mr-1">
                                                        <i  type="button" onclick="countClicks4()"   class="fa-solid fa-heart icon_heart"></i>
                                                    </div>
                                                    <div>
                                                        <p id="output_vote4" class="number_vote">1</p>
                                                    </div>
                                                </div>
                                                <div class="box_share">
                                                    <i type="button"  data-toggle="modal" data-target="#share" class="fa-solid fa-share-nodes icon_share"></i>
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
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
    let calendarEl = document.getElementById('calendar');

    let calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      buttonText: {
      prev: 'ก่อนหน้า',
      next: 'ถัดไป',
      prevYear: 'ปีก่อนหน้า',
      nextYear: 'ปีถัดไป',
      year: 'ปี',
      today: 'วันนี้',
      month: 'เดือน',
      week: 'สัปดาห์',
      day: 'วัน',
      list: 'กำหนดการ',
    },
      initialDate: '2023-01-12',
      navLinks: true, // can click day/week names to navigate views
      businessHours: true, // display business hours
      editable: true,
      selectable: true,
      locale: 'th',
      events: [
        {
          title: 'Business Lunch',
          start: '2023-01-03T13:00:00',
          constraint: 'businessHours'
        },
        {
          title: 'Meeting',
          start: '2023-01-13T11:00:00',
          constraint: 'availableForMeeting', // defined below
          color: '#257e4a'
        },
        {
          title: 'Conference',
          start: '2023-01-18',
          end: '2023-01-20'
        },
        {
          title: 'Party',
          start: '2023-01-29T20:00:00'
        },

        // areas where "Meeting" must be dropped
        {
          groupId: 'availableForMeeting',
          start: '2023-01-11T10:00:00',
          end: '2023-01-11T16:00:00',
          display: 'background'
        },
        {
          groupId: 'availableForMeeting',
          start: '2023-01-13T10:00:00',
          end: '2023-01-13T16:00:00',
          display: 'background'
        },

        // red areas where no events can be dropped
        {
          start: '2023-01-24',
          end: '2023-01-28',
          overlap: false,
          display: 'background',
          color: '#ff9f89'
        },
        {
          start: '2023-01-06',
          end: '2023-01-08',
          overlap: false,
          display: 'background',
          color: '#ff9f89'
        }
      ]
    });

    calendar.render();
  });
</script>