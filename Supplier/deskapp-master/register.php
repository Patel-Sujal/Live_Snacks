<?php
//navigation code.....
$a=0;
$b=0;
$hidelabel="hidden";
$passhide="hidden";
$count=0;
$destination="register.php";
$prop1="";
$prop2="hidden";
$prop3="hidden";
        

	
	
if(isset($_POST['emailval']))
{$email=$_POST['emailval']  ;}
if(isset($_POST['usernameval'])){
$username=$_POST['usernameval'] ;}
if(isset($_POST['passwordval'])){
$password=$_POST['passwordval']  ;}
if(isset($_POST['conpasswordval'])){
$confirmpassword=$_POST['conpasswordval']  ;}

if(isset($_POST['fullnameval'])){
	$fullname=$_POST['fullnameval']  ;}
	if(isset($_POST['gender'])){
	$gender= $_POST['gender'] ;}
	
	

        
if(isset($_POST['next']))
{
	require "../../vendor/autoload.php";
	$con= new MongoDB\Client;
	$profiles=$con->Suppliers->Profiles;

	$show=$profiles->find([]);
	foreach ($show as $doc)
{
	
			if ($username==$doc->Username)
			{
				$a=0;
				$hidelabel="";
			}else{
			$a=1;
			
			}
			
		}
		if($password==$confirmpassword)
		{
			$b=1;
		}else{
			$passhide="";
			
		}

	if ($a>0 && $b==1)
	{
		$count=$count+1;
		if($count==1)
		{
			$prop1="hidden";
			$prop2="";
			$prop3="hidden";
			
		}
	}
		
	
		
	
	
}

if(isset($_POST['nextt']))
{
	$count=$count+1;
	if($count==1)
	{
		$prop1="hidden";
		$prop2="hidden";
		$prop3="";
		$destination="login.php";
		$form="<form action='s.html' method='post'>";
		$form1="</form>";
	}

	
}
//Navigation Code ends.........

?>


<html>

<head>
	<!-- Basic Page Info -->
	<meta charset='utf-8' />
	<title>LS Register Page</title>

	<!-- Site favicon -->
	<link rel='apple-touch-icon' sizes='180x180' href='vendors/images/apple-touch-icon.png' />
	<link rel='icon' type='image/png' sizes='32x32' href='vendors/images/favicon-32x32.png' />
	<link rel='icon' type='image/png' sizes='16x16' href='vendors/images/favicon-16x16.png' />

	<!-- Mobile Specific Metas -->
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1' />

	<!-- Google Font -->
	<link href='https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap'
		rel='stylesheet' />
	<!-- CSS -->
	<link rel='stylesheet' type='text/css' href='vendors/styles/core.css' />
	<link rel='stylesheet' type='text/css' href='vendors/styles/icon-font.min.css' />
	<link rel='stylesheet' type='text/css' href='src/plugins/jquery-steps/jquery.steps.css' />
	<link rel='stylesheet' type='text/css' href='vendors/styles/style.css' />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src='https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85'></script>
	<script async src='https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258'
		crossorigin='anonymous'></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-GBZ3SGGX85');
	</script>
	<!-- Google Tag Manager -->
	<script>
		(function (w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-NXZMQSS');
	</script>
	<!-- End Google Tag Manager -->
</head>

<body class='login-page' background='vendors/images/image.jpeg'>
	<div class='login-header box-shadow'>
		<div class='container-fluid d-flex justify-content-between align-items-center'>
			<div class='brand-logo'>
				<a href='login.html'>
					<img src='vendors/images/th.svg' alt='' />
				</a>
			</div>
			<div class='login-menu'>
				<ul>
					<li><a href='login.html'>Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class='register-page-wrap d-flex align-items-center flex-wrap justify-content-center'>
		<div class='container'>
			<div class='row align-items-center'>
				<div class='col-md-6 col-lg-7'>
					<img src='vendors/images/login-page-img.png' alt='' />
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Register To Live Snacks</h2>
						</div>
						<!--Step1 start-->
				
						<form action="register.php" method="post" <?php echo "$prop1" ; ?> >

							<div class="select-role">
								<div class="btn-group btn-group-toggle" data-toggle="buttons">

									<label class="btn">
										<input type="radio" name="options" id="user" />
										<div class="icon">
											<img src="vendors/images/person.svg" class="svg" alt="" />
										</div>
										<span>I'm</span>
										Supplier
									</label>
								</div>
							</div>

							<div class='form-group row'>
								<label class='col-sm-4 col-form-label'>Email Address*</label>
								<div class='col-sm-8'>
									<input type='email' required value="  <?php if(isset($_POST['emailval']))
{echo $_POST['emailval']  ;} ?>  " name="emailval" class='form-control' />

								</div>
							</div>
							<div class='form-group row'>
								<label class='col-sm-4 col-form-label'>Username*</label>
								<div class='col-sm-8'>
									<input type='text'  value ="<?php if(isset($_POST['usernameval'])){
echo $_POST['usernameval'] ;} ?>" name="usernameval" class='form-control' />
<label <?php echo $hidelabel;?>>*username not available</label>
								</div>
							</div>
							<div class='form-group row'>
								<label class='col-sm-4 col-form-label'>Password*</label>
								<div class='col-sm-8'>
									<input type='password' required value="<?php if(isset($_POST['passwordval'])){
echo $_POST['passwordval']  ;}?>" name="passwordval" class='form-control' />
								</div>
							</div>
							<label <?php echo $passhide;?>>*confirm the password again</label>
							<div class='form-group row'>
								<label class='col-sm-4 col-form-label'>Confirm Password*</label>
								<div class='col-sm-8'>
									<input type='password' required value="<?php if(isset($_POST['conpasswordval'])){
echo $_POST['conpasswordval'];}?>" name="conpasswordval" class='form-control' />
									
								</div>
							</div>
							<input class="btn btn-primary" type=submit name="next" value="Next" />


						</form>

						<!--Step1 end-->
						<!--Step2 start-->

						<form action="register.php" method="post" <?php echo "$prop2" ; ?> >
							
							<div class="select-role">
								<div class="btn-group btn-group-toggle" data-toggle="buttons">

									<label class="btn">
										<input type="radio" name="options" id="user" />
										<div class="icon">
											<img src="vendors/images/person.svg" class="svg" alt="" />
										</div>
										<span>I'm</span>
										Supplier
									</label>
								</div>
							</div>

							<div class='form-group row'>
											<label class='col-sm-4 col-form-label'>Full Name*</label>
											<div class='col-sm-8'>
												<input type='text' required name="fullnameval" class='form-control' />
											</div>
										</div>
										<div class='form-group row align-items-center'>
											<label class='col-sm-4 col-form-label'>Gender*</label>
											<div class='col-sm-8'>
												<div class='custom-control custom-radio custom-control-inline pb-0'>
													<input type='radio' value="male" id='male' name='gender'
														class='custom-control-input' />
													<label class='custom-control-label' for='male'>Male</label>
												</div>
												<div class='custom-control custom-radio custom-control-inline pb-0'>
													<input type='radio' value="female" id='female' name='gender'
														class='custom-control-input' />
													<label class='custom-control-label' for='female'>Female</label>
												</div>
											</div>
										</div>
										
							<input class="btn btn-primary" type=submit name="nextt" value="Next" />
							<!--previous page data-->

							<input type="text"  value="<?php echo "$email";?>" hidden name="emailval"/>
							<input type="text"  value="<?php echo "$username";?>" hidden name="usernameval"/>
							<input type="text"  value="<?php echo "$password";?>" hidden name="passwordval"/>
							<input type="text"  value="<?php echo "$confirmpassword";?>" hidden  name="conpasswordval"/>

						</form>
						<!--Step2 end-->
						<!--Step3 start-->

						<form action='<?php echo "$destination"; ?>' method="post" <?php echo "$prop3" ; ?> >
						
							<div class="select-role">
								<div class="btn-group btn-group-toggle" data-toggle="buttons">

									<label class="btn">
										<input type="radio" name="options" id="user" />
										<div class="icon">
											<img src="vendors/images/person.svg" class="svg" alt="" />
										</div>
										<span>I'm</span>
										Supplier
									</label>
								</div>
							</div>

							<div class='form-group row'>
											<label class='col-sm-4 col-form-label'>Shop Name</label>
											<div class='col-sm-8'>
												<input type='text' required name="shopnameval" class='form-control' />
											</div>
										</div>
										<div class='form-group row align-items-center'>
											<label class='col-sm-4 col-form-label'>Address</label>
											<div class='col-sm-8'>
												<input type='text' required name="addressval" class='form-control' />
											</div>
										</div>
										<div class='form-group row align-items-center'>
											<label class='col-sm-4 col-form-label'>Phone Number</label>
											<div class='col-sm-8'>
												<input type='number' required name="phoneaval" class='form-control' />
											</div>
										</div>
										<div class='form-group row'>
											<label class='col-sm-4 col-form-label'>Email-Password*</label>
											<div class='col-sm-8'>
												<input type='password' required class='form-control' />
											</div>
										</div>
										<input class="btn btn-primary" type=submit name="next" value="Submit" />
										<input type="text"  value="<?php echo "$email";?>" hidden  name="emailval"/>
							<input type="text"  value="<?php echo "$username";?>" hidden name="usernameval"/>
							<input type="text"  value="<?php echo "$password";?>" hidden name="passwordval"/>
							<input type="text"  value="<?php echo "$confirmpassword";?>" hidden  name="conpasswordval"/>


							<input type="text"  value="<?php echo "$fullname";?>" hidden  name="fullnameval"/>
							<input type="text"  value="<?php echo "$gender";?>" hidden name="gender"/>
							
						</form>
						<!--step3 end-->
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html Start -->
	<button type='button' id='success-modal-btn' hidden data-toggle='modal' data-target='#success-modal'
		data-backdrop='static'>
		Launch modal
	</button>
	<div class='modal fade' id='success-modal' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle'
		aria-hidden='true'>
		<div class='modal-dialog modal-dialog-centered max-width-400' role='document'>
			<div class='modal-content'>
				<div class='modal-body text-center font-18'>
					<h4 class='mb-20'>CLick Submit to permanently submit the form...</h4>
					<div class='mb-30 text-center'>
						<img src='vendors/images/success.png' />
					</div>

				</div>
				<div class='modal-footer justify-content-center'>
					<INPUT TYPE="submit" class='btn btn-primary' NAME="btnsubmit" value="SUBMIT" />
				</div>
			</div>
		</div>
	</div>
	</form>
	<!-- success Popup html End -->

	<!-- js -->
	<script src='vendors/scripts/core.js'></script>
	<script src='vendors/scripts/script.min.js'></script>
	<script src='vendors/scripts/process.js'></script>
	<script src='vendors/scripts/layout-settings.js'></script>
	<script src='src/plugins/jquery-steps/jquery.steps.js'></script>
	<script src='vendors/scripts/steps-setting.js'></script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src='https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS' height='0' width='0'
			style='display: none; visibility: hidden'></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>