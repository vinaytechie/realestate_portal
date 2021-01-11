<!DOCTYPE php>
<head>
    <title>Ravanammainfra | Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
</head>

<body>
<div id="wrapper">

<header id="header-container">
	<div class="clearfix"></div>

	<div id="header">
		<div class="container-fluid">
			<div class="left-side">
				<div id="logo">
					<a href="index.php"><img src="images/logo.png" alt=""></a>
				</div>

				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>
			</div>
			<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
			<div class="right-side">
                <nav id="navigation" class="style-1">
					<ul id="responsive">
						<li><a <?php if ($page == 'index.php') { ?>class="current"<?php } ?> href="index.php">Home</a></li>
                        <li><a <?php if ($page == 'listing.php') { ?>class="current"<?php } ?> href="listing.php">Listings</a></li>
                        <li><a <?php if ($page == 'about.php') { ?>class="current"<?php } ?> href="about.php">About Us</a></li>
                        <li><a <?php if ($page == 'contact.php') { ?>class="current"<?php } ?> href="contact.php">Contact Us</a></li>
					</ul>
				</nav>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

</header>
<div class="clearfix"></div>