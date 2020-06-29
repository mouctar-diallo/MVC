<div class="col">
<h2 class="text-center mt-4">liste des etudiants</h2>
<div id="scrol">
    <table class="table table-stripped table-bordered table hover mt-2" id="table-student">
        <thead>
            <tr>
                <td class="bg-info text-white">matricule</td>
                <td class="bg-info text-white">nom</td>
                <td class="bg-info text-white">prenom</td>
                <td class="bg-info text-white">telephone</td>
                <td class="bg-info text-white">type</td>
                <td class="bg-info text-white">adresse</td>
                <td class="bg-info text-white">bourse</td>
                <td class="bg-info text-white">numero chambre</td>
                <td class="bg-info text-white">action</td>
            </tr>
        </thead>
        <tbody>
        <?php 
            function donnees_commun($et) {?>
                <td><?= $et->getMatricule()?></td>
                <td class="nom"     contenteditable="true"  data-id='<?=$et->getId() ?>'><?= $et->getNom()?></td>
                <td class="prenom"  contenteditable="true"  data-id='<?=$et->getId() ?>'><?= $et->getPrenom()?></td>
                <td class="telephone"  contenteditable="true"  data-id='<?=$et->getId() ?>'><?= $et->getTelephone()?></td>
                <td><?= $et->getType()?></td><?php
            }
            foreach ($etudiants as $et) { ?>
                <tr class="etudiants"><?php
                    if ($et->getType()== 'NB') {?>
                        <?= donnees_commun($et) ?>
                        <td class="adresse"  contenteditable="true"  data-id='<?=$et->getId() ?>'><?= $et->getAdresse()?></td>
                        <td><?= null ?></td>
                        <td><?=null?></td><?php
                    }elseif ($et->getType()=='BL') {?>
                        <?= donnees_commun($et) ?>
                        <td><?= null ?></td>
                        <td class="bourse"  contenteditable="true"  data-id='<?=$et->getId() ?>'><?= $et->getTypeBourse()?></td>
                        <td><?= $et->getNumero_chambre()?></td><?php
                    }elseif ($et->getType()== 'BNL') {?>
                    <?= donnees_commun($et) ?>
                        <td class="adresse"  contenteditable="true"  data-id='<?=$et->getId() ?>'><?= $et->getAdresse()?></td>
                        <td class="bourse"  contenteditable="true"  data-id='<?=$et->getId() ?>'><?= $et->getTypeBourse()?></td> 
                        <td><?= null ?></td><?php
                    }?>
                    <td class="text-center">
                        <a href="#" class="remove btn btn-danger" id='<?=$et->getId(); ?>'>delete</a>
                        <a href="#" class="edit btn btn-primary">edit</a>
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