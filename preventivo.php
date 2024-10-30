<!DOCTYPE html>
<html lang="it">
<head>
	<title>Fai un preventivo • ADDDIT - 3D Printing Cloud Maufacturing Platform</title>
	<?php include('assets/inc/doc-head.inc.php') ?>
	<meta name="description" content="Hai un modello 3D pronto? ADDDIT offre un servizio professionale di stampa 3D, trasformando i tuoi progetti digitali in oggetti fisici tangibili.">
</head>
<body class="ddd-single-page">
	<header id="ddd-header" class="flex">
		<?php include('assets/inc/head-nav.inc.php') ?>
	</header>

	<section id="ddd-page-title" data-bg="preventivo">
		<h1>FAI UN PREVENTIVO</h1>
	</section>

	<div class="slanted-container">

		<section id="ddd-about-preventivo" class="block-section block-section-slanted block-section-white">
			<div class="preventivo text">
			
				<h2>Il tuo preventivo personalizzato.</h2>
				<p>Richiedi un preventivo gratuito e affidati alla nostra esperienza per ottenere stampe 3D di alta qualità. Utilizziamo <a href="<?php echo $basepath .'/tecnologie/';?>">tecnologie</a> all'avanguardia e <a href="<?php echo $basepath .'/materiali/';?>">materiali</a> di prima scelta per garantire risultati impeccabili.</p>
				<p><strong>Carica il tuo file 3D</strong> e scopri quanto è facile ottenere un oggetto unico e di alta qualità. Offriamo una vasta gamma di materiali e finiture, per soddisfare ogni esigenza.</p>

				<form action="<?php echo $basepath .'/_quoteMail'; ?>" method="post" enctype="multipart/form-data" id="get-a-quote" class="flex dddCarousel"  data-passo="1" data-time="1000" data-config='{"classi": true, "eventi": true}'>
					<div class="step dddCarouselItem" data-step="1">
						<ul class="get-a-quote-section file-data">
							<li class="step-title">
								<h2>1. Caratteristiche del progetto</h2>
							</li>
							<li class="flex">
								<label>Il tuo progetto<span class="mandatory"></span></label>
								<div id="drop-area">
									<p>Trascina il file in quest'area oppure utilizza il bottone per selezionare il file</p>
									<input type="file" name="fileToUpload" id="fileToUpload" onchange="handleFiles(this.files)" class="hidden">
									<label for="fileToUpload">Seleziona il file</label>
									<div id="progress"></div>
									<div id="gallery" /></div>
									<input type="text" id="picurl" name="picurl" required class="hidden">
								</div>
							</li>
							<li class="flex">
								<label for="quantita">Quantità<span class="mandatory"></span></label>
								<input type="number" id="quantita" name="quantita" required>
							</li>
							<li class="flex">
								<label for="tecnologia">Tecnologia<span class="mandatory"></label>
								<div class="select">
									<select id="tecnologia" name="tecnologia" required>
										<option value="-" disabled="" selected="">seleziona</option>
										<option value="MJF">MJF</option>
										<option value="FDM">FDM</option>
										<option value="SLS">SLS</option>
										<option value="SLA">SLA</option>
										<option value="DMLS">DMLS</option>
										<option value="DMLM">DMLM</option>
										<option value="CarbonDLS">Carbon DLS</option>
										<option value="other">altro (specificare nelle note)</option>
									</select>
									<span class="focus"></span>
								</div>
							</li>
							<li class="flex">
								<label for="materiale">Materiale<span class="mandatory"></label>
								<div class="select">
									<select id="materiale" name="materiale" required>
									<option value="-"  disabled="" selected="">seleziona</option>
										<option value="PA12">PA12</option>
										<option value="TPU">TPU</option>
										<option value="PolimeriCaricati">Polimeri Caricati</option>
										<option value="PA12GB">PA12GB</option>
										<option value="TPA">TPA</option>
										<option value="ABS">ABS</option>
										<option value="Nylon">Nylon</option>
										<option value="Inconel625">Inconel 625</option>
										<option value="Acciaio17-4PH">Acciaio 17-4 PH</option>
										<option value="other">altro (specificare nelle note)</option>
									</select>
									<span class="focus"></span>
								</div>
							</li>
							<li class="flex">
								<label for="note_cliente">Note Aggiuntive</label>
								<textarea id="note_cliente" name="note_cliente" placeholder="Indicare eventuali preferenze circa tecnologie, materiali o altre informazioni utili in fase di preventivazione"></textarea>
							</li>
						</ul>
					</div>

					<div class="step dddCarouselItem" data-step="2">
						<ul class="get-a-quote-section customer-data">
							<li class="step-title">
								<h2>2. Dati del cliente</h2>
							</li>

							<li class="flex">
								<label for="nome">Nome<span class="mandatory"></span></label>
								<input type="text" id="nome" name="nome" required>
							</li>
							<li class="flex">
								<label for="cognome">Cognome<span class="mandatory"></span></label>
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

					<div class="step dddCarouselItem" data-step="3">
						<ul class="get-a-quote-section quotation-data">
							<li class="step-title">
								<h2>3. Dati di preventivazione</h2>
							</li>
							<li class="flex">
								<label for="azienda">Azienda (opz.)</label>
								<input type="text" id="azienda" name="azienda">
							</li>
							<li class="flex">	
								<label for="partita_iva">Partita IVA (opz.)</label>
								<input type="text" id="partita_iva" name="partita_iva">
							</li>
							<li class="flex">
								<label for="indirizzo">Indirizzo<span class="mandatory"></span></label>
								<input type="text" id="indirizzo" name="indirizzo" required>
							</li>
							<li class="flex">
								<label for="città">Città<span class="mandatory"></span></label>
								<input type="text" id="citta" name="citta" required>
							</li>
							<li class="flex">
								<label for="cap">CAP<span class="mandatory"></span></label>
								<input type="text" id="cap" name="cap" required>
							</li>
							<li class="flex">
								<label for="provincia">Provincia<span class="mandatory"></span></label>
								<input type="text" id="provincia" name="provincia" required>
							</li>
							<li class="flex">
								<label for="stato">Stato<span class="mandatory"></span>:</label>
								<input type="text" id="stato" name="stato" required>
							</li>						
							<li class="flex hidden">
								<label for="other">Öther<span class="mandatory"></span>:</label>
								<input type="text" id="other" name="other" hidden>
							</li>
						</ul>

						<ul class="get-a-quote-section preventivo-submit">
							<li class="flex">
								<button type="submit" form="get-a-quote" name="preventivo-submit">Invia<span class="send-ico"></span></button>
							</li>
						</ul>
					</div>


				</form>
				<div class="dddCarouselControls" data-target="#get-a-quote">
					<a class="dddCarouselPrev dddCarouselControl dddCarouselDisabled" data-target="#get-a-quote"></a>
					<a class="dddCarouselNext dddCarouselControl" data-target="#get-a-quote">Avanti</a>
				</div>
				<ul class="dddCarouselNavi" data-target="#get-a-quote"></ul>
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
	<!-- <script async src="<?php // echo $basepath .'/assets/js/adddit-website.js?cb=' . random_int(9, 99999); ?>"></script> -->
	<script async src="<?php echo $basepath .'/assets/js/adddit-website.js'; ?>"></script>

	<script>
		let dropArea = document.getElementById("drop-area");

		// Prevent default drag behaviors
		['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
		  dropArea.addEventListener(eventName, preventDefaults, false)   
		  document.body.addEventListener(eventName, preventDefaults, false)
		})

		// Highlight drop area when item is dragged over it
		;['dragenter', 'dragover'].forEach(eventName => {
		  dropArea.addEventListener(eventName, highlight, false)
		})

		;['dragleave', 'drop'].forEach(eventName => {
		  dropArea.addEventListener(eventName, unhighlight, false)
		})

		// Handle dropped files
		dropArea.addEventListener('drop', handleDrop, false)

		function preventDefaults (e) {
		  e.preventDefault()
		  e.stopPropagation()
		}

		function highlight(e) {
		  dropArea.classList.add('highlight')
		}

		function unhighlight(e) {
		  dropArea.classList.remove('highlight')
		}

		function handleDrop(e) {
		  var dt = e.dataTransfer
		  var files = dt.files

		  handleFiles(files)
		}

		function handleFiles(files) {
		  files = [...files]
		  files.forEach(uploadFile)
		}

		function previewFile(file) {
		  let reader = new FileReader()
		  reader.readAsDataURL(file)
		  reader.onloadend = function() {
		    let img = document.createElement('img')
		    img.src = reader.result
		    document.getElementById('gallery').appendChild(img)
		  }
		}

		function uploadFile(file, i) {
			var url = '<?php echo $basepath ."/_quotePic.php" ?>';
			const progress = document.getElementById('progress');

			var data = new FormData()
			data.append('fileToUpload', file);
			progress.innerText = 'uploading...';
			fetch(url, {
				method: 'POST',
				body: data
			}).then(
				response => response.json()
			).then(
				success => {
					console.debug(success);
					if (success.success == 1) {
						progress.innerText = 'file '+success.filename+' uploaded.';
						document.getElementById('picurl').value = success.fileURL;
						previewFile(file);
					} else {
						progress.innerText = 'Error: '+success.text;
					}
				}
			).catch(
				error => {
					console.debug(error);
					progress.innerText = 'Error: '+error.text;
				}
			);

			

		}

	</script>
</body>
</html>