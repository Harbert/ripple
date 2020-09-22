
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

      <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
      <link href='style.css' rel='stylesheet' type='text/css'>

  </head>
  <body>
  <div class="donation-container">

              <div class="donation-box">
  	            <div class="title">Donation Information</div>

  	            <div class="fields">
  		            <input type="text" id="firstName" placeholder="First Name"> </input>
  		            <input type="text" id="lastName" placeholder="Last Name"> </input>
  		            <input type="text" id="email" placeholder="Email"> </input>
  	            </div>

  	            <div class="amount">
  		            <div class="button"><input type="text" class="set-amount" placeholder="Amount (UGX)"> </input></div>
  	            </div>

  	            <div class="switch">
  					<input type="radio" class="switch-input" name="view" value="One-Time" id="one-time" checked="">
  					<label for="one-time" class="switch-label switch-label-off">One-Time</label>
  					<input type="radio" class="switch-input" name="view" value="Monthly" id="monthly">
  					<label for="monthly" class="switch-label switch-label-on">Monthly</label>
  					<span class="switch-selection"></span>
  			    </div>

  			    <div class="checkboxes">
  					<input type="checkbox" id="receipt" class="checkbox" />
  					<label for="receipt">For Construction</label>
  					<br />
  					<input type="checkbox" id="anon" class="checkbox" />
  					<label for="anon">Charity</label>
  					<br />
  					<input type="checkbox" id="list" class="checkbox" />
  					<label for="list">Sponsorship</label>
  			    </div>

  			    <div class="confirm">

  			    </div>

  	            <div class="donate-button"><i class="fa fa-credit-card"></i> Donate Now</div>
              </div>

          </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://raw.githubusercontent.com/jerryluk/jquery.autogrow/master/jquery.autogrow-min.js"></script>
  </body>

<script type='text/javascript' src='js.js'></script>

</html>