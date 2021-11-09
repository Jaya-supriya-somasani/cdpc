<!DOCTYPE html>
<html>
<head>
	<title>CSE</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://kit.fontawesome.com/20c5629a29.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="branchcss.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/20c5629a29.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> 
    <link rel="stylesheet" type="text/css" href="test.css">
  <style >
    
    .card-image1
{
  height:100% ;
  width: 100% ;
} 
.crd
{
  width: 50%;
  height: 40px;
 border-radius: 10px;
 margin: 10px;
}
.container
{
  position: relative;
  width: 1100px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  
}
.container .card
{
  position: relative;
  width: 260px;
  height: 215px;
  background: #fff;
  margin: 30px 10px;
  padding: 50px 15px;
  display: flex;
  flex-direction: column;
  box-shadow: 0 5px 202px rgba(0,0,0,0.5);
  transition: 0.3s ease-in-out;
  background-color: #F0F8FF;


}

.container .card:hover
{
  position: relative;
  width: 260px;
  height: 400px;
  top: -60px;
  left:20px;
  z-index: 1;
  box-shadow: 0 5px 20px rgba(0,0,0,0.2);
  background-color: #5F9EA0;
}
.container .card .imgBx
{
  position: relative;
  width: 200px;
  height: 200px;
  top: -60px;
  left: 20px;
  z-index:1;
  box-shadow: 0 5px 20px rgba(0,0,0,0.2);
}
.container .card .imgBx img
{
  max-width: 100%;
  border-radius: 5px;
}
.container .card .content
{
  position: relative;
  margin-top: -140px;
  text-align: center;
  padding: 10px 15px;
  color: #111;
  visibility: hidden;
  opacity: 0;
  transition: 0.3s ease-in-out;
}
.container .card:hover .content
{
  visibility: visible;
  opacity: 1;
  margin-top: -40px;
  transition-delay: 0.3s;
}
</style>
  </style>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Placement',     10],
          ['Internship',      3],
          
        ]);

        var options = {
          title: 'Overall Statistics'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {

        var button = document.getElementById('change-chart');
        var chartDiv = document.getElementById('chart_div');

        var data = google.visualization.arrayToDataTable([
           ['Year', 'Internships', 'Placements'],
          ['2014', 60, 10],
          ['2015', 50, 40],
          ['2016', 60, 40],
          ['2017', 70, 50]
        ]);

        var materialOptions = {
          width: 700,
          chart: {
            title: 'CSE Statistics',
            subtitle: 'Internships, Placements: 2014-2017',
          },
          series: {
            0: { axis: 'Placements' }, // Bind series 0 to an axis named 'distance'.
            1: { axis: 'Internships' } // Bind series 1 to an axis named 'brightness'.
          },
          axes: {
            y: {
              distance: {label: 'parsecs'}, // Left y-axis.
              brightness: {side: 'right', label: 'apparent magnitude'} // Right y-axis.
            }
          }
        };

        var classicOptions = {
          width: 690,
          series: {
            0: {targetAxisIndex: 0},
            1: {targetAxisIndex: 1}
          },
          title: 'CSE Statistics - Internships, Placements: 2014-2017',
          vAxes: {
            // Adds titles to each axis.
            0: {title: 'parsecs'},
            1: {title: 'apparent magnitude'}
          }
        };

        function drawMaterialChart() {
          var materialChart = new google.charts.Bar(chartDiv);
          materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
          button.innerText = 'Change to Classic';
          button.onclick = drawClassicChart;
        }

        function drawClassicChart() {
          var classicChart = new google.visualization.ColumnChart(chartDiv);
          classicChart.draw(data, classicOptions);
          button.innerText = 'Change to Material';
          button.onclick = drawMaterialChart;
        }
         function drawClassicChart() {
          var classicChart = new google.visualization.ColumnChart(chartDiv);
          classicChart.draw(data, classicOptions);
          button.innerText = 'Change to Material';
          button.onclick = drawMaterialChart;
        }

        drawMaterialChart();
    };
    </script>
</head>
<body>
<?php
include('./header.php')
?>
    <script>
var dd_main = document.querySelector(".dd_main");

    dd_main.addEventListener("click", function(){
        this.classList.toggle("active");
    })
</script>
<div class="container-fluid section-header py-1">
  <div class="row mt-5"style="margin: 10px;">
    <div class="col-12 ">
    <div class="  card card-container1 d-flex  flex-row " >
      <div class="col-5" style="margin: 10px;" >

         <img src="./branch/images.jpg" class="card-image1">
        </div>
                           <div class="col-6">
                            <h1 class="card-heading1">
                            Computer Science and Enginnering
                            </h1> 
                            <br>
                            <h5 class="card-description1">
                          One of the most sought after courses amongst engineering students, Computer Science Engineering (CSE) is an academic programme which integrates the field of Computer Engineering and Computer Science. </h5><br>
                          <h5>The programme, which emphasises the basics of computer programming and networking, comprises a plethora of topics. The said topics are related to computation, algorithms, programming languages, program design, computer software, computer hardware, etc.</h5>
                          <br>
                          <br>
                         <h5> Computer science engineers are involved in many aspects of computing, from the design of individual microprocessors, personal computers, and supercomputers to circuit designing and writing software that powers them.</h5>
                            
                         </div>
                         
                         </div>
    </div>
</div>


 <h2 class=" card  d-flex text-center">Statistics</h2><br>
<div class="row">
  <div class="col-5">
    <div class="card" >
 <div id="piechart" style="width: 600px; height: 500px;"></div>
</div>
</div>
<div class="col-7 justify-content-center">
  <div class="card ">
 <div id="chart_div" style="width: 480px; height: 500px;"></div>
 </div>
</div>
</div>
<br>

<div class="row">

    <h2 class=" card  d-flex text-center">Companies visited our Campus</h2>
   
     <div class="container">
     <br>
<br>
<br>

  <div class="card">
    <div class="imgBx">
      <img src="./branch/codethantra.jpeg">
      
    </div>
    <div class="content">
      <h2>
        CodeTantra
      </h2>
      <p class="title">Students Selected for placements:<b>0</b></p>
      <p>Students selected for interships:<b>10</b></p></br>
    </div>
    

</div>



  <div class="card">
    <div class="imgBx">
      <img src="./branch/ramersoft.png">
      
    </div>
    <div class="content">
      <h2>
        RamerSoft
      </h2>
      <p class="title">Students Selected for placements:<b>0</b></p>
      <p>Students selected for interships:<b>10</b></p></br>
    </div>
    

</div>



  <div class="card">
    <div class="imgBx">
      <img src="./branch/ib.png">
      
    </div>
    <div class="content">
      <h2>
        IBHUBS
      </h2>
       <p class="title">Students Selected for placements:<b>0</b></p>
      <p>Students selected for interships:<b>10</b></p></br>
    </div>
    


</div>
<div class="card">
    <div class="imgBx">
      <img src="./branch/Wipro.png">
      
    </div>
    <div class="content">
      <h2>
        wipro
      </h2>
      <p class="title">Students Selected for placements:<b>100</b></p>
      <p>Students selected for interships:<b>0</b></p></br>
    </div>
    

</div>


</div>
</div>
</div>
<br>
 <?php
    include('./footer.php')
 ?>

 

<script src='https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js'></script>
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
   
