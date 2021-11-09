<!DOCTYPE html>
<!-- saved from url=(0038)https://cdpc.rguktn.ac.in/cdpc/queries -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <!-- Site Properties -->
    <title>Queries || CDPC</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-164481040-1');
    </script></head>


<body>

  <?php include('./header.php')
  ?>  
  <br>
   <div class="mt-5">
        <div class="ui container mb7">
            <h2 class="ui header">
                Queries
                <div class="sub header">Your Queries Our Solutions</div>
            </h2>
                        <div class="sixteen wide mobile eight wide tablet sixteen wide computer column">
                <div class="ui piled segment">
                    
                    <form class="ui form" action="" method="POST">
                        <div class="field required">
                            <label>Type</label>
                            <div class="ui fluid dropdown selection" tabindex="0"><select name="type" id="type" required="">
                                <option value="">Choose Type</option>
                                <option value="Query">Query</option>
                                <option value="Feedback">Feedback</option>
                                <option value="Suggestion">Suggestion</option>
                                <option value="Bug">Report a bug</option>
                                <option value="Grammar">Report Grammatical Mistakes</option>
                                <option value="Others">Others</option>

                            </select><i class="dropdown icon"></i><div class="default text">Choose Type</div><div class="menu transition hidden" tabindex="-1"><div class="item" data-value="Query">Query</div><div class="item" data-value="Feedback">Feedback</div><div class="item" data-value="Suggestion">Suggestion</div><div class="item" data-value="Bug">Report a bug</div><div class="item" data-value="Grammar">Report Grammatical Mistakes</div><div class="item" data-value="Others">Others</div></div></div>
                        </div>
                        <div class="required field">
                            <label>Subject</label>
                            <input type="text" placeholder="Subject" name="sub" id="sub" required="">
                        </div>
                        <div class="required field">
                            <label>Description</label>
                            <textarea rows="5" placeholder="Description" name="desc" id="desc" required=""></textarea>
                        </div>
                        <div class="field">
                            <button type="submit" name="submit" class="ui button blue">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    
   <?php include('./footer.php')?>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <script>
        $('#toggle').click(function () {
        $('.ui.sidebar').sidebar('toggle');
        })
    </script>




</body></html>