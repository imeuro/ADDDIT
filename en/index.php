<!DOCTYPE html>
<html lang="en">
<head>
	<title>ADDDIT - 3D Printing Cloud Maufacturing Platform</title>
	<?php include('../assets/inc/doc-head.inc.php') ?>
	<link rel="preconnect" href="https://unpkg.com">
	<link rel="preload" as="script" href="https://unpkg.com/typewriter-effect@latest/dist/core.js">
	<link rel="preload" as="image" href="<?php echo $basepath .'/assets/img/hero-bg-3.png'; ?>">
	<link rel="preload" as="image" href="<?php echo $basepath .'/assets/img/instant.svg'; ?>">
	<meta name="description" content="ADDDIT S.r.l. - Our mission is to simplify the 3D printing process, making it accessible and efficient for businesses and individuals alike.">
</head>
<body class="ddd-homepage">
	<header id="ddd-header" class="flex">
		<?php include('../assets/inc/en/head-nav.inc.php') ?>
	</header>

	<section id="ddd-main-home">
		<?php include('../assets/inc/en/main-home.inc.php') ?>
	</section>

	<section id="ddd-spacer-home">
		<h2>3D Printing Cloud Manufacturing Program</h2>
	</section>

	<div class="slanted-container">

		<section id="ddd-keypoints-home" class="block-section block-section-slanted block-section-white">
			<?php include('../assets/inc/en/values-home.inc.php') ?>
		</section>

		<section id="ddd-about-home" class="block-section block-section-slanted block-section-blu">
			<h2>About Us</h2>

			<div class="about-us flex text">
				<p><strong>Adddit</strong> is the <strong>Cloud Manufacturing platform</strong> dedicated to the world of <strong>3D printing</strong> and is the reference point for all manufacturing companies in Europe.</p>

				<p>The <strong>ADDDIT</strong> platform is the first <strong>3D Printing Services Network</strong> that leverages the unused production capacity of its partners and allows you to always have one or more 3D printers available in virtual ready-to-print mode!</p>
				<a class="read-more" href="about.php" title="read more"><img src="<?php echo $basepath .'/assets/img/arrow_right_white.svg'; ?>" width="134" height="133" alt="read more" /></a>
			</div>
		</section>

		<section id="ddd-partners-home" class="block-section block-section-slanted block-section-white">
			<h2>Main Partner</h2>
			<?php include('../assets/inc/en/partners-home.inc.php') ?>
		</section>

		<section id="ddd-network-home" class="block-section block-section-slanted block-section-blu">
			<h2>Our Network</h2>
			<?php include('../assets/inc/en/team-home.inc.php') ?>
		</section>

		<section id="ddd-contacts-home" class="block-section block-section-white">
			<h3><img src="../assets/img/contact-us-title.png" alt="contact us" width="500" height="67" loading="lazy" /></h3>
			<a class="contact-btn" href="mailto:info@adddit.com">info@adddit.com</a>
		</section>
	</div>


	<section id="ddd-prefooter">
		<?php include('../assets/inc/social-prefooter.inc.php') ?>
	</section>


	<footer id="ddd-footer">
		<?php include('../assets/inc/en/footer.inc.php') ?>
	</footer>

	<script async src="<?php echo $basepath .'/assets/js/ddd-carousel.min.js'; ?>"></script>
	<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
	<script async src="<?php echo $basepath .'/assets/js/adddit-website.js?cb=' . random_int(9, 99999); ?>"></script>
</body>
</html>