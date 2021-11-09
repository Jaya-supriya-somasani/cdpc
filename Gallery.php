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
    <style>
     .main-bg
      {
        background-color: white !important;
      }
    </style>
</head>
<body>
<?php
    include('./header.php')
?>
<br>
<div class="">
  <div class="ui container mb7 mt-5">
    <div class="sixteen wide mobile eight wide tablet sixteen wide computer column"><br>
      <div class="ui segment mt-5">                        
        <div class="ui grid">
          <div class="sixteen wide mobile eight wide tablet four wide computer column">
            <a href="">
              <div class="ui fluid  card">
                <div class="image center aligned segment">
                  <div class="ui red left ribbon label"><i class="icon info"></i>2016</div>
                    <img src="folder1.png" alt="Folder">
                </div>
              </div>
            </a>
          </div>
          <div class="sixteen wide mobile eight wide tablet four wide computer column">
            <a href="">
              <div class="ui fluid  card">
                <div class="image center aligned segment">
                  <div class="ui green left ribbon label">
                    <i class="icon info"></i> 2017
                  </div>
                  <img src="folder1.png" alt="Folder">
                </div>
              </div>
            </a>
          </div>
          <div class="sixteen wide mobile eight wide tablet four wide computer column">
            <a href="">
              <div class="ui fluid  card">
                <div class="image center aligned segment">
                  <div class="ui red left ribbon label">
                    <i class="icon info"></i> 2018
                  </div>
                  <img src="folder1.png" alt="Folder">
                </div>
              </div>
            </a>
          </div>
          <div class="sixteen wide mobile eight wide tablet four wide computer column">
            <a href="">
              <div class="ui fluid  card">
                <div class="image center aligned segment">
                  <div class="ui purple left ribbon label"><i class="icon info"></i>2019</div>
                  <img src="folder1.png" alt="Folder">
                </div>
              </div>
            </a>
          </div>
          <div class="sixteen wide mobile eight wide tablet four wide computer column">
            <a href="./Gallerysub.php">
              <div class="ui fluid  card">
                <div class="image center aligned segment">
                  <div class="ui blue left ribbon label">
                    <i class="icon info"></i> 2020
                  </div>
                  <img src="folder1.png" alt="Folder">
                </div>
              </div>
            </a>
          </div>
          <div class="sixteen wide mobile eight wide tablet four wide computer column">
            <a href="">
              <div class="ui fluid  card">
                <div class="image center aligned segment">
                  <div class="ui pink left ribbon label"><i class="icon info"></i>2021</div>
                  <img src="folder1.png" alt="Folder">
                </div>
              </div>
            </a>
          </div>

          <div class="sixteen wide mobile eight wide tablet four wide computer column">
            <a href="">
              <div class="ui fluid  card">
                <div class="image center aligned segment">
                  <div class="ui purple left ribbon label">
                    <i class="icon info"></i> 2022
                  </div>
                  <img src="folder1.png" alt="Folder">
                </div>
              </div>
            </a>
          </div>
          <div class="sixteen wide mobile eight wide tablet four wide computer column">
            <a href="">
              <div class="ui fluid  card">
                <div class="image center aligned segment">
                  <div class="ui green left ribbon label">
                    <i class="icon info"></i> College
                  </div>
                  <img src="folder1.png" alt="Folder">
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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