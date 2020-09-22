<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-5">
            <h2 class="footer-heading mb-4">About Us</h2>
            <p>Paying Love and Kindness Forward</p>
            <a nav class="navbar-brand"><img src ="images/ripp.jpeg" alt="Doggo" width="150" height="100"></a>
          </div>
          <div class="col-md-3 ml-auto">
            <h2 class="footer-heading mb-4">Quick Links</h2>
            <ul class="list-unstyled">
              <li><a href="#about-section" class="smoothscroll">About Us</a></li>
              <li><a href="#programmes-section" class="smoothscroll">Our Programmes</a></li>
              <li><a href="#sponsors-section" class="smoothscroll">Sponsors</a></li>
              <li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Follow Us</h2>
            <a href="https://www.facebook.com/RipplesByDiane/" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="https://twitter.com/DeaneDiane/status/1282973572638679042" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="https://www.instagram.com/ripplesfoundationug/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="https://www.linkedin.com/in/diane-kwesiga-618759174/?originalSubdomain=ug" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
          </div>
        </div>
      </div>
      <div class="col-md-3">

            <h2>Subscriber to our Newsletter</h2>

            <button onclick="document.getElementById('id01').style.display='block'" class="sub_btn" style="width:auto;">subscribe</button>

            <div id="id01" class="modal">

              <form class="modal-content animate" action="" method="post">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
                  <img src="images/ripp.jpeg" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                  <label for="email"><b>Email</b></label>
                  <input type="text" placeholder="Enter your Email" name="email" required>

                  <label for="name"><b>Name</b></label>
                  <input type="text" placeholder="Enter your Name" name="name" required>

                  <div>
                  <input type="checkbox" checked="checked" name="remember" required> By submiting, you agree to our terms and conditions
                </label>
              </div>

                  <button class="sub_btn" name ="sub_btn"style="align:center" type="submit">submit</button>
                  <label display="block">
                </div>
              </form>
            </div>
      </div>
    </div>
    <div class="row pt-5 mt-5 text-center">
      <div class="col-md-12">
        <div class="border-top pt-5">
          <p>
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="https://theripplesfoundation.org" target="_blank" >Ripples Foundation</a>
        </p>

        </div>
      </div>

    </div>
  </div>
</footer>

</div> <!-- .site-wrap -->

 <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['sub_btn']))
   {

     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "tutorials";

     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
     if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
     }

     $email = $_POST["email"];
     $name = $_POST["name"];


     $sql = "INSERT INTO subscribers (name,email) VALUES ('$email','$name')";


     if ($conn->query($sql) === TRUE) {

     } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }
     $conn->close();

// admin mails //
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'harbertse@gmail.com';
$mail->Password = 'Infin1ty@1';
$mail->SetFrom('harbertse@gmail.com','Ripples Foundation');
$mail->Subject = "Newsletter";
$mail->Body = 'New Subscriber';

$mail->AddAddress('harbertse@gmail.com');

$result = $mail->Send();

// subscriber mails //
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'harbertse@gmail.com';
$mail->Password = 'Infin1ty@1';
$mail->SetFrom('ripplesfoundation2020@gmail.com','Ripples Foundation');
$mail->Subject = "Thank you for joining us";
$mail->Body = 'Hi, </br>We are glad you are here. We will keep you in the loop with our latest news and events as we continue to pay love and Kindness forward';

$mail->AddAddress($email);

$result = $mail->Send();



if($result == 1){
    echo "<script>alert('Thank you for subscribing to our newsltter')</script>";
    ?>

<script type="text/javascript">
window.location = "http://localhost/ripples/";
</script>

<?php
}
else{
    echo "<script>alert('Sorry. Failure Message')</script>";
}
}
?>
