<!DOCTYPE html>
<html lang="it">
<head>
	<title>ADDDIT - 3D Printing Cloud Maufacturing Platform</title>
	<?php include('assets/inc/doc-head.inc.php') ?>
	<link rel="preconnect" href="https://unpkg.com">
	<link rel="preload" as="script" href="https://unpkg.com/typewriter-effect@latest/dist/core.js">
	<link rel="preload" as="image" href="<?php echo $basepath .'/assets/img/hero-bg-3.png'; ?>">
	<link rel="preload" as="image" href="<?php echo $basepath .'/assets/img/instant.svg'; ?>">
	<meta name="description" content="ADDDIT S.r.l - La nostra missione è semplificare il processo di stampa 3D, rendendolo accessibile ed efficiente per aziende e privati.">
</head>
<body class="ddd-homepage">
	<header id="ddd-header" class="flex">
		<?php include('assets/inc/head-nav.inc.php') ?>
	</header>

	<section id="ddd-main-home">
		<?php include('assets/inc/main-home.inc.php') ?>
	</section>

	<section id="ddd-spacer-home">
		<h2>3D Printing Cloud Manufacturing Program</h2>
	</section>

	<div class="slanted-container">

		<section id="ddd-keypoints-home" class="block-section block-section-slanted block-section-white">
			<?php include('assets/inc/values-home.inc.php') ?>
		</section>

		<section id="ddd-about-home" class="block-section block-section-slanted block-section-blu">
			<h2>Chi Siamo</h2>

			<div class="about-us flex text">
				<p><strong>ADDDIT</strong> è la piattaforma di <strong>Cloud Manufacturing</strong> leader in Europa, specializzata nel settore della <strong>stampa 3D</strong>. Rappresenta il punto di riferimento per le aziende manifatturiere che cercano soluzioni innovative per ottimizzare i processi produttivi.</p>

				<p>Il <strong>Network ADDDIT</strong> include le tecnologie di stampa 3D più avanzate e i migliori materiali professionali disponibili a livello globale. La nostra rete di partner è composta esclusivamente da esperti del settore, certificati e altamente affidabili, pronti a soddisfare tutte le richieste produttive attraverso la piattaforma.</p>
				<a class="read-more" href="about.php" title="read more"><img src="<?php echo $basepath .'/assets/img/arrow_right_white.svg'; ?>" width="134" height="133" alt="read more" /></a>
			</div>
		</section>

		<section id="ddd-partners-home" class="block-section block-section-slanted block-section-white">
			<h2>Main Partner</h2>
			<?php include('assets/inc/partners-home.inc.php') ?>
		</section>

		<section id="ddd-network-home" class="block-section block-section-slanted block-section-blu">
			<h2>La nostra Rete</h2>
			<?php include('assets/inc/team-home.inc.php') ?>
		</section>

		<section id="ddd-contacts-home" class="block-section block-section-white">
			<h3><img src="./assets/img/contact-us-title.png" width="500" height="67" alt="Contact Us" loading="lazy" /></h3>
			<a class="contact-btn" href="mailto:info@adddit.eu">info@adddit.eu</a>
		</section>
	</div>


	<section id="ddd-prefooter">
		<?php include('assets/inc/social-prefooter.inc.php') ?>
	</section>


	<footer id="ddd-footer">
		<?php include('assets/inc/footer.inc.php') ?>
	</footer>

	<!--script async src="<?php // echo $basepath .'/assets/js/ddd-carousel.min.js'; ?>"></script-->
	<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
	<script async src="<?php echo $basepath .'/assets/js/adddit-website.js?cb=' . $rand; ?>"></script>
</body>
</html>