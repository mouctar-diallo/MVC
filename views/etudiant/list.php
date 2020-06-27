<div class="col">
<h2 class="text-center mt-4">liste des etudiants</h2>
<div id="sroll">
    <?php var_dump($etudiants) ;?>
    <table class="table table-stripped table-bordered table hover mt-2" id="table-student">
        <thead>
            <tr>
                <td class="bg-info">matricule</td>
                <td class="bg-info">nom & prenom</td>
                <td class="bg-info">email</td>
                <td class="bg-info">telephone</td>
                <td class="bg-info">adresse</td>
                <td class="bg-info">bourse</td>
                <td class="bg-info">numero chambre</td>
                <td class="bg-info">action</td>
            </tr>
        </thead>
        <tbody>
        <?php 
            foreach ($etudiants as $et) { ?>
                <tr>
                    <td><?= $et->getMatricule()?></td>
                    <td><?= $et->getNom(). ' '. $et->getPrenom()?></td>
                    <td><?= $et->getEmail()?></td>
                    <td><?= $et->getTelephone()?></td>
                    <td><?= $et->getEmail()?></td>
                    <td>non bourse</td>
                    <td>numero chambre</td>
                    <td class="text-center">
                        <a href="<?=URL?>Etudiant/delete" class="btn btn-danger">delete</a>
                        <a href="<?=URL?>Etudiant/edit" class="btn btn-primary">edit</a>
                    </td>
                </tr><?php
            }?> 
        </tbody>
    </table>
    </div>
</div>
<script>
	$(document).ready( function () {
		$('#table-student').DataTable();
	});
</script>