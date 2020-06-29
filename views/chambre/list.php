<style>
    div.pager {
    text-align: right;
    margin: 1em 0;
  }
  
  div.pager span {
    display: inline-block;
    width: 1.8em;
    height: 1.8em;
    line-height: 1.8;
    text-align: center;
    cursor: pointer;
    background: #17a2b8;
    color: #fff;
    border: 1px solid #FFFFFF;
  }
  
  div.pager span.bouton{
      width: 10%;
      border-radius: 0px;
  }
  
  div.pager span.active {
    background: grey;
  }
</style>
<div class="col">
<h2 class="text-center mt-4">liste des chambres</h2>
    <table class="paginated table table-stripped table-bordered table hover mt-5" id="table-chambre">
        <thead>
            <tr>
                <td class="bg-info text-white">#</td>
                <td class="bg-info text-white">numero</td>
                <td class="bg-info text-white">type</td>
                <td class="bg-info text-white">numero batiment</td>
                <td class="bg-info text-white">action</td>
            </tr>
        </thead>
        <tbody>
        <?php 
            foreach ($chambres as $ch) { ?>
                <tr class="chambres">
                    <td><?= $ch->getId_Chambre()?></td>
                    <td><?= $ch->getNumero()?></td>
                    <td class="typeChambre" contenteditable="true"  data-id='<?=$ch->getId_Chambre() ?>'><?= $ch->getType()?></td>
                    <td class="batiment" contenteditable="true"  data-id='<?=$ch->getId_Chambre() ?>'><?= $ch->getNumero_batiment()?></td>
                    <td class="text-center">
                        <a href="#" class="delete btn btn-danger" id='<?=$ch->getId_Chambre(); ?>'>delete</a>
                        <a href="#" class="btn btn-primary">edit</a>
                    </td>
                </tr><?php
            }?> 
        </tbody>
    </table>
</div>
<script src="<?=URL?>public/js/pagination.js"></script>




