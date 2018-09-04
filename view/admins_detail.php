<?php include 'header.php' ?>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body mx-auto">
					<h3><a href="index.php?page=lesboss_detail&id=<?=$admins['id']?>"><?=$admins['nom']?></a></h3>

					<div class="detail">
				        <p><span class="detailtitle">Login :</span> <?=$admins['login']?></p>
				        <p><span class="detailtitle">Access :</span> <?=$admins['access']?></p>

				   </div>
           <br>
				    <a href="index.php?page=lesboss_modifier&id=<?=$idadmins?>"><button class="btn btn-outline-info" type="button" name="button">Modifier</button></a>
				    <a href="index.php?page=lesboss_supprimer&id=<?=$idadmins?>"><button class="btn btn-outline-danger" type="button" name="button">Supprimer</button></a>

					</div>
	      </div>
	    </div>
	  </div>
	</div>
<?php include 'footer.php' ?>
