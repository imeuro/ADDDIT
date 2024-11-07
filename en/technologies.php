<!DOCTYPE html>
<html lang="en">
<head>
	<title>Technologies • ADDDIT - 3D Printing Cloud Maufacturing Platform</title>
	<?php include('../assets/inc/doc-head.inc.php') ?>
	<meta name="description" content="Do you have a 3D model ready? ADDDIT offers a professional 3D printing service, transforming your digital projects into tangible physical objects.">
</head>
<body class="ddd-single-page">
	<header id="ddd-header" class="flex">
		<?php include('../assets/inc/en/head-nav.inc.php') ?>
	</header>

	<section id="ddd-page-title" data-bg="technologies">
		<h1>TECHNOLOGIES</h1>
	</section>

	<div class="slanted-container">

		<section id="ddd-about-home" class="block-section block-section-slanted block-section-white">
			<div class="technologies text">
			
				<h2>3D Printing: An Overview</h2>
				<p>3D printing, or additive manufacturing, has revolutionized the way we design and produce objects. This technology, which allows for the creation of three-dimensional objects from a digital model, has found applications in numerous sectors, from industrial production to design, from medicine to construction.</p>

				<h2>The Main Technologies of 3D Printing</h2>
				<ul class="tech-list">
				    <li id="FDM"><strong>FDM (Fused Deposition Modeling):</strong> One of the most widespread and accessible technologies. It uses a thermoplastic filament that is extruded and deposited layer by layer to form the object. It is ideal for rapid prototyping and small series production.</li>
				    <li id="SLS"><strong>SLS (Selective Laser Sintering):</strong> Uses a powder of thermoplastic or metallic material that is sintered layer by layer by a laser. Ideal for producing strong and complex parts, such as mechanical components and prostheses.</li>
				    <li id="MJF"><strong>MJF (Multi Jet Fusion):</strong> An innovative 3D printing technology developed by HP. It stands out from other technologies for its unique printing process that offers significant advantages in terms of speed, quality, and versatility.</li>
				    <li id="SLA"><strong>SLA (Stereolithography):</strong> Based on the curing of a liquid photopolymer using a UV laser beam. It offers very high resolution and smooth surfaces, making it perfect for producing detailed models and functional prototypes.</li>
					<li id="BinderJetting"><strong>Binder Jetting:</strong> A 3D printing technology that uses a series of resin jets to build an object layer by layer. This process allows for the creation of objects with a wide variety of materials and colors.</li>
				    <li id="DMLS"><strong>DMLS (Direct Metal Laser Sintering):</strong> A metallic 3D printing technology that uses a high-power laser to selectively melt a metal powder. It is an additive manufacturing process that allows for the creation of three-dimensional objects directly from a CAD file, offering great flexibility in the design and realization of complex components.</li>
					<li id="DLP"><strong>DLP (Digital Light Processing):</strong> Similar to SLA, but uses a UV light source projected onto an entire surface to solidify the resin. It offers a higher printing speed compared to SLA.</li>
				    <li id="CarbonDLS"><strong>Carbon Digital Light Synthesis (Carbon DLS):</strong> Carbon DLS is an innovative 3D printing technology that uses ultraviolet light to solidify a liquid resin. This process allows for the creation of three-dimensional objects with very high precision and quality.</li>
				    <li id="Polyjet"><strong>DMLM (Direct Metal Laser Melting):</strong> A metallic 3D printing technology that uses an electron beam to melt metal powders. While DMLS only melts the surface of the material, DMLM completely melts the material, creating a dense and uniform metallic solid.</li>
				    <li id="SLM"><strong>SLM (Selective Laser Melting):</strong> A metallic 3D printing technology that uses a laser beam to melt and form a metallic material. This process allows for the creation of objects with a wide variety of materials and colors.</li>
				    <li id="LFFDM"><strong>Large Format FDM:</strong> refers to FDM 3D printers designed to produce objects significantly larger than standard FDM printers.</li>
				    <li id="MJP"><strong>MJP (Multi Jet Printing):</strong> A 3D printing technology that uses a series of resin jets to build an object layer by layer. This process allows for the creation of objects with a wide variety of materials and colors.</li>
				</ul>

				<h2>The Applications of 3D Printing</h2>
				<p>The applications of 3D printing are practically infinite and continue to expand. Among the most common ones are:</p>

				<ul>
				    <li>Rapid Prototyping</li>
				    <li>Small Series Production</li>
				    <li>Medicine</li>
				    <li>Aerospace</li>
				    <li>Automotive</li>
				    <li>Architecture</li>
				</ul>

				<h2>The Future of 3D Printing</h2>
				<p>3D printing is a technology in constant evolution. New materials, software, and hardware are emerging, opening the door to new and exciting applications. In the future, we may witness an ever-increasing diffusion of 3D printing in our homes and a revolution in the way we design and consume objects.</p>
			</div>
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