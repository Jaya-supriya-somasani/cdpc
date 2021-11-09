<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <?php include './config/dbcon.php';?>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/20c5629a29.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    <!-- <link rel="stylesheet" type="text/css" href="test.css"> -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
  <link rel="stylesheet" type="text/css" href="visited.css">
  <link rel="stylesheet" type="text/css" href="slider.css">
  <style> 
    .main-bg
    {
      background-color: white !important;
    }
    .hire-panel
    {
      background: grey;
      border-radius: 10px;
      padding-left: 40px;
      padding-top: 10px;
      color: white;
      padding-bottom: 10px;
      margin-bottom: 10px;
      font-weight: 800;
      font-family: san-serif;
    }
  </style>
</head>
<body class="main-bg">
  <div class=" container">
    <?php include('./header.php') ?>
    <br><br>
    
    <section class="testimonial text-center p-5">
        <div class="container">

            <div class="heading ">
                Testimonial
            </div>
            <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
             
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="testimonial4_slide">
                            <img src="kc-reddy.jpg" class="img-circle img-responsive" style="width: 200px;" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Client 1</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="hemachandrareddy.jpg" class="img-circle img-responsive" style="width: 200px;" /><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Client 2</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="director1.jpg" class="img-circle img-responsive" style="width: 200px;" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Client 3</h4>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </section>

    <!--<div class="container conatiner1 mt-5">
      <div class="row">
        <div class="col-md-12">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-4">
                    <div class="single-box">
                      <div class="img-area"><img src="./director1.jpg" alt=""></div>
                      <div class="img-text">
                       <h2>Prof.P.Jagadeeswara Rao</h2>
                        <p>Director of Rajiv Gandhi University of Knowledge Technologies, Srikakulam</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="single-box">
                      <div class="img-area"><img src="./hemachandrareddy.jpg" alt=""></div>
                      <div class="img-text">
                        <h2>hemachandra reddy sir</h2>
                        <p>Vice Chancellor of Rajiv Gandhi University of Knowledge Technologies, Srikakulam</p>
                      </div>
                    </div>
                  </div> 
                 <div class="col-md-4">
                      <div class="single-box">
                        <div class="img-area"><img src="./kc-reddy.jpg" alt=""></div>
                        <div class="img-text">
                          <h2>kc reddy sir</h2>
                          <p>Chancellor of Rajiv Gandhi University of Knowledge Technologies, Srikakulam</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item ">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="single-box">
                        <div class="img-area"><img src="./image1.jpg" alt=""></div>
                        <div class="img-text">
                          <h2>image 4</h2>
                          <p>asdfghjkqwertiop zxcvb,wertyhg</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="single-box">
                        <div class="img-area"><img src="./image2.jpg" alt=""></div>
                        <div class="img-text">
                          <h2>image 5</h2>
                          <p>asdfghjkqwertiop zxcvb,wertyhg</p>
                        </div>
                      </div>
                    </div> 
                    <div class="col-md-4">
                      <div class="single-box">
                        <div class="img-area"><img src="./image3.jpg" alt=""></div>
                        <div class="img-text">
                          <h2>image 6</h2>
                          <p>asdfghjkqwertiop zxcvb,wertyhg</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>  
            </div>
          </div>
        </div>
      </div>  -->
      <br>
      <div class="sixteen wide mobile eight wide mobile sixteen wide computer column">
        <div class="leaderboard test ad" style="padding:30px 0">
          <div class="ui container">
            <div class="ui grid">
              <div class="sixteen wide mobile eight wide mobile six wide computer column">
                <div class="ui piled segment">
                  <h4 class="ui header">    <img class="ui image" alt="school-image" src="./sklm.jpg">
                    <div class="content">About PTC </div>   
                  </h4>
                  <hr>
                  <div class="text-elipsis">
                    <p>PTC is responsible for handling Career Development, Placement and Internship related activities. Faculty-Incharge, Departmental placement Faculty Co-ordinators, Placement Office and Student Representatives manage various activities related to PTC.</p>
                  </div>
                </div>
              </div>
              <div class="sixteen wide mobile eight wide mobile five wide computer column">
                <div class="ui  piled segment">
                  <div class="ui ribbon label orange">Chancellor's Message</div>
                  <hr>
                  <div class="text-elipsis">
                    <p>RGUKT, established in 2008, provides qualitative technical education coupled with well equipped infrastructure and facilities. The six year integrated program exclusively involves the combination of a two-year Pre-University course(PUC) and a four-year B.Tech.</p>
                  </div>
                </div>
              </div>
              <div class="sixteen wide mobile eight wide mobile five wide computer column">
                <div class="ui piled segment">
                  <div class="ui ribbon green label">Director's Message</div>
                  <hr>
                  <div class="text-elipsis">
                    <p>Greetings from Rajiv Gandhi University of Knowledge Technologies (RGUKT), Nuzvid, AP. It is a great pleasure for me to welcome you to placement activities of our Institute. RGUKT Nuzvid is one of the best institutes for technological education in India.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Sticky bars --> 
    <!--  <div class="container">
        <div class="row">
          <div class="v-spacer col-sm-12 v-height-small"></div>
        </div>
      </div>

      <div class="col-sm-4">
                            <div class="feature-box left-icon-v2 v-animation" data-animation="flip-y" data-delay="100">                                 
                                  <div class="feature-box-text">
                                    <a href="Extension-Activities.aspx"><h3>  Extension Activities</h3></a>
                                    <div class="feature-box-text-inner">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>      -->
  
      <!---Events and Notifications section-->
      <div class="bg-white py-2">
        <section id="events-Notifications" class="container my-3 bg-white">
          <div class="row">
          <!--Events-->
            <div class="col-12 col-md-6">
              <div class="container">
                <div class="row">
                  <div class="h4 col-12 py-1 border-top border-bottom border-dark">
                  Statistics
                </div>
              </div>
              <div class="row border bg-white rounded p-1  border-dark">  
                <div class="col-12 overflow-auto" style="height:400px;">
                  <div class="d-flex border-bottom py-1">
                    <img src="admin/uploads/events/1597389464.png" class="" style="width:70px; height:70px;" alt="">
                    <div class="p px-2">
                      <h6>Target GATE CSE 2021</h6>
                      <small class="text-muted"><i class="fa fa-clock-o"></i> Aug 05,2020</small>
                    </div>
                  </div>                          
                  <div class="d-flex border-bottom py-1">
                    <img src="admin/uploads/events/1597389393.png" class="" style="width:70px; height:70px;" alt="">
                    <div class="p px-2">
                      <h6>Any Doubt About CIVIL Services</h6>
                      <small class="text-muted"><i class="fa fa-clock-o"></i> Aug 21,2020</small>
                    </div>
                  </div>        
                  <div class="d-flex border-bottom py-1">
                    <img src="admin/uploads/events/1597389307.png" class="" style="width:70px; height:70px;" alt="">
                    <div class="p px-2">
                      <h6>Target GATE 2022</h6>
                      <small class="text-muted"><i class="fa fa-clock-o"></i> Jul 21,2020</small>
                    </div>
                  </div>                  
                  <div class="d-flex border-bottom py-1">
                    <img src="admin/uploads/events/1581402764.jpg" class="" style="width:70px; height:70px;" alt="">
                    <div class="p px-2">
                      <h6>A Faculty Development Programme on "AI & ML for Real-Time Applications" from 10-14 February </h6>
                      <small class="text-muted"><i class="fa fa-clock-o"></i> Feb 11,2020</small>
                    </div>
                  </div>              
                  <div class="d-flex border-bottom py-1">
                    <img src="admin/uploads/events/1580798359.jpg" class="" style="width:70px; height:70px;" alt="">
                    <div class="p px-2">
                      <h6>A Five day workshop on Auto cad department of mechanical engg(03-02-2020 to 07-02-2020)</h6>
                      <small class="text-muted"><i class="fa fa-clock-o"></i> Feb 03,2020</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--News and Notifications-->
          <div class="col-12 col-md-6">
            <div class="container">
              <div class="row">
                <div class="h4 col-12 py-1 border-top border-bottom  border-dark">
                  News &amp; Notifications
                </div>
              </div>
              <div class="row border bg-white rounded p-1  border-dark">
                <div class="col-12 overflow-auto px-2" style="height:400px;">
                  <div class="d-flex border-bottom py-1 border-dotted">
                    <div class="m-1 news-date">
                      <div class="d-block col-12 text-white mon text-center">OCT</div>
                      <div class="d-block col-12 date">29</div>
                    </div>
                    <div class="p px-2">
                      <a href="admin/uploads/notifications/1635521654.docx" class='noteLink'>Applications are invited for the Post of Residential Medical Officer on Contract basis(Only Female).</a>
                    </div>
                  </div>
                  <div class="d-flex border-bottom py-1 border-dotted">
                    <div class="m-1 news-date">
                      <div class="d-block col-12 text-white mon text-center">OCT</div>
                       <div class="d-block col-12 date">23</div>
                    </div>
                    <div class="p px-2">
                      <a href="admin/uploads/notifications/1634987111.docx" class='noteLink'>One‐Day International Webinar on Sustainable Water Resources Management in Asian Cities: Challenges & Opportunities</a>
                    </div>
                  </div>
                  <div class="d-flex border-bottom py-1 border-dotted">
                    <div class="m-1 news-date">
                      <div class="d-block col-12 text-white mon text-center">OCT</div>
                      <div class="d-block col-12 date">15 </div>
                    </div>
                    <div class="p px-2">
                      <a href="admin/uploads/notifications/1634288456.pdf" class='noteLink'>RGUKT Srikakulam- Remote sensing for Disaster Management (ICRSDM-2021) - Brochure</a>
                    </div>
                  </div>
                  <div class="d-flex border-bottom py-1 border-dotted">
                    <div class="m-1 news-date">
                      <div class="d-block col-12 text-white mon text-center">OCT </div>
                      <div class="d-block col-12 date">12 </div>
                    </div>
                    <div class="p px-2">
                      <a href="admin/uploads/notifications/1634043450.jpg" class='noteLink'>RGUKT Srikakulam - One day national webinar in connection with international day for  disaster risk reduction</a>
                    </div>
                  </div>
                  <div class="d-flex border-bottom py-1 border-dotted">
                    <div class="m-1 news-date">
                      <div class="d-block col-12 text-white mon text-center">JUL</div>
                      <div class="d-block col-12 date">27</div>
                    </div>
                    <div class="p px-2">
                      <a href="admin/uploads/notifications/1627383948.pdf" class='noteLink'>United Nations University ( UNU- IAS )One day International Webinar on Sustainable Water Resources Management in Asia</a>
                    </div>
                  </div>
                  <div class="d-flex border-bottom py-1 border-dotted">
                    <div class="m-1 news-date">
                      <div class="d-block col-12 text-white mon text-center">JUL</div>
                      <div class="d-block col-12 date">04</div>
                    </div>
                    <div class="p px-2">
                      <a href="admin/uploads/notifications/1625392471.pdf" class='noteLink'>Invitation to the Inauguration of Dr. Y. S. R Memorial Lecture Series - 8th July 2021-Reg. (Click here for more)</a>
                    </div>
                  </div>
                  <div class="d-flex border-bottom py-1 border-dotted">
                    <div class="m-1 news-date">
                      <div class="d-block col-12 text-white mon text-center">MAY</div>
                        <div class="d-block col-12 date">19</div>
                      </div>
                      <div class="p px-2">
                        <a href="admin/uploads/notifications/1621435589.png" class='noteLink'>3-Day workshop on "E-Mail Writing". Google meet code: bmr-rwaw-xbt </a>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-1 border-dotted">
                      <div class="m-1 news-date">
                        <div class="d-block col-12 text-white mon text-center">DEC</div>
                        <div class="d-block col-12 date">24</div>
                      </div>
                      <div class="p px-2">
                        <a href="http://examcell.rguktsklm.ac.in/E_2018_details.html" class='noteLink'>View 2018 Batch student Details</a>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-1 border-dotted">
                      <div class="m-1 news-date">
                        <div class="d-block col-12 text-white mon text-center">DEC                       </div>
                        <div class="d-block col-12 date">09                       </div>
                      </div>
                      <div class="p px-2">
                        <a href="http://examcell.rguktsklm.ac.in/E_2018_P2__REG_2.html" class='noteLink'>2018 Batch PUC-2 SEM2 Regular Results [A.Y.-2019-2020] (December-2020)</a>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-1 border-dotted">
                      <div class="m-1 news-date">
                        <div class="d-block col-12 text-white mon text-center">NOV                       </div>
                        <div class="d-block col-12 date">03                       </div>
                      </div>
                      <div class="p px-2">
                        <a href="admin/uploads/notifications/1604382648.pdf" class='noteLink'>Academic Schedule for PUC-2 (2018 Regular and Non promoted batches)</a>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-1 border-dotted">
                      <div class="m-1 news-date">
                        <div class="d-block col-12 text-white mon text-center">SEP                       </div>
                        <div class="d-block col-12 date">21           </div>
                      </div>
                      <div class="p px-2">
                        <a href="admin/uploads/notifications/1600709311.pdf" class='noteLink'>IIRS ISRO Outreach program</a>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-1 border-dotted">
                      <div class="m-1 news-date">
                        <div class="d-block col-12 text-white mon text-center">JUL                       </div>
                        <div class="d-block col-12 date">27  </div>
                      </div>
                      <div class="p px-2">
                        <a href="admin/uploads/notifications/1595837920.pdf" class='noteLink'>RGUKT-Circular on Admissions for A.Y.2020-21-Reg.</a>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-1 border-dotted">
                      <div class="m-1 news-date">
                        <div class="d-block col-12 text-white mon text-center">JUN                       </div>
                        <div class="d-block col-12 date">25                       </div>
                      </div>
                      <div class="p px-2">
                        <a href="admin/uploads/notifications/1593056352.pdf" class='noteLink'>RGUKT-AP - Press Note</a>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-1 border-dotted">
                      <div class="m-1 news-date">
                        <div class="d-block col-12 text-white mon text-center">JUN                       </div>
                        <div class="d-block col-12 date">01                       </div>
                      </div>
                      <div class="p px-2">
                        <a href="admin/uploads/notifications/1591009539.pdf" class='noteLink'>Online counselling sessions for RGUKT students (Updated)</a>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-1 border-dotted">
                      <div class="m-1 news-date">
                        <div class="d-block col-12 text-white mon text-center">MAY                       </div>
                        <div class="d-block col-12 date">29                       </div>
                      </div>
                      <div class="p px-2">
                        <a href="admin/uploads/notifications/1590729623.pdf" class='noteLink'>Declaration of summer holidays-Speaking orders-Issued-Reg.</a>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-1 border-dotted">
                      <div class="m-1 news-date">
                        <div class="d-block col-12 text-white mon text-center">MAY</div>
                        <div class="d-block col-12 date">04</div>
                      </div>
                      <div class="p px-2">
                        <a href="admin/uploads/notifications/1588565034.pdf" class='noteLink'>RGUKT-Certain guidelines to be followed in view of COVID-19-Reg.</a>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-1 border-dotted">
                      <div class="m-1 news-date">
                        <div class="d-block col-12 text-white mon text-center">APR                       </div>
                        <div class="d-block col-12 date">17                       </div>
                     </div>
                     <div class="p px-2">
                        <a href="admin/uploads/notifications/1587104091.pdf" class='noteLink'>RGUKT-Circular for extension of lockdown period -Reg.</a>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-1 border-dotted">
                      <div class="m-1 news-date">
                        <div class="d-block col-12 text-white mon text-center">MAR </div>
                        <div class="d-block col-12 date">31 </div>
                      </div>
                      <div class="p px-2">
                        <a href="http://rguktsklm.ac.in/pledge" class='noteLink'>Take the pledge to be responsible and save India from CORONA VIRUS</a>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-1 border-dotted">
                      <div class="m-1 news-date">
                        <div class="d-block col-12 text-white mon text-center">MAR                       </div>
                        <div class="d-block col-12 date">29                       </div>
                      </div>
                      <div class="p px-2">
                        <a href="admin/uploads/notifications/1585466787.pdf" class='noteLink'>Circular to students on COVID 19-Reg</a>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-1 border-dotted">
                      <div class="m-1 news-date">
                        <div class="d-block col-12 text-white mon text-center">FEB </div>
                        <div class="d-block col-12 date">06                       </div>
                      </div>
                      <div class="p px-2">
                        <a href="http://examcell.rguktsklm.ac.in/E_2019_P1_1.html" class='noteLink'>  PUC-1 Semester-1 results are announced.</a>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-1 border-dotted">
                      <div class="m-1 news-date">
                        <div class="d-block col-12 text-white mon text-center">FEB                       </div>
                        <div class="d-block col-12 date">01                       </div>
                      </div>
                      <div class="p px-2">
                        <a href="https://www.nitw.ac.in/eict/upcoming.php" class='noteLink'>A Faculty Development Programme (FDP) on "AI & Machine Learning For Real Time Applications" from 10th – 14th February, 2020 organized by Electronics and ICT Academy, NIT Warangal at RGUKT Srikakulam, Andhra Pradesh</a>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-1 border-dotted">
                      <div class="m-1 news-date">
                        <div class="d-block col-12 text-white mon text-center">DEC                       </div>
                        <div class="d-block col-12 date">18                       </div>
                      </div>
                      <div class="p px-2">
                        <a href="http://rguktsklm.ac.in/grievancecell/" class='noteLink'>Grievance Cell - IIIT Srikakulam</a>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-1 border-dotted">
                      <div class="m-1 news-date">
                        <div class="d-block col-12 text-white mon text-center">NOV                       </div>
                        <div class="d-block col-12 date">18                       </div>
                      </div>
                      <div class="p px-2">
                        <a href="http://examcell.rguktsklm.ac.in/" class='noteLink'>Remedial Examination Updated Time Table Semester-1_A.Y.2019-20</a>
                      </div>
                    </div>
                    <div class="d-flex border-bottom py-1 border-dotted">
                      <div class="m-1 news-date">
                        <div class="d-block col-12 text-white mon text-center">NOV                       </div>
                        <div class="d-block col-12 date">16                       </div>
                      </div>
                      <div class="p px-2">
                        <a href="http://examcell.rguktsklm.ac.in/" class='noteLink'>Instructions to Remedial Exams and Time Table Sem-1 A.Y 2019-20 </a>
                      </div>
                    </div>
                                      <div class="d-flex border-bottom py-1 border-dotted">
                     <div class="m-1 news-date">
                       <div class="d-block col-12 text-white mon text-center">
                         NOV                       </div>
                       <div class="d-block col-12 date">
                         11                       </div>
                     </div>
                     <div class="p px-2">
                                                             <a href="http://rguktsklm.ac.in/careers.php" class='noteLink'>Guest faculty notification for semester-2</a>
                             </div>
                   </div>
                                      
                   
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <div class="sixteen wide mobile eight wide mobile sixteen wide computer column">
        <div class="hire-panel">
         <div class="hire-panel_wrapper">
          <div class="hire-content">
             <h2 class="hire-heading hire-text-heading -size-l mb0">Want to hire best talents ?</h2>
              <p class="hire-heading hire-text-body mb0">Fill out this form. We will get back to you</p>
             <div class="hire-panel_button-wrapper">
                <a class="ui button pink" rel="noopener noreferrer" href="https://forms.gle/28X39wh3LwcCZB7d8" target="_blank">Recruit Our Students</a>
             </div>
           </div>
          </div>
        </div>
    </div>
</div>

<div class="container-section">
      <h1>Visited Companies</h1>
      <div class="logo-slider">
        <div class="item"><a href="#"><img src="branch/google.jpg" height="160px" width="100%"></a></div>
        <div class="item"><a href="#"><img src="branch/flipkart.png" height="160px" width="100%" ></a></div>
        <div class="item"><a href="#"><img src="branch/codethantra.jpeg" width="100%"></a></div>
        <div class="item"><a href="#"><img src="branch/ib.png" width="100%"></a></div>
        <div class="item"><a href="#"><img src="branch/ramersoft.png" width="100%"></a></div>
        <div class="item"><a href="#"><img src="branch/tcs.png" height="160px" width="100%"></a></div>
       <div class="item"><a href="#"><img src="branch/tribhuja.png" height="160px" width="100%"></a></div>
      </div>
    </div>
    <section>
     <div class="container-fluid pt-0 pb-0">
        <div class="section-content">
          <div class="row">
            <figure>
              <img class="img-fluid bottom-img" src="footer-bg.jpg">
        <span class="bw2ckk" style="display: block"></span>
            </figure>
          </div>
        </div>
      </div>
    </section>
<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
  <i class="fas fa-arrow-up"></i>
</button>
   <br>

    <?php
    include('./footer.php')
    ?>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
  $('.logo-slider').slick({
    slidesToShow:5,slidesToScroll:1,
    dots:true,
    arrows:true,
    autoplay:true,
    autoplaySpeed:1000,
    infinite:true
  });
</script>
  <script type="text/javascript">
      (function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel1").owlCarousel({
      loop: true,
      center: true,
      margin: 0,
      responsiveClass: true,
      nav: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        680: {
          items: 2,
          nav: false,
          loop: false
        },
        1000: {
          items: 3,
          nav: true
        }
      }
    });
  };

  (function ($) {
    carousels();
  })(jQuery);
})();

  </script>
  <script>
    //Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
  <script>
    $('#toggle').click(function () {
      $('.ui.sidebar').sidebar('toggle');
    })

    $('.ui.sticky')
  .sticky({
    context: '#example2',
    pushing: true
  })
;
  </script>
</body>
</html>