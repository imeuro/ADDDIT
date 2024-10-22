<h1 class="ddd-header-logo"><a href="<?php echo $basepath; ?>" title="ADDDIT"><img src="<?php echo $basepath .'/assets/img/ADDDIT-logo.svg'; ?>" width="230" height="26" alt="ADDDIT Logo" /></a></h1>
<nav id="ddd-menu">
	<span class="hamburger mobile">
		<svg xmlns="http://www.w3.org/2000/svg" id="hamb" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>

		<svg xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 384 512"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
	</span>
	<ul class="menu-main">
		<li class="menu-item"><a href="<?php echo $basepath .'/about/'; ?>" title="About" class="first-lev flex">About</a></li>
		<!-- <li class="menu-item"><a href="'; ?>" title="Mission" class="first-lev flex">Mission</a></li> -->
		<li class="menu-item has-submenu">
			<a href="<?php echo $basepath .'/servizi/'; ?>" title="Servizi" class="first-lev flex">Servizi</a>
			<ul class="sub-menu-main">
				<li><a href="<?php echo $basepath .'/servizi?paragraph=consulenza-tecnica'; ?>" title="Consulenza">Consulenza Tecnica</a></li>
				<li><a href="<?php echo $basepath .'/servizi?paragraph=diventa-partner'; ?>" title="Diventa Partner">Diventa Partner</a></li>
			</ul>
		</li>
		<li class="menu-item has-submenu">
			<a href="<?php echo $basepath .'/tecnologie/'; ?>" title="Tecnologie" class="first-lev flex">Tecnologie</a>
			<ul class="sub-menu-main">
				<li><a href="<?php echo $basepath .'/tecnologie?paragraph=MJF'; ?>" title="MJF">MJF</a></li>
				<li><a href="<?php echo $basepath .'/tecnologie?paragraph=FDM'; ?>" title="FDM">FDM</a></li>
				<li><a href="<?php echo $basepath .'/tecnologie?paragraph=SLS'; ?>" title="SLS">SLS</a></li>
				<li><a href="<?php echo $basepath .'/tecnologie?paragraph=SLA'; ?>" title="SLA">SLA</a></li>
				<li><a href="<?php echo $basepath .'/tecnologie?paragraph=DMLS'; ?>" title="DMLS">DMLS</a></li>
				<li><a href="<?php echo $basepath .'/tecnologie?paragraph=DMLM'; ?>" title="DMLM">DMLM</a></li>
				<li><a href="<?php echo $basepath .'/tecnologie?paragraph=CarbonDLS'; ?>" title="Carbon DLS">Carbon DLS</a></li>
				<li><a href="<?php echo $basepath .'/tecnologie?paragraph=other'; ?>" title="Proponi">Proponi tu!</a></li>
			</ul>
		</li>
		<li class="menu-item has-submenu">
			<a href="<?php echo $basepath .'/materiali/'; ?>" title="Materiali" class="first-lev flex">Materiali</a>
			<ul class="sub-menu-main">
				<li><a href="<?php echo $basepath .'/materiali?paragraph=PA12'; ?>" title="PA12">PA12</a></li>
				<li><a href="<?php echo $basepath .'/materiali?paragraph=TPU'; ?>" title="TPU">TPU</a></li>
				<li><a href="<?php echo $basepath .'/materiali?paragraph=PolimeriCaricati'; ?>" title="Polimeri Caricati">Polimeri Caricati</a></li>
				<li><a href="<?php echo $basepath .'/materiali?paragraph=PA12GB'; ?>" title="PA12GB">PA12GB</a></li>
				<li><a href="<?php echo $basepath .'/materiali?paragraph=TPA'; ?>" title="TPA">TPA</a></li>
				<li><a href="<?php echo $basepath .'/materiali?paragraph=ABS'; ?>" title="ABS">ABS</a></li>
				<li><a href="<?php echo $basepath .'/materiali?paragraph=Nylon'; ?>" title="Nylon">Nylon</a></li>
				<li><a href="<?php echo $basepath .'/materiali?paragraph=Inconel625'; ?>" title="Inconel 625">Inconel 625</a></li>
				<li><a href="<?php echo $basepath .'/materiali?paragraph=Acciaio17-4PH'; ?>" title="Acciaio 17-4 PH">Acciaio 17-4 PH</a></li>
				<li><a href="<?php echo $basepath .'/materiali?paragraph=other'; ?>" title="Proponi">Proponi tu!</a></li>
			</ul>
		</li>
		<li class="menu-item"><a href="<?php echo $basepath .'/preventivo/'; ?>" title="Fai un preventivo" class="first-lev round-btn flex">Fai un preventivo</a></li>
		<li class="menu-item lang-chooser flex">
			<a href="<?php echo $basepath; ?>" title="Italiano" class="first-lev flex"><img src="<?php echo $basepath .'/assets/img/mini-flag-IT.svg'; ?>" alt="Italiano" title="Italiano" width="28" height="28"></a>
			<a href="<?php echo $basepath .'/en/'; ?>" title="English" class="first-lev flex"><img src="<?php echo $basepath .'/assets/img/mini-flag-EN.svg'; ?>" alt="English" title="English" width="28" height="28"></a></li>
	</ul>
</nav>
