<div class="col">
    <div class="card-header">
    <h2 class="text-center mt-5">ajouter un etudiant</h2>
    </div>
    <div class="align-items-center justify-content-center d-flex mt-2">
        <form action="" method="post" id="form">
            <div class="row">
                    <div class="col-6">
                    <label for="nom" class="control-label w-100">nom</label>
                    <input type="text" name="nom" error="error-1" class=" form-control" id="nom">
                    <span class="alert-danger text-danger" id="error-1"></span>
                    <label for="prenom" class="control-label w-100">prenom</label>
                    <input type="text" name="prenom" error="error-2" class="form-control" id="prenom">
                    <span class="alert-danger text-danger" id="error-2"></span>
                    <label for="email" class="control-label w-100">email</label>
                    <input type="text" name="email" error="error-3" class="form-control" id="email">
                    <span class="alert-danger text-danger" id="error-3"></span>
                    <label for="telephone" class="control-label w-100">telephone</label>
                    <input type="text" name="telephone" error="error-4" class="form-control" id="telephone">
                    <span class="alert-danger text-danger" id="error-4"></span>
                </div>
                <div class="col-6">
                    <label for="datenaiss" class="control-label w-100">datenaiss</label>
                    <input type="date" name="datenaiss" error="error-5" class="form-control" id="datenaiss">
                    <span class="alert-danger text-danger" id="error-5"></span>
                    <label for="typeEt" class="control-label w-100">type etudiant</label>
                    <select name="typeEt" id="typeEt" class="form-control">
                        <option value="simple">simple</option>
                        <option value="boursier">boursier logé</option>
                        <option value="boursier">boursier non logé</option>
                    </select>
                   <div id="typebourse" style="display:none;">
                    <label for="bourse" class="control-label w-100">type bourse</label>
                        <select name="typeBourse" id="typeBourse" class="form-control">
                            <option value="demi">demi bouse</option>
                            <option value="complet">pension complete</option>
                        </select>
                   </div>
                   <div id="numero_chambre" style="display:none;">
                    <label for="bourse" class="control-label w-100">numero chambre</label>
                        <select name="numero_chambre" id="numero_chambre" class="form-control">
                            <option value="0">choisissez numero chambre</option>
                            <option value="demi">ch1</option>
                            <option value="demi">ch2</option>
                        </select>
                        <span class="alert-danger text-danger" id="errorx"></span>
                   </div>
                   <div id="adresse" style="display:none;">
                        <label for="adresse" class="control-label w-100">adresse</label>
                        <input type="text" error="error-6" name="adresse" class="form-control" id="adresse">
                        <span class="alert-danger text-danger" id="error-6"></span>
                   </div>
                </div>
            </div>
            <input type="submit" value="enregistrer" name="enregistrer" id="save-etudiant" class="btn btn-info mt-2 btn-block">
        </form>
    </div>
</div>
