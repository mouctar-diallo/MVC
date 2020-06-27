<div class="col">
<h2 class="text-center mt-4">liste des chambres</h2>
    <table class="table table-stripped table-bordered table hover mt-2" id="table-chambre">
        <thead>
            <tr>
                <td class="bg-info">#</td>
                <td class="bg-info">numero</td>
                <td class="bg-info">type</td>
                <td class="bg-info">numero batiment</td>
                <td class="bg-info">action</td>
            </tr>
        </thead>
        <tbody>
        <?php 
            foreach ($chambres as $ch) { ?>
                <tr>
                    <td><?= $ch->getId_Chambre()?></td>
                    <td><?= $ch->getNumero()?></td>
                    <td><?= $ch->getType()?></td>
                    <td><?= $ch->getNumero_batiment()?></td>
                    <td class="text-center">
                        <a href="<?=URL?>Chambre/delete/<?php echo $ch->getId_Chambre()?>" class="btn btn-danger">delete</a>
                        <a href="<?=URL?>Chambre/edit?id=<?=$ch->getId_Chambre()?>" class="btn btn-primary">edit</a>
                    </td>
                </tr><?php
            }?> 
        </tbody>
    </table>
</div>
<script>
	$(document).ready( function () {
		$('#table-chambre').DataTable();
	});
</script>