<!DOCTYPE html>
<html lang="en">
<head>
	<title>Get a quote • ADDDIT - 3D Printing Cloud Maufacturing Platform</title>
	<?php include('../assets/inc/doc-head.inc.php') ?>
	<meta name="description" content="Do you have a 3D model ready? ADDDIT offers a professional 3D printing service, transforming your digital projects into tangible physical objects.">
</head>
<body class="ddd-single-page">
	<header id="ddd-header" class="flex">
		<?php include('../assets/inc/en/head-nav.inc.php') ?>
	</header>

	<section id="ddd-page-title" data-bg="preventivo">
		<h1>GET A QUOTE</h1>
	</section>

	<div class="slanted-container">

		<section id="ddd-about-preventivo" class="block-section block-section-slanted block-section-white">
			<div class="preventivo text">
			
				<h2>Your customized quote.</h2>
                <p>Request a free quote and trust our expertise to get high-quality 3D prints. We use <a href="<?php echo $basepath .'/technologies/';?>">state-of-the-art technologies</a> and <a href="<?php echo $basepath .'/materials/';?>">top-grade materials</a> to guarantee excellent results.</p>
                <p><strong>Upload your 3D file</strong> and discover how easy it is to get a unique and high-quality object. We offer a wide range of materials and finishes to meet every need.</p>

				<form action="<?php echo $basepath .'/_quoteMail'; ?>" method="post" enctype="multipart/form-data" id="get-a-quote" class="flex dddCarousel"  data-passo="1" data-time="1000" data-config='{"classi": true, "eventi": true}'>

					<div class="step dddCarouselItem" data-step="1">
						<ul class="get-a-quote-section file-data">
							<li class="step-title">
								<h2>1. Upload your project file</h2>
							</li>
							<li class="flex">
								<label>
									<span>Your project<span class="mandatory"></span></span>
									<small>
										<br>
										<strong>Supported formats:</strong> obj, 3ds, stl, step, ply, gltf, glb, off, 3dm, fbx, dae, wrl, 3mf, stp, ifc, bim.
									<br><br>
										<strong>File dimensions:</strong> < 50Mb
									</small>
								</label>
								<div id="drop-area">
									<p>Drag the file into this area or use the button to select the file</p>
									<input type="file" name="fileToUpload" id="fileToUpload" onchange="handleFiles(this.files)" class="hidden">
									<label for="fileToUpload">Select your file</label>
									<div id="progress"></div>
									<input type="text" id="picurl" name="picurl" required class="hidden">
									<input type="text" id="quoteID" name="quoteID" required class="hidden">
								</div>
							</li>
							<li class="flex">
								<div id="preview-area"><label>Preview Area</label></div>
							</li>
					</ul>
					</div>

					<div class="step dddCarouselItem" data-step="2">
						<ul class="get-a-quote-section file-data">
							<li class="step-title">
								<h2>2. Printing Features</h2>
							</li>
							<li class="flex">
								<label for="quantita">Quantity<span class="mandatory"></span></label>
								<input type="number" id="quantita" name="quantita" required>
							</li>
							<li class="flex">
								<label for="tecnologia">Tecnology<span class="mandatory"></label>
								<div class="select">
									<select id="tecnologia" name="tecnologia" required>
										<option value="-" disabled="" selected="">select</option>
									</select>
									<span class="focus"></span>
								</div>
							</li>
							<li class="flex">
								<label for="materiale">Material<span class="mandatory"></label>
								<div class="select">
									<select id="materiale" name="materiale" required>
										<option value="-"  disabled="" selected="">select</option>
										<option value="other">other (please specify in 'Additional Notes' field below)</option>
									</select>
									<span class="focus"></span>
								</div>
							</li>
							<li class="flex">
								<label for="note_cliente">Additional Notes</label>
								<textarea id="note_cliente" name="note_cliente" placeholder="Please indicate any preferences regarding technologies, materials or other useful information for the quotation process"></textarea>
							</li>
						</ul>
					</div>

					<div class="step dddCarouselItem" data-step="3">
						<ul class="get-a-quote-section customer-data">
							<li class="step-title">
								<h2>3. Customer Details</h2>
							</li>

							<li class="flex">
								<label for="nome">Name<span class="mandatory"></span></label>
								<input type="text" id="nome" name="nome" required>
							</li>
							<li class="flex">
								<label for="cognome">Surname<span class="mandatory"></span></label>
								<input type="text" id="cognome" name="cognome" required>
							</li>
							<li class="flex">
								<label for="email">Email<span class="mandatory"></span></label>
								<input type="email" id="email" name="email" required>
							</li>
							<li class="flex">
								<label for="phone">Phone</label>
								<input type="phone" id="phone" name="phone">
							</li>
						</ul>
					</div>

					<div class="step dddCarouselItem" data-step="4">
						<ul class="get-a-quote-section quotation-data">
							<li class="step-title">
								<h2>4. Quotation Data</h2>
							</li>
							<li class="flex">
								<label for="azienda">Company (opt.)</label>
								<input type="text" id="azienda" name="azienda">
							</li>
							<li class="flex">	
								<label for="partita_iva">VAT n° (opt.)</label>
								<input type="text" id="partita_iva" name="partita_iva">
							</li>
							<li class="flex">
								<label for="indirizzo">Address<span class="mandatory"></span></label>
								<input type="text" id="indirizzo" name="indirizzo" required>
							</li>
							<li class="flex">
								<label for="citta">City<span class="mandatory"></span></label>
								<input type="text" id="citta" name="citta" required>
							</li>
							<li class="flex">
								<label for="cap">ZIP/Postal code<span class="mandatory"></span></label>
								<input type="text" id="cap" name="cap" required>
							</li>
							<li class="flex">
								<label for="provincia">Provincie<span class="mandatory"></span></label>
								<input type="text" id="provincia" name="provincia" required>
							</li>
							<li class="flex">
								<label for="stato">State<span class="mandatory"></span>:</label>
								<input type="text" id="stato" name="stato" required>
							</li>						
							<li class="flex hidden">
								<label for="other">Öther<span class="mandatory"></span>:</label>
								<input type="text" id="other" name="other" hidden>
							</li>
						</ul>

						<ul class="get-a-quote-section preventivo-submit">
							<li class="flex">
								<button type="submit" form="get-a-quote" name="preventivo-submit">Submit<span class="send-ico"></span></button>
							</li>
						</ul>
					</div>


				</form>
				<div class="dddCarouselControls" data-target="#get-a-quote">
					<a class="dddCarouselPrev dddCarouselControl dddCarouselDisabled" data-target="#get-a-quote"></a>
					<a class="dddCarouselNext dddCarouselControl" data-target="#get-a-quote">Next</a>
				</div>
				<ul class="dddCarouselNavi" data-target="#get-a-quote"></ul>
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
	<script async src="<?php echo $basepath .'/assets/js/adddit-website.js'; ?>"></script>
	<script async src="<?php echo $basepath .'/assets/js/adddit-quoting.js?lang=eng'; ?>"></script>
	<script defer type="text/javascript" src="<?php echo $basepath .'/assets/js/o3dv.min.js'; ?>"></script>

</body>
</html>