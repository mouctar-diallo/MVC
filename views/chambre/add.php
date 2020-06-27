<div class="col">
    <div class="card-header">
    <h2 class="text-center mt-5">ajouter une chambre</h2>
    </div>
    <div class="align-items-center justify-content-center d-flex mt-5">
        <form action="<?= URL ?>Chambre/save" method="post" id="save-chambre" >
            <label for="type" class="control-label">type chambre</label>
            <select name="type" id="type" class="form-control">
                <option value="individuel">chambre simple</option>
                <option value="double">chample double</option>
            </select>
            <small class="alert-danger text-danger" id="error-type"></small>
            <label for="numero" class="control-label w-100">numero batiment</label>
            <input type="number" name="numero" class="form-control" id="numero">
            <small class="alert-danger text-danger" id="error-numero"></small>
            <input type="submit" value="enregistrer" name="enregistrer" class="btn btn-info mt-2 btn-block">
        </form>
    </div>
</div>