<div class="col">
    <div class="card-header">
    <h2 class="text-center mt-5">ajouter un etudiant</h2>
    </div>
    <div class="align-items-center justify-content-center d-flex mt-2">
        <form action="" method="post">
            <div class="row">
                    <div class="col-6">
                    <label for="nom" class="control-label">nom</label>
                    <input type="text" name="nom" class="form-control" id="nom">
                    <label for="prenom" class="control-label">prenom</label>
                    <input type="text" name="prenom" class="form-control" id="prenom">
                    <label for="email" class="control-label">email</label>
                    <input type="text" name="email" class="form-control" id="email">
                    <label for="telephone" class="control-label">telephone</label>
                    <input type="text" name="telephone" class="form-control" id="telephone">
                </div>
                <div class="col-6">
                    <label for="datenaiss" class="control-label">datenaiss</label>
                    <input type="date" name="datenaiss" class="form-control" id="datenaiss">
                    <label for="typeEt" class="control-label">type etudiant</label>
                    <select name="typeEt" id="typeEt" class="form-control">
                        <option value="simple">simple</option>
                        <option value="boursier">boursier logé</option>
                        <option value="boursier">boursier non logé</option>
                    </select>
                   <div id="typebourse" style="display:none;">
                    <label for="bourse" class="control-label">type bourse</label>
                        <select name="typeBourse" id="typeBourse" class="form-control">
                            <option value="demi">demi bouse</option>
                            <option value="complet">pension complete</option>
                        </select>
                   </div>
                   <div id="numero_chambre" style="display:none;">
                    <label for="bourse" class="control-label">numero chambre</label>
                        <select name="numero_chambre" id="numero_chambre" class="form-control">
                            <option value="demi">ch1</option>
                            <option value="demi">ch2</option>
                        </select>
                   </div>
                   <div id="adresse" style="display:none;">
                        <label for="adresse" class="control-label">adresse</label>
                        <input type="text" name="adresse" class="form-control" id="adresse">
                   </div>
                </div>
            </div>
            <input type="submit" value="enregistrer" name="enregistrer" id="save-chambre" class="btn btn-info mt-2 btn-block">
        </form>
    </div>
</div>

