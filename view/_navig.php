<!-- <img src="view/img/cogip_logo.jpg" alt=""><br> -->
<span class="<?php if ($page == '') {echo 'actif';} else {echo 'passif';} ?>"><a href="index.php"><button class="navig" type="button" name="button">Accueil</button></a></span>
<span class="<?php if (strpos($page, 'lesboites') === 0) {echo 'actif';} else {echo 'passif';} ?>"><a href="?page=lesboites_liste"><button class="navig" type="button" name="button">Sociétés</button></a></span>
<span class="<?php if (strpos($page, 'lesgens') === 0) {echo 'actif';} else {echo 'passif';} ?>"><a href="?page=lesgens_liste"><button class="navig" type="button" name="button">Contacts</button></a></span>
<span class="<?php if (strpos($page, 'lepognon') === 0) {echo 'actif';} else {echo 'passif';} ?>"><a href="?page=lepognon_liste"><button class="navig" type="button" name="button">Factures</button></a></span>
