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
    
  <body onload="fetch()">
  <nav class="navbar navbar-expand-lg nav_style">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler navtog" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon navtog"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptomid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventionid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>  
    </ul>
  </div>
</nav>
    <!---------------header_Page------------------------>
    <div class="main_header">
        <div class="row  w-100 h-100">
            <div class="col-lg-05 col-md-5 col-12 order-lg-1 order-2">
                <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                    <img src="people-3245739_640.png" height="300" width="300">
                </div>
            </div>
            <div class="col-lg-7 col-mg-7 col-12 order-lg-2 order-1">
                <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                    <h1>Let's Stay Safe & Fight Together Against Cor<span class="rolling">
                        <img src="30544391.jpg" height="50" whidth="50">
                    </span>na Virus</h1>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>

    <!-------------------------Corona Updates-------------------------->
   <section class="number_update">
        <div class="mb-3">
            <h3 class="text-uppercase text-center" style="font-weight:bolder; color:red">
                covid-19 current status
            </h3>
        </div>
        <br>
      <div class="container">
              <div class="row text-center">
                    <div class="col-md-3 col-sm-12">
                        <h1 id="totalCases"></h1>
                        <p>Total Cases</p>
                    </div>
                    <div class="col-md-3 col-sm-12">
                          <h1 id="recoveryCases"></h1>
                          <p>Recovery Cases</p>
                    </div>
                    <div class="col-md-3 col-sm-12">
                          <h1 id="deathCases"></h1>
                          <p>Total Death Cases</p>
                    </div>
                    <div class="col-md-3 col-sm-12">
                          <h1 id="currentlyInfected">09</h1>
                          <p>Currently Infected</p>
                    </div>
              </div>
        <div>
          
    </section>

<!----------------------Country And India Live Status Check------------------------------------->
<div class="container text-center">
  <div class="row">
    <div class="col-sm">
    <a class="btn btc" href="india.php">India Status List</a>
    </div>
    <div class="col-sm">
      &nbsp;&nbsp;&nbsp;
    </div>
    <div class="col-sm">
    <a class="btn btc" href="indiaDaily.php">India Daily-Basis List</a>
    </div>
  </div>
</div>

    <!------------About Section---------------------------------->
    <div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
            <div class="section_header text-center mb-5 mt-4">
                <h1 style="font-weight:bolder; color:red">About COVID-19</h1>
            </div>
            <div class="row">
                  <div class="col-lg-5 col-md-5 col-12">
                      <img src="coronavirus-5107832_640.png" class="img-fluid" height="400" width="400">
                  </div>
                  <div class="col-lg-1 col-md-1 col-12"></div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <h2>What is COVID-19(Corona-Virus)</h2>
                    <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>
                    <p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
                    <p>The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. </p>
                    <p>The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).</p>
                    <p>At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments.</p>
                  </div>
            </div>
    </div>
<!----CORONA Symptoms------>
<div class="container-fluid pt-5 pb-5" id="symptomid">
            <div class="section_header text-center mb-5 mt-4">
                <h1 style="font-weight:bolder; color:red">Symptoms Of COVID-19</h1>
            </div>
            <div class="container">
                  <div class="row">
                          <div class="col-lg-4 col-md-4 col-12 mt-5">
                                  <figure class="text-center">
                                        <img src="3679150.jpg" class="img-fluid" width="150" height="150">
                                        <figcaption>Cough</figcaption>
                                  </figure>
                          </div>
                          <div class="col-lg-4 col-md-4 col-12 mt-5">
                                  <figure class="text-center">
                                        <img src="download.jpg" class="img-fluid" width="100" height="100">
                                        <figcaption>Running Nose</figcaption>
                                  </figure>
                          </div>
                          <div class="col-lg-4 col-md-4 col-12 mt-5">
                                  <figure class="text-center">
                                        <img src="download1.jpg" class="img-fluid" width="120" height="120">
                                        <figcaption>Fever</figcaption>
                                  </figure>
                          </div>
                          <div class="col-lg-4 col-md-4 col-12 mt-5">
                                  <figure class="text-center">
                                        <img src="download2.jpg" class="img-fluid" width="120" height="120">
                                        <figcaption>Cold</figcaption>
                                  </figure>
                          </div>
                          <div class="col-lg-4 col-md-4 col-12 mt-5">
                                  <figure class="text-center">
                                        <img src="download3.jpg" class="img-fluid" width="150" height="150">
                                        <figcaption>Tiredness</figcaption>
                                  </figure>
                          </div>
                          <div class="col-lg-4 col-md-4 col-12 mt-5">
                                  <figure class="text-center">
                                        <img src="download4.jpg" class="img-fluid" width="150" height="150">
                                        <figcaption>Problem in Breathing</figcaption>
                                  </figure>
                          </div>
                  </div>
            </div>
</div>
<!-----Steps To Prevent CORONA VIRUS--------------->

<div class="container-fluid pt-5 pb-5" id="preventionid">
            <div class="section_header text-center mb-5 mt-4">
                <h1 style="font-weight:bolder; color:red">Steps To Prevent Covid-19</h1>
            </div>
      <div class="container">
            <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                       <figure class="text-center"> 
                                        <img src="hand.jpg" class="img-fluid" width="90" height="90">
                                       </figure>
                                </div>
                                <div class="col-lg-8 col-mid-8 col-12">
                                  <p>Wash your hands regularly for 20 seconds,
                                     with soap and water or alcohol-bases hand rub</p>
                                </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                       <figure class="text-center"> 
                                        <img src="mask.jpg" class="img-fluid" width="90" height="90">
                                       </figure>
                                </div>
                                <div class="col-lg-8 col-mid-8 col-12">
                                  <p>Cover your nose with a disposable tissue or flexed
                                    elbow when you cough or sneeze</p>
                                </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                       <figure class="text-center"> 
                                        <img src="distancing.webp" class="img-fluid" width="90" height="90">
                                       </figure>
                                </div>
                                <div class="col-lg-8 col-mid-8 col-12">
                                  <p>Avoid close contact(1 meter or 3 feet) with people who are unwell</p>
                                </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                       <figure class="text-center"> 
                                        <img src="home.jpg" class="img-fluid" width="90" height="90">
                                       </figure>
                                </div>
                                <div class="col-lg-8 col-mid-8 col-12">
                                  <p>Stay home and self-isolate from others in the household
                                  if you feel unwell</p>
                                </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                       <figure class="text-center"> 
                                        <img src="tv.png" class="img-fluid" width="90" height="90">
                                       </figure>
                                </div>
                                <div class="col-lg-8 col-mid-8 col-12">
                                  <p>Stay informed by watching news& follow the
                                  recommended practices</p>
                                </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                       <figure class="text-center"> 
                                        <img src="feel.jpg" class="img-fluid" width="90" height="90">
                                       </figure>
                                </div>
                                <div class="col-lg-8 col-mid-8 col-12">
                                  <p>If you have fever, cough and difficulty breathing seek
                                  medical care early</p>
                                </div>
                        </div>
                    </div>

                    
            </div>
      </div>
</div>
<!-------------Contact us----------------------------------------->
<div class="container-fluid pt-5 pb-5" id="contactid">
            <div class="section_header text-center mb-5 mt-4">
                <h1 style="font-weight:bolder; color:red">Contact Us</h1>
            </div>
            <div class="container">
                <div class="row">
                      <div class="col-lg-8 offset-lg-2 col-12">
    <form action="" method="POST">
    <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control"  placeholder="Name" name="username" required>
  </div>
<div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com" required>
  </div>

  <div class="form-group">
    <label>Mobile</label>
    <input type="mobile" class="form-control"  placeholder="Mobile" name="mobile" required>
  </div>
  <label for="formGroupExampleInput">Any Symptoms</label><br>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="cold" name="coronasym[]">
  <label class="form-check-label" for="inlineCheckbox1">Cold</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="fever" name="coronasym[]">
  <label class="form-check-label" for="inlineCheckbox1">Fever</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="breath" name="coronasym[]">
  <label class="form-check-label" for="inlineCheckbox1">Difficulty in Breath</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="tired" name="coronasym[]">
  <label class="form-check-label" for="inlineCheckbox1">Tiredness</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="none" name="coronasym[]">
  <label class="form-check-label" for="inlineCheckbox1">None<br></label>
</div>
<br><br>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
  </div>

  <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
</form>
      </div>
    </div>
</div>
</div>
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


function fetch() {
  $.get("https://corona-virus-stats.herokuapp.com/api/v1/cases/general-stats",
      function(data) {
        var cases=data['data']['total_cases'];
        var rc=data['data']['recovery_cases'];
        var dc=data['data']['death_cases'];
        var ci=data['data']['currently_infected'];
        $("#totalCases").html(cases.toString());
        $("#recoveryCases").html(rc.toString());
        $("#deathCases").html(dc.toString());
        $("#currentlyInfected").html(ci.toString());

      }
  
  
  )
}




</script>
  </body>
</html>
<?php
$server= 'localhost';
$user = 'root';
$password = '';
$db = 'coronadb';

$con = mysqli_connect($server, $user, $password, $db);
if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $symp = $_POST['coronasym'];
  $msg = $_POST['msg'];
  $chk = "";
  foreach($symp as $chk1) {
    $chk .=$chk1.",";
  }
  $insertquery ="insert into userdata(username, email, mobile, symptoms, message) values('$username','$email','$mobile','$chk','$msg')";

  $query = mysqli_query($con, $insertquery);

  if($query) {
    ?>
    <script>
        alert('Thanku For Contacting');
    </script>
    <?php
} else {
    ?>
    <script>
        alert("We may reach you later");
    </script>
    <?php
}


}


?>