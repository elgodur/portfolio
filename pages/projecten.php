<?php require ($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');?>
	<div class="content">
		<div class="hero" style="flex-direction: column; text-align:center;">
			<p>Mijn portfolio</p>
			<h1 class="firstHeading">Mijn laatste projecten</h1>
		</div>
	</div>
	<div class="content" style="background:#1a1a1a;">
		<div class="portfolio">
			<ul class="laatsteProjecten">
				<li class="project">
					<div id="Egelantier" class="projectImage"></div>
					<ul>
						<li>UI / UX Design</li>
						<li>Web Design</li>
						<li>Wireframe</li>
					</ul>
					<h3>Café De Egelantier</h3>
					<a href="/pages/deegelantier.php" class="leesMeer">Lees meer</a>
				</li>
				<li class="project">
					<div id="MRC" class="projectImage"></div>
					<ul>
						<li>UI / UX Design</li>
						<li>App Design</li>
						<li>Wireframe</li>
					</ul>
						<h3>Militair Revalidatie Centrum Aardenburg</h3>
						<a href="#" class="leesMeer">Lees meer</a>
				</li>
				<li class="project">
					<div id="Correct" class="projectImage"></div>
					<ul>
						<li>UI / UX Design</li>
						<li>Web Design</li>
						<li>Wireframe</li>
					</ul>
					<h3>Correct</h3>
					<a href="/pages/correct.php" class="leesMeer">Lees meer</a>
				</li>
				<li class="project">
					<div id="Appelkaatje" class="projectImage"></div>
					<ul>
						<li>UI / UX Design</li>
						<li>Web Design</li>
						<li>Branding</li>
					</ul>
					<h3>Appelkaatje</h3>
					<a href="/pages/appelkaatje.php" class="leesMeer">Lees meer</a>
				</li>
			</ul>
		</div>
	</div>

<?php 
require ($_SERVER['DOCUMENT_ROOT'].'/parts/contact.php');
require ($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>

