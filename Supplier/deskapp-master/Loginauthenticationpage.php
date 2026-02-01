
<?php
session_start();
$h3="";
$p="";
$H1="";
$link="";
$linkh="hidden";
$h1="hidden";
$h3h="hidden";
$ph="hidden";
$username=$_POST['Username'];
$password=$_POST['Password'];
require "../../vendor/autoload.php";
$con=new MongoDB\Client;
$collection = $con->Suppliers->Profiles;
$show=$collection->find([]);
foreach ($show as $document) {
  if($document->Username==$username)
{
	if($document->password==$password)
	{
		$h3="hidden";
		$p="hidden";
		$H1="hidden";
		$link="hidden";
		$linkh="";
		$h1="";
		$h3h="";
		$ph="";
		
	$_SESSION["username"]=$username; 
	
			
	}
}

}
 

?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>
	<body>
		<div
			class="error-page d-flex align-items-center flex-wrap justify-content-center pd-20"
		>
			<div class="pd-10">
				<div class="error-page-wrap text-center">
				<h1  <?php echo $H1; ?>  >401</h1>
				<h1  <?php echo $h1; ?> >✔️</h1>
					<h3 <?php echo $h3; ?> >Error: 401 Invalid Username or Password</h3>
					<p <?php echo $p; ?>>Enter valid username and password again.......</p>
					<h3 <?php echo $h3h; ?> >Successfully Loged In</h3>
					<p <?php echo $ph; ?>>Welcome,Click below link to procced.... </p>
					<div class="pt-20 mx-auto max-width-200">
						<a <?php echo $link; ?> href="login.php" class="btn btn-primary btn-block btn-lg"
							>Back To login</a
						>
						<a <?php echo $linkh; ?> href="index3.php" class="btn btn-primary btn-block btn-lg"
							>Dashboard</a
						>
					</div>
				</div>
			</div>
		</div>
		
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
