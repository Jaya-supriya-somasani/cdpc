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
        background: white !important;
      }
    </style>
</head>
<body class=" main-bg">
<div class="ui container">
<?php
    include('./header.php')
?>

<hr><hr>
<hr>
<div class="">
  <div class="ui container mb7">
    <div class="ui longer modal getNotice">
      <i class="close icon"></i>
        <div class="header">
          <div id="notice-title"></div>
        </div>
        <div class="image content">
          <div class="description scrolling content" style="overflow-y: scroll;width:fit-content;max-height:150px">
            <div id="loader" style="display: none;">Fetching Please Wait..</div>
              <div id="notice-desc"></div>
              <div id="notice-file"></div>
          </div>
        </div>
        <div class="actions">
          <div class="ui positive right labeled icon button">
            Close
            <i class="close icon"></i>
          </div>
        </div>
    </div>
    <div class="sixteen wide mobile eight wide tablet sixteen wide computer column">
      <div class="ui segment overflow">
        <div class="pl-4">
          <div id="dataTables-example_wrapper" class="dataTables_wrapper dt-semanticUI no-footer">
            <div class="ui stackable grid">
              <div class="row">
                <div class="eight wide column">
                  <div class="dataTables_length" id="dataTables-example_length">
                    <label>Show entries
                      <div class="form-control form-control-sm selection ui dropdown" tabindex="0">
                        <select name="dataTables-example_length" aria-controls="dataTables-example" style="display:inline-block;">
                          <option value="10">10</option>
                          <option value="25">25</option>
                          <option value="50">50</option>
                          <option value="100">100</option>
                        </select>
                        <i class="dropdown icon"></i>
                        <div class="text">10</div>
                        <div class="menu" tabindex="-1">
                          <div class="item active selected" data-value="10">10</div>
                          <div class="item" data-value="25">25</div>
                          <div class="item" data-value="50">50</div>
                          <div class="item" data-value="100">100</div>
                        </div>
                      </div> 
                    </label>
                  </div>
                </div>
                <div class="right aligned eight wide column">
                  <div id="dataTables-example_filter" class="dataTables_filter ui form">
                    <label>Search:
                      <span class="ui input">
                        <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTables-example">
                      </span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row dt-table">
                <div class="sixteen wide column">
                  <table class="ui unstackable table dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                    <thead>
                      <tr role="row">
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 42px;">Sno</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 644px;">Subject</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 93px;">Sent to</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 144px;">Sent Time</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 61px;">Views</th></tr>
                    </thead>
                    <tbody>
                      <tr role="row" class="odd">
                        <td>5</td>
                        <td>
                            <a href="https://cdpc.rguktn.ac.in/cdpc/updates#" data-id="5" id="getNotice">
                            <h5>Important notice regarding Long term Internship selected students                                                        </h5>
                            </a>
                        </td>
                        <td><span class="ui blue label">E3 &amp; E4</span></td>
                        <td><span class="ui grey horizontal label">3 months ago</span></td>
                        <td><span class="ui green label">134</span></td>
                      </tr>
                      <tr role="row" class="even">
                        <td>4</td>
                        <td>
                          <a href="https://cdpc.rguktn.ac.in/cdpc/updates#" data-id="4" id="getNotice">
                          <h5>Analog Devices offered 3.60 LPA stipend &amp; 20 LPA CTC E3 ECE students                                                        </h5>
                          </a>
                        </td>
                        <td><span class="ui blue label">All</span></td>
                        <td><span class="ui grey horizontal label">4 months ago</span></td>
                        <td><span class="ui green label">200</span></td>
                      </tr>
                      <tr role="row" class="odd">
                        <td>3</td>
                        <td>
                            <a href="#" data-id="3" id="getNotice">
                              <h5>Reg:Registration forAPSSDC Training program for E4 CSE students                                                        </h5>
                            </a>
                        </td>
                        <td><span class="ui blue label">E4</span></td>
                        <td><span class="ui grey horizontal label">4 months ago</span></td>
                        <td><span class="ui green label">54</span></td>
                      </tr>
                      <tr role="row" class="even">
                        <td>2</td>
                        <td>
                          <a href="https://cdpc.rguktn.ac.in/cdpc/updates#" data-id="2" id="getNotice">
                            <h5>Reg:Registration forAPSSDC Training program for E4 ECE students                                                        </h5>
                          </a>
                        </td>
                        <td><span class="ui blue label">E4</span></td>
                        <td><span class="ui grey horizontal label">4 months ago</span></td>
                        <td><span class="ui green label">36</span></td>
                      </tr>
                      <tr role="row" class="odd">
                        <td>1</td>
                        <td>
                          <a href="https://cdpc.rguktn.ac.in/cdpc/updates#" data-id="1" id="getNotice">
                            <h5>Welcome to New Website                                                        </h5>
                          </a>
                        </td>
                        <td><span class="ui blue label">All</span></td>
                        <td><span class="ui grey horizontal label">9 months ago</span></td>
                        <td><span class="ui green label">918</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="seven wide column">
                  <div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">Showing 1 to 5 of 5 entries</div>
                </div>
                <div class="right aligned nine wide column">
                  <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                    <div class="ui right floating pagination menu">
                      <div class="paginate_button item previous disabled" id="dataTables-example_previous" href="#" aria-controls="dataTables-example" data-dt-idx="0" tabindex="0">Previous</div>
                      <a class="paginate_button item active" href="https://cdpc.rguktn.ac.in/cdpc/updates#" aria-controls="dataTables-example" data-dt-idx="1" tabindex="0">1</a>
                      <div class="paginate_button item next disabled" id="dataTables-example_next" href="#" aria-controls="dataTables-example" data-dt-idx="2" tabindex="0">Next</div>
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