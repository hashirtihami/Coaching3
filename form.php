<?php 
require 'connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['submit'])) { 
        require 'submit.php';
    }
}
?>

<?php 
require 'templates/top.inc.php';
?>
<title>Add your coaching</title>

<style>
	font{
		color:blue;
	}

	label{
		font-weight:500;
	}
</style>


<div  class="container"  >

	<h2 style="padding-top:30px;  color:#3C1363;">Enter The Details</h2>
	<hr>
	<form action="form.php" method="post">
	  	<div class="form-group row">
	    	<label for="inputname" class="col-sm-2 col-form-label">Coaching Name</label>
	    	<div class="col-sm-10">
	      		<input type="text" class="form-control" id="inputname" required name='name'  placeholder="Enter the full name of your coaching center or institute here">
	    	</div>
	  	</div>

	  	<div class="form-group row">
	    	<label for="inputaddress" class="col-sm-2 col-form-label">Coaching Address</label>
	    	<div class="col-sm-10">
	      		<input type="text" class="form-control" id="inputaddress" required name='address'  placeholder="Enter the complete address of your coaching center or institute here">
	    	</div>
	  	</div>

	  	<div class="form-group row">
	    	<label for="inputzip" class="col-sm-2 col-form-label">Zip Code</label>
	    	<div class="col-sm-10">
	      		<input type="text" class="form-control" id="inputzip" required placeholder="Enter the zipcode here" name='zipcode'>
	    	</div>
	  	</div>

	  	<div class="form-group row">
	    	<label for="inputcontact" class="col-sm-2 col-form-label">Contact Number:</label>
	    	<div class="col-sm-10">
	      		<input type="text" class="form-control" id="inputcontact" required placeholder="Enter your contact number here" name='contact'>
	    	</div>
	  	</div>

	  	<div class="form-group row">
	    	<label for="inputemail" class="col-sm-2 col-form-label">Email</label>
	    	<div class="col-sm-10">
	      		<input type="text" class="form-control" id="inputemail" required placeholder="Enter your email here" name='email'>
	    	</div>
	  	</div>

	  	<fieldset class="form-group">
		   <div class="row">
		      <label class="col-form-label col-sm-2 pt-0">Choose your Deal</label>
		      	<div class="col-lg-2 col-md-2 col-sm-10 col-xs-10">
		        	<div class="form-check">
		          		<input class="form-check-input" type="radio" name='deal' id="inputdeal1" value="free" checked>
		          		<label class="form-check-label" for="inputdeal1">
		            			30 Days Free Trial
		          		</label>
		        	</div>
		        </div>
		        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10 ">
		        	<div class="form-check">
			          <input class="form-check-input" type="radio" name='deal' id="inputdeal2" value="silver">
			          <label class="form-check-label" for="inputdeal2">
			            	Silver
			          </label>
		        	</div>
		      	</div>
		      	<div class="col-lg-2 col-md-2 col-sm-10 col-xs-10 ">
		        	<div class="form-check">
			          <input class="form-check-input" type="radio" name='deal' id="inputdeal3" value="gold">
			          <label class="form-check-label" for="inputdeal3">
			            	Gold
			          </label>
		        	</div>
		      	</div>
		      	<div class="col-lg-2 col-md-2 col-sm-5 col-xs-10 ">
		        	<div class="form-check">
			          <input class="form-check-input" type="radio" name='deal' id="inputdeal6" value="platinum">
			          <label class="form-check-label" for="inputdeal5">
			            	Platinum
			          </label>
		        	</div>
		      	</div>
		  	</div>
	  	</fieldset>
	  	<div class="form-group row">
	    	<label for="inputemail" class="col-sm-2 col-form-label">Your Message</label>
	    	<div class="col-sm-10">
	      		<input type="text" class="form-control" id="inputemail" height="480" placeholder="If you have any request, enter here" name='msg'>
	    	</div>
	  	</div>


		<div class="field-wrap">
            <p style=" padding:0; color:black;">By clicking Submit, you agree to our <a href="terms.php">Terms Of Services</a> and Data Policy. You may receive SMS notifications from us and can opt out at any time.</p>
        </div>

	  	<div class="form-group row">
		<div class="col-lg-5 col-md-5 col-sm-5 ">
		</div>
	    <div class="col-lg-2 col-md-2 col-md-5 col-xs-12" style="padding-bottom:10%">
	     <button type="submit" name="submit" class="btn  btn-lg btn-primary">Submit</button>
	    </div>
	  </div>

	</form>
</div>


<?php
	
	require 'templates/bottom.inc.php';
?>