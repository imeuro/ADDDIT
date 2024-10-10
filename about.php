<!DOCTYPE html>
<html lang="it">
<head>
	<title>About • ADDDIT - 3D Printing Cloud Maufacturing Platform</title>
	<?php include('assets/inc/doc-head.inc.php') ?>
</head>
<body class="ddd-single-page">
	<header id="ddd-header" class="flex">
		<?php include('assets/inc/head-nav.inc.php') ?>
	</header>

	<section id="ddd-page-title" data-bg="about">
		<h1>ABOUT US</h1>
	</section>

	<div class="slanted-container">

		<section id="ddd-about-home" class="block-section block-section-slanted block-section-white">
			<div class="about-us flex text">
				<p><strong>ADDDIT</strong> è la piattaforma di <strong>Cloud Manufacturing</strong> dedicata al mondo della <strong>stampa 3D</strong> ed il riferimento per tutte le aziende manifatturiere in Europa.</p>

				<p><strong>ADDDIT</strong> è il primo Network di 3d Printing Services che si avvale della <strong>capacità produttiva inutilizzata</strong> dei propri partner e ti permette di avere sempre a disposizione una o più stampanti 3d in modalità virtuale ready to Print!</p>

				<p>Il nostro <strong>preventivatore online</strong> fornisce istantaneamente stime per una vasta gamma di <strong>tecnologie di stampa 3D</strong> professionali e <strong>materiali performanti</strong> disponibili sul territorio, grazie al nostro <strong>network di stampatori</strong> professionali che mettono a disposizione la propria capacità produttiva per soddisfare gli ordini in arrivo.</p>
			</div>
		</section>

	</div>


	<section id="ddd-prefooter">
		<?php include('assets/inc/social-prefooter.inc.php') ?>
	</section>


	<footer id="ddd-footer">
		<?php include('assets/inc/footer.inc.php') ?>
	</footer>

	<script async src="<?php echo $basepath .'/assets/js/ddd-carousel.min.js'; ?>"></script>
	<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
	<script async src="<?php echo $basepath .'/assets/js/adddit-website.js?cb=' . random_int(9, 99999); ?>"></script>
</body>
</html>