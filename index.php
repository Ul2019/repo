<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>itsitsa primary</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="script.js"></script>
</head>
<body>
    
    <div class="navbar-1">
<div class="logo">
<p>Itsitsa<br>primary<br>school</p>
<navs>
    <a href="#home" class="ukwehlula">Home</a>
    <a href="#home" class="ukwehlula">about</a>
    <a href="#home" class="ukwehlula">faq</a>
    <a href="#home" class="ukwehlula">gallery</a>
    <a href="#home" class="ukwehlula">contact us</a>
    </navs>

</div>

<div class="icons">
    <img src="./images/login.png">
    <img src="./images/register.png">
   </div>
    </div>
    <div class="banner">
        <h1>We are itsitsa primary school</h1>
        <p>we value our kids education</p>
    </div>
    
   
<section id="about">
    <div class="container-1"> 
        <div class="image-container-1">
        <img src="./images/kids.jpg" alt="kids">
        </div>
        
        <div class="text-container-1">
          <h1>Our Mission AND VISION</h1>
          <p>Lorem ipsum, dolor sit amet<br> consectetur adipisicing<br> elit. Non, beatae.</p>
          <div class="fading-effect"></div>
        </div>
      </div>
      <div class="heading">
          <h1>ENTER TO LEARN LEAVE TO SERVE</h1>
      </div>
         <div class="gallery">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./images/teacher.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Teachers</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-success">Go somewhere</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./images/valecdictory.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">valecdictory</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-success">Go somewhere</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./images/sports.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Sports</h5>
              <p class="card-text">Some quick example text to build loremnkjligckdvculkcdbjvckdgvcvdkjcbvthe card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-success">Go somewhere</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./images/GALLERY1.jpg " alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">pupils</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-success">Go somewhere</a>
            </div>
          </div>
      </section>
      <center><h1>Contact Us</h1></center>
      <div class="container" style="margin-top:100px;">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" align="center">
                <input id="name" placeholder="Name" class="form-control">
                <br>
                <input id="email" placeholder="Email" class="form-control">
                <br>
                <input id="subject" placeholder="Subject" class="form-control">
                <br>
                <textarea class="form-control" id="body" placeholder="Email Body"></textarea>
                <br>
                <div class="g-recaptcha" data-sitekey="6LckZvoaAAAAAHS_TNWvZK4zWn633DgZhovZKsFsb"></div>
                <input type="button" onclick="sendEmail()" value="Send An Email" class="btn btn-primary">
                <br>  <br>
                <br>  <br> 
                <br>  <br>

            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        if (response.status == "success")
                            alert('Email Has Been Sent!');
                        else {
                            alert('Please Try Again!');
                            console.log(response);
                        }
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

      
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <aside class="footer-widget">
                    <h5>Follow us</h5>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">LinkedIn</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">YouTube</a></li>
                        <li><a href="#">Tumblr</a></li>
                    </ul>
                </aside>
            </div>
           
            <div class="col-lg-3 col-md-3 col-sm-6">
                <aside class="footer-widget">
                    <h5>Recent Updates</h5>
                    <ul>
                      <p>terms & condition</p>
                      <p>FAQ</p>
                      <p>about the school</p>
                      <p>the principal</p>
                      <p>covid 19</p>
                    </ul>
                </aside>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <aside class="footer-widget">
                    <h5>ADDRESS</h5>
                    <ul>
                      <p>Itsitsa and Nkqubela STR</p>
                      <p>Mfuleni</p>
                      <p>Cape Town</p>
                      <p>8000</p>
                     
                    </ul>
                </aside>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <aside class="footer-widget">
                    <address>
                        <h2>SCHOOL</h2>
                        <p><strong>Fax: </strong> (0)0219093357</p>
                        <p><strong>Email: </strong> <a href="mailto:someone@something.com">admin@itsitsaps.wcape.school.za”</a></p>
                        <p><strong>Phone: </strong> 00218698027</p>
                    </address>
                </aside>
            </div>
        </div>
    </div>
</footer>
<!-- Footer -->
<!-- Copy -->
<section class="copy">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; 2020. All Rigts Reserved</p>
            </div>
        </div>
    </div>
</section>
 </body>  

