<!DOCTYPE html>
<html lang="it">
<head>
	<title>Tecnologie • ADDDIT - 3D Printing Cloud Maufacturing Platform</title>
	<?php include('assets/inc/doc-head.inc.php') ?>
	<meta name="description" content="Hai un modello 3D pronto? ADDDIT offre un servizio professionale di stampa 3D, trasformando i tuoi progetti digitali in oggetti fisici tangibili.">
</head>
<body class="ddd-single-page">
	<header id="ddd-header" class="flex">
		<?php include('assets/inc/head-nav.inc.php') ?>
	</header>

	<section id="ddd-page-title" data-bg="technologies">
		<h1>TECNOLOGIE</h1>
	</section>

	<div class="slanted-container">

		<section id="ddd-about-tecnologie" class="block-section block-section-slanted block-section-white">
			<div class="technologies text">
			
				<h2>La stampa 3D: una panoramica</h2>
				<p>La stampa 3D, o manifattura additiva, ha rivoluzionato il modo in cui progettiamo e produciamo oggetti. Questa tecnologia, che consente di creare oggetti tridimensionali a partire da un modello digitale, ha trovato applicazione in numerosi settori, dalla produzione industriale al design, dalla medicina all'edilizia.</p>

				<h2>Le principali tecnologie di stampa 3D</h2>
				<ul class="tech-list">
				    <li id="MJF"><strong>MJF (Multi Jet Fusion):</strong> È una tecnologia di stampa 3D innovativa sviluppata da HP. Si distingue dalle altre tecnologie per il suo processo di stampa unico che offre vantaggi significativi in termini di velocità, qualità e versatilità.</li>
				    <li id="FDM"><strong>FDM (Fused Deposition Modeling):</strong> Una delle tecnologie più diffuse e accessibili. Utilizza un filamento termoplastico che viene estruso e depositato strato per strato per formare l'oggetto. È ideale per la prototipazione rapida e la produzione di piccole serie.</li>
				    <li id="SLS"><strong>SLS (Selective Laser Sintering):</strong> Utilizza una polvere di materiale termoplastico o metallico che viene sinterizzata strato per strato da un laser. Ideale per la produzione di pezzi resistenti e complessi, come componenti meccanici e protesi.</li>
				    <li id="SLA"><strong>SLA (Stereolitografia):</strong> Basata sull'indurimento di un fotopolimero liquido tramite un raggio laser UV. Offre una risoluzione molto alta e superfici lisce, rendendola perfetta per la produzione di modelli dettagliati e prototipi funzionali.</li>
					<li id="DLP"><strong>DLP (Digital Light Processing):</strong> Simile alla SLA, ma utilizza una sorgente luminosa UV proiettata su un'intera superficie per solidificare il resina. Offre una velocità di stampa più elevata rispetto alla SLA.</li>
					<!-- <li id="EBM"><strong>EBM (Electron Beam Melting):</strong> Una tecnologia di stampa 3D metallica che utilizza un fascio di elettroni per fondere le polveri metalliche. Ideale per la produzione di componenti metallici ad alta resistenza e complessità geometrica.</li> -->
				    <li id="DMLS"><strong>DMLS (Direct Metal Laser Sintering):</strong> Una tecnologia di stampa 3D metallica che utilizza un laser ad alta potenza per fondere selettivamente una polvere metallica. È un processo di produzione additiva che permette di creare oggetti tridimensionali direttamente da un file CAD, offrendo una grande flessibilità nella progettazione e nella realizzazione di componenti complessi.</li>
				    <li id="DMLM"><strong>DMLM (Direct Metal Laser Melting):</strong> Una tecnologia di stampa 3D metallica che utilizza un fascio di elettroni per fondere le polveri metalliche. Mentre la DMLS fonde solo la superficie del materiale, la DMLM fonde completamente il materiale, creando un solido metallico denso e uniforme.</li>
				    <li id="CarbonDLS"><strong>Carbon Digital Light Synthesis (Carbon DLS):</strong> La Carbon DLS è una tecnologia di stampa 3D innovativa che utilizza la luce ultravioletta per solidificare un resina liquida. Questo processo permette di creare oggetti tridimensionali con una precisione e una qualità molto elevate.</li>
				</ul>

				<h2>Le applicazioni della stampa 3D</strong></h2>
				<p>Le applicazioni della stampa 3D sono praticamente infinite e continuano a espandersi. Tra le più comuni troviamo:</p>

				<ul>
				    <li>Prototipazione rapida</li>
				    <li>Produzione di piccole serie</li>
				    <li>Medicina</li>
				    <li>Aerospaziale</li>
				    <li>Automotive</li>
				    <li>Architettura</li>
				</ul>

				<h2>Il futuro della stampa 3D</h2>
				<p>La stampa 3D è una tecnologia in continua evoluzione. Nuovi materiali, software e hardware stanno emergendo, aprendo la strada a nuove e entusiasmanti applicazioni. In futuro, potremmo assistere a una diffusione sempre maggiore della stampa 3D nelle nostre case e a una rivoluzione nel modo in cui produciamo e consumiamo gli oggetti.</p>
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