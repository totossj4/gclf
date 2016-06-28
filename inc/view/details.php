<article id="details">
	<div class="detailsLeft">
		<div class="affiche"><img src="<?php echo $filmSingle->getAffiche(); ?>" border="0" width="200" /></div>
		<div class="annee">Sortie en <?php echo $filmSingle->getAnnee(); ?></div>
		<div class="support">Support : <?php echo $filmSingle->getSupport()->getNom(); ?></div>
	</div>
	<div class="detailsRight">
		<div class="titre"><?php echo $filmSingle->getAnnee(); ?></div>
		<div class="categorie"><?php echo $filmSingle->getCategorie()->getNom(); ?></div>
		<br /><br />
		<div class="synopsis"><?php echo $filmSingle->getSynopsis(); ?></div>
		<div class="acteurs"><?php echo $filmSingle->getActeurs(); ?></div>
		<div class="fichier">=> <?php echo $filmSingle->getFilename(); ?></div>
	</div>
</article>
