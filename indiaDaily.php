<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Covid-19</title>
  </head>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    
  <body>
  <nav class="navbar navbar-expand-lg nav_style">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler navtog" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon navtog"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="index.php/aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php/symptomid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php/preventionid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php/#contactid">Contact</a>
      </li>  
    </ul>
  </div>
</nav>
<!-------------------Table Section-------------------------------->
<section class="Corona Update container-fluid">
        <div class="my-5">
            <h3 class="text-center text-uppercase" style="font-weight:bolder; color:red">COVID 19 DAILY UPDATES OF INDIA</h3>
        </div>
    <div class="table-responsive">
        <table class="table text-center" id="tb1">
    
<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coronalive = json_decode($data,true);
$scount = count($coronalive['cases_time_series']);
$i=0;
while($i < $scount) {
    
    ?>

    <tr>
            <th class="text-left" colspan="6">Date & Month</th>
    </tr>
    <tr>
        <td colspan="6" class="text-left"><?php echo $coronalive['cases_time_series'][$i]['date']." </br> " ; ?></td>
    </tr>
    <tr class="text-capitalize text-white">
        <th style="color:#fff; background: #2196f3;">total confirmed</th>
        <th style="color:#fff; background: #ffC107;">daily confirmed</th>
        <th style="color:#fff; background: #008C76FF;">daily recovered</th>
        <th style="color:#fff; background: #e91e7f;">daily deceased</th>
        <th style="color:#fff; background: #4caf50;">total recovered</th>
        <th style="color:#fff; background: #EE2737FF;">total deceased</th>
    </tr>
    <tr class="mb-5">
    <td style="background: #bed2f3;"><?php echo $coronalive['cases_time_series'][$i]['totalconfirmed']." </br> " ; ?></td>
    <td style="background: #ffe493;"><?php echo $coronalive['cases_time_series'][$i]['dailyconfirmed']." </br> " ; ?></td>
    <td style="background: #9ED9CCFF;"><?php echo $coronalive['cases_time_series'][$i]['dailyrecovered']." </br> " ; ?></td>
    <td style="background: #fc95c6;"><?php echo $coronalive['cases_time_series'][$i]['dailydeceased']." </br> " ; ?></td>
    <td style="background: #88d28b;"><?php echo $coronalive['cases_time_series'][$i]['totalrecovered']." </br> " ; ?></td>
    <td style="background: #fb99a1;"><?php echo $coronalive['cases_time_series'][$i]['totaldeceased']." </br> " ; ?></td>
    </tr>
    
    <?php
    $i++;
}

?>


</table>
    </div>
</section>
<!---------------Top Cursor------------------->
<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>
<!-------------footer------------------------------------------->
<footer class="container-fluid bg-dark text-white mb-0 py-2">
  <div class="text-center">
    <h4>Developer</h4>
    <p>&copy;&nbsp;&nbsp;2020&nbsp;&nbsp;@rishiraj<br>E-mail:rishi.raj4662@gmail.com</p>
  </div>
</footer>
<script type="text/javascript">

$('.count').counterUp({
  delay:10,
  time:3000
})

mybutton = document.getElementById("myBtn");
window.onscroll = function() {
  scrollFunction()
};

function scrollFunction() {
  if(document.body.scrollTop > 100 || document.documentElement.scrollTop> 100)
  {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;//for chrome
  document.documentElement.scrollTop = 0;//for opera firefox etc
}


</script>
  </body>
</html>

