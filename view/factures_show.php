<h3><?=$factures['type']?> : <a href="index.php?page=lesboites_detail&id=<?=$factures['id_societe']?>"><?=$factures['nom_societe']?></a></h3>

<p><span class="detailtitle">Prestation :</span> <?=$factures['motif_prestation']?></p>
<p><span class="detailtitle">Date de facturation :</span> <?=$factures['date_facturation']?></p>
<p><span class="detailtitle">Personne de contact :</span> <a href="index.php?page=lesgens_detail&id=<?=$factures['id_personne']?>"><?=$factures['prenom_contact']?> <?=$factures['nom_contact']?></a></p>

<?php if ($admin_level === 'god'): ?>
    <br>
    <a href="index.php?page=lepognon_modifier&id=<?=$idfacture?>"><button class="btn btn-outline-info" type="button" name="button">Modifier</button></a>
    <a href="index.php?page=lepognon_supprimer&id=<?=$idfacture?>"><button class="btn btn-outline-danger" type="button" name="button">Supprimer</button></a>
<?php endif; ?>
