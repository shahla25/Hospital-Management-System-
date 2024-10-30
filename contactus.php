<?php
include("header.php");
if(isset($_POST[submit]))
{  
	$message = "<strong>Dear $_POST[name],</strong><br />
				<strong>Your Email ID is :</strong> $_POST[email]<br />
				<strong>Message :-</strong> $_POST[comment]
				";
	
	sendmail("Shahanarifkhan24@gmail.com","Mail from Appoint My Doctor",$message);
	
}
?>
<div class="wrapper col2">
  <div id="breadcrumb">
    <ul>
      <li class="first">Contact Us</li>
    </ul>
  </div>
</div>
<div class="wrapper col4">
  <div id="container">
    <h6>Our Contact Details</h6>
    <p>
Hospital Management System<br />

<strong>Telephone Number</strong>: 011 2717910<br />

<strong>Phone Number</strong>: +94 763976122<br />

<strong>Email ID</strong>: Shahanarifkhan24@gmail.com</p>

        <h6>Enter the information below to get in touch with us</h6>
            <form action="" method="post">
          <p>
            <input type="text" name="name" id="name" value="" size="22" required />
            <label for="name"><small>Full Name (required)</small></label>
          </p>
          <p>
            <input type="text" name="email" id="email" value="" size="22" required />
            <label for="email"><small>Email Address (required)</small></label>
          </p>
          <p>
            <textarea name="comment" id="comment" cols="100%" rows="10" required></textarea>
            <label for="comment" style="display:none;"><small>Comment (required)</small></label>
          </p>
          <p>
            <input name="submit" type="submit" id="submit" value="Submit Form"  />
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
          </p>
        </form>

  </div>
  
</div>

    <div class="clear"></div>
  </div>
</div>

<?php
include("footer.php");
?>
