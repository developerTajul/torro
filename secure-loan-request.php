<?php 
/**

Template Name: 2nd Step

*/ ?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
	
</head>
  <body style="background-color:#fff;">
 
	<form id="submitloan" data-toggle="validator" role="form" class="form-horizontal">
  <section id="headersection">
<div class="container appcontainer">
	<div class="row threeway">
		<Div class="col-sm-4"></div>
		<Div class="col-sm-8">
			<div class="row threewaycol">
				<div class="col-sm-4 phone"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i> (866)858-2404</div>
				<div class="col-sm-4 chat"><i class="fa fa-comments  fa-lg" aria-hidden="true"></i>
 <A href="javascript:void(0);" onclick="myFunction()">Chat with Torro</a></div>
				<div class="col-sm-4 bbb"><img class="floatleft" src="assets/img/bbbsmall.png" alt="">Accredited Business</div>			
			</div>
		</div>
	</div>
	<div class="row logoapp">
		<div class="col-sm-4 logocol"><a href="/" class="logoswap torro"><span>Torro</span></a><p>Go Torro For Business Funding</p></div>
		<div class="col-sm-8 stepcol">
			<div class="row">
				<div class="col-sm-4"><div class="stepnumber stepnumber1">Step</div><div class="numberCircle stepnumber1"><span>1</span></div></div>
				<div class="col-sm-4"><div class="stepnumber stepnumber2">Step</div><div class="numberCircle"><span>2</span></div></div>
				<div class="col-sm-4"><div class="stepnumber stepnumber3">Step</div><div class="numberCircle stepnumber3"><span>3</span></div></div>
			</div>
		
		</div>	
	</div>
<div class="row appbody">
	<div class="col-sm-4">
		<div class="desired">
			<div class="damount">
				Desired Amount: <span>$</span>	<span id="desired"></span><span>,000</span>				
			</div>
			<div class="doptions">
			
						We have <span>14</span> options for Syndicated Lines of Credit			</div>
		</div>
		<div class="speaktorep before">
			<h5>Speak to a specialist</h5>
			<h4>(866)858-2404</h4>
			<p class="chatme"><a href="javascript:void(0);" onclick="myFunction()"><i class="fa fa-comments  fa-lg" aria-hidden="true"></i> Chat</a></p>
		</div>
		<div class="iconwrap before">
		<div class="row timeicon">
			<div class="col-sm-3"><img src="assets/img/timeiconsm.png" alt=""></div>
			<div class="col-sm-9">Funding In as little as 48 hours.</div>
		</div>
		<div class="row bbicon">
			<div class="col-sm-3"><img src="assets/img/bbiconsm.png" alt=""></div>
			<div class="col-sm-9">A+ Rating with the Better Business Bureau</div>
		</div>
		<div class="row sslicon">
			<div class="col-sm-3"><img src="assets/img/ssliconsm.png" alt=""></div>
			<div class="col-sm-9">Secure and private connection</div>
		</div>
		</div>
	</div>
	<div class="col-sm-8">
	<div class="formheader">
				<div class="row appbody">
					<div class="col-sm-9"><div class="stepnumber stepnumber1">Step 1Tajul</div><div class="numberCircle stepnumber1"><span>2</span></div><div class="tell">Tell Us About Your Company</div></div>
					<div class="col-sm-3 logoapp" ><img src="assets/img/torro-logo-sm-white.png" alt=""/></div>
				</div>
				
			</div>
		<div class="formarrow"><img src="assets/img/bluearrow.png" alt=""/></div>
		<div class="forms2wrap">
	
					<input type="hidden" name="steponesubmit" id="steponesubmit" value="1">
					<input type="hidden" name="loannumber" value="1519149958">
					<input type="hidden" name="loantype" id="loantype" value="">
					<input type="hidden" name="loanname" id="loanname" value="">
				
					<input type="hidden" name="loanamount" id="loanamount" value="$0 - $10,000">
					<input type="hidden" name="track_affid" id="track_affid" value="">
					<input type="hidden" name="track_subid" id="track_subid" value="">
		
			
			
			<div class="formarrow"></div>
			<div class="form2box">
				<div class="detailswrap">
		<div class="row" style="background-color:#ffffcc; padding-bottom:1%;border-top:1px solid #dcdcdc; border-bottom:1px solid #dcdcdc;" ><div class="form-group has-feedback" >
				<div class="col-sm-6">
				
						<div class="radio">
						

							  <label>
								<input type="radio" name="new_exist" id="new_exist1" class="radio_button" value="existingbusiness"  required="required" >
								Established Business
							  </label>
							</div>
					
				 
				</div>
				<div class="col-sm-6">
				
							<div class="radio">
							  <label>
								<input type="radio"  name="new_exist" id="new_exist2" class="radio_button_right" value="newbusiness" required="required" checked>
								New Business
							  </label>
							</div>
							
				</div>
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
				  </div>
		</div>		

			<div class="row">
				<div class="col-sm-6">
					 <div class="form-group has-feedback " >
					
						<label for="businessname" class="control-label">Business Name</label>
						<input type="text"  class="form-control input-sm" name="businessname" id="businessname" placeholder="Business Name"  required="required">
					 
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					</div>
				</div>
				<div class="col-sm-6">
				
				<div id="ex1" class="form-group has-feedback exbi boxsel established hide_selection">   
				<label for="businesstype" class="control-label">Time In Business</label>
				<div class="styled-select">
						<select name="beeninbusiness" id="beeninbusiness" class="form-control input-sm"  required="required">
						<option value=""selected="selected">Time In Business</option>
							<option value="Not Yet Started">Not Yet Started</option><option value="0 - 6 months">0 - 6 months</option><option value="6 months - 1 year">6 months - 1 year</option><option value="1 - 2 Years">1 - 2 Years</option><option value="2 - 5 Years">2 - 5 Years</option><option value="5+ Years">5+ Years</option>
						</select>
					</div>
						<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
				  </div>
				  
				  <div id="ex2" class="form-group has-feedback nebi boxsel new_business  ">
					<label for="businesstype" class="control-label">Industry Type</label>
					<div class="styled-select">
					<select name="industrytype" id="businesstype" class="form-control input-sm"   required="required"><option value="">Select Industry Type</option><option value="Agriculture">Agriculture</option><option value="Automotive: Dealer">Automotive: Dealer</option><option value="Automotive: Repair">Automotive: Repair</option><option value="Bar/Club/Restaurant">Bar/Club/Restaurant</option><option value="Business Services">Business Services</option><option value="Convenience Store/Gas Station">Convenience Store/Gas Station</option><option value="Construction">Construction</option><option value="Education Services">Education Services</option><option value="Finance/Insurance">Finance/Insurance</option><option value="Forestry/Fishing/Mining">Forestry/Fishing/Mining</option><option value="Healthcare/Medicine">Healthcare/Medicine</option><option value="Law Firm/Legal Services">Law Firm/Legal Services</option><option value="Lodging">Lodging</option><option value="Manufacturing">Manufacturing</option><option value="Non-Profit Organization">Non-Profit Organization</option><option value="Real Estate">Real Estate</option><option value="Religious Institution">Religious Institution</option><option value="Retail Store">Retail Store</option><option value="Transportation or Trucking">Transportation or Trucking</option><option value="Wholesale">Wholesale</option><option value="Other">Other</option></select>
					
					</div> 
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
				 </div>
						
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					 <div class="form-group has-feedback">
					<label for="firstname" class="control-label">First Name</label>
					<input type="text" class="form-control input-sm" id="firstname" name="firstname" placeholder="First Name"   required="required">
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group has-feedback">
					<label for="lastname" class="control-label">Last Name</label>
					<input type="text" class="form-control input-sm" id="lastname" name="lastname" placeholder="Last Name"   required="required">
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					</div>			
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					 <div class="form-group has-feedback">
					<label for="email" class="control-label">Email</label>				
					<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" class="form-control input-sm" id="email" placeholder="Email Address"   required="required">				
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group has-feedback">
					<label for="businessphone"  class="control-label">Business Phone:</label>				
					<input  type="text" class="form-control input-sm" id="businessphone" name="businessphone" placeholder="Business Phone"   required="required">				
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					</div>
				
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="form-group has-feedback">
					<label for="mobilephone" class="control-label">Mobile Phone:</label>			
					<input type="text" class="form-control input-sm" id="mobilephone" name="mobilephone" placeholder="Mobile Phone"   required="required">
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					</div>
				</div>
				<div class="col-sm-6">
				<div class="form-group has-feedback">
				<label for="zipcode" class="control-label">Zip Code:</label>			
				<input type="text" class="form-control input-sm" pattern="^\d{5}$" maxlength=5 id="zipcode" name="zipcode"  placeholder="Zip Code"   required="required">			
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>			
				</div>
				
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
				
					 <div class="form-group has-feedback exbi boxsel established hide_selection">   
					 <label for="salesvolume"  class="control-label">Average Monthly Sales Volume:</label>
						<div class="styled-select">
							<select name="salesvolume" id="salesvolume" class="form-control input-sm"   required="required">
						
								<option value="" selected="selected">Average Monthly Sales Volume?</option><option value="N/A">N/A</option><option value="$0 - $10,000">$0 - $10,000</option><option value="$10,000 - $25,000">$10,000 - $25,000</option><option value="$25,000 - $50,000">$25,000 - $50,000</option><option value="$50,000 - $200,000">$50,000 - $200,000</option><option value="$200,000 - $500,000">$200,000 - $500,000</option><option value="$500,000+">$500,000+</option>
							</select>
							</div>
						
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					  </div>
					  
					 
					  
					  
					   <div class="form-group has-feedback nebi boxsel new_business">   
					 <label for="monthlyincome"  class="control-label">Average Monthly Income:</label>
						<div class="styled-select">
							<select name="monthlyincome" id="monthlyincome" class="form-control input-sm"   required="required">
						
								<option value="">What Is Your Personal Monthly Income?</option><option value="N/A">N/A</option><option value="$0 - $10,000">$0 - $10,000</option><option value="$10,000 - $25,000">$10,000 - $25,000</option><option value="$25,000 - $50,000">$25,000 - $50,000</option><option value="$50,000 - $200,000">$50,000 - $200,000</option><option value="$200,000 - $500,000">$200,000 - $500,000</option><option value="$500,000+">$500,000+</option>
							</select>
							</div>
						
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					  </div>
				</div>
				<div class="col-sm-6">
				       <div class="form-group has-feedback">   
    <label for="salesvolume"  class="control-label">Credit:</label>
	<div class="styled-select">
		<select name="credit" id="credit" class="form-control input-sm" required>
		<option value="" selected>Personal Credit Score</option>	





 	
			<option value="720+ (Excellent)">720+</option>
			<option value="680 - 719 (Great)">680 - 710</option>
			<option value="650 - 679 (Good)">650 - 679</option>
			<option value="600 - 649 (Ok)">600 - 649</option>
			<option value="599 or Below (Not So Good)">599 or Below</option>
		</select>
    </div>
		<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  </div> 
				
				</div>
			</div>
			
			
			
			
			
			
			
		</div>
				  
				<div class="form-button-wrap"> <div class="formsubmitbutton">
	   <div id="imgbuttnid"  class="submit-button pagedetails"><button id="submitloan"  type="submit" class="btn btn-warning btn-lg">
	<img src="assets/img/button-right-arrow.png" class="bimage">GET FUNDING OPTIONS<span>No Fees, No Obligations</span></button></div>
	   <div id="ajaxloadid" style="padding: 10% 0px 0%;">		
	</div></i>
</button></div>
<div class="trustguard">
<a name="trustlink" href="#" rel="nofollow" target="_blank" onclick="var nonwin=navigator.appName!='Microsoft Internet Explorer'?'yes':'no'; window.open(this.href.replace(/https?/, 'https'),'welcome','location='+nonwin+',scrollbars=yes,width=517,height='+screen.availHeight+',menubar=no,toolbar=no'); return false;" oncontextmenu="var d = new Date(); return false;"><img src="https://gotorro.com/public/uploads/trust-guard-logo.png" class="trustguard"></a>
<p>Your <a href="#" target="_blank">privacy</a> is protected with TrustGuard</p>
</div>
<div class="secured-box"><img id="secure-page" src="assets/img/secure-page-icon.png"></div>
			
			</div>
			
		</div>
	<div class="speaktorep after">
			<h5>Speak to a specialist</h5>
			<h4>(866)858-2404</h4>
			<p class="chatme"><a href="javascript:void(0);" onclick="myFunction()"><i class="fa fa-comments  fa-lg" aria-hidden="true"></i> Chat</a></p>
		</div>
		<div class="iconwrap after">
		<div class="row timeicon">
			<div class="col-sm-3"><img src="assets/img/timeiconsm.png" alt=""></div>
			<div class="col-sm-9">Funding In as little as 48 hours.</div>
		</div>
		<div class="row bbicon">
			<div class="col-sm-3"><img src="assets/img/bbiconsm.png" alt=""></div>
			<div class="col-sm-9">A+ Rating with the Better Business Bureau</div>
		</div>
		<div class="row sslicon">
			<div class="col-sm-3"><img src="assets/img/ssliconsm.png" alt=""></div>
			<div class="col-sm-9">Secure and private connection</div>
		</div>
		</div>
	<div class="appdisclaimer">
	By clicking "Continue"", you (i) consent to receiving calls and messages, including autodialed calls for marketing purposes, from Torro or its representatives or agents at the telephone number provided above (including mobile telephone number), and acknowledge that no purchase of credit or services is contingent upon such consent; and (ii) acknowledge that you have read Torro's Application Agreement and Torro's Privacy Policy and understand that you may opt out of receiving communications of your choice from Torro as provided in the Privacy Policy. 
	</div>
	</div>
</div>
<!-- end container -->
</div>
</section>	
<footer>
	<div class="container appcontainer footercontainer">
		<div class="row">
			<div class="col-sm-4">
				<a href="/" class="logoswap torro"><span>Torro</span></a><p class="flogocol">Go Torro For Business Funding</p>			</div>
			<div class="col-sm-8 comlinks">
				<div class="row">
					<div class="col-sm-6"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i> (866)858-2404</div>
					<div class="col-sm-6"><i class="fa fa-comments  fa-lg" aria-hidden="true"></i>
 <A href="javascript:void(0);" onclick="myFunction()">Chat with Torro</a></div>
				</div>
			</div>
		</div>
	</div>
</footer>
</form>
  
   

<div class="modal fade detailsmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" >
  <div class="modal-dialog">
    <div class="modal-content">
	<form id="submitdetails">
	<input type="hidden" name="loannumber" value="1519149958">
	<input type="hidden" name="steptwosubmit" id="steptwosubmit" value="1">
		  <div id="modbus">
		  
		  </div>
		  </form>
         </div>
  </div>
</div> 
	 <script src="<?php echo get_template_directory_uri(); ?>/js/others.js"></script>

  </body>
</html>
