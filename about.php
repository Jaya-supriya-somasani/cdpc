<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/20c5629a29.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> 
    <link rel="stylesheet" type="text/css" href="test.css">
    
</head>
<body >
<?php
    include('./header.php')
?>
<hr><hr>
<hr>
<div class="">
  <div class="ui container mb7">
    <div class="sixteen wide mobile eight wide tablet sixteen wide computer column">
      <div class="ui tall stacked segment">
        <h4 class="header">About Placement and Training Cell(PTC)</h4>
          <div class="ui segment">
            <a class="ui ribbon grey label">Overview</a>
              <p> PTC is responsible for handling Career Development, Placement and Internship related activities. Faculty-Incharge, Departmental placement Faculty Co-ordinators, Placement Office and Student Representatives manage various activities related to PTC.</p>
          </div>
          <div class="ui segment">
            <a class="ui ribbon orange label">Vision</a>
              <p> Imparting the conceptualized professional skills to the students and guiding them towards a bright career in reputed Organizations/Industries across the World with values of-Dedication, Hard work, and Professional Ethics.</p>
          </div>
          <div class="ui segment">
            <a class="ui ribbon olive label">Mission</a>
              <p>Providing 100% career opportunities to the students of RGUKT SRIKAKULAM in reputed organizations across the world.</p>
          </div>
          <div class="ui segment">
            <a class="ui ribbon blue label">Goals &amp; Objectives</a>
              <li style="list-style-type: none;"><i class="icon check"></i> Establishing good contacts with the companies ,Institutes and organization to meet the Industry’s recruitment process.</li>
              <li style="list-style-type: none;"><i class="icon check"></i> To motivate students to develop Technical knowledge and soft skills in terms of career planning, goal setting. </li>
              <li style="list-style-type: none;"><i class="icon check"></i> To motivate students aspire for higher studies and guiding them to take competitive exams such as CAT, GATE, TOEFL, GRE, ILETS,IES,UPSC etc. </li>
              <li style="list-style-type: none;"><i class="icon check"></i> Aiming to Place the maximum number in internships and placements of students through campus & off-campus interviews conducted by the top companies.</li>
              <li style="list-style-type: none;"><i class="icon check"></i> Helping students in finding organizations to complete their summer internships/projects.</li>
              <li style="list-style-type: none;"><i class="icon check"></i> To counsel the students to improve their career with worldwide exposure.</li>
              <li style="list-style-type: none;"><i class="icon check"></i> To produce the most competent engineers to to meet the upcoming challenges of the job market.</li>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<br>
<?php
    include('./footer.php')
?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
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
    $('#toggle').click(function () {
      $('.ui.sidebar').sidebar('toggle');
    })
  </script>
</body>
</html>